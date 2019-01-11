<?php
require_once './config.php';
$response = getCURL(_url . "/api/get-score-card?event_id=" . $_GET['event_id'], array("eventDetail", 'battingDataTeam', 'bowligDataTeam'));
$getMatchEventList = $response['eventDetail'];
$battingDataTeam = $response['battingDataTeam'];
$bowligDataTeam = $response['bowligDataTeam'];

$getMaxRunData = getCURL(_url . "/api/get-max-run-player?event_id=" . $_GET['event_id']);

//display_array($getMatchEventList);
//exit;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Event Details - <?= $getMatchEventList[0]['match_title'] ?> </title>
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
            <!--Live ScoreBoard -->
            <div class="rca-row">
                <div class="rca-column-6">
                    <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border" style="border-color: #d91e18;">

                        <?php
                        if (count($getMatchEventList) > 0) {
                            ?>
                                                                    <!--<a href="event.php?event_id=<?= $getMatchEventList[0]['match_event_id'] ?>" style="text-decoration: none;">-->
                            <div class="rca-match-start" style="padding: 00px 15px;margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="row">
                                            <div class="col-md-4" >                              
                                                <img src="<?= _HOST . $getMatchEventList[0]['two_team_name_flag'] ?>" width="80px" style="margin-top: 10px" class="img-responsive center-block" alt="" />
                                            </div>
                                            <div class="col-md-4" >
                                                <h2 class="rca-theme-text">
                                                    <?= $getMatchEventList[0]['match_title'] ?> 
                                                </h2>  
                                            </div>
                                            <div class="col-md-4" >      
                                                <img src="<?= _HOST . $getMatchEventList[0]['one_team_name_flag'] ?>" width="80px" style="margin-top: 10px" class="img-responsive center-block" alt="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="rca-padding">       

                                    <div class="rca-top-padding">
                                        <div class="rca-team-score">
                                            <span class="team"><?= $getMatchEventList[0]['two_team_name'] ?></span>
                                            <span><?= $getMatchEventList[0]['dataBatting'][0]['run'] . "/" . $getMatchEventList[0]['dataBowling'][0]['wicket']; ?></span>
                                            <span><?= "(" . $getMatchEventList[0]['dataBowling'][0]['over'] . "/" . $getMatchEventList[0]['over'] . " ov)" ?></span>
                                        </div>
                                        <div class="rca-team-score">
                                            <span class="team"><?= $getMatchEventList[0]['one_team_name'] ?></span>
                                            <span><?= $getMatchEventList[0]['dataBatting'][1]['run'] . "/" . $getMatchEventList[0]['dataBowling'][1]['wicket']; ?></span>
                                            <span><?= "(" . $getMatchEventList[0]['dataBowling'][1]['over'] . "/" . $getMatchEventList[0]['over'] . " ov)" ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="rca-padding" style="padding-top: 0px;color: #1eb848;font-weight: bold">
                                    <h3>  
                                        <b><?= $getMatchEventList[0]['result'] ?></b>
                                    </h3>   
                                </div>
                                <div class="rca-man-match"  style="text-align: left">
                                    <h3>Man of the Match : <span><?= ucwords($getMaxRunData["name"]) ?></span></h3>
                                    <div class="rca-padding">
                                        <p class="rca-man-match-record"><span class="title">Runs</span><span><?= $getMaxRunData["run"] ?>(<?= $getMaxRunData["ball"] ?>)</span></p>
                                        <p class="rca-man-match-record"><span class="title">Boundries</span><span><?= $getMaxRunData["four"] . "X4, " . $getMaxRunData["six"] . "X6" ?></span></p>
                                        <p class="rca-man-match-record"><span class="title">Status</span><span><?= $getMaxRunData["status"] ?></span></p>
                                    </div>
                                </div>
                            </div>

                            <!--</a>-->
                            <?php
                        } else {
                            echo "<div class='alert alert-danger'>No Data for this Team</div>";
                        }
                        ?>


                    </div>
                </div>
                <div class="rca-column-6">

                    <!--Match Schedule Info-->
                    <div class="rca-mini-widget rca-history-info ">
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Match:</span>
                            <span class="rca-col">  <?= $getMatchEventList[0]['match_title'] ?> </span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Series:</span>
                            <span class="rca-col"> <?= $getMatchEventList[0]['series'] ?></span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Date :</span>
                            <span class="rca-col"> <?= $getMatchEventList[0]['start_date_time'] ?> </span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Venue:</span>
                            <span class="rca-col" id='user_<?= $getMatchEventList[0]['ground_id'] ?>' title='Please wait..'>
                                <a href="#"><?= $getMatchEventList[0]['venue'] ?></a>
                            </span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Match Type:</span>
                            <span class="rca-col"><?= $getMatchEventList[0]['match_type'] ?> </span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Toss:</span>
                            <span class="rca-col"> Team <?= $getMatchEventList[0]['toss_win_team_id'] ?> <b>won the toss</b></span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Batting :</span>
                            <span class="rca-col"> Team <?= $getMatchEventList[0]['first_bat_team_id'] ?> <b>chose to bat first</b></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="rca-clear"></div>

            <div class="rca-row">


                <div class="rca-column-6">
                    <!--Match Series-->
                    <div class="rca-medium-widget rca-top-border " >
                        <ul class="rca-tab-list">
                            <li class="rca-tab-link active" data-tab="tab-41" onclick="showTab(this);">SCORECARD</li>
                        </ul>
                        <div id="tab-41" class="rca-tab-content rca-padding active">
                            <div class="rca-batting-score rca-padding">
                                <h3><strong>  
                                        <?php
                                        echo $getMatchEventList[0]['two_team_name'] . " Batting : ";
                                        echo $getMatchEventList[0]['dataBatting'][0]['run'] . "/" . $getMatchEventList[0]['dataBowling'][0]['wicket'];
                                        echo " ";
                                        echo "(" . $getMatchEventList[0]['dataBowling'][0]['over'] . "/" . $getMatchEventList[0]['over'] . " ov)";
                                        ?> 
                                    </strong>
                                </h3>
                                <div class="rca-row">
                                    <div class="rca-header rca-table">
                                        <div class="rca-col rca-player">
                                            Batsmen
                                        </div>
                                        <div class="rca-col">
                                            R
                                        </div>
                                        <div class="rca-col">
                                            B
                                        </div>
                                        <div class="rca-col">
                                            4s
                                        </div>
                                        <div class="rca-col">
                                            6s
                                        </div>

                                    </div>
                                </div>

                                <?php
                                $battingDataTeamF = $battingDataTeam[$getMatchEventList[0]['two_team_name']];
                                if (count($battingDataTeamF) > 0) {
                                    $total4S = 0;
                                    $total6S = 0;
                                    foreach ($battingDataTeamF as $value) {
                                        ?>
                                        <div class="rca-row">
                                            <div class="rca-table">
                                                <div class="rca-col rca-player">
                                                    <?= $value['name'] ?>
                                                </div>
                                                <div class="rca-col">
                                                    <?= $value['run'] ?>
                                                </div>
                                                <div class="rca-col">
                                                    <?= $value['ball'] ?>
                                                </div>
                                                <div class="rca-col">
                                                    <?= $value['four'] ?>
                                                </div>
                                                <div class="rca-col">
                                                    <?= $value['six'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $total4S += $value['four'];
                                        $total6S += $value['six'];
                                    }
                                } else {
                                    echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                }
                                ?>

                                <div class="rca-clear"></div>
                                <div class="rca-padding">
                                    <span>Fours: <strong><?= $total4S ?></strong></span>, 
                                    <span>Sixes: <strong><?= $total6S ?></strong></span>
                                </div>
                            </div>
                            <div class="rca-bowling-score rca-padding">
                                <h3><?= $getMatchEventList[0]['two_team_name'] ?> Bowling :</h3>
                                <div class="rca-row">
                                    <div class="rca-header rca-table">
                                        <div class="rca-col rca-player">
                                            Bowler
                                        </div>
                                        <div class="rca-col small">
                                            O
                                        </div>
                                        <div class="rca-col small">
                                            M
                                        </div>
                                        <div class="rca-col small">
                                            R
                                        </div>
                                        <div class="rca-col small">
                                            W
                                        </div>

                                    </div>
                                </div>


                                <?php
                                $bowligDataTeamF = $bowligDataTeam[$getMatchEventList[0]['two_team_name']];
                                if (count($bowligDataTeamF) > 0) {

                                    foreach ($bowligDataTeamF as $value) {
                                        ?>

                                        <div class="rca-row">
                                            <div class="rca-table">
                                                <div class="rca-col rca-player">
                                                    <?= $value['name'] ?>
                                                </div>
                                                <div class="rca-col small">
                                                    <?= $value['over'] ?>
                                                </div>
                                                <div class="rca-col small">
                                                    <?= $value['maiden_overs'] ?>
                                                </div>
                                                <div class="rca-col small">
                                                    <?= $value['run'] ?>
                                                </div>
                                                <div class="rca-col small">
                                                    <?= $value['wicket'] ?>
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
                <!--Widget Inner -->
                <div class="rca-column-6">
                    <!--Match Series-->
                    <div class="rca-medium-widget rca-top-border ">
                        <ul class="rca-tab-list">
                            <li class="rca-tab-link active" data-tab="tab-41" onclick="showTab(this);">SCORECARD</li>
                        </ul>
                        <div id="tab-41" class="rca-tab-content rca-padding active">
                            <div class="rca-batting-score rca-padding">
                                <h3><strong>  
                                        <?php
                                        echo $getMatchEventList[0]['one_team_name'] . " Batting : ";
                                        echo $getMatchEventList[0]['dataBatting'][1]['run'] . "/" . $getMatchEventList[0]['dataBowling'][1]['wicket'];
                                        echo " ";
                                        echo "(" . $getMatchEventList[0]['dataBowling'][1]['over'] . "/" . $getMatchEventList[0]['over'] . " ov)";
                                        ?> 
                                    </strong>
                                </h3>
                                <div class="rca-row">
                                    <div class="rca-header rca-table">
                                        <div class="rca-col rca-player">
                                            Batsmen
                                        </div>
                                        <div class="rca-col">
                                            R
                                        </div>
                                        <div class="rca-col">
                                            B
                                        </div>
                                        <div class="rca-col">
                                            4s
                                        </div>
                                        <div class="rca-col">
                                            6s
                                        </div>

                                    </div>
                                </div>

                                <?php
                                $battingDataTeamF2 = $battingDataTeam[$getMatchEventList[0]['one_team_name']];
                                if (count($battingDataTeamF2) > 0) {
                                    $total4S = 0;
                                    $total6S = 0;
                                    foreach ($battingDataTeamF2 as $value) {
                                        ?>
                                        <div class="rca-row">
                                            <div class="rca-table">
                                                <div class="rca-col rca-player">
                                                    <?= $value['name'] ?>
                                                </div>
                                                <div class="rca-col">
                                                    <?= $value['run'] ?>
                                                </div>
                                                <div class="rca-col">
                                                    <?= $value['ball'] ?>
                                                </div>
                                                <div class="rca-col">
                                                    <?= $value['four'] ?>
                                                </div>
                                                <div class="rca-col">
                                                    <?= $value['six'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $total4S += $value['four'];
                                        $total6S += $value['six'];
                                    }
                                } else {
                                    echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                }
                                ?>

                                <div class="rca-clear"></div>
                                <div class="rca-padding">
                                    <span>Fours: <strong><?= $total4S ?></strong></span>, 
                                    <span>Sixes: <strong><?= $total6S ?></strong></span>
                                </div>
                            </div>
                            <div class="rca-bowling-score rca-padding">
                                <h3><?= $getMatchEventList[0]['one_team_name'] ?> Bowling :</h3>
                                <div class="rca-row">
                                    <div class="rca-header rca-table">
                                        <div class="rca-col rca-player">
                                            Bowler
                                        </div>
                                        <div class="rca-col small">
                                            O
                                        </div>
                                        <div class="rca-col small">
                                            M
                                        </div>
                                        <div class="rca-col small">
                                            R
                                        </div>
                                        <div class="rca-col small">
                                            W
                                        </div>

                                    </div>
                                </div>


                                <?php
                                $bowligDataTeamF2 = $bowligDataTeam[$getMatchEventList[0]['one_team_name']];
                                if (count($bowligDataTeamF2) > 0) {

                                    foreach ($bowligDataTeamF2 as $value) {
                                        ?>

                                        <div class="rca-row">
                                            <div class="rca-table">
                                                <div class="rca-col rca-player">
                                                    <?= $value['name'] ?>
                                                </div>
                                                <div class="rca-col small">
                                                    <?= $value['over'] ?>
                                                </div>
                                                <div class="rca-col small">
                                                    <?= $value['maiden_overs'] ?>
                                                </div>
                                                <div class="rca-col small">
                                                    <?= $value['run'] ?>
                                                </div>
                                                <div class="rca-col small">
                                                    <?= $value['wicket'] ?>
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
        
        <link rel="stylesheet" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" />
        <script type="text/javascript" src="plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
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
                document.getElementById(dataTab).className += ' active';
            }
            $(document).ready(function () {

                                                    // initialize tooltip
                                                    $("span").tooltip({
                                                        track: true,
                                                        open: function (event, ui) {
//                                                            console.log(this.id);
                                                            var id = this.id;
                                                            var split_id = id.split('_');
                                                            var userid = split_id[1];

                                                            $.ajax({
                                                                url: '<?= $url = _url . "/api/get-ground-info-hover" ?>',
                                                                type: 'get',
                                                                data: {ground_id: userid},
                                                                success: function (response) {

                                                                    // Setting content option
                                                                    $("#" + id).tooltip('option', 'content', response);

                                                                }
                                                            });
                                                        }
                                                    });

                                                    $(".content span").mouseout(function () {
                                                        // re-initializing tooltip
                                                        $(this).attr('title', 'Please wait...');
                                                        $(this).tooltip();
                                                        $('.ui-tooltip').hide();
                                                    });

                                                });

        </script>


    </body>
</html>