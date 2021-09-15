<?php
global $page_about;
$exp = $page_about['experience'];

$company_name = @$exp['company']['name'] ?: null;
$company_logo = @$exp['company']['logo'] ?: null;

$date_start = @$exp['period']['date_start'] ?: null;
$date_end = ($exp['period']['present'] ? 'Present' : @$exp['period']['date_end']) ?: null;

$multi_role = !empty($exp['roles']);
?>
<section class="ab-cont-xp-card">
    <header class="ab-cont-xp-card-hdr grid grid-flow-col">
        <div>
            <a class="ab-cont-xp-card-logo-w" href="#">
                <img class="ab-cont-xp-card-logo" width="56" height="56" src="<?= $company_logo ?>" />
            </a>
        </div>
        <div>
            <h3 class="ab-cont-xp-card-title">
                <?= $exp['title'] ?>
            </h3>
            <p class="ab-cont-xp-card-meta">
                <?= $company_name ?>
            </p>
            <p class="ab-cont-xp-card-meta">
                <span><?= $date_start ?></span> - <span><?= $date_end ?></span>
            </p>
            <p class="ab-cont-xp-card-meta">
                <?= $exp['place'] ?>
            </p>
        </div>
    </header>
    <div class="ab-cont-xp-card-bdy grid">
        <div class="grid ab-cont-xp-card-job-par-list">
            <?php foreach ($exp['description'] as $job_d) : ?>
                <div class="ab-cont-xp-card-job-par">
                    <?= $job_d ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="ab-cont-xp-card-roles grid">
            <?php if ($multi_role) : ?>
                <?php foreach ($exp['roles'] as $role) : ?>
                    <div class="ab-cont-xp-card-role">
                        <header class="grid">
                            <h3 class="ab-cont-xp-card-title">
                                <?= $role['title'] ?>
                            </h3>
                            <p class="ab-cont-xp-card-meta">
                                <span><?= $role['period']['date_start'] ?></span> - <span><?= $role['period']['date_end'] ?></span>
                            </p>
                        </header>
                        <div class="grid ab-cont-xp-card-job-par-list">
                            <?php foreach ($role['description'] as $job_d) : ?>
                                <div class="ab-cont-xp-card-job-par">
                                    <?= $job_d ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>