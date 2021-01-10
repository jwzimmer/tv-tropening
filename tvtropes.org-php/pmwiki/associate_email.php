<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>TV Tropes</title>
<meta name="description" content="TV Tropes, the all-devouring pop-culture wiki, catalogs and cross-references recurrent plot devices, archetypes, and tropes in all forms of media." />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="TV Tropes" />
<meta name="twitter:description" content="TV Tropes, the all-devouring pop-culture wiki, catalogs and cross-references recurrent plot devices, archetypes, and tropes in all forms of media." />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="TV Tropes" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://tvtropes.org/" />
<meta property="og:image" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:description" content="TV Tropes, the all-devouring pop-culture wiki, catalogs and cross-references recurrent plot devices, archetypes, and tropes in all forms of media." />
<link rel="apple-touch-icon" sizes="57x57" href="/img/icons/apple-icon-57x57.png" type="image/png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/icons/apple-icon-60x60.png" type="image/png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-icon-72x72.png" type="image/png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/icons/apple-icon-76x76.png" type="image/png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-icon-114x114.png" type="image/png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-icon-120x120.png" type="image/png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/icons/apple-icon-144x144.png" type="image/png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-icon-152x152.png" type="image/png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-icon-180x180.png" type="image/png">
<link rel="icon" sizes="16x16" href="/img/icons/favicon-16x16.png" type="image/png">
<link rel="icon" sizes="32x32" href="/img/icons/favicon-32x32.png" type="image/png">
<link rel="icon" sizes="96x96" href="/img/icons/favicon-96x96.png" type="image/png">
<link rel="icon" sizes="192x192" href="/img/icons/favicon-192x192.png" type="image/png">
<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
<script>
                var propertag = {};
                propertag.cmd = [];
								var propervideotag = [];
            </script>
<link rel="stylesheet" href="/design/assets/bundle.css?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7" />
<script>
                function object(objectId) {
                    if (document.getElementById && document.getElementById(objectId)) {
                        return document.getElementById(objectId);
                    } else if (document.all && document.all(objectId)) {
                        return document.all(objectId);
                    } else if (document.layers && document.layers[objectId]) {
                        return document.layers[objectId];
                    } else {
                        return false;
                    }
                }

                // JAVASCRIPT COOKIES CODE: for getting and setting user viewing preferences
                var cookies = {
                    create: function (name, value, days2expire, path) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days2expire * 24 * 60 * 60 * 1000));
                        var expires = date.toUTCString();
                        document.cookie = name + '=' + value + ';' + 'expires=' + expires + ';' + 'path=' + path + ';';
                    },
										createWithExpire: function(name, value, expires, path) {
												document.cookie = name + '=' + value + ';' + 'expires=' + expires + ';' + 'path=' + path + ';';
										},
                    read: function (name) {
                        var cookie_value = "",
                            current_cookie = "",
                            name_expr = name + "=",
                            all_cookies = document.cookie.split(';'),
                            n = all_cookies.length;

                        for (var i = 0; i < n; i++) {
                            current_cookie = all_cookies[i].trim();
                            if (current_cookie.indexOf(name_expr) === 0) {
                                cookie_value = current_cookie.substring(name_expr.length, current_cookie.length);
                                break;
                            }
                        }
                        return cookie_value;
                    },
                    update: function (name, val) {
                        this.create(name, val, 300, "/");
                    },
                    remove: function (name) {
                        document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
                    }
                };

                function updateUserPrefs() {
                    //GENERAL: detect and set browser, if not cookied (will be treated like a user-preference and added to the #user-pref element)
                    if( !cookies.read('user-browser') ){
                        var broswer = '';

                        if(navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) ){
                            browser = 'iOS';
                        } else if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'opera';
                        } else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
                            browser = 'MSIE';
                        } else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'netscape';
                        } else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'chrome';
                        } else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'safari';
                            /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
                            browserVersion = new Number(RegExp.$1);
                        } else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'firefox';
                        } else {
                            browser = 'internet_explorer';
                        }
                        cookies.create('user-browser',browser,1,'/');
                        document.getElementById('user-prefs').classList.add('browser-' + browser);
                    } else {
                        document.getElementById('user-prefs').classList.add('browser-' + cookies.read('user-browser'));
                    }

                    //update user preference settings
                    if (cookies.read('wide-load') !== '') document.getElementById('user-prefs').classList.add('wide-load');
                    if (cookies.read('night-vision') !== '') document.getElementById('user-prefs').classList.add('night-vision');
                    if (cookies.read('sticky-header') !== '') document.getElementById('user-prefs').classList.add('sticky-header');
                    if (cookies.read('show-spoilers') !== '') document.getElementById('user-prefs').classList.add('show-spoilers');
                    if (cookies.read('folders-open') !== '') document.getElementById('user-prefs').classList.add('folders-open');
                    if (cookies.read('lefthand-sidebar') !== '') document.getElementById('user-prefs').classList.add('lefthand-sidebar');
                    if (cookies.read('highlight-links') !== '') document.getElementById('user-prefs').classList.add('highlight-links');
                    if (cookies.read('forum-gingerbread') !== '') document.getElementById('user-prefs').classList.add('forum-gingerbread');
                    if (cookies.read('shared-avatars') !== '') document.getElementById('user-prefs').classList.add('shared-avatars');
                    if (cookies.read('new-search') !== '') document.getElementById('user-prefs').classList.add('new-search');
                    if (cookies.read('stop-auto-play-video') !== '') document.getElementById('user-prefs').classList.add('stop-auto-play-video');

                    //desktop view on mobile
                    if (cookies.read('desktop-on-mobile') !== ''){
                        document.getElementById('user-prefs').classList.add('desktop-on-mobile');

                        var viewport = document.querySelector("meta[name=viewport]");
                        viewport.setAttribute('content', 'width=1000');
                    }

                }

                function updateDesktopPrefs() {
                    if (cookies.read('wide-load') !== '') document.getElementById('sidebar-toggle-wideload').classList.add('active');
                    if (cookies.read('night-vision') !== '') document.getElementById('sidebar-toggle-nightvision').classList.add('active');
                    if (cookies.read('sticky-header') !== '') document.getElementById('sidebar-toggle-stickyheader').classList.add('active');
                    if (cookies.read('show-spoilers') !== '') document.getElementById('sidebar-toggle-showspoilers').classList.add('active');

                }

                function updateMobilePrefs() {
                    if (cookies.read('show-spoilers') !== '') document.getElementById('mobile-toggle-showspoilers').classList.add('active');
                    if (cookies.read('night-vision') !== '') document.getElementById('mobile-toggle-nightvision').classList.add('active');
                    if (cookies.read('sticky-header') !== '') document.getElementById('mobile-toggle-stickyheader').classList.add('active');
                    if (cookies.read('highlight-links') !== '') document.getElementById('mobile-toggle-highlightlinks').classList.add('active');

                }


                if (document.cookie.indexOf("scroll0=") < 0) {
                    // do nothing
                } else {
                    console.log('ads removed by scroll.com');
                    var adsRemovedWith = 'scroll';
                    var style = document.createElement('style');
                    style.innerHTML = '#header-ad, .proper-ad-unit, .square_ad, .sb-ad-unit { display: none !important; } ';
                    document.head.appendChild(style);
                }
            </script>
