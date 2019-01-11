<?php
require_once './config.php';

$getProfileoData = getCURL(_url . "/api/get-player-profile?player_id=" . $_GET['player_id'], array("mainProfile", 'batting', 'bowling'));
$main = $getProfileoData['mainProfile'];
$batting = $getProfileoData['batting'];
$bowling = $getProfileoData['bowling'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Player Profile</title>
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

                <div class="rca-column-2"></div>
                <div class="rca-column-8">
                    <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border ">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><?= $main['name'] ?> <small><?= $main['countryName'] ?></small></h2>
                                <table class="table borderless table-condensed">
                                    <tr>
                                        <td>Name</td>
                                        <td><?= $main['name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>DOB</td>
                                        <td><?= $main['date_of_birth'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Current age </td>
                                        <td><?= findAgeInYearMonthNew($main['date_of_birth']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Playing role </td>
                                        <td><?= $main['role'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Batting style </td>
                                        <td><?= $main['batting'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jersy No. </td>
                                        <td><?= $main['jersey_no'] ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                
                                
                                 <?php
                                $path =  "user_png.png";
                                if ($main["photo"] != "") {
                                    $path =  $main["photo"];
                                }
                                ?>
                                <img src="<?= _HOST . $path ?>" alt="" style="" class="img-responsive"/>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Batting averages</h3>
                                <table class="table borderless table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Match Type</th>
                                            <th>Inns</th>
                                            <th>Total Run</th>
                                            <th>100</th>
                                            <th>50</th>
                                            <th>Four</th>
                                            <th>Six</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (count($batting) > 0) {
                                            foreach ($batting as $value) {
                                                ?>
                                                <tr>
                                                    <td><?= $value['matchType'] ?></td>
                                                    <td><?= $value['totalMatchPlayedAInnings'] ?></td>
                                                    <td><?= $value['totalRun'] ?></td>
                                                    <td><?= $value['100'] ?></td>
                                                    <td><?= $value['50'] ?></td>
                                                    <td><?= $value['four'] ?></td>
                                                    <td><?= $value['six'] ?></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "<div class='alert alert-danger'>No Data</div>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Bowling averages</h3>
                                <table class="table borderless table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Match Type</th>
                                            <th>Inns</th>
                                            <th>Over</th>
                                            <th>M</th>
                                            <th>Wicket</th>
                                            <th>Total Run</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (count($bowling) > 0) {
                                            foreach ($bowling as $value) {
                                                ?>
                                                <tr>
                                                    <td><?= $value['matchType'] ?></td>
                                                    <td><?= $value['totalMatchPlayedAInnings'] ?></td>
                                                    <td><?= $value['over'] ?></td>
                                                    <td><?= $value['m'] ?></td>
                                                    <td><?= $value['wicket'] ?></td>
                                                    <td><?= $value['run'] ?></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "<div class='alert alert-danger'>No Data</div>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
        <?php // require_once './footer.php'; ?>

    </body>
</html>