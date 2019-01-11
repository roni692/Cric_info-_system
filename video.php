<?php
require_once './config.php';

$url = _url . "/api/get-video";
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
$getVideo = json_decode($result, TRUE);
$getVideoData = $getVideo['data'];
//display_array($getVideoData);
//exit;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cricket Home</title>
        <!--header files STRAT-->
        <?php require_once './header_files.php'; ?>
        <!--header files END-->

        <style type="text/css">
            .liLining{
                margin-top: 35px;
            }
            .liLining li{
                padding: 5px 15px;
            }
        </style>
    </head>
    <body>
        <!--Whole Container -->
        <div class="rca-container">

            <!--header menu STRAT-->
            <?php require_once 'header_menu.php'; ?>
            <!--header menu END-->

       
            <div class="rca-row">
                <div class="rca-column-12">
                    <div class="rca-mini-widget rca-tab-simple">
                        <ul class="rca-tab-list">
                            <li class="rca-tab-link active" data-tab="rtab-1" onclick="showTab(this);">Videos</li>
                        </ul>
                        <div id="rtab-1" class="rca-padding rca-tab-content active">              
                           
                            <?php
                            foreach ($getVideoData as $value) {
                                ?>
                                <div class="rca-column-4">
                                    <div class="rca-blog-content">
                                        <div class="rca-blog-image">
                                            <div class="vid">
                                                <iframe  src="<?= $value['video_url'] ?>" allowfullscreen=""></iframe>
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
                            ?>
                            <div class="rca-clear"></div>
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