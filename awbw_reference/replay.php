<html>
<head>
<title>Advance Wars By Web 2.1
</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.75">
<link rel="stylesheet" href="css/awbw_minify.css?v=1.152" type="text/css">
<link rel="stylesheet" type="text/css" href="css/header.css?v=1.045">
<link rel="stylesheet" type="text/css" href="css/main.css?v=1.019">
<link rel="stylesheet" type="text/css" href="css/slideshow.css?v=1.012">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
      <link rel="stylesheet" href="css/calculator_new.css?v=1.002">
<link rel="shortcut icon" href="https://awbw.amarriner.com/favicon.ico" type="image/x-icon">
<link rel="icon" href="https://awbw.amarriner.com/favicon.ico" type="image/x-icon">
<script type="text/javascript">
   function popReplayScreenshot(games_id, ndx, width, height) {
      features = 'status=no,resizable=no,menubar=no,titlebar=no,location=no,hotkeys=no,width=' + width + ',height=' + height;
      window.open('replay_screenshot.php?games_id=' + games_id + '&ndx=' + ndx, 'SCREENSHOT', features);
   }

   function move_check(query, url) {
      var reply = confirm(query);
      if (reply) {
         this.location.href = url;
      }
   }

</script>
</head>
<body>
<!-- Begin Page (1602948552) (11:29:12) -->
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:900;"></div>
<script type="text/javascript" language="JavaScript" src="js/overlib_mini_minify.js?v=1.0"></script>

<div id="fixed-header-wrapper">
    <nav id="top-header-nav">
        <div id="above-nav">

                <div id="webhook-test-div" style="display: block; top: 0px; position: absolute; height: 2px; width: 600px;">
                    <form id="webhook-form" action="#" method="post" onSubmit="return false;">
                            <br><input id="webhook-contents" type="hidden" class="text" name="content"><br>
                    </form>
                </div>
                            
        </div>
        <div id="logo-background2">
            <a href="/" style="display: block;">
                <img id="logo" height=70 width=170 src="terrain/awbwlogo4.gif">
            </a>
        </div>
        
        <ul id="nav-options" style="margin: auto;">

        
            <li id="profile-menu">
                                <span title="Soaprman">Soaprman</span>&nbsp;<span id="profile-arrow">&#9662;</span>
        
                                    <span class="total-alerts">2</span>
                
                <input id="user-menu-toggle" type="checkbox">
                <ul id="profile-dropdown" class="dropdown-menu">
                        <li style="padding-bottom: 3px;">
                            <a class="dropdown-menu-link" href="profile.php?username=Soaprman" style="margin-top: 8px;">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-menu-link" href="messages.php">Messages</a>
                                                                                </li>
                        
                        <li>
                                                            <span class="alert">2</span>
                                                        <a class="dropdown-menu-link" href="yourturn.php">Your Turn</a>
                        </li>

                        <li>
                            <a class="dropdown-menu-link" href="yourgames.php">Your Games</a>
                                                    </li>

                        <li><a class="dropdown-menu-link" href="design.php">Your Maps</a></li>

                        <li>
                                                        <a class="dropdown-menu-link" href="following.php?username=Soaprman">Following</a>
                        </li>

                        <li>
                            <a class="dropdown-menu-link" href="friends.php?username=Soaprman">Friends</a>

                                                    </li>
                        <li><a class="dropdown-menu-link" href="userinfo.php">Settings</a></li>
                        <li><a class="dropdown-menu-link" href="logout.php">Logout</a></li>
                </ul>
            </li>
        
            <li id="games-menu" onclick="void(0)">
                Games
                <ul id="games-dropdown" class="dropdown-menu">
                                            <li><a class="dropdown-menu-link" href="create.php">Create Game</a></li>
                        <li><span class="main-text"><a class="dropdown-menu-link" style="padding-right: 0px;" href="gameswait.php?type=public">Join Game</a></span>
                                <span class="bracket-text"><a class="dropdown-menu-link" style="padding-left: 0px;" href="gameswait.php?type=private">&nbsp;[Private]</a></span>
                        </li>
                    
                    <div class="arrow up-arrow"></div>
                    
                    <li><a class="dropdown-menu-link" href="gamescurrent_all.php">View Active</a></li>
                    <li><a class="dropdown-menu-link" href="gamescompleted.php">View Completed</a></li>
                </ul>
            </li>

            <li id="competitions-menu" onclick="void(0)">
                
                Competitions
                <ul id="competitions-dropdown" class="dropdown-menu">
                    <li><a class="dropdown-menu-link" href="newleague.php">Global League</a></li>
                    <li>
                        <a class="dropdown-menu-link" href="viewtournament.php">Tournaments</a>
                                            
                        <div class="arrow up-arrow"></div>
                    </li>

                                    </ul>
            </li>

            <li id="design-maps-menu" onclick="void(0)">
                Design Maps
                <ul id="design-maps-dropdown" class="dropdown-menu">
                    <li><a class="dropdown-menu-link" href="searchmaps.php">Search Maps</a></li>
                    <li><a class="dropdown-menu-link" href="recentmaps.php">Recent Maps</a></li>
                    <li><a class="dropdown-menu-link" href="categories.php">Categories</a></li>
                                        <div class="arrow up-arrow"></div>
                </ul>
            </li>

            <li id="right-side-menu">
                <li id="community-menu" onclick="void(0)">
                    Community
                    <ul id="community-dropdown" class="dropdown-menu">
                        <li><a class="dropdown-menu-link" href="users.php">Search Users</a></li>
                        <li><a class="dropdown-menu-link" href="discord.php">Discord Chat</a></li>
                        <li>
                                <span class="main-text"><a class="dropdown-menu-link" style="padding-right: 0px;" href="https://isndev.forumotion.co.uk/c2-advance-wars-by-web/">Forum</a></span>
                                <span class="bracket-text">&nbsp;<a class="dropdown-menu-link" style="padding-left: 0px;" href="http://www.amarriner.com/awbw_forum/">[Archive]</a></span>
                        </li>
                        <li><a class="dropdown-menu-link" href="donate.php">Donate</a></li>
                        <div class="arrow up-arrow"></div>
                    </ul>
                </li>
                <li id="tools-menu" onclick="void(0)">
                    Tools
                    <ul id="tools-dropdown" class="dropdown-menu">
                        <li><a class="dropdown-menu-link" href="moveplanner.php">Move Planner</a></li>
                        <li><a class="dropdown-menu-link" href="calculator.php">Damage Calculator</a></li>
                        
                                                    <li><a class="dropdown-menu-link" href="load_replay.php">Upload Replay</a></li>
                        
                        <div class="arrow up-arrow"></div>
                    </ul>
                </li>
                <li id="infos-menu" onclick="void(0)">
                    
                    Info
                    <ul id="infos-dropdown" class="dropdown-menu">
                        <li id="changelog">

                            <a class="dropdown-menu-link" href="changelog.php">Changelog</a>
                            
                        </li>
                        <li><a class="dropdown-menu-link" href="guide.php">FAQ</a></li>
                        <li><a class="dropdown-menu-link" href="chart.php">Charts</a></li>
                        <li><a class="dropdown-menu-link" href="http://awbw.wikia.com/wiki/Advance_Wars_By_Web_Wiki">AWBW Wiki</a></li>
                        <li><a class="dropdown-menu-link" href="https://warswiki.org/">Wars Wiki</a></li>
                    </ul>
                </li>

                <li id="contact-menu">
                    <a href="contact.php">Contact</a>
                </li>

            </li>
        </ul>
    </nav>
</div>

<div id="outer" style="min-width: 1200px; max-width: 1200px;">

            <div id="left-side-menu-fixed-wrapper" style="margin-left: 25px;">
            <div id="left-side-menu-container">
                <div class="right-arrow"></div>
                <h2 class="green-bold" style="font-size: 16px; height: 24px; padding-top: 2px;"><a style="padding: 0; text-align: center;" href="profile.php?username=Soaprman">Soaprman</a></h2>
                <ul id="left-side-profile-menu">
                    <li><a href="profile.php?username=Soaprman">Profile</a></li>
                    <li>
                        <a href="messages.php">Messages</a>
                                                                    </li>
                    
                    <li>
                                                    <span class="alert">2</span>
                                                <a href="yourturn.php">Your Turn</a>
                    </li>

                    <li>
                        <a href="yourgames.php">Your Games</a>
                                            </li>

                    <li><a href="design.php">Your Maps</a></li>

                    <li>
                                                <a href="following.php?username=Soaprman">Following</a>
                    </li>

                    <li>
                        <a href="friends.php?username=Soaprman">Friends</a>

                                            </li>
                    <li><a href="userinfo.php">Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

    <!-- <section id="main" style="overflow-x: scroll;"> -->
    <section id="main"><div id="gamecontainer" style="position: relative; width: 100%;">
<table cellpadding=0 cellspacing=0 id="game-header-table"><tr><td class=bordertitle height=18 width="100%"><span style="color: white; font-size: 16px;"><b><a class=bordertitle href="game.php?games_id=318043">Sonja's Meticulous Megane Machinations!</a> || Replay</b></span>
</td></tr>
<tr><td class=borderwhite align=center style="padding: 5px; width: 100%;">
<span class=small_text_14 style="display: block;" id="replay-header-text">
Started on 10/17/20 || Updated on 10/17/20 || Map: <a href="prevmaps.php?maps_id=31043">Dragons' Den (3v1)</a>
</span>
</td></tr>
</table>
<div id="map-controls-container">
<div id="replay-coords">(00,00)</div>
<div id="replay-day-controls">
<table cellspacing=0 cellpadding=0><tr>
<td>
<span class="small_text_14">Day:&nbsp;
<form name="navForm" id="navForm" action="replay.php" method="get" style="display:inline;">
<input type="hidden" name="games_id" value="318043">
<select name="ndx" id="selectndx" style="font-size:13px;" onchange="document.getElementById('navForm').submit();">
<option value="0" selected>1
<option value="1">1
<option value="2">1
<option value="3">1
<option value="4">2
</select>

