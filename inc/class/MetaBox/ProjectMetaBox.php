<?php

namespace Rd\Wp\Theme\SandPortfolio\MetaBox;

use Rd\Wp\Plugin\DevPortfolio\Plugin;

use Rd\Vendor\Php\Utils\StrLib;
use Rd\Vendor\Php\Utils\ObjectLib;

use Rd\Wp\Plugin\DevPortfolio\Enum\ProjectType;
use Rd\Wp\Plugin\DevPortfolio\Enum\ProjectContext;

if (!class_exists("Rd\Wp\Plugin\DevPortfolio\MetaBox\ProjectMetaBox")) {
    class ProjectMetaBox
    {
        public static function register()
        {
            $PLUGIN_CONFIG = Plugin::getConfig();

            $cgf_post_type = RD_WPPLG_DEV_PORT_CPT_PROJECT;

            // Nous sommes obligés de passer "2" sinon nous n'aurons pas accès aux 2 args souhaités dans self:add
            // Oui c'est bizarre comme logique ... :/
            add_action('add_meta_boxes', [self::class, 'add'], 10, 2);
            add_action('save_post', [self::class, 'save']);

            add_filter("manage_" . $cgf_post_type . "_posts_columns", function ($columns) {
                /*
                    Nous procédons de cette manière car il y a un sujet de positionnemet.
                    Si nous nous comptentons de pusher dans le tableau, la colonne apparaitra en dernier.
                    On aurait pu procéder autrement, @see Le cas  de l'ajout d'une colonne pour Article tableau liste
                */
                return [
                    // cb = CheckBox
                    'cb' => $columns['cb'],
                    'thumbnail' => 'Thumbnails',
                    'title' => $columns['title'],
                    RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE => __('Type'),
                    RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT => __('Context'),
                    RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED => __('Date Started'),
                    RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED => __('Date Ended'),
                    'date' => $columns['date'],
                ];
            });
            // Gère l'affichage des données dans la colonne au niveau de la liste des objets
            add_action("manage_" . $cgf_post_type . "_posts_custom_column", function ($colName, $postId) {
                $previous_value = get_post_meta($postId, $colName, true);

                $new_value = "";
                switch ($colName) {
                    case 'thumbnail':
                        // RAPPEl: La taille est disponible dans BO > SETTINGS > MEDIAS
                        $new_value = get_the_post_thumbnail($postId, 'thumbnail');
                        break;
                    case RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE:
                        $constants = ObjectLib::getFlippedConstants(ProjectType::class);
                        if ($previous_value) {
                            $new_value = $constants[$previous_value];
                            $new_value = StrLib::explodeAnyway($new_value);
                        }
                        break;
                    case RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT:
                        $constants = ObjectLib::getFlippedConstants(ProjectContext::class);
                        if ($previous_value) {
                            $new_value = $constants[$previous_value];
                            $new_value = StrLib::explodeAnyway($new_value);
                        }
                        break;
                    case RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED:
                    case RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED:
                        $new_value = $previous_value ? (new \DateTime($previous_value))->format("M Y") : null;
                        break;
                    case RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CITY:

                    case RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_WEBSITE:
                    case RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_REPO:

                    case RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE:
                        $new_value = get_post_meta($postId, $colName, true);
                        break;
                }
                echo $new_value;
            }, 10, 2);
        }

        /**
         * Permet d'afficher le formulaire MetaBox au niveau de l'interface "Post" dans la section "Side"
         */
        public static function add($postType, $Post)
        {
            $cgf_post_type = RD_WPPLG_DEV_PORT_CPT_PROJECT;
            $cgf_mbx_project = RD_WPPLG_DEV_PORT_MBX_CPT_PROJECT;

            // Sécurité
            if ($postType === $cgf_post_type) {
                add_meta_box(
                    $cgf_mbx_project,
                    __('Parameters'),
                    [self::class, 'render'],
                    $cgf_post_type,
                    'side'
                );
            }
        }

        public static function save($post_id)
        {
            /**
             * Référence: https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
             */
            if (!empty($_POST) && current_user_can('publish_posts', $post_id)) {
                // @todo IMPORTANT: Add SECURITY HERE!

                update_post_meta($post_id, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE, $_POST[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE]);
                update_post_meta($post_id, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT, $_POST[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT]);
                update_post_meta($post_id, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CITY, $_POST[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CITY]);

                update_post_meta($post_id, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED, $_POST[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED]);
                update_post_meta($post_id, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED, $_POST[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED]);

                update_post_meta($post_id, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_WEBSITE, $_POST[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_WEBSITE]);
                update_post_meta($post_id, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_REPO, $_POST[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_REPO]);

                update_post_meta($post_id, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE, $_POST[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE]);
            }
        }

        public static function render($Post)
        {
            /**
             * Référence: https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
             */
            $type_value = get_post_meta($Post->ID, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE, true);
            $context_value = get_post_meta($Post->ID, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT, true);
            $city_value = get_post_meta($Post->ID, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CITY, true);

            $date_started_value = get_post_meta($Post->ID, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED, true);
            $date_ended_value = get_post_meta($Post->ID, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED, true);

            $website_value = get_post_meta($Post->ID, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_WEBSITE, true);
            $repository_value = get_post_meta($Post->ID, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_REPO, true);

            $role_value = get_post_meta($Post->ID, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE, true);

            $project_types = ObjectLib::getFlippedConstants(ProjectType::class);
            $project_contexts = ObjectLib::getFlippedConstants(ProjectContext::class);


            // @todo Add style
?>
            <fieldset>
                <div>
                    <label for="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED ?>">Date Started:</label>
                    <input id="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED ?>" type="date" name="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED ?>" value="<?= $date_started_value ?>" />
                </div>
                <div>
                    <label for="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED ?>">Date Ended:</label>
                    <input id="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED ?>" type="date" name="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED ?>" value="<?= $date_ended_value ?>" />
                </div>
                <div>
                    <label for="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_WEBSITE ?>">Website:</label>
                    <input id="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_WEBSITE ?>" type="text" name="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_WEBSITE ?>" value="<?= $website_value ?>" />
                </div>
                <div>
                    <label for="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_REPO ?>">Repository:</label>
                    <input id="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_REPO ?>" type="text" name="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_REPO ?>" value="<?= $repository_value ?>" />
                </div>
                <div>
                    <label for="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE ?>">Role:</label>
                    <input id="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE ?>" type="text" name="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE ?>" value="<?= $role_value ?>" />
                </div>
                <div>
                    <label for="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE ?>">Type:</label>
                    <select id="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE ?>" name="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE ?>">
                        <option value="">--Please choose an option--</option>
                        <?php foreach ($project_types as $project_type_key => $project_type_label) : ?>
                            <option <?= selected($type_value, $project_type_key) ?> value="<?= $project_type_key ?>"><?= __(StrLib::explodeAnyway($project_type_label)) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT ?>">Context:</label>
                    <select id="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT ?>" name="<?= RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT ?>">
                        <option value="">--Please choose an option--</option>
                        <?php foreach ($project_contexts as $project_context_key => $project_context_label) : ?>
                            <option <?= selected($context_value, $project_context_key) ?> value="<?= $project_context_key ?>"><?= __(StrLib::explodeAnyway($project_context_label)) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </fieldset>
<?php
        }
    }
}
