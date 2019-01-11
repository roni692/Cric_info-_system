<?php
require_once './config.php';

$data = getCURL(_url . "/api-search/get-player-search?searchValue=" . $_GET['searchValue']);
//display_array($data );exit;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Search</title>
        <!--header files STRAT-->
        <?php require_once './header_files.php'; ?>
        <!--header files END-->
        <!--header files END-->
        <link rel="stylesheet" href="css/sliderpage_all.css"/> 
        <style type="text/css">
            .borderless td, .borderless th {
                border: none;
            }
        </style>
    </head>
    <body style="background-color: #E6E6E6">
        <!--Whole Container -->
        <div class="rca-container">

            <!--header menu STRAT-->
            <?php require_once 'header_menu.php'; ?>
            <!--header menu END-->

            <div class="rca-row" style="">

                <div class="rca-column-3"></div>
                <div class="rca-column-6">
                    <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border ">

                        <div class="row">
                            <div class="col-md-12">
                                <h4><i>Search for.. <span style="color: #f9690e"><?= $_GET['searchValue'] ?></span></i></h4>

                                <div class="rca-batting-score "> 

                                    <div class="rca-row">
                                        <div class="rca-header rca-table">
                                            <div class="rca-col rca-player">
                                                Name
                                            </div>
                                            <div class="rca-col">
                                                Role
                                            </div>
                                            <div class="rca-col">
                                                Batting
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if (count($data) > 0) {
                                        foreach ($data as $value) {
                                            ?>
                                            <div class="rca-row">
                                                <div class="rca-table">
                                                    <div class="rca-col rca-player">
                                                        <a href="player.php?player_id=<?= $value['id'] . '&r=' . getRandomNumber() ?> "><?= $value['name'] ?> </a>
                                                        <small><i><?= $value['countryName']?></i></small>
                                                    </div>
                                                    <div class="rca-col">
                                                        <?= $value['role'] ?>
                                                    </div>
                                                    <div class="rca-col">
                                                        <?= $value['batting'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>No Data</div>";
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="rca-column-3"></div>

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