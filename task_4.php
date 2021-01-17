<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <?php
                    $progress_bars = [
                        [
                            'title' => 'My Tasks',
                            'title_extra_class' => 'mt-2',
                            'value' => '130 / 500',
                            'progress_extra_class'=>'mb-3',
                            'progress-bar_extra_class'=>'bg-fusion-400',
                            'width' => 65,
                            'aria-valuenow' => '65',
                            'aria-valuemin' => '0',
                            'aria-valuemax' => '100',
                        ],
                        [
                            'title' => 'Transfered',
                            'title_extra_class' => '',
                            'value' => '440 TB',
                            'progress_extra_class'=>'mb-3',
                            'progress-bar_extra_class'=>'bg-success-500',
                            'width' => 34,
                            'aria-valuenow' => '34',
                            'aria-valuemin' => '0',
                            'aria-valuemax' => '100',
                        ],
                        [
                            'title' => 'Bugs Squashed',
                            'title_extra_class' => '',
                            'value' => '77%',
                            'progress_extra_class'=>'mb-3',
                            'progress-bar_extra_class'=>'bg-info-400',
                            'width' => 77,
                            'aria-valuenow' => '77',
                            'aria-valuemin' => '0',
                            'aria-valuemax' => '100',
                        ],
                        [
                            'title' => 'User Testing',
                            'title_extra_class' => '',
                            'value' => '7 days',
                            'progress_extra_class'=>'mb-g',
                            'progress-bar_extra_class'=>'bg-primary-300',
                            'width' => 84,
                            'aria-valuenow' => '84',
                            'aria-valuemin' => '0',
                            'aria-valuemax' => '100',
                        ],
                    ];
                    foreach ($progress_bars as $progress_bar):
                    ?>
                    <div class="d-flex <?= $progress_bar['title_extra_class'] ?>">
                        <?= $progress_bar['title'] ?>
                        <span class="d-inline-block ml-auto"><?= $progress_bar['value'] ?></span>
                    </div>
                    <div class="progress progress-sm <?= $progress_bar['progress_extra_class'] ?>">
                        <div class="progress-bar <?= $progress_bar['progress-bar_extra_class'] ?>" role="progressbar" style="width: <?= $progress_bar['width'] ?>%;"
                             aria-valuenow="<?= $progress_bar['aria-valuenow'] ?>" aria-valuemin="<?= $progress_bar['aria-valuemin'] ?>" aria-valuemax="<?= $progress_bar['aria-valuemax'] ?>"></div>
                    </div>
                    <?php
                        endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>