<script type="text/javascript">

                var tvtropes_config = {
                    astri_stream_enabled : "",
                    is_logged_in         : "",
                    handle               : "",
                    get_astri_stream     : "",
										revnum               : "61acae6dced8ebb8defa29cde07b1ab8e1d61ca7",
										img_domain           : "https://static.tvtropes.org",
										adblock              : "1",
										adblock_url          : "propermessage.io",
										proper_video_url     : "https://player.propervideo.io/new_rtp/main.js",
										proper_video_host_url: "https://player.propervideo.io",
										pause_editing        : "0",
										pause_editing_msg    : "",
										pause_site_changes   : ""
                };
            </script>
<script type="text/javascript">
						  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
						  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

						  ga('create', 'UA-3821842-1', 'auto');
						  ga('send', 'pageview');

						</script>
</head>
<body class="">
<i id="user-prefs"></i>
<script>updateUserPrefs();</script>
<div id="fb-root"></div>
<div id="modal-box"></div>
<header id="main-header-bar" class="headroom-element HomePage">
<div id="main-header-bar-inner">
<span id="header-spacer-left" class="header-spacer"></span>
<a href="#mobile-menu" id="main-mobile-toggle" class="mobile-menu-toggle-button tablet-on"><span></span><span></span><span></span></a>
<a href="/" id="main-header-logoButton" class="no-dev"></a>
<span id="header-spacer-right" class="header-spacer"></span>
<nav id="main-header-nav" class="tablet-off">
<a href="/pmwiki/pmwiki.php/Main/Tropes">Tropes</a>
<a href="/pmwiki/pmwiki.php/Main/Media">Media</a>
<a href="/pmwiki/browse.php" class="nav-browse">Browse</a>
<a href="/pmwiki/index_report.php">Indexes</a>
<a href="/pmwiki/topics.php">Forums</a>
<a href="/pmwiki/recent_videos.php" class="nav-browse">Videos</a>
</nav>
<div id="main-header-bar-right">
<div id="signup-login-box" class="font-xs mobile-off">
<a href="/pmwiki/login.php" class="hover-underline bold" data-modal-target="signup">Join</a>
<a href="/pmwiki/login.php" class="hover-underline bold" data-modal-target="login">Login</a>
</div>
<div id="signup-login-mobileToggle" class="mobile-on inline">
<a href="/pmwiki/login.php" data-modal-target="login"><i class="fa fa-user"></i></a>
</div>
<div id="search-box">
<form class="search" action="/pmwiki/search_result.php">
<input type="text" name="q" class="search-box" placeholder="Search" value="" required>
<input type="submit" class="submit-button" value="&#xf002;" />
<input type="hidden" name="search_type" value="article">
<input type="hidden" name="page_type" value="all">
<input type="hidden" name="cx" value="partner-pub-6610802604051523:amzitfn8e7v">
<input type="hidden" name="cof" value="FORID:10">
<input type="hidden" name="ie" value="ISO-8859-1">
<input name="siteurl" type="hidden" value="">
<input name="ref" type="hidden" value="">
<input name="ss" type="hidden" value="">
</form>
<a href="#close-search" class="mobile-on mobile-search-toggle close-x"><i class="fa fa-close"></i></a>
</div>
<div id="random-box">
<a href="/pmwiki/pmwiki.php/Main/ILoveNuclearPower" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/Series/V2009" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
</div>
</div>
</div>
<div id="mobile-menu" class="tablet-on"><div class="mobile-menu-options">
<div class="nav-wrapper">
<a href="/pmwiki/pmwiki.php/Main/Tropes" class="xl">Tropes</a>
<a href="/pmwiki/pmwiki.php/Main/Media" class="xl">Media</a>
<a href="/pmwiki/browse.php" class="xl">Browse</a>
<a href="/pmwiki/index_report.php" class="xl">Indexes</a>
<a href="/pmwiki/topics.php" class="xl">Forums</a>
<a href="/pmwiki/recent_videos.php" class="xl">Videos</a>
<a href="/pmwiki/query.php?type=att">Ask The Tropers</a>
<a href="/pmwiki/query.php?type=tf">Trope Finder</a>
<a href="/pmwiki/query.php?type=ykts">You Know That Show...</a>
<a href="/pmwiki/tlp_activity.php">Trope Launch Pad</a>
<a href="#tools" data-click-toggle="active">Tools <i class="fa fa-chevron-down"></i></a>
<div class="tools-dropdown mobile-dropdown-linkList">
<a href="/pmwiki/cutlist.php">Cut List</a>
<a href="/pmwiki/changes.php">New Edits</a>
<a href="/pmwiki/recent_edit_reasons.php">Edit Reasons</a>
<a href="/pmwiki/launches.php">Launches</a>
<a href="/pmwiki/img_list.php">Images List</a>
<a href="/pmwiki/crown_activity.php">Crowner Activity</a>
<a href="/pmwiki/no_types.php">Un-typed Pages</a>
<a href="/pmwiki/page_type_audit.php">Recent Page Type Changes</a>
</div>
<a href="#hq" data-click-toggle="active">Tropes HQ <i class="fa fa-chevron-down"></i></a>
<div class="tools-dropdown mobile-dropdown-linkList">
<a href="/pmwiki/about.php">About Us</a>
<a href="/pmwiki/contact.php">Contact Us</a>
<a href="mailto:advertising@proper.io">Advertise</a>
<a href="/pmwiki/dmca.php">DMCA Notice</a>
<a href="/pmwiki/privacypolicy.php">Privacy Policy</a>
</div>
<a href="/pmwiki/ad-free-subscribe.php">Go Ad-Free</a>
<div class="toggle-switches">
<ul class="mobile-menu display-toggles">
<li>Show Spoilers <div id="mobile-toggle-showspoilers" class="display-toggle show-spoilers"></div></li>
<li>Night Vision <div id="mobile-toggle-nightvision" class="display-toggle night-vision"></div></li>
<li>Sticky Header <div id="mobile-toggle-stickyheader" class="display-toggle sticky-header"></div></li>
<li>Highlight Links <div id="mobile-toggle-highlightlinks" class="display-toggle highlight-links"></div></li>
</ul>
<script>updateMobilePrefs();</script>
</div>
</div>
</div>
</div>
</header>
<div id="homepage-introBox-mobile" class="mobile-on">
<img src="/images/logo-white-big.png" class="logo-big" />
<h1 class="tagline">THE ALL DEVOURING<br class="tiny-on" /><span class="tiny-off"> </span>POP-CULTURE WIKI</h1>
<form class="search" action="/pmwiki/search_result.php" style="margin:10px -5px -6px -5px;">
<input type="text" name="q" class="search-box" placeholder="Search" value="" required>
<input type="submit" class="submit-button" value="&#xf002;" />
<input type="hidden" name="search_type" value="article">
<input type="hidden" name="page_type" value="all">
<input type="hidden" name="cx" value="partner-pub-6610802604051523:amzitfn8e7v">
<input type="hidden" name="cof" value="FORID:10">
<input type="hidden" name="ie" value="ISO-8859-1">
<input name="siteurl" type="hidden" value="">
<input name="ref" type="hidden" value="">
<input name="ss" type="hidden" value="">
</form>
<ul class="homepage-mobile-actions">
<li><a href="/pmwiki/pmwiki.php/SugarWiki/SweetExists">
<i class="io icon-sugar"></i> SugarWiki</a></li><li><a href="/pmwiki/pmwiki.php/DarthWiki/ThisExists">
<i class="io icon-darth"></i> DarthWiki</a></li><li><a href="/pmwiki/pmwiki.php/YMMV/HomePage">
<i class="io icon-icon-gaspump"></i> YMMV</a></li><li><a href="/pmwiki/pmwiki.php/Main/WildMassGuessing">
<i class="io icon-icon-bigfoot"></i> WMG</a></li><li><a href="/pmwiki/pmwiki.php/Main/Trivia">
<i class="io icon-icon-triviaB"></i> Trivia</a></li> </ul>
</div>
<div id="header-ad-wrapper" class="ad">
<div id="header-ad">
<div class="ad-size-970x90 atf_banner">
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_ad_1'> <script>propertag.cmd.push(function() { proper_display('tvtropes_ad_1'); });</script> </div>
</div> </div>
</div>
</div>
<div id="main-container">
<div id="homepage-introBox" class="mobile-off">
<img src="/images/logo-white-big.png" class="logo-big" />
<p class="welcome-message">Welcome to TV Tropes</p>
<h1 class="tagline">THE ALL DEVOURING POP-CULTURE WIKI</h1>
</div>
<div id="action-bar-top" class="action-bar mobile-off">
<div class="action-bar-right">
<p>Follow TV Tropes</p>
<a href="https://www.facebook.com/TVTropes" class="button-fb">
<i class="fa fa-facebook"></i></a>
<a href="https://www.twitter.com/TVTropes" class="button-tw">
<i class="fa fa-twitter"></i></a>
<a href="https://www.reddit.com/r/TVTropes" class="button-re">
<i class="fa fa-reddit-alien"></i></a>
</div>
<nav class="actions-wrapper" itemscope itemtype="http://schema.org/SiteNavigationElement">
<ul id="top_main_list" class="page-actions">
<li><a href="/pmwiki/pmwiki.php/SugarWiki/SweetExists">
<i class="io icon-sugar"></i> SugarWiki</a></li><li><a href="/pmwiki/pmwiki.php/DarthWiki/ThisExists">
<i class="io icon-darth"></i> DarthWiki</a></li><li><a href="/pmwiki/pmwiki.php/YMMV/HomePage">
<i class="io icon-icon-gaspump"></i> YMMV</a></li><li><a href="/pmwiki/pmwiki.php/Main/WildMassGuessing">
<i class="io icon-icon-bigfoot"></i> WMG</a></li><li><a href="/pmwiki/pmwiki.php/Main/Trivia">
<i class="io icon-icon-triviaB"></i> Trivia</a></li> </ul>
<ul id="top_more_list" class="more_menu hidden_more_list">
<li><a href="/pmwiki/pmwiki.php/Main/Trivia">
<i class="io icon-icon-triviaB more_list_item"></i> Trivia</a></li> </ul>
</nav>
<div class="WikiWordModalStub"></div>
<div class="ImgUploadModalStub" data-page-type="HomePage"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-HomePage ">
<div id="main-entry" class="with-sidebar">
<div id="main-article" class="article-content">

