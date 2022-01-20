<?php
global $page_about;
$usecase = $page_about['usecase'];

$title = @$usecase['title'] ?: null;

$company_name = !empty(@$usecase['company']['name']) ?: "N/A";
$company_logo = !empty(@$usecase['company']['logo']) ?: "https://img.icons8.com/carbon-copy/100/000000/company.png";

$market_size = @$usecase['market']['size'] ?: null;
$market_industry = @$usecase['market']['industry'] ?: null;
$market_geo = @$usecase['market']['geography'] ?: null;

$date = @$usecase['date'] ?: null;

$description = @$usecase['description'] ?: null;

$file_name = @$usecase['file']['name'] ?: null;
$file_uri = @$usecase['file']['uri'] ?: null;

if ($date) {
    $new_date = (new DateTime($date))->format("M Y");
}


?>

<section class="usc-cont-usc-card">
    <header class="usc-cont-usc-card-hdr grid grid-flow-col">
        <div class="usc-cont-usc-card-hdr-l">
            <img class="usc-cont-usc-card-cmpy-logo" src="<?= $company_logo ?>" />
        </div>
        <div class="usc-cont-usc-card-hdr-r">
            <h3 class="usc-cont-usc-card-title">
                <?= $title ?>
            </h3>
            <div class="usc-cont-usc-card-hdr-metas flex">
                <p class="usc-cont-usc-card-hdr-meta">
                    <span>Company</span>: <?= $company_name ?>
                </p>
                <p class="usc-cont-usc-card-hdr-meta">
                    <span>Market</span>: <?= $market_industry ?>
                </p>
                <p class="usc-cont-usc-card-hdr-meta">
                    <span>Date</span>: <?= $new_date ?>
                </p>
            </div>
        </div>
    </header>
    <div class="usc-cont-usc-card-body grid">
        <?php foreach ($description as $dpar) : ?>
            <div class="usc-cont-usc-card-body-desc-par">
                <?= $dpar ?>
            </div>
        <?php endforeach; ?>
    </div>
    <footer class="usc-cont-usc-card-ftr grid">
        <div class="usc-cont-usc-card-ftr-file-card">
            <div class="usc-cont-usc-card-ftr-file-card-hdr flex justify-between">
                <div class="usc-cont-usc-card-ftr-file-card-hdr-fname grid items-center">
                    <p class="usc-cont-usc-card-ftr-file-card-hdr-fname-name">
                        <?= $file_name ?>
                    </p>
                    <p class="usc-cont-usc-card-ftr-file-card-hdr-fname-wning"><sup>*</sup>&nbspThe real file name may differ from the public name</p>
                </div>
                <div class="usc-cont-usc-card-ftr-file-card-hdr-flogo">
                    <img width="32px" src="https://img.icons8.com/ios/50/000000/pdf--v1.png" />
                </div>
            </div>
            <div class="usc-cont-usc-card-ftr-file-card-ftr flex">
                <div class="usc-cont-usc-card-ftr-file-card-cta-wpr flex">
                    <img class="usc-cont-usc-card-ftr-file-card-cta-icon" src="https://img.icons8.com/material-rounded/24/000000/download--v1.png" />
                    <a class="usc-cont-usc-card-ftr-file-card-cta" href="<?= $file_uri ?>" download="<?= $file_name ?>">Download</a>
                </div>
                <div class="usc-cont-usc-card-ftr-file-card-cta-wpr flex">
                    <img class="usc-cont-usc-card-ftr-file-card-cta-icon" src="https://img.icons8.com/material-outlined/24/000000/visible--v1.png" />
                    <button class="usc-cont-usc-card-ftr-file-card-cta jss-usc-cont-usc-card-ftr-file-card-cta--preview" href="javascript:void" download="<?= $file_name ?>">Preview</button>
                </div>
            </div>
            <form class="usc-cont-usc-card-ftr-iframe-card jss-sc-cont-usc-card-ftr-iframe-card hidden" name="file-iframe" method="post" enctype="multipart/form-data">
                <iframe id="viewer" src="<?= $file_uri ?>" frameborder="0" scrolling="no" width="100%" height="600"></iframe>
            </form>
        </div>
    </footer>
</section>