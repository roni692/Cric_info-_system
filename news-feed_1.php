<?php
require_once './config.php';
require_once './data.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News Feed</title>
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

                <div class="rca-column-4">
                    <!--Match Series-->
                    <div class="rca-news-widget rca-padding">
                        <h3>Latest News</h3>
                        <?php
                        foreach ($getFeedNewsResponseData as $value) {
                            ?>
                            <div class="rca-post">
                                <h4>
                                    <a href="feedfull.php?feed_id=<?= $value['id'] . "&r=" . getRandomNumber() ?>"><?= $value['head_title'] ?>
                                        <span><small>- <?= $value['sub_title'] ?></small></span>
                                    </a>
                                </h4>
                                <p><?= $value['description'] ?></p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="rca-column-6">
                    <!--Match Series-->
                    <?php
                    foreach ($getFeedResponseData as $value) {
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
                                <?= limitTextWords($value['description'], 50, true, true);
                                ?>
                                <a href="feedfull.php?feed_id=<?= $value['id'] . "&r=" . getRandomNumber() ?>">Read more</a>
                            </div>           
                        </div>
                        <?php
                    }
                    ?>

                </div>
<!--                  <div class="rca-column-4">

                  <div class="rca-mini-widget rca-top-border rca-tab-simple">
                        <ul class="rca-tab-list">
                            <li class="rca-tab-link active" data-tab="ltab-1" onclick="showTab(this);">Results</li>
                        </ul>
                        <div id="ltab-1" class="rca-padding rca-tab-content rca-multi-season active">    
                            <div class="rca-match-detail rca-padding">
                                <h3 class="rca-match-title">
                                    <a href="#">BAN vs ZIM</a>
                                    <span class="rca-match-info rca-right">
                                        2nd T20 Match
                                    </span>
                                </h3>
                                <p class="rca-duration">Bangaladesh Won by 20 runs</p>
                                <p class="rca-match-schedule">Sun, 31 Jan 2:10 pm IST</p>
                            </div>
                            <div class="rca-match-detail rca-padding">
                                <h3 class="rca-match-title">
                                    <a href="#">BAN vs ZIM</a>
                                    <span class="rca-match-info rca-right">
                                        2nd T20 Match
                                    </span>
                                </h3>
                                <p class="rca-duration">Bangaladesh Won by 20 runs</p>
                                <p class="rca-match-schedule">Sun, 31 Jan 2:10 pm IST</p>
                            </div>
                        </div>
                    </div>

                </div>-->
            </div>

            <div class="rca-row">
                <div class="rca-column-12">
                    <div class="rca-mini-widget rca-tab-simple">
                        <ul class="rca-tab-list">
                            <li class="rca-tab-link active" data-tab="rtab-1" onclick="showTab(this);">Photos</li>
                            <li class="rca-tab-link" data-tab="rtab-2" onclick="showTab(this);">Videos</li>
                        </ul>
                        <div id="rtab-1" class="rca-padding rca-tab-content active">              
                            <?php
                            foreach ($getPhotosData as $value) {
                                ?>
                                <div class="rca-column-4">
                                    <div class="rca-blog-content">
                                        <div class="rca-blog-image">
                                                <?php
                                                if (fileExists(_HOST . $value['photo']) == true) {
                                                    ?>
                                                    <img src="<?= _HOST . $value['photo'] ?>" class="img-responsive" alt="" />
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img src="<?= _HOST . "image_not_available.png" ?>"  width="40px" class="img-responsive pull-right" alt="" />
                                                    <?php
                                                }
                                                ?>
                                            <div class="rca-blog-head">
                                                <?= $value['title'] ?>
                                            </div>
                                        </div>
                                        <div class="rca-padding">
                                            <?= $value['title'] ?>
                                        </div>   
                                    </div>
                                </div>
                                <?php
                            }
                            ?>


                            <div class="rca-clear"></div>
                        </div>
                        <div id="rtab-2" class="rca-padding rca-tab-content">
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