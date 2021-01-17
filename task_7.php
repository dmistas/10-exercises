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
                    <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                        <?php
                        /**
                         * Инициализация подключения к БД
                         */
                        $dblocation = "127.0.0.1";
                        $dbname = "marlin";
                        $dbuser = "root";
                        $dbpasswd = "";
                        $dbport = 3306;
                        // соединяемся с БД
                        $db = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname, $dbport);

                        if (mysqli_connect_errno()) {
                            printf("Ошибка доступа к MySql: %s\n", mysqli_connect_error());
                            exit();
                        }

                        // Устанавливаем кодировку по умолчанию для текущего соединения
                        mysqli_set_charset($db, 'utf8');

                        if (!mysqli_select_db($db, $dbname)) {
                            echo "Ошибка доступа к базе данных: $dbname";
                            exit();
                        }
                        $sql = "SELECT * FROM users";
                        $row = mysqli_query($db, $sql);
                        $users = [];
                        while ($user = mysqli_fetch_assoc($row)) {
                            $users[] = $user;
                        }
                        foreach ($users as $user):
                            ?>
                            <div class="<?php if ($user['banned']) {
                                echo 'banned';
                            } ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?= $user['img_src'] ?>" alt="<?= $user['name'] ?>"
                                     class="img-thumbnail img-responsive rounded-circle"
                                     style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?= $user['name'] ?> (<?= $user['specialization'] ?>)
                                        <small class="m-0 fw-300">
                                            <?= $user['role'] ?>
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/<?= $user['twitter'] ?>" class="text-info fs-sm"
                                       target="_blank"><?= $user['twitter'] ?></a>
                                    -
                                    <a href="<?= $user['web_address'] ?>" class="text-info fs-sm"
                                       target="_blank" title="Contact <?= $user['contact_name'] ?>"><i
                                                class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
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