<input type="hidden" id="groupname-hidden" value="Main" />
<input type="hidden" id="title-hidden" value="HomePage" />
<input type="hidden" id="article_id" value="" />
<div id="featured-tropes" class="two-column with-line">
<div class="column-box left featured-trope">
<span class="box-title">Today's Featured Trope</span>
<h2 class="entry-title">
<a href="/pmwiki/pmwiki.php/Main/ItsAllAboutMe">It's All About Me</a>
</h2>
<div class="featured-trope-image">
<img src="https://static.tvtropes.org/pmwiki/pub/images/kuzco_me.jpg" width="350" height="519">
</div>
<div class="body"><p>
<a class="twikilink" href="/pmwiki/pmwiki.php/WesternAnimation/TheEmperorsNewGroove" title="/pmwiki/pmwiki.php/WesternAnimation/TheEmperorsNewGroove"></a>
</p><p></p><p>Ah, the Ego.
</p><p>The part of the psyche that defines you as an individual, and considers itself (read: you) a separate entity from the rest of nature and even the entire cosmos, the ego encourages people to value themselves as well as their personal wants and needs instead of just being an <a class="twikilink" href="/pmwiki/pmwiki.php/Main/ExtremeDoormat" title="/pmwiki/pmwiki.php/Main/ExtremeDoormat">Extreme Doormat</a>. While necessary in moderation, allowing one's ego to become overinflated leads to self-centered and downright embarrassing behavior. Such an excess of self-importance can be called egotism.
</div>
<a href="/pmwiki/pmwiki.php/Main/ItsAllAboutMe" class="more-link">More <i class="fa fa-angle-double-right"></i></a>
</div>
<div class="proper-ad-unit mobile-ad square_ad">
<h6 class="ad-caption">Advertisement:</h6>
<div id="proper-ad-tvtropes_mobile_ad_1">
<script>propertag.cmd.push(function() { proper_display('tvtropes_mobile_ad_1'); });</script>
</div>
</div>
<div class="column-box right featured-trope">
<span class="box-title">Newest Trope</span>
<h2 class="entry-title">
<a href="/pmwiki/pmwiki.php/Main/KidsHateChores">Kids Hate Chores</a>
</h2>
<div class="body"><p>
<p>We get it, children HATE doing chores, especially when they involve yardwork of some kind. This is so prevalent (and accepted / catered to) nowadays that most modern fictional portrayals of chores either involve servants, take place on a farm or ranch of some kind, or use them as a way to paint the parents or guardians of the child character(s) in question in an unfavorable light at best so as to not risk alienating their audience. Sometimes, allowance is brought up as a way to justify the chores in question. </div>
<a href="/pmwiki/pmwiki.php/Main/KidsHateChores" class="more-link">More <i class="fa fa-angle-double-right"></i></a>
</div>
<script type="text/javascript">
        var wrapper = document.querySelector('.featured-trope');
        var ps      = wrapper.querySelectorAll('p');
        for (var p = 0; p < ps.length; p++) { if (ps[p].innerText === '') {ps[p].remove();}}
        </script>
