<?php
require_once './config.php';

$getPlayerRankingData = getCURL(_url . "/api/get-player-ranking?t=" . strtolower($_GET['t']));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ranking - <?= strtoupper($_GET['t']); ?></title>
        <!--header files STRAT-->
        <?php require_once './header_files.php'; ?>
        <!--header files END-->
        <!--header files END-->
        <link rel="stylesheet" href="css/sliderpage_all.css"/> 
    </head>
    <body style="background-color: #E6E6E6">
        <!--Whole Container -->
        <div class="rca-container">

            <!--header menu STRAT-->
            <?php require_once 'header_menu.php'; ?>
            <!--header menu END-->

            <div class="rca-row" style="">

                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                    Ranking 
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" style="background-color: transparent ">
                            <div class="tab-pane active" id="tab_default_2">
                                <div class="rca-column-3"></div>
                                <div class="rca-column-6">
                                    <div class="rca-medium-widget rca-top-border ">
                                        <ul class="rca-tab-list">
                                            <li class="rca-tab-link active" data-tab="tab-39" onclick="showTab(this);"><?= strtoupper($_GET['t']); ?></li>
                                        </ul>
                                        <div id="tab-39" class="rca-tab-content rca-padding active">
                                            <div class="rca-batting-score rca-padding"> 
                                                <div class="rca-row">
                                                    <div class="rca-header rca-table">
                                                        <div class="rca-col ">
                                                            Ranking
                                                        </div>
                                                        <div class="rca-col rca-player">
                                                            Name
                                                        </div>
                                                        <div class="rca-col rca-player">
                                                            Country
                                                        </div>
                                                        <div class="rca-col">
                                                            Points
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                if (count($getPlayerRankingData) > 0) {
                                                    foreach ($getPlayerRankingData as $value) {
                                                        ?>
                                                        <div class="rca-row">
                                                            <div class="rca-table">
                                                                <div class="rca-col">
                                                                    <?= $value['ranking'] ?>
                                                                </div>
                                                                <div class="rca-col rca-player">
                                                                    <?= $value['name'] ?>
                                                                     
                                                                </div>
                                                                <div class="rca-col rca-player" style="padding-right: 15px;">
                                                                    <?= $value['countryName'] ?>
                                                                    <?php
                                                                    if (fileExists(_HOST . $value['flag_image']) == true) {
                                                                        ?>
                                                                        <img src="<?= _HOST . $value['flag_image'] ?>" width="40px"class="img-responsive pull-right" alt="" />
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <img src="<?= _HOST . "image_not_available.png" ?>"  width="40px" class="img-responsive pull-right" alt="" />
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <div class="rca-col">
                                                                    <?= $value['rating'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                } else {
                                                    echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                                }
                                                ?>


                                                <div class="rca-clear"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="rca-column-3"></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="rca-row">
                <div class="rca-column-8">
                    <ul class="rca-footer">
                        <li><a href="">About Us</a></li>
                        <li><a href="">Feedback</a></li>
                        <li><a href="">Site map</a></li>
                    </ul>
                </div>
                <div class="rca-column-4">
                    <ul class="rca-footer rca-right">
                        <li>© 2018 CricInfo System</li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            function showTab(event) {
                var sourceParent = event.parentElement.parentElement;
                var sourceChilds = sourceParent.getElementsByClassName("rca-tab-content");
                var sourceLinkParent = sourceParent.getElementsByClassName("rca-tab-link");
                for (var i = 0; i < sourceChilds.length; i++) {
                    sourceChilds.item(i).classList.remove("active");
                }
                for (var i = 0; i < sourceLinkParent.length; i++) {
                    sourceLinkParent.item(i).classList.remove("active");
                }
                var dataTab = event.getAttribute("data-tab");

                event.classList.add("active");
                // document.getElementById(dataTab).className = tabClass + ' active';
                document.getElementById(dataTab).className += ' active';
            }

        </script>

    </body>
</html>