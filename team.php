<?php
require_once './config.php';

$getVideoData = getCURL(_url . "/api/get-video?country_id=" . $_GET['country_id']);
$getNewsFromCountry = getCURL(_url . "/api/get-news-feed-from-country?country_id=" . $_GET['country_id']);
$getMatchEventList = getCURL(_url . "/api/get-match-event?country_id=" . $_GET['country_id']);
$getPlayerList = getCURL(_url . "/api/get-player-by-country?country_id=" . $_GET['country_id']);
$getPlayerListNew = getCURL(_url . "/api/get-player-by-country1?country_id=" . $_GET['country_id'], array("matchType", 'allPlayerWithMatchType'));
$allPlayerWithMatchType = ($getPlayerListNew['allPlayerWithMatchType']);
//display_array($getNewsFromCountry);exit;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Team Information</title>
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
                                    News 
                                </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                    Players
                                </a>
                            </li>
                            <li >
                                <a href="#tab_default_3" data-toggle="tab">
                                    Results
                                </a>
                            </li>
                            <li>
                                <a href="#tab_default_4" data-toggle="tab">
                                    Videos
                                </a>
                            </li>
                            <!--                            <li>
                                                            <a href="#tab_default_5" data-toggle="tab">
                                                                Photos
                                                            </a>
                                                        </li>-->

                        </ul>
                        <div class="tab-content" style="background-color: transparent ">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="rca-column-2"></div>
                                <div class="rca-column-8">
                                    <!--Match Series-->
                                    <?php
                                    if (count($getNewsFromCountry) > 0) {

                                        foreach ($getNewsFromCountry as $value) {
                                            ?>
                                            <div class="rca-medium-widget rca-blog-content">
                                                <div style="padding: 8px 5px;background-color: rgba(217,30,24,0.8);color: white;">
                                                    <span style="font-size: 20px;font-weight: 600;"><?= $value['head_title'] ?></span>
                                                    <span><small>- <?= $value['sub_title'] ?></small></span>
                                                </div>
                                                <div class="rca-blog-image">
                                                    <a href="feedfull.php?feed_id=<?= $value['id'] . "&r=" . getRandomNumber() ?>">
                                                        <img src="<?= _HOST . $value['thumbnail_image'] ?>" class="img-responsive  center-block" alt="" style="width: 100%" />
                                                    </a>

                                                    <div class="rca-blog-head">
                                                        <?= $value['title'] ?>
                                                    </div>
                                                </div>
                                                <div class="rca-padding">  
                                                    <p class="small"><i>Courtesy: <?= $value['courtesy'] ?></i></p> 
                                                    <?= $value['description'] ?>
                                                </div>           
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                    }
                                    ?>
                                </div>
                                <div class="rca-column-2"></div>

                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="rca-column-3"></div>
                                <div class="rca-column-6">
                                    <div class="rca-medium-widget rca-top-border ">
                                        <ul class="rca-tab-list">
                                            <li class="rca-tab-link active" data-tab="tab-39" onclick="showTab(this);">ALL</li>
                                            <?php
                                            $mtype = array_values($getPlayerListNew['matchType']);//get match type from JSON response of API
                                            //ex. One Day, T-20
                                            if (count($mtype) > 0) {
                                                $i = 0;
                                                foreach ($mtype as $value) {
                                                    //dynamic print name of Team and also creating Tabs in Loop
                                                    ?>
                                                    <li class="rca-tab-link" data-tab="tab-4<?= $i ?>" onclick="showTab(this);"><?= $value ?></li>
                                                    <?php
                                                    $i++;
                                                }// end of foreach loop
                                            } else {
                                                echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                            }
                                            ?>
                                        </ul>
                                        <div id="tab-39" class="rca-tab-content rca-padding active">
                                            <div class="rca-batting-score rca-padding"> 
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
                                                //all player data 
                                                if (count($getPlayerList) > 0) {//check player data available in team
                                                    foreach ($getPlayerList as $value) {
                                                //   printing into tabular format in Loop
                                                        ?>
                                                        <div class="rca-row">
                                                            <div class="rca-table">
                                                                <div class="rca-col rca-player content">
                                                                    <!--print player name with mouse hover effect-->
                                                                    <span id='user_<?= $value['id'] ?>' title='Please wait..'>
                                                                        <a href="player.php?player_id=<?= $value['id'] . '&r=' . getRandomNumber() ?> "><?= $value['name'] ?></a>
                                                                    </span>
                                                                </div>
                                                                <div class="rca-col">
                                                                    <!--print player role-->
                                                                    <?= $value['role'] ?>
                                                                </div>
                                                                <div class="rca-col">
                                                                <!--print batting style- right/left handed-->    
                                                                <?= $value['batting'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }//end of foreach loop
                                                } else {
                                                    echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                                }
                                                ?>


                                                <div class="rca-clear"></div>
                                            </div>

                                        </div>

                                        <?php
                                        $mtype = array_values($getPlayerListNew['matchType']);
                                        if (count($mtype) > 0) {
                                            $i = 0;
                                            foreach ($mtype as $value) {
                                                ?>
                                                <div id="tab-4<?= $i ?>" class="rca-tab-content rca-padding ">
                                                    <div class="rca-batting-score rca-padding"> 
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
                                                        if (count($allPlayerWithMatchType[$value]) > 0) {

                                                            foreach ($allPlayerWithMatchType[$value] as $value) {
                                                                ?>

                                                                <div class="rca-row">
                                                                    <div class="rca-table">
                                                                        <div class="rca-col rca-player content">
                                                                            <span id='user_<?= $value['id'] ?>' title='Please wait..'>

                                                                                <a href="player.php?player_id=<?= $value['id'] . '&r=' . getRandomNumber() ?> "><?= $value['name'] ?></a>

                                                                            </span>
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
                                                            echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <?php
                                                $i++;
                                            }
                                        } else {
                                            echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                        }
                                        ?>



                                    </div>
                                </div>
                                <div class="rca-column-3"></div>
                            </div>
                            <div class="tab-pane " id="tab_default_3">
                                <div class="rca-column-2"></div>

                                <div class="rca-column-8">
                                    <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border" style="display: inline-block">

                                        <?php
                                        if (count($getMatchEventList) > 0) {
                                            foreach ($getMatchEventList as $value) {
                                                ?>
                                                <a href="event.php?event_id=<?= $value['match_event_id'] ?>&r=<?= getRandomNumber() ?>" style="text-decoration: none;">
                                                    <div class="rca-match-start" style="padding: 00px 15px;margin-top: 10px;">
                                                        <div class="row">
                                                            <div class="col-md-2" >                              
                                                                <img src="<?= _HOST . $value['two_team_name_flag'] ?>" style="margin-top: 10px" width="50px" class="img-responsive center-block" alt="" />
                                                            </div>
                                                            <div class="col-md-2" >      
                                                                <img src="<?= _HOST . $value['one_team_name_flag'] ?>" style="margin-top: 10px" width="50px" class="img-responsive pull-left" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6" >
                                                                <div class="clearfix"></div>
                                                                <h2 class="rca-theme-text pull-left" style="text-align: left;font-size: 22px;">
                                                                    <?= $value['match_title'] ?> 
                                                                    <small style="font-size: 16px;">
                                                                        (<?= $value['series'] ?>)  
                                                                    </small>
                                                                </h2>  
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="pull-right" style="font-size: 14px;margin-top: 23px;">
                                                                    (<?= $value['venue'] ?>)  
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6" >
                                                                <h4 style="margin-top: 0px;margin-bottom: 0px;text-align: left;color: #1eb848">
                                                                    <?php
                                                                    echo $value['two_team_name'] . " : ";
                                                                    echo $value['dataBatting'][0]['run'] . "/" . $value['dataBowling'][0]['wicket'];
                                                                    echo " ";
                                                                    echo "(" . $value['dataBowling'][0]['over'] . "/" . $value['over'] . " ov)";
                                                                    ?> 
                                                                </h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 style="margin-top: 0px;margin-bottom: 0px;color: #1eb848">
                                                                    <?php
                                                                    echo $value['one_team_name'] . " : ";
                                                                    echo $value['dataBatting'][1]['run'] . "/" . $value['dataBowling'][1]['wicket'];
                                                                    echo " ";
                                                                    echo "(" . $value['dataBowling'][1]['over'] . "/" . $value['over'] . " ov)";
                                                                    ?> 
                                                                </h4>
                                                            </div></div>

                                                        <div class="rca-padding">
                                                            <h3>  
                                                                <?= $value['result'] ?>
                                                            </h3>                  
                                                        </div>
                                                    </div>
                                                </a>
                                                <?php
                                            }
                                        } else {
                                            echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                        }
                                        ?>


                                    </div>
                                </div>
                                <div class="rca-column-2"></div>

                            </div>

                            <div class="tab-pane " id="tab_default_4">
                                <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border" style="display: inline-block">

                                    <?php
                                    if (count($getVideoData) > 0) {

                                        foreach ($getVideoData as $value) {
                                            ?>
                                            <div class="rca-column-6">
                                                <div class="rca-blog-content">
                                                    <div class="rca-blog-image">
                                                        <div class="vid">
                                                            <iframe  src="<?php echo $value['video_url'] ?>" allowfullscreen=""></iframe>
                                                        </div>
                                                        <div class="rca-blog-head">
                                                            <?= $value['title'] ?>
                                                        </div>
                                                    </div>
                                                    <div class="rca-padding">
                                                        <?= $value['description'] ?>
                                                    </div>   
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>No Data for this Team</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--                            <div class="tab-pane" id="tab_default_5">
                            
                                                        </div>-->

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
                                                    // document.getElementById(dataTab).className = tabClass + ' active';
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
                                                                url: '<?= $url = _url . "/api/get-player-profile-hover" ?>',
                                                                type: 'get',
                                                                data: {player_id: userid},
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