</div>
<div class="font-m bold">
Latest Trope Edits
<a href="/pmwiki/changes.php" class="float-right">Recent Edits <i class="fa fa-angle-double-right"></i></a>
</div>
<table class="font-s mobile-font-m mobile-flexbox no-border-lines">
<thead class="hidden">
<tr>
<th data-mobile-width="100" data-mobile-order="1">1</th>
<th data-mobile-width="100" data-mobile-order="2" data-align="right" data-mobile-align="left">2</th>
</tr>
</thead>
<tbody>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/pmwiki.php/Creator/DioraBaird">Creator: DioraBaird</a>
<span class="font-xs text-light">Revision [35]</span></td>
<td><span class="font-s mobile-font-xs text-light bold">7 seconds ago</span></td>
</tr>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/pmwiki.php/Recap/SpongeBobSquarePantsS13E1APlaceForPetsLockdownForLove">Recap: SpongeBobSquarePantsS13E1APlaceForPetsLockdownForLove</a>
<span class="font-xs text-light">Revision [18]</span></td>
<td><span class="font-s mobile-font-xs text-light bold">12 seconds ago</span></td>
</tr>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/pmwiki.php/Main/BuffoonishTomcat">Main: BuffoonishTomcat</a>
<span class="font-xs text-light">Revision [214]</span></td>
<td><span class="font-s mobile-font-xs text-light bold">12 seconds ago</span></td>
</tr>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/pmwiki.php/YMMV/CobraKai">YMMV: CobraKai</a>
<span class="font-xs text-light">Revision [418]</span></td>
<td><span class="font-s mobile-font-xs text-light bold">20 seconds ago</span></td>
</tr>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/pmwiki.php/Trivia/SouthParkTheFracturedButWhole">Trivia: SouthParkTheFracturedButWhole</a>
<span class="font-xs text-light">Revision [26]</span></td>
<td><span class="font-s mobile-font-xs text-light bold">31 seconds ago</span></td>
</tr>
</tbody>
</table>
<div class="proper-ad-unit mobile-ad square_ad">
<h6 class="ad-caption">Advertisement:</h6>
<div id="proper-ad-tvtropes_mobile_ad_2">
<script>propertag.cmd.push(function() { proper_display('tvtropes_mobile_ad_2'); });</script>
</div>
</div>
<div class="gutter-topx2 font-m bold">
Latest Forums Activity
<a href="pmwiki/topics.php" class="float-right">Forums <i class="fa fa-angle-double-right"></i></a>
</div>
<table class="font-s mobile-font-m mobile-flexbox no-border-lines">
<thead class="hidden">
<tr>
<th data-mobile-width="100" data-mobile-order="1">1</th>
<th data-mobile-width="100" data-mobile-order="2" data-align="right" data-mobile-align="left">2</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<a class="mobile-font-s" href="/pmwiki/conversations.php?topic=85yve01xv34d73ppv15ghva4">
On-Topic Conversations <i class="fa fa-angle-right"></i></a>
<a class="font-m mobile-font-s" href="/pmwiki/posts.php?discussion=13103447000A18674100&page=13856">
The General US Politics Thread </a>
</td>
<td>
<span class="font-s mobile-font-xs text-light bold">1 second ago</span>
 </td>
