<?php
require_once './config.php';

$url = _url . "/api/get-feed-id?feed_id=" . $_GET['feed_id'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);
$getFeedResponse = json_decode($result, TRUE);
$getFeedResponseData = $getFeedResponse['data'];
//display_array($getFeedResponseData);
//exit;

$url = _url . "/api/get-event-all";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);
$getEventAllResponse = json_decode($result, TRUE);
$getEventAllResponseData = $getEventAllResponse['data'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feed Full</title>
        <!--header files STRAT-->
        <?php require_once './header_files.php'; ?>
        <!--header files END-->
    </head>
    <body>
        <!--Whole Container -->
        <div class="rca-container">

            <!--header menu STRAT-->
            <?php require_once 'header_menu.php'; ?>
            <!--header menu END-->


            <div class="rca-row">

                <div class="rca-column-8">
                    <!--Match Series-->
                    <div class="rca-medium-widget rca-blog-content">
                        <div style="padding: 8px 5px;background-color: rgba(217,30,24,0.8);color: white;">
                            <span style="font-size: 20px;font-weight: 600;"><?= $getFeedResponseData['head_title'] ?></span>
                            <span><small>- <?= $getFeedResponseData['sub_title'] ?></small></span>
                        </div>
                        <div class="rca-blog-image">
                            <a href="#">
                                <?php
                                if (fileExists(_HOST . $getFeedResponseData['thumbnail_image']) == true) {
                                    ?>
                                    <img src="<?= _HOST . $getFeedResponseData['thumbnail_image'] ?>" class="img-responsive center-block" alt="" />
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?= _HOST . "image_not_available_1.jpg" ?>" class="img-responsive center-block" alt="" />
                                    <?php
                                }
                                ?>



                            </a>
                            <div class="rca-blog-head">
                                <?= $getFeedResponseData['title'] ?>
                            </div>
                        </div>
                        <div class="rca-padding">
                            <?= $getFeedResponseData['description'] ?>
                        </div>   
                        <?php if ($getFeedResponseData['match_event_id'] != "") { ?>
                            <div style="padding: 0px 120px">
                                <a class="btn btn-primary btn-block" href="event.php?event_id=<?= $getFeedResponseData['match_event_id'] ?>&r=<?= getRandomNumber() ?>" style="text-decoration: none;">
                                    View Full ScoreCard
                                </a>
                            </div>
                        <?php } ?>

                    </div>


                </div>
                <div class="rca-column-4">
                    <!--Match Series-->
                    <div class="rca-mini-widget rca-top-border rca-tab-simple">
                        <ul class="rca-tab-list">
                            <li class="rca-tab-link active" data-tab="ltab-1" onclick="showTab(this);">Results</li>
                        </ul>
                        <div id="ltab-1" class="rca-padding rca-tab-content rca-multi-season active">    

                            <?php
                            if (count($getEventAllResponseData) > 0) {
                                foreach ($getEventAllResponseData as $value) {
                                    ?>
                                    <div class="rca-match-detail rca-padding">
                                        <h3 class="rca-match-title">
                                            <a href="event.php?event_id=<?= $value['id'] ?>&r=<?= getRandomNumber() ?>" style="text-decoration: none;">
                                                <b><?= $value['match_title'] ?></b>
                                            </a>
                                            <span class="rca-match-info rca-right">
                                                <?= $value['series'] ?>
                                            </span>
                                        </h3>
                                        <p class="rca-duration"><?= $value['result'] ?></p>
                                        <p class="rca-match-schedule"><?php
                                            $s = strtotime($value['start_date_time']);
                                            echo date('D, d M Y H:i', $s);
                                            ?>
                                        </p>
                                    </div>                   
                                    <?php
                                }
                            } else {
                                echo "<div class='alert alert-danger'>No Data</div>";
                            }
                            ?>
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