</form>
</span>
</td>
<td class="limits"  height=24 width=25 style=" vertical-align: middle; text-align:center; padding-left: 3px;cursor: default;"><span class=small_text_14 style="font-size: 16px;">
<b class=n_follows style="padding-right: 3px; vertical-align:middle;"><<</b>
</span>
</td>
<td class="limits"  height=24 width=25 style=" vertical-align: middle; text-align:center; padding-left: 3px;cursor: default;"><span class=small_text_14 style="font-size: 16px;">
<b class=n_follows style="padding-right: 3px; vertical-align:middle;"><</b>
</span>
</td>
<td class="limits" title="Go to next turn" height=24 width=25 style=" vertical-align: middle; text-align:center; padding-left: 3px;cursor: pointer;"><a class=norm2 href="replay.php?games_id=318043&ndx=1" style="display:block;">
<span class=small_text_14 style="color: #009966; font-size: 16px;">
<b class=n_follows style="padding-right: 3px; vertical-align:middle;">></b>
</a></span>
</td>
<td class="limits" title="Go to last turn" height=24 width=25 style=" vertical-align: middle; text-align:center; padding-left: 3px;cursor: pointer;"><a class=norm2 href="replay.php?games_id=318043&ndx=4" style="display:block;">
<span class=small_text_14 style="color: #009966; font-size: 16px;">
<b class=n_follows style="padding-right: 3px; vertical-align:middle;">>></b>
</a></span>
</td>
</tr></table>
</div>
<div id="zoom-in" class="zoom-buttons" style="border-right:none;">
<img src="terrain/zoomin.gif">
</div>
<div id="zoom-out" class="zoom-buttons">
<img src="terrain/zoomout.gif">
</div>
<div id="replay-misc-controls">
<table cellspacing=0 cellpadding=0 height=100%><tr>
<td class=norm height=30 style="text-align:left; padding-left: 10px; padding-right: 10px;"><a class=norm2 href="javascript:popReplayScreenshot(318043, 0, 447, 447);" style="display:block; height: 100%;">
<span class=small_text_14 title="Take a screenshot of the current game state" style="display: block; padding-top: 6px;">
<img src="terrain/screenshot.gif" style="vertical-align: middle;">
<b style="vertical-align:middle;">Screenshot</b>
</span></a>
</td>
<td class=norm height=30 style="text-align:left; padding-left: 10px; padding-right: 10px;"><a class=norm2 href="moveplanner.php?replays_id=318043&ndx=0" style="display:block; height: 100%;">
<span class=small_text_14 title="Load the current game state into the move planner" style="display: block; padding-top: 6px;">
<img src="terrain/moveplanner.gif" style="vertical-align: middle;">
<b style="vertical-align:middle;">Planner</b>
</span></a>
</td>
</tr></table>
</div>
</div>
<div id="replay-container">
<div id="gamemap-container">
<div id="gamemap">
<canvas id="fog_canvas" style='z-index: 111'></canvas>
<canvas id="replay_canvas" style='z-index:112'></canvas>
<img id="map-background" style="border:1px solid black; top:0px; left:0px;" src="maps_test/aw2/C31043.png">
<input id=hidden0000 type=hidden value=1>
<input id=hidden0100 type=hidden value=1>
<input id=hidden0200 type=hidden value=1>
<input id=hidden0300 type=hidden value=1>
<input id=hidden0400 type=hidden value=1>
<input id=hidden0500 type=hidden value=1>
<input id=hidden0600 type=hidden value=1>
<input id=hidden0700 type=hidden value=1>
<input id=hidden0800 type=hidden value=1>
<input id=hidden0900 type=hidden value=1>
<input id=hidden1000 type=hidden value=1>
<input id=hidden1100 type=hidden value=1>
<input id=hidden1200 type=hidden value=1>
<input id=hidden1300 type=hidden value=1>
<input id=hidden1400 type=hidden value=1>
<input id=hidden1500 type=hidden value=1>
<input id=hidden1600 type=hidden value=1>
<input id=hidden1700 type=hidden value=1>
<input id=hidden1800 type=hidden value=1>
<input id=hidden1900 type=hidden value=1>
<input id=hidden2000 type=hidden value=1>
<input id=hidden2100 type=hidden value=1>
<input id=hidden2200 type=hidden value=1>
<input id=hidden2300 type=hidden value=1>
<input id=hidden2400 type=hidden value=1>
<input id=hidden2500 type=hidden value=1>
<input id=hidden2600 type=hidden value=1>
<input id=hidden0001 type=hidden value=1>
<input id=hidden0101 type=hidden value=1>
<input id=hidden0201 type=hidden value=1>
<input id=hidden0301 type=hidden value=1>
<input id=hidden0401 type=hidden value=1>
<input id=hidden0501 type=hidden value=1>
<input id=hidden0601 type=hidden value=1>
<input id=hidden0701 type=hidden value=1>
<input id=hidden0801 type=hidden value=1>
<input id=hidden0901 type=hidden value=1>
<input id=hidden1001 type=hidden value=1>
<input id=hidden1101 type=hidden value=1>
<input id=hidden1201 type=hidden value=1>
<input id=hidden1301 type=hidden value=1>
<input id=hidden1401 type=hidden value=1>
<input id=hidden1501 type=hidden value=1>
<input id=hidden1601 type=hidden value=1>
<input id=hidden1701 type=hidden value=1>
<input id=hidden1801 type=hidden value=1>
<input id=hidden1901 type=hidden value=1>
<input id=hidden2001 type=hidden value=1>
<input id=hidden2101 type=hidden value=1>
<input id=hidden2201 type=hidden value=1>
<input id=hidden2301 type=hidden value=1>
<input id=hidden2401 type=hidden value=1>
<input id=hidden2501 type=hidden value=1>
<input id=hidden2601 type=hidden value=1>
<input id=hidden0002 type=hidden value=1>
<input id=hidden0102 type=hidden value=1>
<input id=hidden0202 type=hidden value=1>
<input id=hidden0302 type=hidden value=1>
<input id=hidden0402 type=hidden value=1>
<input id=hidden0502 type=hidden value=1>
<input id=hidden0602 type=hidden value=1>
<input id=hidden0702 type=hidden value=1>
<input id=hidden0802 type=hidden value=1>
<input id=hidden0902 type=hidden value=1>
<input id=hidden1002 type=hidden value=1>
<input id=hidden1102 type=hidden value=1>
<input id=hidden1202 type=hidden value=1>
<input id=hidden1302 type=hidden value=1>
<input id=hidden1402 type=hidden value=1>
<input id=hidden1502 type=hidden value=1>
<input id=hidden1602 type=hidden value=1>
<input id=hidden1702 type=hidden value=1>
<input id=hidden1802 type=hidden value=1>
<input id=hidden1902 type=hidden value=1>
<input id=hidden2002 type=hidden value=1>
<input id=hidden2102 type=hidden value=1>
<input id=hidden2202 type=hidden value=1>
<input id=hidden2302 type=hidden value=1>
<input id=hidden2402 type=hidden value=1>
<input id=hidden2502 type=hidden value=1>
<input id=hidden2602 type=hidden value=1>
<input id=hidden0003 type=hidden value=1>
<input id=hidden0103 type=hidden value=1>
<input id=hidden0203 type=hidden value=1>
<input id=hidden0303 type=hidden value=1>
<input id=hidden0403 type=hidden value=1>
<input id=hidden0503 type=hidden value=1>
<input id=hidden0603 type=hidden value=1>
<input id=hidden0703 type=hidden value=1>
<input id=hidden0803 type=hidden value=1>
<input id=hidden0903 type=hidden value=1>
<input id=hidden1003 type=hidden value=1>
<input id=hidden1103 type=hidden value=1>
<input id=hidden1203 type=hidden value=1>
<input id=hidden1303 type=hidden value=1>
<input id=hidden1403 type=hidden value=1>
<input id=hidden1503 type=hidden value=1>
<input id=hidden1603 type=hidden value=1>
<input id=hidden1703 type=hidden value=1>
<input id=hidden1803 type=hidden value=1>
<input id=hidden1903 type=hidden value=1>
<input id=hidden2003 type=hidden value=1>
<input id=hidden2103 type=hidden value=1>
<input id=hidden2203 type=hidden value=1>
<input id=hidden2303 type=hidden value=1>
<input id=hidden2403 type=hidden value=1>
<input id=hidden2503 type=hidden value=1>
<input id=hidden2603 type=hidden value=1>
<input id=hidden0004 type=hidden value=1>
<input id=hidden0104 type=hidden value=1>
<input id=hidden0204 type=hidden value=1>
<input id=hidden0304 type=hidden value=1>
<input id=hidden0404 type=hidden value=1>
<input id=hidden0504 type=hidden value=1>
<input id=hidden0604 type=hidden value=1>
<input id=hidden0704 type=hidden value=1>
<input id=hidden0804 type=hidden value=1>
<input id=hidden0904 type=hidden value=1>
<input id=hidden1004 type=hidden value=1>
<input id=hidden1104 type=hidden value=1>
<input id=hidden1204 type=hidden value=1>
<input id=hidden1304 type=hidden value=1>
<input id=hidden1404 type=hidden value=1>
<input id=hidden1504 type=hidden value=1>
<input id=hidden1604 type=hidden value=1>
<input id=hidden1704 type=hidden value=1>
<input id=hidden1804 type=hidden value=1>
<input id=hidden1904 type=hidden value=1>
<input id=hidden2004 type=hidden value=1>
<input id=hidden2104 type=hidden value=1>
<input id=hidden2204 type=hidden value=1>
<input id=hidden2304 type=hidden value=1>
<input id=hidden2404 type=hidden value=1>
<input id=hidden2504 type=hidden value=1>
<input id=hidden2604 type=hidden value=1>
<input id=hidden0005 type=hidden value=1>
<input id=hidden0105 type=hidden value=1>
<input id=hidden0205 type=hidden value=1>
<input id=hidden0305 type=hidden value=1>
<input id=hidden0405 type=hidden value=1>
<input id=hidden0505 type=hidden value=1>
<input id=hidden0605 type=hidden value=1>
<input id=hidden0705 type=hidden value=1>
<input id=hidden0805 type=hidden value=1>
<input id=hidden0905 type=hidden value=1>
<input id=hidden1005 type=hidden value=1>
<input id=hidden1105 type=hidden value=1>
<input id=hidden1205 type=hidden value=1>
<input id=hidden1305 type=hidden value=1>
<input id=hidden1405 type=hidden value=1>
<input id=hidden1505 type=hidden value=1>
<input id=hidden1605 type=hidden value=1>
<input id=hidden1705 type=hidden value=1>
<input id=hidden1805 type=hidden value=1>
<input id=hidden1905 type=hidden value=1>
<input id=hidden2005 type=hidden value=1>
<input id=hidden2105 type=hidden value=1>
<input id=hidden2205 type=hidden value=1>
<input id=hidden2305 type=hidden value=1>
<input id=hidden2405 type=hidden value=1>
<input id=hidden2505 type=hidden value=1>
<input id=hidden2605 type=hidden value=1>
<input id=hidden0006 type=hidden value=1>
<input id=hidden0106 type=hidden value=1>
<input id=hidden0206 type=hidden value=1>
<input id=hidden0306 type=hidden value=1>
<input id=hidden0406 type=hidden value=1>
<input id=hidden0506 type=hidden value=1>
<input id=hidden0606 type=hidden value=1>
<input id=hidden0706 type=hidden value=1>
<input id=hidden0806 type=hidden value=1>
<input id=hidden0906 type=hidden value=1>
<input id=hidden1006 type=hidden value=1>
<input id=hidden1106 type=hidden value=1>
<input id=hidden1206 type=hidden value=1>
<input id=hidden1306 type=hidden value=1>
<input id=hidden1406 type=hidden value=1>
<input id=hidden1506 type=hidden value=1>
<input id=hidden1606 type=hidden value=1>
<input id=hidden1706 type=hidden value=1>
<input id=hidden1806 type=hidden value=1>
<input id=hidden1906 type=hidden value=1>
<input id=hidden2006 type=hidden value=1>
<input id=hidden2106 type=hidden value=1>
<input id=hidden2206 type=hidden value=1>
<input id=hidden2306 type=hidden value=1>
<input id=hidden2406 type=hidden value=1>
<input id=hidden2506 type=hidden value=1>
<input id=hidden2606 type=hidden value=1>
<input id=hidden0007 type=hidden value=1>
<input id=hidden0107 type=hidden value=1>
<input id=hidden0207 type=hidden value=1>
<input id=hidden0307 type=hidden value=1>
<input id=hidden0407 type=hidden value=1>
<input id=hidden0507 type=hidden value=1>
<input id=hidden0607 type=hidden value=1>
<input id=hidden0707 type=hidden value=1>
<input id=hidden0807 type=hidden value=1>
<input id=hidden0907 type=hidden value=1>
<input id=hidden1007 type=hidden value=1>
<input id=hidden1107 type=hidden value=1>
<input id=hidden1207 type=hidden value=1>
<input id=hidden1307 type=hidden value=1>
<input id=hidden1407 type=hidden value=1>
<input id=hidden1507 type=hidden value=1>
<input id=hidden1607 type=hidden value=1>
<input id=hidden1707 type=hidden value=1>
<input id=hidden1807 type=hidden value=1>
<input id=hidden1907 type=hidden value=1>
<input id=hidden2007 type=hidden value=1>
<input id=hidden2107 type=hidden value=1>
<input id=hidden2207 type=hidden value=1>
<input id=hidden2307 type=hidden value=1>
<input id=hidden2407 type=hidden value=1>
<input id=hidden2507 type=hidden value=1>
<input id=hidden2607 type=hidden value=1>
<input id=hidden0008 type=hidden value=1>
<input id=hidden0108 type=hidden value=1>
<input id=hidden0208 type=hidden value=1>
<input id=hidden0308 type=hidden value=1>
<input id=hidden0408 type=hidden value=1>
<input id=hidden0508 type=hidden value=1>
<input id=hidden0608 type=hidden value=1>
<input id=hidden0708 type=hidden value=1>
<input id=hidden0808 type=hidden value=1>
<input id=hidden0908 type=hidden value=1>
<input id=hidden1008 type=hidden value=1>
<input id=hidden1108 type=hidden value=1>
<input id=hidden1208 type=hidden value=1>
<input id=hidden1308 type=hidden value=1>
<input id=hidden1408 type=hidden value=1>
<input id=hidden1508 type=hidden value=1>
<input id=hidden1608 type=hidden value=1>
<input id=hidden1708 type=hidden value=1>
<input id=hidden1808 type=hidden value=1>
<input id=hidden1908 type=hidden value=1>
<input id=hidden2008 type=hidden value=1>
<input id=hidden2108 type=hidden value=1>
<input id=hidden2208 type=hidden value=1>
<input id=hidden2308 type=hidden value=1>
<input id=hidden2408 type=hidden value=1>
<input id=hidden2508 type=hidden value=1>
<input id=hidden2608 type=hidden value=1>
<input id=hidden0009 type=hidden value=1>
<input id=hidden0109 type=hidden value=1>
<input id=hidden0209 type=hidden value=1>
<input id=hidden0309 type=hidden value=1>
<input id=hidden0409 type=hidden value=1>
<input id=hidden0509 type=hidden value=1>
<input id=hidden0609 type=hidden value=1>
<input id=hidden0709 type=hidden value=1>
<input id=hidden0809 type=hidden value=1>
<input id=hidden0909 type=hidden value=1>
<input id=hidden1009 type=hidden value=1>
<input id=hidden1109 type=hidden value=1>
<input id=hidden1209 type=hidden value=1>
<input id=hidden1309 type=hidden value=1>
<input id=hidden1409 type=hidden value=1>
<input id=hidden1509 type=hidden value=1>
<input id=hidden1609 type=hidden value=1>
<input id=hidden1709 type=hidden value=1>
<input id=hidden1809 type=hidden value=1>
<input id=hidden1909 type=hidden value=1>
<input id=hidden2009 type=hidden value=1>
<input id=hidden2109 type=hidden value=1>
<input id=hidden2209 type=hidden value=1>
<input id=hidden2309 type=hidden value=1>
<input id=hidden2409 type=hidden value=1>
<input id=hidden2509 type=hidden value=1>
<input id=hidden2609 type=hidden value=1>
<input id=hidden0010 type=hidden value=1>
<input id=hidden0110 type=hidden value=1>
<input id=hidden0210 type=hidden value=1>
<input id=hidden0310 type=hidden value=1>
<input id=hidden0410 type=hidden value=1>
<input id=hidden0510 type=hidden value=1>
<input id=hidden0610 type=hidden value=1>
<input id=hidden0710 type=hidden value=1>
<input id=hidden0810 type=hidden value=1>
<input id=hidden0910 type=hidden value=1>
<input id=hidden1010 type=hidden value=1>
<input id=hidden1110 type=hidden value=1>
<input id=hidden1210 type=hidden value=1>
<input id=hidden1310 type=hidden value=1>
<input id=hidden1410 type=hidden value=1>
<input id=hidden1510 type=hidden value=1>
<input id=hidden1610 type=hidden value=1>
<input id=hidden1710 type=hidden value=1>
<input id=hidden1810 type=hidden value=1>
<input id=hidden1910 type=hidden value=1>
<input id=hidden2010 type=hidden value=1>
<input id=hidden2110 type=hidden value=1>
<input id=hidden2210 type=hidden value=1>
<input id=hidden2310 type=hidden value=1>
<input id=hidden2410 type=hidden value=1>
<input id=hidden2510 type=hidden value=1>
<input id=hidden2610 type=hidden value=1>
<input id=hidden0011 type=hidden value=1>
<input id=hidden0111 type=hidden value=1>
<input id=hidden0211 type=hidden value=1>
<input id=hidden0311 type=hidden value=1>
<input id=hidden0411 type=hidden value=1>
<input id=hidden0511 type=hidden value=1>
<input id=hidden0611 type=hidden value=1>
<input id=hidden0711 type=hidden value=1>
<input id=hidden0811 type=hidden value=1>
<input id=hidden0911 type=hidden value=1>
<input id=hidden1011 type=hidden value=1>
<input id=hidden1111 type=hidden value=1>
<input id=hidden1211 type=hidden value=1>
<input id=hidden1311 type=hidden value=1>
<input id=hidden1411 type=hidden value=1>
<input id=hidden1511 type=hidden value=1>
<input id=hidden1611 type=hidden value=1>
<input id=hidden1711 type=hidden value=1>
<input id=hidden1811 type=hidden value=1>
<input id=hidden1911 type=hidden value=1>
<input id=hidden2011 type=hidden value=1>
<input id=hidden2111 type=hidden value=1>
<input id=hidden2211 type=hidden value=1>
<input id=hidden2311 type=hidden value=1>
<input id=hidden2411 type=hidden value=1>
<input id=hidden2511 type=hidden value=1>
<input id=hidden2611 type=hidden value=1>
<input id=hidden0012 type=hidden value=1>
<input id=hidden0112 type=hidden value=1>
<input id=hidden0212 type=hidden value=1>
<input id=hidden0312 type=hidden value=1>
<input id=hidden0412 type=hidden value=1>
<input id=hidden0512 type=hidden value=1>
<input id=hidden0612 type=hidden value=1>
<input id=hidden0712 type=hidden value=1>
<input id=hidden0812 type=hidden value=1>
<input id=hidden0912 type=hidden value=1>
<input id=hidden1012 type=hidden value=1>
<input id=hidden1112 type=hidden value=1>
<input id=hidden1212 type=hidden value=1>
<input id=hidden1312 type=hidden value=1>
<input id=hidden1412 type=hidden value=1>
<input id=hidden1512 type=hidden value=1>
<input id=hidden1612 type=hidden value=1>
<input id=hidden1712 type=hidden value=1>
<input id=hidden1812 type=hidden value=1>
<input id=hidden1912 type=hidden value=1>
<input id=hidden2012 type=hidden value=1>
<input id=hidden2112 type=hidden value=1>
<input id=hidden2212 type=hidden value=1>
<input id=hidden2312 type=hidden value=1>
<input id=hidden2412 type=hidden value=1>
<input id=hidden2512 type=hidden value=1>
<input id=hidden2612 type=hidden value=1>
<input id=hidden0013 type=hidden value=1>
<input id=hidden0113 type=hidden value=1>
<input id=hidden0213 type=hidden value=1>
<input id=hidden0313 type=hidden value=1>
<input id=hidden0413 type=hidden value=1>
<input id=hidden0513 type=hidden value=1>
<input id=hidden0613 type=hidden value=1>
<input id=hidden0713 type=hidden value=1>
<input id=hidden0813 type=hidden value=1>
<input id=hidden0913 type=hidden value=1>
<input id=hidden1013 type=hidden value=1>
<input id=hidden1113 type=hidden value=1>
<input id=hidden1213 type=hidden value=1>
<input id=hidden1313 type=hidden value=1>
<input id=hidden1413 type=hidden value=1>
<input id=hidden1513 type=hidden value=1>
<input id=hidden1613 type=hidden value=1>
<input id=hidden1713 type=hidden value=1>
<input id=hidden1813 type=hidden value=1>
<input id=hidden1913 type=hidden value=1>
<input id=hidden2013 type=hidden value=1>
<input id=hidden2113 type=hidden value=1>
<input id=hidden2213 type=hidden value=1>
<input id=hidden2313 type=hidden value=1>
<input id=hidden2413 type=hidden value=1>
<input id=hidden2513 type=hidden value=1>
<input id=hidden2613 type=hidden value=1>
<input id=hidden0014 type=hidden value=1>
<input id=hidden0114 type=hidden value=1>
<input id=hidden0214 type=hidden value=1>
<input id=hidden0314 type=hidden value=1>
<input id=hidden0414 type=hidden value=1>
<input id=hidden0514 type=hidden value=1>
<input id=hidden0614 type=hidden value=1>
<input id=hidden0714 type=hidden value=1>
<input id=hidden0814 type=hidden value=1>
<input id=hidden0914 type=hidden value=1>
<input id=hidden1014 type=hidden value=1>
<input id=hidden1114 type=hidden value=1>
<input id=hidden1214 type=hidden value=1>
<input id=hidden1314 type=hidden value=1>
<input id=hidden1414 type=hidden value=1>
<input id=hidden1514 type=hidden value=1>
<input id=hidden1614 type=hidden value=1>
<input id=hidden1714 type=hidden value=1>
<input id=hidden1814 type=hidden value=1>
<input id=hidden1914 type=hidden value=1>
<input id=hidden2014 type=hidden value=1>
<input id=hidden2114 type=hidden value=1>
<input id=hidden2214 type=hidden value=1>
<input id=hidden2314 type=hidden value=1>
<input id=hidden2414 type=hidden value=1>
<input id=hidden2514 type=hidden value=1>
<input id=hidden2614 type=hidden value=1>
<input id=hidden0015 type=hidden value=1>
<input id=hidden0115 type=hidden value=1>
<input id=hidden0215 type=hidden value=1>
<input id=hidden0315 type=hidden value=1>
<input id=hidden0415 type=hidden value=1>
<input id=hidden0515 type=hidden value=1>
<input id=hidden0615 type=hidden value=1>
<input id=hidden0715 type=hidden value=1>
<input id=hidden0815 type=hidden value=1>
<input id=hidden0915 type=hidden value=1>
<input id=hidden1015 type=hidden value=1>
<input id=hidden1115 type=hidden value=1>
<input id=hidden1215 type=hidden value=1>
<input id=hidden1315 type=hidden value=1>
<input id=hidden1415 type=hidden value=1>
<input id=hidden1515 type=hidden value=1>
<input id=hidden1615 type=hidden value=1>
<input id=hidden1715 type=hidden value=1>
<input id=hidden1815 type=hidden value=1>
<input id=hidden1915 type=hidden value=1>
<input id=hidden2015 type=hidden value=1>
<input id=hidden2115 type=hidden value=1>
<input id=hidden2215 type=hidden value=1>
<input id=hidden2315 type=hidden value=1>
<input id=hidden2415 type=hidden value=1>
<input id=hidden2515 type=hidden value=1>
<input id=hidden2615 type=hidden value=1>
<input id=hidden0016 type=hidden value=1>
<input id=hidden0116 type=hidden value=1>
<input id=hidden0216 type=hidden value=1>
<input id=hidden0316 type=hidden value=1>
<input id=hidden0416 type=hidden value=1>
<input id=hidden0516 type=hidden value=1>
<input id=hidden0616 type=hidden value=1>
<input id=hidden0716 type=hidden value=1>
<input id=hidden0816 type=hidden value=1>
<input id=hidden0916 type=hidden value=1>
<input id=hidden1016 type=hidden value=1>
<input id=hidden1116 type=hidden value=1>
<input id=hidden1216 type=hidden value=1>
<input id=hidden1316 type=hidden value=1>
<input id=hidden1416 type=hidden value=1>
<input id=hidden1516 type=hidden value=1>
<input id=hidden1616 type=hidden value=1>
<input id=hidden1716 type=hidden value=1>
<input id=hidden1816 type=hidden value=1>
<input id=hidden1916 type=hidden value=1>
<input id=hidden2016 type=hidden value=1>
<input id=hidden2116 type=hidden value=1>
<input id=hidden2216 type=hidden value=1>
<input id=hidden2316 type=hidden value=1>
<input id=hidden2416 type=hidden value=1>
<input id=hidden2516 type=hidden value=1>
<input id=hidden2616 type=hidden value=1>
<input id=hidden0017 type=hidden value=1>
<input id=hidden0117 type=hidden value=1>
<input id=hidden0217 type=hidden value=1>
<input id=hidden0317 type=hidden value=1>
<input id=hidden0417 type=hidden value=1>
<input id=hidden0517 type=hidden value=1>
<input id=hidden0617 type=hidden value=1>
<input id=hidden0717 type=hidden value=1>
<input id=hidden0817 type=hidden value=1>
<input id=hidden0917 type=hidden value=1>
<input id=hidden1017 type=hidden value=1>
<input id=hidden1117 type=hidden value=1>
<input id=hidden1217 type=hidden value=1>
<input id=hidden1317 type=hidden value=1>
<input id=hidden1417 type=hidden value=1>
<input id=hidden1517 type=hidden value=1>
<input id=hidden1617 type=hidden value=1>
<input id=hidden1717 type=hidden value=1>
<input id=hidden1817 type=hidden value=1>
<input id=hidden1917 type=hidden value=1>
<input id=hidden2017 type=hidden value=1>
<input id=hidden2117 type=hidden value=1>
<input id=hidden2217 type=hidden value=1>
<input id=hidden2317 type=hidden value=1>
<input id=hidden2417 type=hidden value=1>
<input id=hidden2517 type=hidden value=1>
<input id=hidden2617 type=hidden value=1>
<input id=hidden0018 type=hidden value=1>
<input id=hidden0118 type=hidden value=1>
<input id=hidden0218 type=hidden value=1>
<input id=hidden0318 type=hidden value=1>
<input id=hidden0418 type=hidden value=1>
<input id=hidden0518 type=hidden value=1>
<input id=hidden0618 type=hidden value=1>
<input id=hidden0718 type=hidden value=1>
<input id=hidden0818 type=hidden value=1>
<input id=hidden0918 type=hidden value=1>
<input id=hidden1018 type=hidden value=1>
<input id=hidden1118 type=hidden value=1>
<input id=hidden1218 type=hidden value=1>
<input id=hidden1318 type=hidden value=1>
<input id=hidden1418 type=hidden value=1>
<input id=hidden1518 type=hidden value=1>
<input id=hidden1618 type=hidden value=1>
<input id=hidden1718 type=hidden value=1>
<input id=hidden1818 type=hidden value=1>
<input id=hidden1918 type=hidden value=1>
<input id=hidden2018 type=hidden value=1>
<input id=hidden2118 type=hidden value=1>
<input id=hidden2218 type=hidden value=1>
<input id=hidden2318 type=hidden value=1>
<input id=hidden2418 type=hidden value=1>
<input id=hidden2518 type=hidden value=1>
<input id=hidden2618 type=hidden value=1>
<input id=hidden0019 type=hidden value=1>
<input id=hidden0119 type=hidden value=1>
<input id=hidden0219 type=hidden value=1>
<input id=hidden0319 type=hidden value=1>
<input id=hidden0419 type=hidden value=1>
<input id=hidden0519 type=hidden value=1>
<input id=hidden0619 type=hidden value=1>
<input id=hidden0719 type=hidden value=1>
<input id=hidden0819 type=hidden value=1>
<input id=hidden0919 type=hidden value=1>
<input id=hidden1019 type=hidden value=1>
<input id=hidden1119 type=hidden value=1>
<input id=hidden1219 type=hidden value=1>
<input id=hidden1319 type=hidden value=1>
<input id=hidden1419 type=hidden value=1>
<input id=hidden1519 type=hidden value=1>
<input id=hidden1619 type=hidden value=1>
<input id=hidden1719 type=hidden value=1>
<input id=hidden1819 type=hidden value=1>
<input id=hidden1919 type=hidden value=1>
<input id=hidden2019 type=hidden value=1>
<input id=hidden2119 type=hidden value=1>
<input id=hidden2219 type=hidden value=1>
<input id=hidden2319 type=hidden value=1>
<input id=hidden2419 type=hidden value=1>
<input id=hidden2519 type=hidden value=1>
<input id=hidden2619 type=hidden value=1>
<input id=hidden0020 type=hidden value=1>
<input id=hidden0120 type=hidden value=1>
<input id=hidden0220 type=hidden value=1>
<input id=hidden0320 type=hidden value=1>
<input id=hidden0420 type=hidden value=1>
<input id=hidden0520 type=hidden value=1>
<input id=hidden0620 type=hidden value=1>
<input id=hidden0720 type=hidden value=1>
<input id=hidden0820 type=hidden value=1>
<input id=hidden0920 type=hidden value=1>
<input id=hidden1020 type=hidden value=1>
<input id=hidden1120 type=hidden value=1>
<input id=hidden1220 type=hidden value=1>
<input id=hidden1320 type=hidden value=1>
<input id=hidden1420 type=hidden value=1>
<input id=hidden1520 type=hidden value=1>
<input id=hidden1620 type=hidden value=1>
<input id=hidden1720 type=hidden value=1>
<input id=hidden1820 type=hidden value=1>
<input id=hidden1920 type=hidden value=1>
<input id=hidden2020 type=hidden value=1>
<input id=hidden2120 type=hidden value=1>
<input id=hidden2220 type=hidden value=1>
<input id=hidden2320 type=hidden value=1>
<input id=hidden2420 type=hidden value=1>
<input id=hidden2520 type=hidden value=1>
<input id=hidden2620 type=hidden value=1>
<input id=hidden0021 type=hidden value=1>
<input id=hidden0121 type=hidden value=1>
<input id=hidden0221 type=hidden value=2>
<input id=hidden0321 type=hidden value=1>
<input id=hidden0421 type=hidden value=1>
<input id=hidden0521 type=hidden value=1>
<input id=hidden0621 type=hidden value=1>
<input id=hidden0721 type=hidden value=1>
<input id=hidden0821 type=hidden value=1>
<input id=hidden0921 type=hidden value=1>
<input id=hidden1021 type=hidden value=1>
<input id=hidden1121 type=hidden value=1>
<input id=hidden1221 type=hidden value=1>
<input id=hidden1321 type=hidden value=2>
<input id=hidden1421 type=hidden value=1>
<input id=hidden1521 type=hidden value=1>
<input id=hidden1621 type=hidden value=1>
<input id=hidden1721 type=hidden value=1>
<input id=hidden1821 type=hidden value=1>
<input id=hidden1921 type=hidden value=1>
<input id=hidden2021 type=hidden value=1>
<input id=hidden2121 type=hidden value=1>
<input id=hidden2221 type=hidden value=1>
<input id=hidden2321 type=hidden value=1>
<input id=hidden2421 type=hidden value=1>
<input id=hidden2521 type=hidden value=1>
<input id=hidden2621 type=hidden value=1>
<input id=hidden0022 type=hidden value=1>
<input id=hidden0122 type=hidden value=2>
<input id=hidden0222 type=hidden value=1>
<input id=hidden0322 type=hidden value=2>
<input id=hidden0422 type=hidden value=1>
<input id=hidden0522 type=hidden value=1>
<input id=hidden0622 type=hidden value=1>
<input id=hidden0722 type=hidden value=1>
<input id=hidden0822 type=hidden value=1>
<input id=hidden0922 type=hidden value=1>
<input id=hidden1022 type=hidden value=1>
<input id=hidden1122 type=hidden value=1>
<input id=hidden1222 type=hidden value=1>
<input id=hidden1322 type=hidden value=2>
<input id=hidden1422 type=hidden value=1>
<input id=hidden1522 type=hidden value=1>
<input id=hidden1622 type=hidden value=1>
<input id=hidden1722 type=hidden value=1>
<input id=hidden1822 type=hidden value=1>
<input id=hidden1922 type=hidden value=1>
<input id=hidden2022 type=hidden value=1>
<input id=hidden2122 type=hidden value=1>
<input id=hidden2222 type=hidden value=1>
<input id=hidden2322 type=hidden value=1>
<input id=hidden2422 type=hidden value=1>
<input id=hidden2522 type=hidden value=1>
<input id=hidden2622 type=hidden value=1>
<input id=hidden0023 type=hidden value=2>
<input id=hidden0123 type=hidden value=2>
<input id=hidden0223 type=hidden value=2>
<input id=hidden0323 type=hidden value=2>
<input id=hidden0423 type=hidden value=2>
<input id=hidden0523 type=hidden value=1>
<input id=hidden0623 type=hidden value=1>
<input id=hidden0723 type=hidden value=1>
<input id=hidden0823 type=hidden value=1>
<input id=hidden0923 type=hidden value=1>
<input id=hidden1023 type=hidden value=1>
<input id=hidden1123 type=hidden value=2>
<input id=hidden1223 type=hidden value=2>
<input id=hidden1323 type=hidden value=2>
<input id=hidden1423 type=hidden value=2>
<input id=hidden1523 type=hidden value=2>
<input id=hidden1623 type=hidden value=1>
<input id=hidden1723 type=hidden value=1>
<input id=hidden1823 type=hidden value=1>
<input id=hidden1923 type=hidden value=1>
<input id=hidden2023 type=hidden value=1>
<input id=hidden2123 type=hidden value=1>
<input id=hidden2223 type=hidden value=1>
<input id=hidden2323 type=hidden value=2>
<input id=hidden2423 type=hidden value=2>
<input id=hidden2523 type=hidden value=2>
<input id=hidden2623 type=hidden value=1>
<input id=hidden0024 type=hidden value=2>
<input id=hidden0124 type=hidden value=2>
<input id=hidden0224 type=hidden value=2>
<input id=hidden0324 type=hidden value=2>
<input id=hidden0424 type=hidden value=2>
<input id=hidden0524 type=hidden value=2>
<input id=hidden0624 type=hidden value=1>
<input id=hidden0724 type=hidden value=1>
<input id=hidden0824 type=hidden value=1>
<input id=hidden0924 type=hidden value=1>
<input id=hidden1024 type=hidden value=1>
<input id=hidden1124 type=hidden value=1>
<input id=hidden1224 type=hidden value=2>
<input id=hidden1324 type=hidden value=2>
<input id=hidden1424 type=hidden value=2>
<input id=hidden1524 type=hidden value=1>
<input id=hidden1624 type=hidden value=1>
<input id=hidden1724 type=hidden value=1>
<input id=hidden1824 type=hidden value=1>
<input id=hidden1924 type=hidden value=1>
<input id=hidden2024 type=hidden value=1>
<input id=hidden2124 type=hidden value=1>
<input id=hidden2224 type=hidden value=2>
<input id=hidden2324 type=hidden value=2>
<input id=hidden2424 type=hidden value=2>
<input id=hidden2524 type=hidden value=2>
<input id=hidden2624 type=hidden value=2>
<input id=hidden0025 type=hidden value=1>
<input id=hidden0125 type=hidden value=2>
<input id=hidden0225 type=hidden value=2>
<input id=hidden0325 type=hidden value=2>
<input id=hidden0425 type=hidden value=2>
<input id=hidden0525 type=hidden value=1>
<input id=hidden0625 type=hidden value=1>
<input id=hidden0725 type=hidden value=1>
<input id=hidden0825 type=hidden value=1>
<input id=hidden0925 type=hidden value=1>
<input id=hidden1025 type=hidden value=1>
<input id=hidden1125 type=hidden value=1>
<input id=hidden1225 type=hidden value=1>
<input id=hidden1325 type=hidden value=2>
<input id=hidden1425 type=hidden value=1>
<input id=hidden1525 type=hidden value=1>
<input id=hidden1625 type=hidden value=1>
<input id=hidden1725 type=hidden value=1>
<input id=hidden1825 type=hidden value=1>
<input id=hidden1925 type=hidden value=1>
<input id=hidden2025 type=hidden value=1>
<input id=hidden2125 type=hidden value=1>
<input id=hidden2225 type=hidden value=1>
<input id=hidden2325 type=hidden value=2>
<input id=hidden2425 type=hidden value=2>
<input id=hidden2525 type=hidden value=2>
<input id=hidden2625 type=hidden value=1>
<input id=hidden0026 type=hidden value=1>
<input id=hidden0126 type=hidden value=1>
<input id=hidden0226 type=hidden value=2>
<input id=hidden0326 type=hidden value=2>
<input id=hidden0426 type=hidden value=1>
<input id=hidden0526 type=hidden value=1>
<input id=hidden0626 type=hidden value=1>
<input id=hidden0726 type=hidden value=1>
<input id=hidden0826 type=hidden value=1>
<input id=hidden0926 type=hidden value=1>
<input id=hidden1026 type=hidden value=1>
<input id=hidden1126 type=hidden value=1>
<input id=hidden1226 type=hidden value=1>
<input id=hidden1326 type=hidden value=1>
<input id=hidden1426 type=hidden value=1>
<input id=hidden1526 type=hidden value=1>
<input id=hidden1626 type=hidden value=1>
<input id=hidden1726 type=hidden value=1>
<input id=hidden1826 type=hidden value=1>
<input id=hidden1926 type=hidden value=1>
<input id=hidden2026 type=hidden value=1>
<input id=hidden2126 type=hidden value=1>
<input id=hidden2226 type=hidden value=1>
<input id=hidden2326 type=hidden value=1>
<input id=hidden2426 type=hidden value=2>
<input id=hidden2526 type=hidden value=1>
<input id=hidden2626 type=hidden value=1>
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 1px; top: 43px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 1px; top: 363px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 1px; top: 411px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 17px; top: 11px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 17px; top: 59px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 17px; top: 203px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 17px; top: 363px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/yellowcometcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 17px; top: 386px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/yellowcomethq.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 33px; top: 107px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 33px; top: 411px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 49px; top: 27px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 49px; top: 75px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 49px; top: 203px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 49px; top: 315px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 49px; top: 360px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/yellowcometbase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 49px; top: 392px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/yellowcometbase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 65px; top: 267px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 65px; top: 379px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/yellowcometcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 81px; top: -5px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 81px; top: 203px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 81px; top: 383px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralairport.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 81px; top: 411px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 97px; top: 91px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 97px; top: 139px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 129px; top: 123px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 129px; top: 171px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 145px; top: 24px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcomtower.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 161px; top: 56px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralbase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 177px; top: 27px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 177px; top: 43px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 177px; top: 360px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/blackholebase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 193px; top: 15px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralairport.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 193px; top: 59px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 193px; top: 91px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 193px; top: 139px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 193px; top: 203px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 193px; top: 379px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 193px; top: 411px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 209px; top: 34px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/greyskyhq.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 209px; top: 104px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralbase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 209px; top: 347px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/blackholecity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 209px; top: 363px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/blackholecity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 209px; top: 385px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/blackholehq.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 209px; top: 415px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralairport.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 225px; top: 15px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralairport.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 225px; top: 59px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 225px; top: 91px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 225px; top: 139px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 225px; top: 203px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 225px; top: 379px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 225px; top: 411px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 241px; top: 27px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 241px; top: 43px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 241px; top: 360px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/blackholebase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 257px; top: 56px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralbase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 273px; top: 24px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcomtower.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 289px; top: 123px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 289px; top: 171px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 321px; top: 91px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 321px; top: 139px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 337px; top: -5px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 337px; top: 203px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 337px; top: 383px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralairport.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 337px; top: 411px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 353px; top: 267px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 353px; top: 379px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/tealgalaxycity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 369px; top: 27px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 369px; top: 75px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 369px; top: 203px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 369px; top: 315px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 369px; top: 360px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/tealgalaxybase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 369px; top: 392px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/tealgalaxybase.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 385px; top: 107px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 385px; top: 411px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 401px; top: 11px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 401px; top: 59px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 401px; top: 203px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 401px; top: 363px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/tealgalaxycity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 401px; top: 385px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/tealgalaxyhq.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 417px; top: 43px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 417px; top: 363px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-building s' style="position: absolute; left: 417px; top: 411px!important; z-index:105" src="https://awbw.amarriner.com/terrain/aw2/neutralcity.gif">
<img id="replay_map_element" class='game-unit' style="position: absolute; left: 33px; top: 385px!important; z-index:110" src="https://awbw.amarriner.com/terrain/aw2/ycinfantry.gif">
<img id="replay_map_element" class='game-unit' style="position: absolute; left: 209px; top: 369px!important; z-index:110" src="https://awbw.amarriner.com/terrain/aw2/bhinfantry.gif">
<img id="replay_map_element" class='game-unit' style="position: absolute; left: 385px; top: 385px!important; z-index:110" src="https://awbw.amarriner.com/terrain/aw2/tginfantry.gif">
</div>
</div>
<table style="margin-left: 10px; position: relative; width: 500px; display: block;" cellspacing="0" cellpadding="0">
<tr><td style="vertical-align:middle; margin-bottom: 15px; text-align:center; height: 20px;" class="bordertitle" colspan="3">
<div class="reverse-info-box" style="margin-left: 2px; float: left;">?
<span class="info-box-text">
Mouse over a row of the log to view the actions for that unit on the map.<br>Click the row to lock/unlock the display for the selected row.
</span>
</div>
<b><img style="vertical-align:top;" src="https://awbw.amarriner.com/terrain/aw2/yclogo.gif"> Yellow Comet Day 1 Log <img style="vertical-align:top;" src="https://awbw.amarriner.com/terrain/aw2/yclogo.gif"></b>
</td></tr>
<tr><td>
<table id="replay-game-log" style="width: 100%; display: block;" cellspacing="0" cellpadding="0">
<tr><td class="smallheader" style="height: 20px; width: 375px;"><b>Action</b></td>
<td class="smallheader" style="align: right; width: 125px; height: 22px;"><b>Date</b></td></tr>
<tr><td colspan=2><table id="logs" width="100%" style="overflow: scroll; display: block;" cellspacing="0" cellpadding="0">
<tr style="background-color: white;">
<td id="replay-log-row" style="height: 20px; width: 375px;">Yellow Comet moved a(n) Infantry from (2,24) to (2,21)</td>
<td id="replay-log-row" style="width: 125px; border-left:none;">10/17/2020 08:08am</td>
</tr>
<tr style="background-color: white;">
<td id="replay-log-row" style="height: 20px; width: 375px;">Yellow Comet built a(n) Infantry (3,23)</td>
<td id="replay-log-row" style="width: 125px; border-left:none;">10/17/2020 08:08am</td>
</tr>
<tr style="background-color: white;">
<td id="replay-log-row" style="height: 20px; width: 375px;">Yellow Comet built a(n) Infantry (3,25)</td>
<td id="replay-log-row" style="width: 125px; border-left:none;">10/17/2020 08:08am</td>
</tr>
<tr style="background-color: white;">
<td id="replay-log-row" style="height: 20px; width: 375px;">Yellow Comet's turn was ended</td>
<td id="replay-log-row" style="width: 125px; border-left:none;">10/17/2020 08:08am</td>
</tr>
</table>
</td></tr></table>
</td></tr></table>
</div>
<div id="replay-player-info" style="width: 600px; position: relative; margin-top: 10px;">
<table width=100% style="display: block;"><tr><td style="vertical-align:top;"><table width=600 cellspacing="1" cellpadding="2">
<tr><td class="bordertitle"><b>Players</b></td></tr>
<tr><td class="borderwhite">
<table cellspacing="0" cellpadding="2" width=100%>
<tr>
<td class=smallheader width=30 align=center><b>&nbsp</b></td>
<td colspan=2 class=smallheader align=center><b>Player</b></td>
<td class=smallheader width=60 align=center><b>Team</b></td>
<td class=smallheader width=60 align=center><b>Timer</b></td>
<td class=smallheader width=60 align=center><b>Income</b></td>
<td class=smallheader width=60 align=center><b>Funds</b></td>
<td class=smallheader width=60 align=center><b>Units(#)</b></td>
<td class=smallheader width=60 align=center><b>Units($)</b></td>
</tr>
<tr>
<td class="borderblue" style="text-align: center;" valign=middle>
<img style="vertical-align: middle;" src="terrain/yourturn_arrow.gif" alt="" title="Your Turn"><td class="borderblue" style="border-right: 0px; border-left: 1px solid #AAAAAA;" width=50 align=center valign=middle style="border-right: none;">
<img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/dssonja.png" border=1 alt="">
</td>
<td class="borderblue" style="border-left: none; text-align:left; position: relative" valign=middle> <img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/yclogo.gif" alt="">
<a class=norm href="profile.php?username=Soaprman"><b>Soaprman</b></a><br><img src="power_bar2.php?pct=0&amp;pid=870396" align=middle alt="">
</td>
<td class="borderblue" align=center valign=middle><img src="https://awbw.amarriner.com/terrain/aw2/a.gif" alt="">&nbsp;</td>
<td class="borderblue" align=center valign=middle><b>08:00:00</b>
</td>
<td class="borderblue" align=center valign=middle><b>5000</b></td>
<td class="borderblue" align=center valign=middle><b>5000</b>
</td>
<td class="borderblue" align=center valign=middle><b>1</b></td><td class="borderblue" align=center valign=middle><b>1000</b></td></tr>
<tr>
<td  class="small" style="text-align: center;" valign=middle>
<td  class="small" style="border-right: 0px; border-left: 1px solid #AAAAAA;" width=50 align=center valign=middle style="border-right: none;">
<img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/dsnell.png" border=1 alt="">
</td>
<td  class="small" style="border-left: none; text-align:left; position: relative" valign=middle> <img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/tglogo.gif" alt="">
<a class=norm href="profile.php?username=Yuck! Fishbones">Yuck! Fishbones</a><br><img src="power_bar2.php?pct=0&amp;pid=870430" align=middle alt="">
</td>
<td  class="small" align=center valign=middle><img src="https://awbw.amarriner.com/terrain/aw2/a.gif" alt="">&nbsp;</td>
<td  class="small" align=center valign=middle>07:00:00
</td>
<td  class="small" align=center valign=middle>5000</td>
<td  class="small" align=center valign=middle>0
</td>
<td  class="small" align=center valign=middle>1</td><td  class="small" align=center valign=middle>1000</td></tr>
<tr>
<td  class="small" style="text-align: center;" valign=middle>
<td  class="small" style="border-right: 0px; border-left: 1px solid #AAAAAA;" width=50 align=center valign=middle style="border-right: none;">
<img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/dssturm.png" border=1 alt="">
</td>
<td  class="small" style="border-left: none; text-align:left; position: relative" valign=middle> <img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/bhlogo.gif" alt="">
<a class=norm href="profile.php?username=KennyMan666">KennyMan666</a><br><img src="power_bar2.php?pct=0&amp;pid=870389" align=middle alt="">
</td>
<td  class="small" align=center valign=middle><img src="https://awbw.amarriner.com/terrain/aw2/a.gif" alt="">&nbsp;</td>
<td  class="small" align=center valign=middle>07:00:00
</td>
<td  class="small" align=center valign=middle>5000</td>
<td  class="small" align=center valign=middle>0
</td>
<td  class="small" align=center valign=middle>1</td><td  class="small" align=center valign=middle>1000</td></tr>
<tr>
<td  class="small" style="text-align: center;" valign=middle>
<td  class="small" style="border-right: 0px; border-left: 1px solid #AAAAAA;" width=50 align=center valign=middle style="border-right: none;">
<img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/dssonja.png" border=1 alt="">
</td>
<td  class="small" style="border-left: none; text-align:left; position: relative" valign=middle> <img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/gslogo.gif" alt="">
<a class=norm href="profile.php?username=SpaceRaton">SpaceRaton</a>&nbsp;&nbsp;<img style="vertical-align: middle;" src="https://awbw.amarriner.com/terrain/aw2/capture.gif" alt=""><br><img src="power_bar2.php?pct=0&amp;pid=870385" align=middle alt="">
</td>
<td  class="small" align=center valign=middle><img src="https://awbw.amarriner.com/terrain/aw2/b.gif" alt="">&nbsp;</td>
<td  class="small" align=center valign=middle>07:00:00
</td>
<td  class="small" align=center valign=middle>???</td>
<td  class="small" align=center valign=middle>???
</td>
<td  class="small" align=center valign=middle>???</td><td  class="small" align=center valign=middle>???</td></tr>
</table>
</td></tr></table>
</td>
<td style="vertical-align:top; white-space:nowrap;"></td></tr></table>
</div>

<script type="text/javascript">

    const canvas = document.getElementById("replay_canvas"),
    ctx = canvas.getContext("2d"),
    fcanvas = document.getElementById("fog_canvas"),
    fctx = fog_canvas.getContext("2d"),
    coordsDisplay = document.getElementById("replay-coords"),
    map = document.getElementById("map-background"),
    logs = [].slice.call(document.querySelectorAll("#logs tr")),
    //regex for coordinates in a log's string like (1,2) or (1, 2) (on the website the latter one exists
    //when there are two pairs of coordinates. They could be replaced like the first one for consistency)
    coordsRegex = /\d+,\d+|\d+, \d+/g,
    typeRegex = /capt|attacked|built|move|destroyed|loaded|dropped|join/,
    targetIcon = new Image(), selectIcon = new Image(), moveIcon = new Image(), captIcon = new Image(), 
    buildIcon = new Image(), deleteIcon = new Image(), loadIcon = new Image(), unloadIcon = new Image();

    targetIcon.src = "terrain/target_icon2.gif";
    selectIcon.src = "terrain/unit_select.gif";
    moveIcon.src = "terrain/wait.gif";
    captIcon.src = "terrain/capt_icon.gif";
    buildIcon.src = "terrain/build.gif";
    deleteIcon.src = "terrain/delete.gif"
    loadIcon.src = "terrain/makeprivate.gif";
    unloadIcon.src = "terrain/unload.gif";

    var w, h, pX, pY,
    //Checks when you click on a line
    locked = false,
    viewed = false,
    lockedLog;

    const gamemapContainer = document.getElementById("gamemap-container");
    const replayContainer = document.getElementById("replay-container");
    const zoomInButton = document.getElementById("zoom-in");
    const zoomOutButton = document.getElementById("zoom-out");
    const logTable = document.getElementById("logs"),
    dimURL = window.location.href.match(/id=\d+/)[0],
    dimID = dimURL.match(/\d+/)[0];
    
    var scale = localStorage.scale ? parseFloat(localStorage.scale) : 1;
    
  if(sessionStorage[dimID + "Width"]) {
    applyCSS(gamemapContainer, {
      height: (parseInt(sessionStorage[dimID + "Height"]) * scale) + "px",
      width: (parseInt(sessionStorage[dimID + "Width"]) * scale) + "px"
    });
    applyCSS(gamemap, {
      transform: "scale(" + scale + ")",
      webkitTransform: "scale(" + scale + ")"
    });
  } else {
    map.onload = function() {
      applyCSS(gamemapContainer, {
        height: (map.height * scale) + "px",
        width: (map.width * scale) + "px"
      })
      sessionStorage.setItem(dimIDWidth, map.width);
      sessionStorage.setItem(dimIDHeight, map.height);
    }
  }

    //Array of units in a "move" log with their start/finish position
    const unitsPos = [];

    function imgLoaded(imgElement) {
      return imgElement.complete && imgElement.naturalHeight !== 0;
    }

    //add tiles for fog to the map
    function addFog() {
      for(var j = 0; j < map.height / 16; j++) {
          for (var i = 0; i < map.width / 16; i++) {
            var ii = i; var jj = j;
            if (ii < 10) { ii = "0" + ii; }
            if (jj < 10) { jj = "0" + jj; }

            var fog_tile = document.getElementById("hidden" + ii + jj);
            if (fog_tile.value == 2) { clearTile(ii, jj); }
          }
      }
    }

    function clearTile(ii, jj) {
      var x = ii * 16; var y = jj * 16;
      fctx.clearRect(x+1, y+1, 16, 16);
    }

    if (imgLoaded(map)) {

      // console.log("Img load event");
      w = map.width, h = map.height;
      canvas.width = w, canvas.height = h;

      fcanvas.width = w+2, fcanvas.height = h+2;
fctx.fillStyle = "rgba(0, 0, 0, 0.4)";
fctx.fillRect(0, 0, w+2, h+2);
addFog();

      canvas.addEventListener("mousemove", function(e) {
          var x = Math.floor(e.offsetX / 16),
            y = Math.floor(e.offsetY / 16);
          
          if (x < 10) { x = "0" + x; }
          if (y < 10) { y = "0" + y; }
          var coords = "(" + x + "," + y + ")";
          coordsDisplay.textContent = coords;

          if(x !== pX || y !== pY) {
            displayFromHover(x, y)
            pX = x;
            pY = y;
          }
      });
    }

    else {
      map.addEventListener("load", function() {

          w = map.width, h = map.height;
          canvas.width = w, canvas.height = h;

          fcanvas.width = w+2, fcanvas.height = h+2;
fctx.fillStyle = "rgba(0, 0, 0, 0.4)";
fctx.fillRect(0, 0, w+2, h+2);
addFog();
      
          canvas.addEventListener("mousemove", function(e) {
            var x = Math.floor(e.offsetX / 16),
                y = Math.floor(e.offsetY / 16);
            
            if (x < 10) { x = "0" + x; }
            if (y < 10) { y = "0" + y; }
            var coords = "(" + x + "," + y + ")";
            coordsDisplay.textContent = coords;

            if(x !== pX || y !== pY) {
                displayFromHover(x, y)
                pX = x;
                pY = y;
            }
          });
      });
    }

    window.onload = function () {
      applyCSS(gamemapContainer, {
          height: (map.height * scale) + "px",
          width: (map.width * scale) + "px"
      }) 
      var initialScale = scaleAdd(0);
      
      applyCSS(gamemapContainer, {
          visibility: 'visible'
      })

      if (autoScroll)
    {
          var pageXId = "pageX" + gameId, pageYId = "pageY" + gameId;
          if(sessionStorage.getItem(pageXId) || sessionStorage.getItem(pageYId)) {
            var x = sessionStorage.getItem(pageXId),
                y = sessionStorage.getItem(pageYId);
            
            window.setTimeout(function() {
                window.scrollTo(x, y);
            }, 0)
          }
          document.addEventListener("scroll", storePos);
    }
    };

    var new_width, scaled_height;

    function scaleAdd(n) {
      
      if (scale < 0.5 && n < 0) { return; } //do not allow to get too small
      else if (scale > 2.9 && n > 0) { return; } //do not allow to get too big

      else {
          scale += n; //increase scale

          // new_width = map.width * scale;
          new_width = parseInt(map.width) * scale;

          //make scrollable if too big
          if (new_width > 1190) {
            scaled_height = 1190 * (map.height / map.width);

            applyCSS(gamemapContainer, {
                height: scaled_height + "px",
                width: "1190px"
            });

            gamemapContainer.style.overflowY = 'visible';
            gamemapContainer.style.overflowX = 'scroll';

            gamemap.style.transform = "scale(" + scale + ")";
            gamemap.style.webkitTransform = "scale(" + scale + ")";

          }

          //otherwise scale
          else {
            // console.log("Every other change now");
            applyCSS(gamemapContainer, {
                height: (map.height * scale) + "px",
                width: (map.width * scale) + "px",
                overflow: "visible"
            });
            
            gamemap.style.transform = "scale(" + scale + ")";
            gamemap.style.webkitTransform = "scale(" + scale + ")";

          }

          localStorage.setItem("scale", scale);
          if(parseInt(gamemapContainer.style.width) > 690) {
            applyCSS(replayContainer, {
                alignItems: "center",
                display: "flex",
                flexDirection: "column"
            })
          } else {
            applyCSS(replayContainer, {
                alignItems: "start",
                flexDirection: "row"
            })
          }

          //adjust log table height
          var logHeight = logTable.offsetHeight * scale; //full height of log

          logHeight = Math.round(Math.min((map.height*scale) - 50, logHeight),0); //truncate
          if (logHeight < 200) { logHeight = 200; } //apply min. height

          if (logHeight <= 200 && n > 0) { 
            logHeight = Math.round(Math.max(map.height*scale) - 50, logHeight);
            if (logHeight < 200) { logHeight = 200; } //apply min. height
          }

          applyCSS(logTable, {
            height: logHeight + "px"
          })
      } 
    }
    zoomInButton.addEventListener("click", function () { scaleAdd(0.1) });
    zoomOutButton.addEventListener("click", function () { scaleAdd(-0.1) });

    function getOffset(el) {
      const rect = el.getBoundingClientRect();
      return {
          // left: rect.left + window.scrollX,
          // top: rect.top + window.scrollY
          left: rect.left + window.pageXOffset,
          top: rect.top + window.pageYOffset
      };
    }

    function displayFromHover(x, y) {
      const sX = x * 16,
          sY = y * 16;
      ctx.clearRect(0, 0, w, h);
      ctx.drawImage(selectIcon, (x * 16) - 5, (y * 16) - 5);
      if (locked == true) {
          locked = false;
          lockedLog.classList.remove("locked");
      }
    }

    function getCoords(string, id) {
      var coords, type;
      if(string.match(coordsRegex)) coords = string.match(coordsRegex);
      if(string.match(typeRegex)) type = string.match(typeRegex)[0];
      if(coords) {
          var a = {
            x: coords[0].match(/^\d+/)[0],
            y: coords[0].match(/\d+$/)[0]
          }   
      }
      if(coords && coords[1]) {
          var b = {
            x: coords[1].match(/^\d+/)[0],
            y: coords[1].match(/\d+$/)[0]
          }
          displayFromLogs(a, b, type, id);
      }
      else if(coords) {
          displayFromLogs(a, null, type, id);
      }
    }

    function displayFromLogs(a, b, type, id) {
      ctx.clearRect(0, 0, w, h);
      //Type === "attacked", "loaded" and "destroyed" have have their own condition
      //First two of those blocks don't need to have the "viewed" variable in them
      if(type === "attacked") {
          ctx.drawImage(targetIcon, (a.x * 16) - 4, (a.y * 16) - 5);
          unitsPos.forEach(function(unit) {
            if(b && unit.b.x === b.x && unit.b.y === b.y && unit.id == id) {
                b = unit.a;
                makeSquare(unit.b, "rgba(0, 108, 255, 0.4)")
                ctx.drawImage(moveIcon, (unit.b.x * 16) + 3, (unit.b.y * 16) + 2);
            }
          })
          makeSquare(b, "rgba(0, 108, 255, 0.4)");
          ctx.drawImage(selectIcon, (b.x * 16) - 5, (b.y * 16) - 5);
      }
      else if(type === "move") {
          makeSquare(a, "rgba(0, 108, 255, 0.4)");
          makeSquare(b, "rgba(0, 108, 255, 0.4)");
          ctx.drawImage(selectIcon, (a.x * 16) - 5, (a.y * 16) - 5);
          ctx.drawImage(moveIcon, (b.x * 16) + 3, (b.y * 16) + 2);
      }
      else if(type === "capt") {
          unitsPos.forEach(function(unit) {
            unitPosCheck(a, b, unit, "rgba(0, 108, 255, 0.4)", selectIcon);
          })
          makeSquare(a, "rgba(0, 108, 255, 0.4)")
          ctx.drawImage(captIcon, (a.x * 16) + 2, (a.y * 16) + 2);
          viewed = false;
      }
      else if(type === "built") {
          ctx.drawImage(buildIcon, (a.x * 16) + 1, (a.y * 16));
      }
      else if(type === "destroyed") {
          unitsPos.forEach(function(unit) {
            if(unit.b.x === a.x && unit.b.y === a.y && unit.id == id) {
            makeSquare(unit.a, "rgba(199, 0, 0, 0.5)");
            viewed = true;
            }
          });
          if(!viewed) makeSquare(a, "rgba(199, 0, 0, 0.5)");
          viewed = false;
      }
      else if(type === "loaded") {
          unitsPos.forEach(function(unit) {
            if(unit.b.x === a.x && unit.b.y === a.y && unit.id == id) {
                makeSquare(unit.a, "rgba(0, 108, 255, 0.4)")
                ctx.drawImage(selectIcon, (unit.a.x * 16) - 5, (unit.a.y * 16) - 5);
            }
          });
          makeSquare(a, "rgba(0, 108, 255, 0.4)");
          ctx.drawImage(loadIcon, (a.x * 16) + 3, (a.y * 16) + 1);
      }
      else if(type === "dropped") {
          unitsPos.forEach(function(unit) {
            unitPosCheck(a, b, unit, "rgba(0, 108, 255, 0.4)", selectIcon);
          });
          makeSquare(a, "rgba(0, 108, 255, 0.4)");
          makeSquare(b, "rgba(0, 108, 255, 0.4)");
          ctx.drawImage(moveIcon, (a.x * 16) + 3, (a.y * 16) + 2);
          ctx.drawImage(unloadIcon, (b.x * 16) + 3, (b.y * 16) + 1);
          viewed = false;
      }
      else if(type === "join") {
          unitsPos.forEach(function(unit) {
            unitPosCheck(a, b, unit, "rgba(0, 253, 0, 0.4)", selectIcon);
            viewed = false;
          });
          makeSquare(a, "rgba(0, 108, 255, 0.4)");
          ctx.drawImage(moveIcon, (a.x * 16) + 3, (a.y * 16) + 2);
      }
    }

    function makeSquare(pos, color) {
      ctx.beginPath();
      ctx.rect(pos.x * 16, pos.y * 16, 16, 16);
      ctx.fillStyle = color;
      ctx.fill();
    }

    function applyCSS(el, styles) {
    for(prop in styles) {
      el.style[prop] = styles[prop];
    }
  }

    //This function and the "viewed" variable are for type === "join", type === "dropped" and type === "capt"
    function unitPosCheck(a, b, unit, color, icon) {
      if(unit.b.x === a.x && unit.b.y === a.y && !viewed) {
          makeSquare(unit.a, color)
          if(icon) ctx.drawImage(icon, (unit.a.x * 16) - 5, (unit.a.y * 16) - 5);
          viewed = true;
      }
    }

    function lockLog(log) {
      if(!locked) {
          log.classList.add("locked");
          locked = true;
          lockedLog = log;
      }
      else if(locked) {
          lockedLog.classList.remove("locked");
          locked = false;
      }
    }

    function addHoverEvent() {
      for(var i = 0; i < logs.length; i++) {
          const log = logs[i].children[0],
            string = log.innerHTML;
          log.classList.add("logs");
          log.addEventListener("mouseover", function(e) {
            if(!locked) {
                //Select the right class name and pass it to the function
                const id = e.target.classList[1];
                getCoords(string, id);
            }
          })
          log.addEventListener("click", function() {
            lockLog(log);
          })

          //Add every unit's start & finish position in a "move" log
          var id;
          if(string.match(/move/)) {
            id = i;
            const coords = string.match(coordsRegex);
            const unit = {
                a: {
                  x: coords[0].match(/^\d+/)[0],
                  y: coords[0].match(/\d+$/)[0]
                },
                b: {
                  x: coords[1].match(/^\d+/)[0],
                  y: coords[1].match(/\d+$/)[0]
                },
                id: id
            }
            unitsPos.push(unit);
            log.classList.add(id.toString());
          }
          //add the same id to subsequent log until a new "move" log
          else {
            if(id) log.classList.add(id.toString());
            //Starts at 0 if "id" if variable is still undefined
            else log.classList.add("0");
          }
      }
    }
    addHoverEvent();

    //script to add keyboard option for moving forward and back
    window.addEventListener("keydown", function(key) {
      if(key.key === "ArrowRight") {
          change_index(1);
      }
      if(key.key === "ArrowLeft") {
          change_index(-1);
      }
    });
 
    function change_index(direction) {
      const url = window.location.href;
      const new_url = url.replace(/ndx=\d+/, function(match) {
          const new_index = match.replace(/\d+/, function(index) {
            const num = parseInt(index);
            if(num + direction < 0) {
                return num;
            }
            else return num + direction;
          });
          return new_index;
      });
      window.location.assign(new_url);
    }

    const gameURL = window.location.href,
    gameId = 318043,
    autoScroll = 1;

  //store the last position
  function storePos() {
    const pageY = $(document).scrollTop();
      const pageX = $(document).scrollLeft();
      
      var pageXId = "pageX" + gameId, pageYId = "pageY" + gameId;
    sessionStorage.setItem(pageYId, pageY);
    sessionStorage.setItem(pageXId, pageX);
  }

</script>

<span><br><br><br></span>
<span><br><br><br></span>
<span class=small_text_11>
Advance Wars is (c) 1990-2001 <a href="http://www.nintendo.com">Nintendo</a> and (c) 2001 <a href="http://www.intsys.co.jp/">Intelligent Systems</a>. All images are copyright their respective owners.<br><br>
<!-- End Page (1602948552) (0) (11:29:12) -->
</span>
</section>
</div>
      <script>
            const fixedHeader = document.getElementById("fixed-header-wrapper");
            let smallHeader = false;
            if(window.pageYOffset !== 0) {
                  fixedHeader.classList.add("header-small")
            }
            document.body.onscroll = function() {
                  if(window.pageYOffset !== 0 && smallHeader === false) {
                        console.log("?");
                        smallHeader = true;
                        fixedHeader.classList.add("header-small");
                  } else if(window.pageYOffset === 0) {
                        smallHeader = false;
                        fixedHeader.classList.remove("header-small");
                  }
            }
            

      </script>
<script src="js/jquery-3.3.1.min.js"></script>
</body>
</html>