</tr>
<tr>
<td>
<a class="mobile-font-s" href="/pmwiki/conversations.php?topic=images">
Image Pickin' <i class="fa fa-angle-right"></i></a>
<a class="font-m mobile-font-s" href="/pmwiki/posts.php?discussion=1609895647014857500&page=1">
Changed w/o discussion </a>
</td>
<td>
<span class="font-s mobile-font-xs text-light bold">1 minute ago</span>
</td>
</tr>
<tr>
<td>
<a class="mobile-font-s" href="/pmwiki/conversations.php?topic=0000000000000000000001ci">
New Media <i class="fa fa-angle-right"></i></a>
<a class="font-m mobile-font-s" href="/pmwiki/posts.php?discussion=15678932010A58429700&page=8">
Legal Eagle </a>
</td>
<td>
<span class="font-s mobile-font-xs text-light bold">1 minute ago</span>
</td>
</tr>
<tr>
<td>
<a class="mobile-font-s" href="/pmwiki/conversations.php?topic=fgames">
Forum Games <i class="fa fa-angle-right"></i></a>
<a class="font-m mobile-font-s" href="/pmwiki/posts.php?discussion=13955282570A87068500&page=6981">
Trope Pantheons Discussion </a>
</td>
<td>
<span class="font-s mobile-font-xs text-light bold">1 minute ago</span>
</td>
</tr>
<tr>
<td>
<a class="mobile-font-s" href="/pmwiki/conversations.php?topic=fgames">
Forum Games <i class="fa fa-angle-right"></i></a>
<a class="font-m mobile-font-s" href="/pmwiki/posts.php?discussion=15977474130A24729100&page=6">
That's an awful Hindsight shoehorn! </a>
</td>
<td>
<span class="font-s mobile-font-xs text-light bold">2 minutes ago</span>
</td>
</tr>
</tbody>
</table>
<div class="gutter-topx2 font-m bold">
Launch Pad Activity
<a href="pmwiki/tlp_activity.php" class="float-right">Launch Pad <i class="fa fa-angle-double-right"></i></a>
</div>
<table class="font-s mobile-font-m mobile-flexbox no-border-lines">
<thead class="hidden">
<tr>
<th data-mobile-width="100" data-mobile-order="1">1</th>
<th data-mobile-width="100" data-mobile-order="2" data-align="right" data-mobile-align="left">2</th>
</tr>
</thead>
<tbody>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/discussion.php?id=mpbezlt3ltm45fohehty7qqk">Forged "Insect in Food" Complaint</a> <span class="font-xs text-light"> Created 1 day ago</span></td>
<td><span class="font-s mobile-font-xs text-light bold">13 minutes ago</span></td>
</tr>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/discussion.php?id=bslamxz1jc5i2o32yme9e76g">Romance With The Fan</a> <span class="font-xs text-light"> Created 20 hours ago</span></td>
<td><span class="font-s mobile-font-xs text-light bold">22 minutes ago</span></td>
</tr>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/discussion.php?id=mv74kmtin6f4j2de4e1ghlnq">Buddha Earlobes (Needs Examples)</a> <span class="font-xs text-light"> Created 1 week ago</span></td>
<td><span class="font-s mobile-font-xs text-light bold">41 minutes ago</span></td>
</tr>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/discussion.php?id=6u5akmb9w0fgx5u4lv6bfp10">Guest Protagonist</a> <span class="font-xs text-light"> Created 3 weeks ago</span></td>
<td><span class="font-s mobile-font-xs text-light bold">45 minutes ago</span></td>
</tr>
<tr>
<td><a class="mobile-font-s" href="/pmwiki/discussion.php?id=i5dconqeqbwpswpnfruz2qim">Red Riding Hood Replica</a> <span class="font-xs text-light"> Created 1 hour ago</span></td>
<td><span class="font-s mobile-font-xs text-light bold">1 hour ago</span></td>
</tr>
</tbody>
</table>
<div class="proper-ad-unit mobile-ad square_ad">
<h6 class="ad-caption">Advertisement:</h6>
<div id="proper-ad-tvtropes_mobile_ad_3">
<script>propertag.cmd.push(function() { proper_display('tvtropes_mobile_ad_3'); });</script>
</div>
</div>
<div class="gutter-topx2 font-m bold">
Latest Video Examples
<a href="/pmwiki/recent_videos.php" class="float-right">Recent Videos <i class="fa fa-angle-double-right"></i></a>
</div>
<div id="block-view-cont" class="row video-gallery lazy-video-script">
<div class="video-block-cont" data-video-id="crxyvh">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="crxyvh" data-vimeo-id="" data-video-descrip="Wile E. Coyote disguises himself as a hitch hiker in one of his many fruitless schemes to catch the Road Runner. The bird doesn't fall for it because &amp;quot;I've already got a date&amp;quot;." data-video-title="Going! Going! Gosh!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/crxyvh_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg" data-video-trope="Main/DisguisedInDrag" data-video-tropename="Disguised in Drag" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="13" data-video-media-sources="WesternAnimation/GoingGoingGosh,WesternAnimation/LooneyTunes,WesternAnimation/WileECoyoteAndTheRoadrunner" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="crxyvh" data-vimeo-id="" data-video-descrip="Wile E. Coyote disguises himself as a hitch hiker in one of his many fruitless schemes to catch the Road Runner. The bird doesn't fall for it because &amp;quot;I've already got a date&amp;quot;." data-video-title="Going! Going! Gosh!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/crxyvh_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg" data-video-trope="Main/DisguisedInDrag" data-video-tropename="Disguised in Drag" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="13" data-video-media-sources="WesternAnimation/GoingGoingGosh,WesternAnimation/LooneyTunes,WesternAnimation/WileECoyoteAndTheRoadrunner" class="video-launch-link video-overlay-link font-m bold">Going! Going! Gosh! </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/DisguisedInDrag" class="font-m bold">Disguised in Drag</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="atw98o">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="atw98o" data-vimeo-id="" data-video-descrip="The opening to Even Stevens, done in stop-motion." data-video-title="Even Stevens Theme" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/atw98o_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg" data-video-trope="Main/AnimatedCreditsOpening" data-video-tropename="Animated Credits Opening" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.90" data-video-rating-count="10" data-video-media-sources="Series/EvenStevens" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="atw98o" data-vimeo-id="" data-video-descrip="The opening to Even Stevens, done in stop-motion." data-video-title="Even Stevens Theme" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/atw98o_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg" data-video-trope="Main/AnimatedCreditsOpening" data-video-tropename="Animated Credits Opening" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.90" data-video-rating-count="10" data-video-media-sources="Series/EvenStevens" class="video-launch-link video-overlay-link font-m bold">Even Stevens Theme </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/AnimatedCreditsOpening" class="font-m bold">Animated Credits Opening</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="al0r6p">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="al0r6p" data-vimeo-id="" data-video-descrip="George interrupting on Harry and Ginny kissing" data-video-title="&quot;Morning&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/al0r6p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg" data-video-trope="Main/MomentKiller" data-video-tropename="Moment Killer" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/HarryPotterAndTheDeathlyHallows,Film/HarryPotterAndTheDeathlyHallowsPart1" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="al0r6p" data-vimeo-id="" data-video-descrip="George interrupting on Harry and Ginny kissing" data-video-title="&quot;Morning&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/al0r6p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg" data-video-trope="Main/MomentKiller" data-video-tropename="Moment Killer" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/HarryPotterAndTheDeathlyHallows,Film/HarryPotterAndTheDeathlyHallowsPart1" class="video-launch-link video-overlay-link font-m bold">"Morning" </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/MomentKiller" class="font-m bold">Moment Killer</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="8yo88p">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="8yo88p" data-vimeo-id="" data-video-descrip="Silhouette is revealed to be a woman. Being a government official in 1950's America, this was a matter of necessity on her part. " data-video-title="Silhouette" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8yo88p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg" data-video-trope="Main/SamusIsAGirl" data-video-tropename="Samus Is a Girl" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="10" data-video-media-sources="VideoGame/DestroyAllHumans" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="8yo88p" data-vimeo-id="" data-video-descrip="Silhouette is revealed to be a woman. Being a government official in 1950's America, this was a matter of necessity on her part. " data-video-title="Silhouette" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8yo88p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg" data-video-trope="Main/SamusIsAGirl" data-video-tropename="Samus Is a Girl" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="10" data-video-media-sources="VideoGame/DestroyAllHumans" class="video-launch-link video-overlay-link font-m bold">Silhouette </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/SamusIsAGirl" class="font-m bold">Samus Is a Girl</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="vmnwhn">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="vmnwhn" data-vimeo-id="" data-video-descrip="When caught in a storm, Brock gets an idea." data-video-title="Drying Pan" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/vmnwhn_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg" data-video-trope="Main/ImprovisedUmbrella" data-video-tropename="Improvised Umbrella" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="16" data-video-media-sources="Anime/Pokemon,Anime/PokemonMewtwoReturns" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="vmnwhn" data-vimeo-id="" data-video-descrip="When caught in a storm, Brock gets an idea." data-video-title="Drying Pan" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/vmnwhn_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg" data-video-trope="Main/ImprovisedUmbrella" data-video-tropename="Improvised Umbrella" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="16" data-video-media-sources="Anime/Pokemon,Anime/PokemonMewtwoReturns" class="video-launch-link video-overlay-link font-m bold">Drying Pan </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/ImprovisedUmbrella" class="font-m bold">Improvised Umbrella</a>
</div>
</div>
</div>
</div>
</div>
</div>
<a href="/pmwiki/recent_videos.php" class="">More Videos <i class="fa fa-angle-double-right"></i></a>
<div class="square_ad footer-ad main_2" data-isolated="0"></div>
<div class="section-block">
<p class="font-s text-light separator">Tropes Community Podcasts</p>
<div>
<img data-src="/img/ontherocks.png" alt="Podcast Profile Photo" class="float-left lazy-image" style="max-width: 140px !important; margin: 0 16px 8px 0">
<h2 class="font-l bold" style="clear:right;">
Episode 120: Episode 308 - 2020 Rockies <span class="text-light font-xs float-right">December 21, 2020</span>
</h2>
<div class="gutter-top podcast-description">This week we're celebrating our end of the year awards: The 2020 Rockies! Which games are taking home the prize? Was 2020 a strong year for gaming? We're also looking to the future and discussing our most anticipated&hellip;</div>
<a href="https://www.podomatic.com/podcasts/podcast62661/episodes/2020-12-21T12_51_55-08_00" class="more-link font-xs">More <i class="fa fa-angle-double-right"></i></a>
<audio style="width: 100%; margin: 10px 0px;" controls="" preload="none">
<source src="https://podcast62661.podomatic.com/enclosure/2020-12-21T12_51_55-08_00.mp3?_=15253575" type="audio/mp3">
</audio>
</div>
<hr class="full-width" style="margin-top:2px" />
<div>
<img data-src="/img/on-the-tropes.png" alt="Podcast Profile Photo" class="float-left lazy-image" style="max-width: 140px !important; margin: 0 16px 8px 0">
<h2 class="font-l bold" style="clear:right;">
Episode 137: 2020 Year in Review: The Tropies <span class="text-light font-xs float-right">January 06, 2021</span>
</h2>
<div class="gutter-top podcast-description">Be sure to subscribe and rate us on your favorite pod catcher and feel free to support us over at Patreon.com/OnTheTropes! Buy some stuff at http://onthetropes.redbubble.comFind more about the trope at TVtropes.org, and let&hellip;</div>
<a href="https://www.podomatic.com/podcasts/onthetropes/episodes/2021-01-06T11_35_54-08_00" class="more-link font-xs">More <i class="fa fa-angle-double-right"></i></a>
<audio style="width: 100%; margin: 10px 0px;" controls="" preload="none">
<source src="https://onthetropes.podomatic.com/enclosure/2021-01-06T11_35_54-08_00.mp3?_=15277130" type="audio/mp3">
</audio>
</div>
<hr class="full-width" style="margin-top:2px" />
<div class="text-right" style="margin-top:-16px;padding-bottom:8px">
<a href="pmwiki/showcase.php" class="float-right font-xs bold">Community Showcase <i class="fa fa-angle-double-right font-xs"></i></a>
</div>
</div>
</div>
</div>
<div id="main-content-sidebar"><div class="sidebar-item display-options">
<ul class="sidebar display-toggles">
<li>Show Spoilers <div id="sidebar-toggle-showspoilers" class="display-toggle show-spoilers"></div></li>
<li>Night Vision <div id="sidebar-toggle-nightvision" class="display-toggle night-vision"></div></li>
<li>Sticky Header <div id="sidebar-toggle-stickyheader" class="display-toggle sticky-header"></div></li>
<li>Wide Load <div id="sidebar-toggle-wideload" class="display-toggle wide-load"></div></li>
</ul>
<script>updateDesktopPrefs();</script>
</div>
<div class="sidebar-item ad sb-ad-unit">
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_ad_2'> <script>propertag.cmd.push(function() { proper_display('tvtropes_ad_2'); });</script> </div>
</div></div>
<div class="sidebar-item quick-links" itemtype="http://schema.org/SiteNavigationElement">
<p class="sidebar-item-title" data-title="Important Links">Important Links</p>
<div class="padded">
<a href="/pmwiki/query.php?type=att">Ask The Tropers</a>
<a href="/pmwiki/query.php?type=tf">Trope Finder</a>
<a href="/pmwiki/query.php?type=ykts">You Know That Show...</a>
<a href="/pmwiki/tlp_activity.php">Trope Launch Pad</a>
<a href="/pmwiki/review_activity.php">Reviews</a>
<a href="/pmwiki/lbs.php" data-modal-target="login">Live Blogs</a>
<a href="/pmwiki/ad-free-subscribe.php">Go Ad Free!</a> </div>
</div>
<div class="sidebar-item sb-ad-unit">
<div class="sidebar-section">
<div class="square_ad ad-size-300x600 ad-section text-center">
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_ad_3'> <script>propertag.cmd.push(function() { proper_display('tvtropes_ad_3'); });</script> </div>
</div> </div>
</div>
</div>
<div class="sidebar-item">
<p class="sidebar-item-title" data-title="Crucial Browsing">Crucial Browsing</p>
<ul class="padded font-s" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><a href="javascript:void(0);" data-click-toggle="active">Genre</a>
<ul>
<li><a href='/pmwiki/pmwiki.php/Main/ActionAdventureTropes' title='Main/ActionAdventureTropes'>Action Adventure</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/ComedyTropes' title='Main/ComedyTropes'>Comedy</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/CommercialsTropes' title='Main/CommercialsTropes'>Commercials</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/CrimeAndPunishmentTropes' title='Main/CrimeAndPunishmentTropes'>Crime &amp; Punishment</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/DramaTropes' title='Main/DramaTropes'>Drama</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/HorrorTropes' title='Main/HorrorTropes'>Horror</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/LoveTropes' title='Main/LoveTropes'>Love</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/NewsTropes' title='Main/NewsTropes'>News</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/ProfessionalWrestling' title='Main/ProfessionalWrestling'>Professional Wrestling</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/SpeculativeFictionTropes' title='Main/SpeculativeFictionTropes'>Speculative Fiction</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/SportsStoryTropes' title='Main/SportsStoryTropes'>Sports Story</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/WarTropes' title='Main/WarTropes'>War</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" data-click-toggle="active">Media</a>
<ul>
<li><a href="/pmwiki/pmwiki.php/Main/Media" title="Main/Media">All Media</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/AnimationTropes" title="Main/AnimationTropes">Animation (Western)</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Anime" title="Main/Anime">Anime</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/ComicBookTropes" title="Main/ComicBookTropes">Comic Book</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/FanFic" title="FanFic/FanFics">Fan Fics</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Film" title="Main/Film">Film</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/GameTropes" title="Main/GameTropes">Game</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Literature" title="Main/Literature">Literature</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/MusicAndSoundEffects" title="Main/MusicAndSoundEffects">Music And Sound Effects</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/NewMediaTropes" title="Main/NewMediaTropes">New Media</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/PrintMediaTropes" title="Main/PrintMediaTropes">Print Media</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Radio" title="Main/Radio">Radio</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/SequentialArt" title="Main/SequentialArt">Sequential Art</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TabletopGames" title="Main/TabletopGames">Tabletop Games</a></li>
<li><a href="/pmwiki/pmwiki.php/UsefulNotes/Television" title="Main/Television">Television</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Theater" title="Main/Theater">Theater</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/VideogameTropes" title="Main/VideogameTropes">Videogame</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Webcomics" title="Main/Webcomics">Webcomics</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" data-click-toggle="active">Narrative</a>
<ul>
<li><a href="/pmwiki/pmwiki.php/Main/UniversalTropes" title="Main/UniversalTropes">Universal</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/AppliedPhlebotinum" title="Main/AppliedPhlebotinum">Applied Phlebotinum</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CharacterizationTropes" title="Main/CharacterizationTropes">Characterization</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Characters" title="Main/Characters">Characters</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CharactersAsDevice" title="Main/CharactersAsDevice">Characters As Device</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Dialogue" title="Main/Dialogue">Dialogue</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Motifs" title="Main/Motifs">Motifs</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/NarrativeDevices" title="Main/NarrativeDevices">Narrative Devices</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Paratext" title="Main/Paratext">Paratext</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Plots" title="Main/Plots">Plots</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Settings" title="Main/Settings">Settings</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Spectacle" title="Main/Spectacle">Spectacle</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" data-click-toggle="active">Other Categories</a>
<ul>
<li><a href="/pmwiki/pmwiki.php/Main/BritishTellyTropes" title="Main/BritishTellyTropes">British Telly</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TheContributors" title="Main/TheContributors">The Contributors</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CreatorSpeak" title="Main/CreatorSpeak">Creator Speak</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Creators" title="Main/Creators">Creators</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/DerivativeWorks" title="Main/DerivativeWorks">Derivative Works</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/LanguageTropes" title="Main/LanguageTropes">Language</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/LawsAndFormulas" title="Main/LawsAndFormulas">Laws And Formulas</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/ShowBusiness" title="Main/ShowBusiness">Show Business</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/SplitPersonalityTropes" title="Main/SplitPersonalityTropes">Split Personality</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/StockRoom" title="Main/StockRoom">Stock Room</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TropeTropes" title="Main/TropeTropes">Trope</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Tropes" title="Main/Tropes">Tropes</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TruthAndLies" title="Main/TruthAndLies">Truth And Lies</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TruthInTelevision" title="Main/TruthInTelevision">Truth In Television</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" data-click-toggle="active">Topical Tropes</a>
<ul>
<li><a href="/pmwiki/pmwiki.php/Main/BetrayalTropes" title="Main/BetrayalTropes">Betrayal</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CensorshipTropes" title="Main/CensorshipTropes">Censorship</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CombatTropes" title="Main/CombatTropes">Combat</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/DeathTropes" title="Main/DeathTropes">Death</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/FamilyTropes" title="Main/FamilyTropes">Family</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/FateAndProphecyTropes" title="Main/FateAndProphecyTropes">Fate And Prophecy</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/FoodTropes" title="Main/FoodTropes">Food</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/HolidayTropes" title="Main/HolidayTropes">Holiday</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/MemoryTropes" title="Main/MemoryTropes">Memory</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/MoneyTropes" title="Main/MoneyTropes">Money</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/MoralityTropes" title="Main/MoralityTropes">Morality</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/PoliticsTropes" title="Main/PoliticsTropes">Politics</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/ReligionTropes" title="Main/ReligionTropes">Religion</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/SchoolTropes" title="Main/SchoolTropes">School</a></li>
</ul>
</li>
</ul>
</div>
<div class="sidebar-item showcase">
<p class="sidebar-item-title" data-title="Community&nbsp;Showcase">Community Showcase <a href="/pmwiki/showcase.php" class="bubble float-right hover-blue">More</a></p>
<p class="community-showcase">
<a href="https://sharetv.com/shows/echo_chamber" target="_blank" onclick="trackOutboundLink('https://sharetv.com/shows/echo_chamber');">
<img data-src="/images/communityShowcase-echochamber.jpg" class="lazy-image" alt=""></a>
<a href="/pmwiki/pmwiki.php/Webcomic/TwistedTropes">
<img data-src="/img/howlandsc-side.jpg" class="lazy-image" alt=""></a>
</p>
</div>
<div id="stick-cont" class="sidebar-item sb-ad-unit">
<div id="stick-bar" class="sidebar-section">
<div class="square_ad ad-size-300x600 ad-section text-center">
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_ad_4'> <script>propertag.cmd.push(function() { proper_display('tvtropes_ad_4'); });</script> </div>
</div> </div>
</div>
</div>
</div>
</div>
<div id="action-bar-bottom" class="action-bar tablet-off">
<a href="#top-of-page" class="scroll-to-top dead-button" onclick="$('html, body').animate({scrollTop : 0},500);">Top</a>
</div>
</div>
<div class='proper-ad-unit ad-sticky'>
<div id='proper-ad-tvtropes_sticky_ad'> <script>propertag.cmd.push(function() { proper_display('tvtropes_sticky_ad'); });</script> </div>
</div>
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_oop'> <script>propertag.cmd.push(function() { proper_display('tvtropes_oop'); });</script> </div>
</div>
<footer id="main-footer">
<div id="main-footer-inner">
<div class="footer-left">
<a href="/" class="img-link"><img data-src="/img/tvtropes-footer-logo.png" alt="TV Tropes" class="lazy-image" title="TV Tropes" /></a>
<form action="index.html" id="cse-search-box-mobile" class="navbar-form newsletter-signup validate modal-replies" name="" role="" data-ajax-get="/ajax/subscribe_email.php">
<button class="btn-submit newsletter-signup-submit-button" type="submit" id="subscribe-btn"><i class="fa fa-paper-plane"></i></button>
<input id="subscription-email" type="text" class="form-control" name="q" size="31" placeholder="Subscribe" value="" validate-type="email">
</form>
<ul class="social-buttons">
<li><a class="btn fb" target="_blank" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);" href="https://www.facebook.com/tvtropes"><i class="fa fa-facebook"></i></a></li>
<li><a class="btn tw" target="_blank" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);" href="https://www.twitter.com/tvtropes"><i class="fa fa-twitter"></i></a> </li>
<li><a class="btn rd" target="_blank" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-reddit']);" href="https://www.reddit.com/r/tvtropes"><i class="fa fa-reddit-alien"></i></a></li>
</ul>
</div>
<hr />
<ul class="footer-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><h4 class="footer-menu-header">TVTropes</h4></li>
<li><a href="/pmwiki/pmwiki.php/Main/Administrivia">About TVTropes</a></li>
<li><a href="/pmwiki/pmwiki.php/Administrivia/TheGoalsOfTVTropes">TVTropes Goals</a></li>
<li><a href="/pmwiki/pmwiki.php/Administrivia/TheTropingCode">Troping Code</a></li>
<li><a href="/pmwiki/pmwiki.php/Administrivia/TVTropesCustoms">TVTropes Customs</a></li>
<li><a href="/pmwiki/pmwiki.php/JustForFun/TropesOfLegend">Tropes of Legend</a></li>
<li><a href="/pmwiki/ad-free-subscribe.php">Go Ad-Free</a></li>
</ul>
<hr />
<ul class="footer-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><h4 class="footer-menu-header">Community</h4></li>
<li><a href="/pmwiki/query.php?type=att">Ask The Tropers</a></li>
<li><a href="/pmwiki/tlp_activity.php">Trope Launch Pad</a></li>
<li><a href="/pmwiki/query.php?type=tf">Trope Finder</a></li>
<li><a href="/pmwiki/query.php?type=ykts">You Know That Show</a></li>
<li><a href="/pmwiki/lbs.php" data-modal-target="login">Live Blogs</a></li>
<li><a href="/pmwiki/review_activity.php">Reviews</a></li>
<li><a href="/pmwiki/topics.php">Forum</a></li>
</ul>
<hr />
<ul class="footer-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><h4 class="footer-menu-header">Tropes HQ</h4></li>
<li><a href="/pmwiki/about.php">About Us</a></li>
<li><a href="/pmwiki/contact.php">Contact Us</a></li>
<li><a href="/pmwiki/dmca.php">DMCA Notice</a></li>
<li><a href="/pmwiki/privacypolicy.php">Privacy Policy</a></li>
</ul>
</div>
<div id="desktop-on-mobile-toggle" class="text-center gutter-top gutter-bottom tablet-on">
<a href="/pmwiki/switchDeviceCss.php?mobileVersion=1" rel="nofollow">Switch to <span class="txt-desktop">Desktop</span><span class="txt-mobile">Mobile</span> Version</a>
</div>
<div class="legal">
<p>TVTropes is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License. <br>Permissions beyond the scope of this license may be available from <a xmlns:cc="http://creativecommons.org/ns#" href="mailto:thestaff@tvtropes.org" rel="cc:morePermissions"> thestaff@tvtropes.org</a>.</p>
<br>
<div class="privacy_wrapper">
</div>
</div>
</footer>
<style>
      div.fc-ccpa-root {
        position: absolute !important;
        bottom: 93px !important;
        margin: auto !important;
        width: 100% !important;
        z-index: 9999 !important;
      }
      .fc-ccpa-root .fc-dns-dialog .fc-dns-link p{
        outline: none !important;
        text-decoration: underline !important;
        font-size: .7em !important;
        font-family: sans-serif !important;
      }
      .fc-ccpa-root .fc-dns-dialog .fc-dns-link .fc-button-background {
        background: none !important;
      }
    </style>
