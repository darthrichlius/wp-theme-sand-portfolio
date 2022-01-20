<?php

namespace Rd\Wp\Theme\SandPortfolio;

$usecases = get_usecases();

?>

<div>
    <?php foreach ($usecases as $usecase) : ?>
        <?php $GLOBALS['page_about']['usecase'] = $usecase ?>
        <?= get_template_part("template-parts/usecase-card"); ?>
    <?php endforeach; ?>
</div>