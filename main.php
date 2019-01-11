<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ScoreBoard</title>

        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

         <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/jquery-3.2.1.min.js"></script>

        <script src="js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="css/index.css"/>

        <style type="text/css">

            nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
            nav.navbar-findcond a { color: #f14444; }
            nav.navbar-findcond ul.navbar-nav a { color: #f14444; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
            nav.navbar-findcond ul.navbar-nav a:hover,
            nav.navbar-findcond ul.navbar-nav a:visited,
            nav.navbar-findcond ul.navbar-nav a:focus,
            nav.navbar-findcond ul.navbar-nav a:active { background: #fff; }
            nav.navbar-findcond ul.navbar-nav a:hover { border-color: #f14444; }
            nav.navbar-findcond li.divider { background: #ccc; }
            nav.navbar-findcond button.navbar-toggle { background: #f14444; border-radius: 2px; }
            nav.navbar-findcond button.navbar-toggle:hover { background: #999; }
            nav.navbar-findcond button.navbar-toggle > span.icon-bar { background: #fff; }
            nav.navbar-findcond ul.dropdown-menu { border: 0; background: #fff; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
            nav.navbar-findcond ul.dropdown-menu > li > a { color: #444; }
            nav.navbar-findcond ul.dropdown-menu > li > a:hover { background: #f14444; color: #fff; }
            nav.navbar-findcond span.badge { background: #f14444; font-weight: normal; font-size: 11px; margin: 0 4px; }
            nav.navbar-findcond span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }

        </style>
    </head>
    <body>
        <!--Whole Container -->
        <div class="rca-container">

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
                                <a class="navbar-brand" href="#">CircInfo System</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#" class="">Home</a></li>
                                    <li class=" dropdown">
                                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Australia</a></li>
                                            <li><a href="#">New Zealand</a></li>
                                            <li><a href="#">England</a></li>
                                            <li><a href="#">India</a></li>
                                            <li><a href="#">South Africa</a></li>
                                            <li><a href="#">West Indies</a></li>
                                            <li><a href="#">Sri Lanka</a></li>
                                        </ul>
                                    </li>
                                    <li class=" dropdown">
                                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">South Africa vs India</a></li>
                                            <li><a href="#">Ranji Tropy</a></li>
                                            <li><a href="#">England</a></li>
                                            <li><a href="#">New Zealand vs West Indies</a></li>
                                        </ul>
                                    </li>
                                    <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ranking <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">ODIs</a></li>
                                            <li><a href="#">Test Match</a></li>
                                            <li><a href="#">Team</a></li>
                                            <li><a href="#">Batsman</a></li>
                                            <li><a href="#">Bowler</a></li>
                                            <li><a href="#">All Rounder</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Video</a></li>


                                </ul>
                                <ul class="nav navbar-nav pull-right">


                                    <li style="padding-top: 10px;">

                                        <input type="text" class="search-box" placeholder="Search with country,match..." style="padding: 5px;">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> 

                                    </li>
                                    <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Select <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">Team</a></li>
                                            <li><a href="#">Match</a></li>
                                            <li><a href="#">Player</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>


            <!--Live ScoreBoard -->
            <div class="rca-row">
                <!--Widget Inner -->
                <div class="rca-column-6">
                    <!--Match Series-->
                    <div class="rca-medium-widget rca-padding rca-live-season rca-top-border">
                        <div class="rca-live-label rca-right">IND vs NZL</div>
                        <div class="rca-clear"></div>
                        <div class="rca-padding">       
                            <h3 class="rca-match-title">
                                <a href="/main.html">
                                    IND: 173/2 in 18.5
                                </a>
                            </h3>
                            <p class="rca-match-info">
                                <span>IND: 16/1 in 1.0</span>
                                <span>CRR:4.1</span>
                                <span>Req RR:10.1</span>
                            </p>
                            <p class="rca-match-info">
                                <span>IND: 220/7 in 1.0</span>
                                <span>& 101/4 in 20.0</span>
                            </p>
                            <div class="rca-top-padding">
                                <div class="rca-batsman striker">
                                    <span class="player">V Kohli</span>
                                    <span>48(27)</span>
                                </div>
                                <div class="rca-batsman">
                                    <span class="player">MS Dhoni</span>
                                    <span>14(8)</span>
                                </div>
                            </div>
                            <div class="rca-ball-detail">
                                <div class="rca-match-schedule">
                                    Over: 24
                                </div>
                                <ul class="rca-ball-by">
                                    <li class="b6">6</li>
                                    <li class="">1wd</li>
                                    <li class="w">w</li>
                                    <li class="">1</li>
                                    <li class="">2</li>
                                    <li class="b6">4</li>
                                </ul>
                                <div class="rca-bowler-info">
                                    <span>Agarkar: </span><span class="rca-bolwing">5/0 in 0.2</span>
                                </div>
                            </div>
                        </div>
                        <div class="rca-top-padding rca-score-status">
                            <div class="rca-status-scroll">
                                FOUR!!! from Dhoni
                            </div>
                            <ul class="rca-bullet-list">
                                <li class="active" data-tab="#status1"></li>
                                <li data-tab="#status2"></li>
                                <li data-tab="#status3"></li>
                            </ul>
                        </div>           
                    </div>
                    <!--Match Schedule Info-->
                    <div class="rca-mini-widget rca-history-info">
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Match:</span>
                            <span class="rca-col"> Team X vs Team Y - 6th Qualifying Match</span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Series:</span>
                            <span class="rca-col"> Developer season 2018</span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Date (GMT):</span>
                            <span class="rca-col"> 24th April 2018 00:00 GMT</span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Venue:</span>
                            <span class="rca-col"> India</span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Match Type:</span>
                            <span class="rca-col"> Twenty20 Cricket Match</span>
                        </div>
                        <div class="rca-row">
                            <span class="rca-col rca-history-title">Toss:</span>
                            <span class="rca-col"> Team X won the toss and chose to bat first</span>
                        </div>
                    </div>

                    <!--Completed Match Series-->
                    <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border">
                        <div class="rca-right rca-basic-text">12th Feb 2018</div>
                        <div class="rca-clear"></div>
                        <div class="rca-padding">       
                            <h3 class="rca-match-title rca-theme-text">
                                India won by 69 runs
                            </h3>
                            <p class="rca-match-info">
                                <span>2nd T20 Match</span>
                            </p>
                            <div class="rca-top-padding">
                                <div class="rca-team-score">
                                    <span class="team">India</span>
                                    <span>196/6 in 20.0</span>
                                </div>
                                <div class="rca-team-score">
                                    <span class="team">Sri Lanka</span>
                                    <span>127/9 in 20.0</span>
                                </div>
                            </div>
                            <div class="rca-man-match">
                                <h3>Man of the Match <span>S Dawan</span></h3>
                                <div class="rca-padding">
                                    <p class="rca-man-match-record"><span class="title">Runs</span><span>51(25)</span></p>
                                    <p class="rca-man-match-record"><span class="title">Boundries</span><span>7X4, 2X6</span></p>
                                    <p class="rca-man-match-record"><span class="title">Wickets</span><span>Nil</span></p>
                                </div>
                            </div>
                        </div>      
                    </div>


                    <!--Upcoming Match Schedule-->
                    <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border">
                        <div class="rca-right rca-basic-text">12th Feb 2018</div>
                        <div class="rca-clear"></div>
                        <div class="rca-padding">       
                            <h3 class="rca-match-title rca-theme-text">
                                BAN VS IND
                            </h3>
                            <p class="rca-match-info">
                                <span>2nd T20 Match</span>
                            </p>
                            <div class="rca-top-padding">
                                <div class="rca-teams rca-table">
                                    <div class="team rca-cell">South Africa</div>
                                    <div class="rca-vs rca-cell"></div>
                                    <div class="team rca-cell">Bakistan</div>
                                </div>
                            </div>
                            <div class="rca-match-start">
                                <h3>Starts in</h3>
                                <div class="rca-padding">
                                    <h2>1 day</h2>                  
                                    <p class="rca-center">
                                        Wed 24th Feb 2018, 7:00 pm (local time)
                                    </p>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>

                <div class="rca-column-6">
                    <!--Match Series-->
                    <div class="rca-medium-widget rca-top-border ">
                        <ul class="rca-tab-list">
                            <li class="rca-tab-link active" data-tab="tab-41" onclick="showTab(this);">SCORECARD</li>
                            <li class="rca-tab-link" data-tab="tab-42" onclick="showTab(this);">SQUAD</li>
                        </ul>
                        <div id="tab-41" class="rca-tab-content rca-padding active">
                            <div class="rca-batting-score rca-padding">
                                <h3>Team X Batting: <strong> 92/2 in 8.5</strong></h3>
                                <div class="rca-row">
                                    <div class="rca-header rca-table">
                                        <div class="rca-col rca-player">
                                            Batsmen
                                        </div>
                                        <div class="rca-col">
                                            R
                                        </div>
                                        <div class="rca-col">
                                            4s
                                        </div>
                                        <div class="rca-col">
                                            6s
                                        </div>
                                        <div class="rca-col">
                                            SR
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row">
                                    <div class="rca-table">
                                        <div class="rca-col rca-player">
                                            Player x1*
                                        </div>
                                        <div class="rca-col">
                                            8 (7)
                                        </div>
                                        <div class="rca-col">
                                            0
                                        </div>
                                        <div class="rca-col">
                                            1
                                        </div>
                                        <div class="rca-col">
                                            114.29
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row">
                                    <div class="rca-table">
                                        <div class="rca-col rca-player">
                                            Player x2
                                        </div>
                                        <div class="rca-col">
                                            8 (7)
                                        </div>
                                        <div class="rca-col">
                                            0
                                        </div>
                                        <div class="rca-col">
                                            1
                                        </div>
                                        <div class="rca-col">
                                            114.29
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-clear"></div>
                                <div class="rca-padding">
                                    <span>Fours: <strong>2</strong></span>, <span>Sixes: <strong>1</strong></span>, <span>Extras: <strong>9</strong></span>
                                </div>
                            </div>
                            <div class="rca-bowling-score rca-padding">
                                <h3>Team X Bowling:</h3>
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
                                        <div class="rca-col small">
                                            Econ
                                        </div>
                                        <div class="rca-col small">
                                            Extras
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row">
                                    <div class="rca-table">
                                        <div class="rca-col rca-player">
                                            Player Y
                                        </div>
                                        <div class="rca-col small">
                                            6
                                        </div>
                                        <div class="rca-col small">
                                            2
                                        </div>
                                        <div class="rca-col small">
                                            38
                                        </div>
                                        <div class="rca-col small">
                                            2
                                        </div>
                                        <div class="rca-col small">
                                            7.00
                                        </div>
                                        <div class="rca-col small">
                                            3
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row">
                                    <div class="rca-table">
                                        <div class="rca-col rca-player">
                                            Player Y
                                        </div>
                                        <div class="rca-col small">
                                            6
                                        </div>
                                        <div class="rca-col small">
                                            2
                                        </div>
                                        <div class="rca-col small">
                                            38
                                        </div>
                                        <div class="rca-col small">
                                            2
                                        </div>
                                        <div class="rca-col small">
                                            7.00
                                        </div>
                                        <div class="rca-col small">
                                            3
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-clear"></div>
                            </div>
                        </div>
                        <div id="tab-42" class="rca-tab-content rca-padding">
                            <ul class="rca-tab-list small">
                                <li class="rca-tab-link active" data-tab="tab-411" onclick="showTab(this);">Team X</li>
                                <li class="rca-tab-link" data-tab="tab-412" onclick="showTab(this);">Team Y</li>
                            </ul>
                            <div id="tab-411" class="rca-tab-content rca-padding active">
                                <!-- <div class="rca-padding">                
                                  <div class="rca-switch filled">
                                    <span class="active">Team X</span><span>Team Y</span>
                                  </div>
                                </div> -->
                                <div class="rca-batting-score">
                                    <h3>Team X (11)</h3>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">MS Dhoni</span>
                                        <span class="rca-highlight-text">(C) &amp; (WK)</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Shikhar Dhawan</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Ajinkya Rahane</span>
                                        <span class="rca-right rca-basic-text">Bowler</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Suresh Raina</span>
                                        <span class="rca-right rca-basic-text">All rounder</span>
                                    </div>
                                </div>
                                <div class="rca-batting-score">
                                    <h3>Bench (9)</h3>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Rohit Sharma</span>
                                        <span class="rca-highlight-text">(WK)</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Rohit Sharma</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Rohit Sharma</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Rohit Sharma</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-412" class="rca-tab-content rca-padding active">
                                <!-- <div class="rca-padding">                
                                  <div class="rca-switch filled">
                                    <span class="active">Team X</span><span>Team Y</span>
                                  </div>
                                </div> -->
                                <div class="rca-batting-score">
                                    <h3>Team Y (11)</h3>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">MS Dhoni</span>
                                        <span class="rca-highlight-text">(C) &amp; (WK)</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Shikhar Dhawan</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Ajinkya Rahane</span>
                                        <span class="rca-right rca-basic-text">Bowler</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Suresh Raina</span>
                                        <span class="rca-right rca-basic-text">All rounder</span>
                                    </div>
                                </div>
                                <div class="rca-batting-score">
                                    <h3>Bench (9)</h3>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Rohit Sharma</span>
                                        <span class="rca-highlight-text">(WK)</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Rohit Sharma</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Rohit Sharma</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                    <div class="rca-player-detail">
                                        <span class="rca-player">Rohit Sharma</span>
                                        <span class="rca-right rca-basic-text">Batsman</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Test Innings Score Card-->
                    <div class="rca-medium-widget rca-top-border">
                        <ul class="rca-tab-list">
                            <li class="rca-tab-link active" data-tab="tab-31" onclick="showTab(this);">SCORECARD</li>
                            <li class="rca-tab-link" data-tab="tab-32" onclick="showTab(this);">SQUAD</li>
                        </ul>
                        <div id="tab-31" class="rca-tab-content rca-padding active">
                            <div class="rca-border-bottom rca-padding">  
                                <div class="rca-switch rca-top-padding">
                                    <span class="active">Team X 1st Innings</span><span>Team X 2nd Innings</span>
                                </div>
                                <div class="rca-switch rca-top-padding">
                                    <span>Team Y 1st Innings</span><span>Team Y 2nd Innings</span>
                                </div>
                            </div>
                            <div class="rca-batting-score rca-padding">
                                <h3>Team X Batting: <strong> 92/2 in 8.5</strong></h3>
                                <div class="rca-row">
                                    <div class="rca-header rca-table">
                                        <div class="rca-col rca-player">
                                            Batsmen
                                        </div>
                                        <div class="rca-col">
                                            R
                                        </div>
                                        <div class="rca-col">
                                            4s
                                        </div>
                                        <div class="rca-col">
                                            6s
                                        </div>
                                        <div class="rca-col">
                                            SR
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row">
                                    <div class="rca-table">
                                        <div class="rca-col rca-player">
                                            Player x1*
                                            <p>bowled b JR Hazlewood</p>
                                        </div>
                                        <div class="rca-col">
                                            8 (7)
                                        </div>
                                        <div class="rca-col">
                                            0
                                        </div>
                                        <div class="rca-col">
                                            1
                                        </div>
                                        <div class="rca-col">
                                            114.29
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row rca-padding">
                                    <span>Fours: <strong>18</strong></span>, <span>Sixes: <strong>8</strong></span>, <span>Extras: <strong>29</strong></span>
                                </div>
                            </div>
                            <div class="rca-bowling-score rca-padding">
                                <h3>Team X Bowling:</h3>
                                <div class="rca-row">
                                    <div class="rca-header">
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
                                        <div class="rca-col small">
                                            Econ
                                        </div>
                                        <div class="rca-col small">
                                            Extras
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row">
                                    <div class="rca-table">
                                        <div class="rca-col rca-player">
                                            Player Y
                                        </div>
                                        <div class="rca-col small">
                                            9
                                        </div>
                                        <div class="rca-col small">
                                            2
                                        </div>
                                        <div class="rca-col small">
                                            38
                                        </div>
                                        <div class="rca-col small">
                                            2
                                        </div>
                                        <div class="rca-col small">
                                            5.00
                                        </div>
                                        <div class="rca-col small">
                                            3
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row">
                                    <div class="rca-table">
                                        <div class="rca-col rca-player">
                                            Player Y
                                        </div>
                                        <div class="rca-col small">
                                            6
                                        </div>
                                        <div class="rca-col small">
                                            2
                                        </div>
                                        <div class="rca-col small">
                                            38
                                        </div>
                                        <div class="rca-col small">
                                            2
                                        </div>
                                        <div class="rca-col small">
                                            7.00
                                        </div>
                                        <div class="rca-col small">
                                            3
                                        </div>
                                    </div>
                                </div>
                                <div class="rca-row rca-padding">
                                    <h3>Fall of Wicket:</h3>
                                    <ol class="rca-wicket-falls">
                                        <li>R Chandrika at 2 runs, in 1.3 over</li>
                                        <li>R Chandrika at 20 runs, in 2.0 over</li>
                                        <li>R Chandrika at 0 runs, in 3.5 over</li>
                                        <li>R Chandrika at 99 runs, in 10.3 over</li>
                                        <li>R Chandrika at 14 runs, in 13.1 over</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div id="tab-32" class="rca-tab-content rca-padding">
                            <div class="rca-padding">                
                                <div class="rca-switch filled">
                                    <span class="active">Team X</span><span>Team Y</span>
                                </div>
                            </div>
                            <div class="rca-batting-score rca-padding">
                                <h3>Team X (11)</h3>
                                <div class="rca-player-detail">
                                    <span class="rca-player">MS Dhoni</span>
                                    <span class="rca-highlight-text">(C) &amp; (WK)</span>
                                    <span class="rca-right rca-basic-text">Batsman</span>
                                </div>
                                <div class="rca-player-detail">
                                    <span class="rca-player">Shikhar Dhawan</span>
                                    <span class="rca-right rca-basic-text">Batsman</span>
                                </div>
                                <div class="rca-player-detail">
                                    <span class="rca-player">Ajinkya Rahane</span>
                                    <span class="rca-right rca-basic-text">Bowler</span>
                                </div>
                                <div class="rca-player-detail">
                                    <span class="rca-player">Suresh Raina</span>
                                    <span class="rca-right rca-basic-text">All rounder</span>
                                </div>
                            </div>
                            <div class="rca-batting-score rca-padding">
                                <h3>Bench (9)</h3>
                                <div class="rca-player-detail">
                                    <span class="rca-player">Rohit Sharma</span>
                                    <span class="rca-highlight-text">(WK)</span>
                                    <span class="rca-right rca-basic-text">Batsman</span>
                                </div>
                                <div class="rca-player-detail">
                                    <span class="rca-player">Rohit Sharma</span>
                                    <span class="rca-right rca-basic-text">Batsman</span>
                                </div>
                                <div class="rca-player-detail">
                                    <span class="rca-player">Rohit Sharma</span>
                                    <span class="rca-right rca-basic-text">Batsman</span>
                                </div>
                                <div class="rca-player-detail">
                                    <span class="rca-player">Rohit Sharma</span>
                                    <span class="rca-right rca-basic-text">Batsman</span>
                                </div>
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
                document.getElementById(dataTab).className += ' active';
            }
        </script>

    </body>
</html>