<div id="_pm_videoViewer" class="full-screen">
<a href="#close" class="close" id="_pm_videoViewer-close"></a>
<div class="_pmvv-body">
<div class="_pmvv-vidbox">
<video id='overlay-video-player-box' data-video-id="crxyvh" class='video-js vjs-default-skin vjs-16-9'>
</video>
<div class="_pmvv-vidbox-desc">
<h1 id="overlay-title">Going! Going! Gosh!</h1>
<p id="overlay-descrip" class="_pmvv-vidbox-descTxt">
Wile E. Coyote disguises himself as a hitch hiker in one of his many fruitless schemes to catch the Road Runner. The bird doesn't fall for it because &quot;I've already got a date&quot;.	</p>
<div class="rating-row" data-video-id="crxyvh">
<input type="hidden" name="is_logged_in" value="0">
<p>How well does it match the trope?</p>
<div id="star-rating-group">
<div class="trope-rate">
<input type="radio" id="lamp5" name="rate" value="5" />
<label for="lamp5" title="Absolutely"></label>
<input type="radio" id="lamp4" name="rate" value="4" />
<label for="lamp4" title="Yes"></label>
<input type="radio" id="lamp3" name="rate" value="3" />
<label for="lamp3" title="Kind of"></label>
<input type="radio" id="lamp2" name="rate" value="2" />
<label for="lamp2" title="Not really"></label>
<input type="radio" id="lamp1" name="rate" value="1" />
<label for="lamp1" title="No"></label>
</div>
<div id="star-rating-total">
5 (13 votes)
</div>
</div>
</div>
<div class="example-media-row">
<div class="example-overlay">
<p>Example of:</p>
<div id="overlay-trope">Main / DisguisedInDrag</div>
</div>
<div class="media-sources-overlay example-overlay">
<p>Media sources:</p>
<div id="overlay-media">Main / DisguisedInDrag</div>
</div>
</div>
<p class="_pmvv-vidbox-stats text-right font-s" style="padding-top:8px; border-top: solid 1px rgba(255,255,255,0.2)">

