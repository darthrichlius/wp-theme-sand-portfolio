<?php
global $page_about;
$exp = $page_about['experience'];

$company_name = @$exp['company']['name'] ?: null;
$company_logo = @$exp['company']['logo'] ?: null;

$date_start = @$exp['period']['date_start'] ?: null;
$date_end = ($exp['period'] && !empty($exp['period']['present']) ? 'Present' : @$exp['period']['date_end']) ?: null;

if ($date_start && $date_end) {
    $new_date_start = new DateTime($date_start);
    $new_date_end = $date_end === 'Present' ? new DateTime() : new DateTime($date_end);

    $interval_year = (string) $new_date_start->diff($new_date_end)->y;
    $interval_month = (string) $new_date_start->diff($new_date_end)->m;
    $duration = $interval_year ? $interval_year . " yrs" : "";
    $duration = $interval_month ? $duration . " " . $interval_month . " mos" : $duration;
}

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
                <span><?= $date_start ?></span> - <span><?= $date_end ?></span> (<?= $duration ?>)
            </p>
            <p class="ab-cont-xp-card-meta">
                <?= $exp['place'] ?>
            </p>
        </div>
    </header>
    <div class="ab-cont-xp-card-bdy grid">
        <div class="grid ab-cont-xp-card-job-par-list jss-ab-cont-xp-card-job-par-list hidden">
            <?php foreach ($exp['description'] as $job_d) : ?>
                <div class="ab-cont-xp-card-job-par">
                    <?= $job_d ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="ab-cont-xp-card-job-par-list-toggle jss-ab-cont-xp-card-job-par-list-toggle">
            <a class="grid ab-cont-xp-card-job-par-list-toggle-cta jss-ab-cont-xp-card-job-par-list-toggle-cta" data-toggle="...Show less" href=javascript:void">Learn more...</a>
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
                        <div class="grid ab-cont-xp-card-job-par-list jss-ab-cont-xp-card-job-par-list hidden">
                            <?php foreach ($role['description'] as $job_d) : ?>
                                <div class="ab-cont-xp-card-job-par">
                                    <?= $job_d ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="ab-cont-xp-card-job-par-list-toggle ab-cont-xp-card-job-par-list-toggle--wmg jss-ab-cont-xp-card-job-par-list-toggle">
                            <a class="grid ab-cont-xp-card-job-par-list-toggle-cta  jss-ab-cont-xp-card-job-par-list-toggle-cta" data-toggle="...Show less" href=javascript:void">Learn more...</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>