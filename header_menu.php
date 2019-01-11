<!--
<div class='progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    <div class='percent' id='percent1'></div>
</div>

<input type="hidden" id="progress_width" value="0">-->


<?php
$url = _url . "/api/get-team";
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
$getTeamResponse = json_decode($result, TRUE);
$getTeamResponseData = $getTeamResponse['data'];
//display_array($getTeamResponseData);
//exit;
$url = _url . "/api/get-event";
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
$getEventResponse = json_decode($result, TRUE);
$getEventResponseData = $getEventResponse['data'];
//display_array($getTeamResponseData);
//exit;
?>
<div class="navbar-wrapper" style="margin-bottom: 55px;z-index: 999999999999;">
    <div class="container-fluid" >
        <nav class="navbar navbar-fixed-top navbar-findcond">
            <div class="container" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">CircInfo System</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" class="">Home</a></li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($getTeamResponseData as $value) {
                                    echo "<li><a href='team.php?team_id=" . $value['id'] . "&country_id=" . $value['country_id'] . "&r=" . getRandomNumber() . "'>{$value['name']}</a></li>";
                                }
                                ?>
                                <!--                                            <li><a href='#'>New Zealand</a></li>
                                                                            <li><a href="#">England</a></li>
                                                                            <li><a href="#">India</a></li>
                                                                            <li><a href="#">South Africa</a></li>
                                                                            <li><a href="#">West Indies</a></li>
                                                                            <li><a href="#">Sri Lanka</a></li>-->
                            </ul>
                        </li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($getEventResponseData as $value) {
                                    echo "<li><a href='event.php?event_id=" . $value['id'] . "&r=" . getRandomNumber() . "'>{$value['match_title']}</a></li>";
                                }
                                ?>
                                <!--                                            <li><a href="#">South Africa vs India</a></li>
                                                                            <li><a href="#">Ranji Tropy</a></li>
                                                                            <li><a href="#">England</a></li>
                                                                            <li><a href="#">New Zealand vs West Indies</a></li>-->
                            </ul>
                        </li>
                        <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ranking <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="ranking-team.php?match_type_id=1&r=<?= getRandomNumber() ?>">Test Match</a></li>
                                <li><a href="ranking-team.php?match_type_id=2&r=<?= getRandomNumber() ?>">ODIs</a></li>
                                <li><a href="ranking-team.php?match_type_id=3&r=<?= getRandomNumber() ?>">T20I</a></li>
                                <li><a href="ranking-player.php?t=batsman&r=<?= getRandomNumber() ?>">Batsman</a></li>
                                <li><a href="ranking-player.php?t=bowler&r=<?= getRandomNumber() ?>">Bowler</a></li>
                                <li><a href="ranking-player.php?t=allrounder&r=<?= getRandomNumber() ?>">All Rounder</a></li>
                            </ul>
                        </li>
                        <li><a href="video.php">Video</a></li>
                        <li><a href="wc-info.php">World Cup</a></li>
                        <li><a href="news-feed.php">News</a></li>


                    </ul>
                    <ul class="nav navbar-nav pull-right">

                        <form action="team-search.php" id="SearchForm" role="search" style="width: 25em; margin: 0.3em 2em;" method="GET">
                            <div class="input-group my-group"> 
                                <input type="text" class="form-control" name="searchValue" id="searchValue" placeholder="Country, Match..."/>
                                <select id="selecth" name="selecth" class="form-control" data-live-search="true" title="Please select...">
                                    <!--<option value="country-search.php">Country</option>-->
                                    <option value="team-search.php">Team</option>
                                    <option value="match-search.php">Match</option>
                                    <option value="player-search.php">Player</option>
                                </select> 
                                <input type="hidden" class="form-control" name="r" value="<?= getRandomNumber() ?>"/>

                                <span class="input-group-btn">
                                    <button class="btn btn-default my-group-button" type="submit">Search</button>
                                </span>
                            </div>
                        </form> 

                        <!--
                        <li style="padding-top: 10px;">

                            <input type="text" class="search-box" placeholder="Search with country,match..." style="padding: 5px;">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> 

                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Select <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="C">Country</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Match</a></li>
                                <li><a href="#">Player</a></li>
                            </ul>
                        </li>
                </div>-->
                    </ul>
                </div>
        </nav>
    </div>
</div>
<style type="text/css">.my-group .form-control{
        width:50%;
    }</style>
<script>
//    if ($.browser.webkit) {
//        $(".my-group-button").css("height", "+=1px");
//    }

    $("#selecth").change(function () {
        $("#SearchForm").attr("action", $(this).val());
        return false;
    });
</script>