<a href="#video-feedback" class="float-right" data-modal-target="login">Report</a>
</p>
</div>
</div>
</div>
<div class="_pmvv-foot">
<div class="_pmvv-foot-scrollwrapper">
<a href="#video-link" data-video-id="crxyvh" data-vimeo-id="" data-video-descrip="Wile E. Coyote disguises himself as a hitch hiker in one of his many fruitless schemes to catch the Road Runner. The bird doesn't fall for it because &amp;quot;I've already got a date&amp;quot;." data-video-title="Going! Going! Gosh!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/crxyvh_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg" data-video-trope="Main/DisguisedInDrag" data-video-tropename="Disguised in Drag" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="13" data-video-media-sources="WesternAnimation/GoingGoingGosh,WesternAnimation/LooneyTunes,WesternAnimation/WileECoyoteAndTheRoadrunner" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg">
<p><span class="bold">Going! Going! G...</span></p>
</a>
<a href="#video-link" data-video-id="atw98o" data-vimeo-id="" data-video-descrip="The opening to Even Stevens, done in stop-motion." data-video-title="Even Stevens Theme" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/atw98o_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg" data-video-trope="Main/AnimatedCreditsOpening" data-video-tropename="Animated Credits Opening" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.90" data-video-rating-count="10" data-video-media-sources="Series/EvenStevens" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg">
<p><span class="bold">Even Stevens Theme</span></p>
</a>
<a href="#video-link" data-video-id="al0r6p" data-vimeo-id="" data-video-descrip="George interrupting on Harry and Ginny kissing" data-video-title="&quot;Morning&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/al0r6p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg" data-video-trope="Main/MomentKiller" data-video-tropename="Moment Killer" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/HarryPotterAndTheDeathlyHallows,Film/HarryPotterAndTheDeathlyHallowsPart1" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg">
<p><span class="bold">"Morning"</span></p>
</a>
<a href="#video-link" data-video-id="8yo88p" data-vimeo-id="" data-video-descrip="Silhouette is revealed to be a woman. Being a government official in 1950's America, this was a matter of necessity on her part. " data-video-title="Silhouette" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8yo88p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg" data-video-trope="Main/SamusIsAGirl" data-video-tropename="Samus Is a Girl" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="10" data-video-media-sources="VideoGame/DestroyAllHumans" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg">
<p><span class="bold">Silhouette</span></p>
</a>
<a href="#video-link" data-video-id="vmnwhn" data-vimeo-id="" data-video-descrip="When caught in a storm, Brock gets an idea." data-video-title="Drying Pan" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/vmnwhn_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg" data-video-trope="Main/ImprovisedUmbrella" data-video-tropename="Improvised Umbrella" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="16" data-video-media-sources="Anime/Pokemon,Anime/PokemonMewtwoReturns" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg">
<p><span class="bold">Drying Pan</span></p>
</a>
</div>
</div>
</div>
<script type='text/javascript'>
        window.special_ops =  {
            member : 'no',
            isolated : 0,
            tags : ['unknown']
        };
    </script>
