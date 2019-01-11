<?php
require_once './config.php';

$url = _url . "/api/get-world-cup-info";
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
$wcInfo = json_decode($result, TRUE);
$wcInfoData = $wcInfo['data'];
//display_array($wcInfoData);
//exit;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cricket About</title>
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

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">

                    <section id="cricket" style="padding:  35px 5px; ">
                        <div style="    border-top: 5px solid #1eb848;background-color: #fff; margin: 15px 0;padding: 10px 10px">
                            <div style="font-size: 20px">Cricket: A Gentlemen's Game!
                            </div>
                        </div>

                        <p>Cricket was invented in the vast fields of England, supposedly by shepherds who herded their flock. Later on this game was shown benevolence by aristocrats, and now has the stature of being England's national game. After a century now, cricket stands in the international arena, with a place of its own.</p>

                        <img src="images/cricket-vector.jpg" alt="" class="img-responsive" />

                        <h3>
                            THE GAME
                        </h3>
                        <p>
                            Cricket involves two teams with 11 players on each side. The captain who wins the toss decides whether his team bats or bowls first. If they bat first , their aim is to score a lot of runs and make sure the other team does not reach that score.</p>
                        <p>Cricket is a bat-and-ball game played between two teams of eleven players each on a cricket field, at the centre of which is a rectangular 20-metre (22-yard) pitch with a target at each end called the wicket (a set of three wooden stumps upon which two bails sit). Each phase of play is called an innings, during which one team bats, attempting to score as many runs as possible, whilst their opponents bowl and field, attempting to minimise the number of runs scored. When each innings ends, the teams usually swap roles for the next innings (i.e. the team that previously batted will bowl/field, and vice versa). The teams each bat for one or two innings, depending on the type of match. The winning team is the one that scores the most runs, including any extras gained (except when the result is not a win/loss result).</p>
                    </section>
                    <div class="clearfix"></div>

                    <section id="thePlayer" style="padding:  35px 5px; ">
                        <h3 id="">
                            KEY PLAYERS
                        </h3>
                        <div class="row">
                            <div class="col-md-8">
                                <ol class="liLining">
                                    <li><b>Batsmen</b> - one who scores runs of the balls bowled by the bowler.</li>
                                    <li><b>Bowler</b> - One who bowls, and tries to get the batsmen "out" (dismissed from the ground).</li>
                                    <li><b>Fielder</b> - Players (10) who assist the bowler in achieving his goal, and prevent the batsmen from scoring runs.</li>
                                </ol>
                            </div>
                            <div class="col-md-4">
                                <img src="images/cricket_bat.gif"  class="img-responsive"alt="" />
                            </div>
                        </div>

                    </section> 
                    <div class="clearfix"></div>

                    <section id="pitch" style="padding:  35px 5px; ">

                        <h3 id="">
                            Playing Area - <small><i>pitch</i></small>
                        </h3>
                        <p>
                            Cricket is a bat-and-ball game played on a cricket field (see image, right) between two teams of eleven players each.
                            The field is usually circular or oval in shape and the edge of the playing area is marked by a boundary,
                            which may be a fence, part of the stands, a rope, a painted line or a combination of these; the boundary must if possible be marked along its 
                            entire length.
                        </p>
                        <img src="images/Cricket_pitch.svg" alt="" class="img-responsive" />
                        <p>In the approximate centre of the field is a rectangular pitch (see image, below) on which a wooden target called a wicket is sited at each end; 
                            the wickets are placed 22 yards (20 m) apart. The pitch is a flat surface 3 metres (9.8 ft) wide, with very short grass that tends to be worn 
                            away as the game progresses (cricket can also be played on artificial surfaces, notably matting). 
                            Each wicket is made of three wooden stumps topped by two bails.
                        </p>
                    </section>
                    <div class="clearfix"></div>

                    <section id="originCricket" style="padding:  35px 5px; ">
                        <h3 id="">Origin of cricket:</h3>
                        <p>It is generally believed that cricket originated as a children's game in the south-eastern counties of England, 
                            sometime during the medieval period. Although there are claims for prior dates, the earliest definite reference to cricket being played comes from evidence given at a court case in Guildford on Monday, 17 January 1597 </p>
                        <p>Given Derrick's age, it was about half a century earlier when he was at school and so it is certain that cricket was being played 
                            c.1550 by boys in Surrey. The view that it was originally a children's game is reinforced by Randle Cotgrave's 1611 English-French dictionary in which he defined the noun "crosse" as "the crooked staff wherewith boys play at cricket" and the verb form "crosser" as "to play at cricket".</p>

                        <h3 id="evolutionBat"> 
                            Evolution of cricket bat:
                        </h3>
                        <div class="col-md-8">
                            <p>A <b>cricket bat</b> is a specialised piece of equipment used by batsmen in the sport of cricket to hit the ball, typically consisting of a cane handle attached to a flat-fronted willow-wood blade. </p>
                            <p>The length of the bat may be no more than 38 inches (965 mm) and the width no more than 4.25 inches (108 mm). Its use is first mentioned in 1624. Since 1979, a rule change stipulated that bats can only be made from wood.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/Historical_cricket_bat_art.jpg" class="img-responsive" alt="" />
                            <p>Evolution of the cricket bat. The original "hockey stick" (left) evolved into the straight bat from c.1760 when pitched delivery bowling began.</p>
                        </div>
                    </section>
                    <div class="clearfix"></div>

                    <section id="internationalSport" style="padding:  35px 5px; ">
                        <h3 >Cricket becomes an international sport</h3>
                        <div class="col-md-8">
                            <p>

                                Meanwhile, the British Empire had been instrumental in spreading the game overseas and by the middle of the 19th 
                                century it had become well established in Australia, the Caribbean, India, New Zealand, North America and South Africa. In 1844, the first-ever international match took place between the United States and Canada. In 1859, a team of English players went to North America on the first overseas tour.
                            </p>
                            <p>
                                The first Australian team to travel overseas consisted of Aboriginal stockmen who toured England in 1868. In 1862, an English team made the first tour of Australia.
                            </p>
                            <p>
                                In 1876–77, an England team took part in what was retrospectively recognised as the first-ever Test match at the Melbourne Cricket Ground against 
                                Australia. The rivalry between England and Australia gave birth to The Ashes in 1882 and this has remained Test cricket's most famous contest.
                                Test cricket began to expand in 1888–89 when South Africa played England
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/England_in_North_America_1859.jpg" class="img-responsive" alt="" />
                            <p>The first English team to tour overseas, on board ship to North America, 1859</p>
                        </div>

                    </section>
                    <div class="clearfix"></div>

                    <section id="basicGamePlay" style="padding:  35px 5px; ">
                        <h3>Basic gameplay: bowler to batsman</h3>
                        <p>During normal play, thirteen players and two umpires are on the field. Two of the players are batsmen and the rest are all eleven members of the fielding team. The other nine players in the batting team are off the field in the pavilion.
                            The image with overlay below shows what is happening when a ball is being bowled and which of the personnel are on or close to the pitch. </p>
                        <img src="images/basic_gameplay.jpg" class="img-responsive center-block" alt="" />
                    </section>
                    <div class="clearfix"></div>
                    <section id="specialRole" style="padding:  35px 5px; ">

                        <h3 id="">Specialist roles <small><i>captain (cricket) and wicket-keeper</i></small></h3>
                        <p>The captain is often the most experienced player in the team, certainly the most tactically astute, and can possess any of the main skillsets as a batsman, a bowler or a wicket-keeper. Within the Laws, the captain has certain responsibilities in terms of nominating his players to the umpires before the match and ensuring that his players conduct themselves "within the spirit and traditions of the game as well as within the Laws.</p>
                        <p>The wicket-keeper (sometimes called simply the "keeper") is a specialist fielder subject to various rules within the Laws about his equipment and demeanour. He is the only member of the fielding side who can effect a stumping and is the only one permitted to wear gloves and external leg guards. Depending on their primary skills, the other ten players in the team tend to be classified as specialist batsmen or specialist bowlers</p>
                    </section>
                    <div class="clearfix"></div>

                    <section id="governance" style="padding:  35px 5px; ">

                        <h3 id="">Governance</h3>
                        <p>The International Cricket Council (ICC), which has its headquarters in Dubai, is the global governing body of cricket. It was founded as the Imperial Cricket Conference in 1909 by representatives from England, Australia and South Africa, renamed the International Cricket Conference in 1965, and took up its current name in 1989.</p>
                        <p>The table below lists the ICC full members and their national cricket boards:</p>

                        <img src="images/governance.jpg" class="img-responsive center-block" alt="" />
                    </section>

                    <div class="clearfix"></div>
                    <!--end-->
                </div>
                <div class="col-md-3">
                    <div style="position: fixed;top:100px;">
                        <ul>
                            <li><a href="#cricket">Cricket</a></li>
                            <li><a href="#thePlayer">Key Player</a></li>
                            <li><a href="#pitch">Pitch</a></li>
                            <li><a href="#originCricket">Origin of Cricket</a></li>
                            <li><a href="#evolutionBat">Evolution of cricket bat</a></li>
                            <li><a href="#internationalSport">International sport cricket</a></li>
                            <li><a href="#basicGamePlay">Basic Gameplay</a></li>
                            <li><a href="#specialRole">Specialist roles</a></li>
                            <li><a href="#governance">Governance</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="clerfix"></div>

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

    <script type="text/javascript">

        // Select all links with hashes
        $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function (event) {
                    // On-page links
                    if (
                            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                            &&
                            location.hostname == this.hostname
                            ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                }
                                ;
                            });
                        }
                    }
                });
    </script>
</body>
</html>