<script type="text/javascript">

        var cleanCreativeEnabled = "";
        var donation = "";
        var live_ads = "1";
        var img_domain = "https://static.tvtropes.org";
        var snoozed = cookies.read('snoozedabm');
        var snoozable = "";

        if (adsRemovedWith) {
            live_ads = 0;
        }

        var elem = document.createElement('script');
        elem.async = true;

        elem.src = '/design/assets/bundle.js?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7';

        elem.onload = function() {
                                 }
        document.getElementsByTagName('head')[0].appendChild(elem);

    </script>
<script type="text/javascript">
      function send_analytics_event(user_type, donation){
          // if(user_type == 'uncached' || user_type == 'cached'){
          //   ga('send', 'event', 'caching', 'load', user_type, {'nonInteraction': 1});
          //   return;
          // }
          var event_name = user_type;

          if(donation == 'true'){
              event_name += "_donation"
          }else if(typeof(valid_user) == 'undefined'){
              event_name += "_blocked"
          }else if(valid_user == true){
              event_name += "_unblocked";
          }else{
              event_name = "_unknown"
          }
          ga('send', 'event', 'ads', 'load', event_name, {'nonInteraction': 1});
      }

    
    send_analytics_event("guest", "false");
      </script>

<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "35128827" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = "https://sb.scorecardresearch.com/cs/35128827/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="https://sb.scorecardresearch.com/p?c1=2&amp;c2=35128827&amp;cv=3.6.0&amp;cj=1">
</noscript>

</body>
</html>
