<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Browse Tropes - TV Tropes</title>
<meta name="description" content="" />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="Browse Tropes - TV Tropes" />
<meta name="twitter:description" content="" />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="Browse Tropes" />
<meta property="og:type" content="" />
<meta property="og:url" content="https://tvtropes.org/pmwiki/browse.php" />
<meta property="og:image" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:description" content="" />
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
<header id="main-header-bar" class="headroom-element ">
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
<a href="/pmwiki/pmwiki.php/Main/NuclearNasty" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/Film/TheInterpreter" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
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
<a href="/"><img src="/images/logo-white-big.png" class="logo-small" /></a>
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
<li class="link-browse"><a href="/pmwiki/browse.php">
<i class="fa fa-binoculars"></i> Browse</a></li><li class="link-storyGen"><a href="/pmwiki/storygen.php">
<i class="fa fa-book"></i> Story Generator</a></li><li class="link-pitchGen"><a href="/pmwiki/pitchgenerator.php">
<i class="fa fa-flask"></i> Pitch Generator</a></li><li class="link-showcase"><a href="/pmwiki/showcase.php">
<i class="fa fa-trophy"></i> Showcase</a></li> </ul>
<ul id="top_more_list" class="more_menu hidden_more_list">
</ul>
</nav>
<div class="WikiWordModalStub"></div>
<div class="ImgUploadModalStub" data-page-type="Browse"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-Browse class-browse-main">
<div id="main-entry" class="with-sidebar">
<h1 itemprop="headline" class="entry-title">Browse Tropes</h1>
<a href="#mobile-actions-toggle" id="mobile-actionbar-toggle" class="mobile-actionbar-toggle mobile-on" data-click-toggle="active">
<p class="tiny-off">Go To</p><span></span><span></span><span></span><i class="fa fa-pencil"></i></a>
<nav id="mobile-actions-bar" class="mobile-actions-wrapper mobile-on"></nav>
<div id="main-article" class="article-content">
<p>Take a stroll through the TVTropes content until you find what you like &ndash; or until that special something finds you. Use the filters below to sort our library by genre, media, narrative, topic, or other criteria, or combine several options and see what happens.</p>
<form id="browse-form" action="/pmwiki/browse.php" method="post">
<div class="two-column gutter-top font-s">
<button name="randomize" value="1" class="button skinny"><i class="fa fa-refresh"></i> Refresh</button>
<a id="filters-button" class="dead-button button skinny float-right" data-click-toggle="active" data-click-toggle-target="browse-filters,filters-button"><span><i class="fa fa-gears"></i> Filters <i class="fa fa-close"></i></span></a>
<span class="sort-menu-wrapper position-relative float-right" style="margin-right: 4px;">
<button id="sort-button" class="skinny sort-rand" data-hover-menu-target="sort-menu">
<span><i class="fa fa-sort"></i> Sort By</span>
<span class="sort-a"><i class="fa fa-sort-alpha-asc"></i> A to Z</span>
<span class="sort-z"><i class="fa fa-sort-alpha-desc"></i> Z to A</span>
<span class="sort-rand"><i class="fa fa-random"></i> Random</span>
<span><i class="fa fa-history"></i> Last Edited</span>
<span><i class="fa fa-calendar"></i> Creation Date</span>
</button>
<div id="sort-menu" class="hover-menu" data-arrow="right">
<button name="sort" value="A"><i class="fa fa-sort-alpha-asc"></i> A to Z</button>
<button name="sort" value="Z"><i class="fa fa-sort-alpha-desc"></i> Z to A</button>
<button name="sort" value="Rand"><i class="fa fa-random"></i> Random</button>
<button name="sort" value="Rand"><i class="fa fa-history"></i> Last Edited</button>
<button name="sort" value="Rand"><i class="fa fa-calendar"></i> Creation Date</button>
</div>
</span>
</div>
<div id="browse-filters" class="category-cont section-block two-column gutter-top">
<div class="button-group skinny font-s text-center">
<a href="#filters-tropes" class="dead-button" data-click-toggle="active" data-click-toggle-target="filters-tropes" data-click-toggle-exclusive="true">Tropes</a>
<a href="#filters-media" class="dead-button" data-click-toggle="active" data-click-toggle-target="filters-media" data-click-toggle-exclusive="true">Media</a>
<a href="#filters-other" class="dead-button" data-click-toggle="active" data-click-toggle-target="filters-other" data-click-toggle-exclusive="true">More</a>
</div>
<div class="scroll-area">
<div id="filters-tropes" class="filters-box font-s active">
<p class="font-s text-light separator not-full-width">Genre:</p>
<ul id="genre-cats">
<li>
<input type='checkbox' value='ActionAdventureTropes' id='ActionAdventureTropes_ck_box' name='ActionAdventureTropes'>
<label for="ActionAdventureTropes_ck_box">Action Adventure</label>
</li>
<li>
<input type='checkbox' value='ComedyTropes' id='ComedyTropes_ck_box' name='ComedyTropes'>
<label for="ComedyTropes_ck_box">Comedy</label>
</li>
<li>
<input type='checkbox' value='AdvertisingTropes' id='AdvertisingTropes_ck_box' name='AdvertisingTropes'>
<label for="AdvertisingTropes_ck_box">Commercials</label>
</li>
<li>
<input type='checkbox' value='CrimeAndPunishmentTropes' id='CrimeAndPunishmentTropes_ck_box' name='CrimeAndPunishmentTropes'>
<label for="CrimeAndPunishmentTropes_ck_box">Crime & Punishment</label>
</li>
<li>
<input type='checkbox' value='DramaTropes' id='DramaTropes_ck_box' name='DramaTropes'>
<label for="DramaTropes_ck_box">Drama</label>
</li>
<li>
<input type='checkbox' value='HorrorTropes' id='HorrorTropes_ck_box' name='HorrorTropes'>
<label for="HorrorTropes_ck_box">Horror</label>
</li>
<li>
<input type='checkbox' value='LoveTropes' id='LoveTropes_ck_box' name='LoveTropes'>
<label for="LoveTropes_ck_box">Love</label>
</li>
<li>
<input type='checkbox' value='NewsTropes' id='NewsTropes_ck_box' name='NewsTropes'>
<label for="NewsTropes_ck_box">News</label>
</li>
<li>
<input type='checkbox' value='ProfessionalWrestling' id='ProfessionalWrestling_ck_box' name='ProfessionalWrestling'>
<label for="ProfessionalWrestling_ck_box">Professional Wrestling</label>
</li>
<li>
<input type='checkbox' value='SpeculativeFictionTropes' id='SpeculativeFictionTropes_ck_box' name='SpeculativeFictionTropes'>
<label for="SpeculativeFictionTropes_ck_box">Speculative Fiction</label>
</li>
<li>
<input type='checkbox' value='SportsStoryTropes' id='SportsStoryTropes_ck_box' name='SportsStoryTropes'>
<label for="SportsStoryTropes_ck_box">Sports Story</label>
</li>
<li>
<input type='checkbox' value='MilitaryAndWarfareSuperindex' id='MilitaryAndWarfareSuperindex_ck_box' name='MilitaryAndWarfareSuperindex'>
<label for="MilitaryAndWarfareSuperindex_ck_box">War</label>
</li>
</ul>
<p class="font-s text-light separator not-full-width">Narrative:</p>
<ul id="narrative-cats">
<li>
<input type='checkbox' value='UniversalTropes' id='UniversalTropes_ck_box' name='UniversalTropes'>
<label for="UniversalTropes_ck_box">Universal</label>
</li>
<li>
<input type='checkbox' value='AppliedPhlebotinum' id='AppliedPhlebotinum_ck_box' name='AppliedPhlebotinum'>
<label for="AppliedPhlebotinum_ck_box">Applied Phlebotinum</label>
</li>
<li>
<input type='checkbox' value='CharacterizationTropes' id='CharacterizationTropes_ck_box' name='CharacterizationTropes'>
<label for="CharacterizationTropes_ck_box">Characterization Tropes</label>
</li>
<li>
<input type='checkbox' value='Characters' id='Characters_ck_box' name='Characters'>
<label for="Characters_ck_box">Characters</label>
</li>
<li>
<input type='checkbox' value='CharactersAsDevice' id='CharactersAsDevice_ck_box' name='CharactersAsDevice'>
<label for="CharactersAsDevice_ck_box">Characters As Device</label>
</li>
<li>
<input type='checkbox' value='Dialogue' id='Dialogue_ck_box' name='Dialogue'>
<label for="Dialogue_ck_box">Dialogue</label>
</li>
<li>
<input type='checkbox' value='Motifs' id='Motifs_ck_box' name='Motifs'>
<label for="Motifs_ck_box">Motifs</label>
</li>
<li>
<input type='checkbox' value='NarrativeDevices' id='NarrativeDevices_ck_box' name='NarrativeDevices'>
<label for="NarrativeDevices_ck_box">Narrative Devices</label>
</li>
<li>
<input type='checkbox' value='Paratext' id='Paratext_ck_box' name='Paratext'>
<label for="Paratext_ck_box">Paratext</label>
</li>
<li>
<input type='checkbox' value='Plots' id='Plots_ck_box' name='Plots'>
<label for="Plots_ck_box">Plots</label>
</li>
<li>
<input type='checkbox' value='Settings' id='Settings_ck_box' name='Settings'>
<label for="Settings_ck_box">Settings</label>
</li>
<li>
<input type='checkbox' value='Spectacle' id='Spectacle_ck_box' name='Spectacle'>
<label for="Spectacle_ck_box">Spectacle</label>
</li>
</ul>
<p class="font-s text-light separator not-full-width">Topical:</p>
<ul id="topical-cats">
<li>
<input type='checkbox' value='BetrayalTropes' id='BetrayalTropes_ck_box' name='BetrayalTropes'>
<label for="BetrayalTropes_ck_box">Betrayal</label>
</li>
<li>
<input type='checkbox' value='CensorshipTropes' id='CensorshipTropes_ck_box' name='CensorshipTropes'>
<label for="CensorshipTropes_ck_box">Censorship</label>
</li>
<li>
<input type='checkbox' value='CombatTropes' id='CombatTropes_ck_box' name='CombatTropes'>
<label for="CombatTropes_ck_box">Combat</label>
</li>
<li>
<input type='checkbox' value='DeathTropes' id='DeathTropes_ck_box' name='DeathTropes'>
<label for="DeathTropes_ck_box">Death</label>
</li>
<li>
<input type='checkbox' value='FamilyTropes' id='FamilyTropes_ck_box' name='FamilyTropes'>
<label for="FamilyTropes_ck_box">Family</label>
</li>
<li>
<input type='checkbox' value='FateAndProphecyTropes' id='FateAndProphecyTropes_ck_box' name='FateAndProphecyTropes'>
<label for="FateAndProphecyTropes_ck_box">Fate & Prophecy</label>
</li>
<li>
<input type='checkbox' value='FoodTropes' id='FoodTropes_ck_box' name='FoodTropes'>
<label for="FoodTropes_ck_box">Food</label>
</li>
<li>
<input type='checkbox' value='HolidayTropes' id='HolidayTropes_ck_box' name='HolidayTropes'>
<label for="HolidayTropes_ck_box">Holiday</label>
</li>
<li>
<input type='checkbox' value='MemoryTropes' id='MemoryTropes_ck_box' name='MemoryTropes'>
<label for="MemoryTropes_ck_box">Memory</label>
</li>
<li>
<input type='checkbox' value='MoneyTropes' id='MoneyTropes_ck_box' name='MoneyTropes'>
<label for="MoneyTropes_ck_box">Money</label>
</li>
<li>
<input type='checkbox' value='MoralityTropes' id='MoralityTropes_ck_box' name='MoralityTropes'>
<label for="MoralityTropes_ck_box">Morality</label>
</li>
<li>
<input type='checkbox' value='PoliticsTropes' id='PoliticsTropes_ck_box' name='PoliticsTropes'>
<label for="PoliticsTropes_ck_box">Politics</label>
</li>
<li>
<input type='checkbox' value='ReligionTropes' id='ReligionTropes_ck_box' name='ReligionTropes'>
<label for="ReligionTropes_ck_box">Religion</label>
</li>
<li>
<input type='checkbox' value='SchoolTropes' id='SchoolTropes_ck_box' name='SchoolTropes'>
<label for="SchoolTropes_ck_box">School</label>
</li>
</ul>
</div>
<div id="filters-media" class="filters-box font-s">
<p class="font-s text-light separator not-full-width">Media:</p>
<ul id="media-cats">
<li>
<input type='checkbox' value='Advertising' id='Advertising_ck_box' name='Advertising'>
<label for="Advertising_ck_box">Advertising</label>
</li>
<li>
<input type='checkbox' value='ARG' id='ARG_ck_box' name='ARG'>
<label for="ARG_ck_box">ARG</label>
</li>
<li>
<input type='checkbox' value='Animation' id='Animation_ck_box' name='Animation'>
<label for="Animation_ck_box">Animation</label>
</li>
<li>
<input type='checkbox' value='Anime' id='Anime_ck_box' name='Anime'>
<label for="Anime_ck_box">Anime</label>
</li>
<li>
<input type='checkbox' value='AudioPlay' id='AudioPlay_ck_box' name='AudioPlay'>
<label for="AudioPlay_ck_box">AudioPlay</label>
</li>
<li>
<input type='checkbox' value='Blog' id='Blog_ck_box' name='Blog'>
<label for="Blog_ck_box">Blog</label>
</li>
<li>
<input type='checkbox' value='Bollywood' id='Bollywood_ck_box' name='Bollywood'>
<label for="Bollywood_ck_box">Bollywood</label>
</li>
<li>
<input type='checkbox' value='ComicBook' id='ComicBook_ck_box' name='ComicBook'>
<label for="ComicBook_ck_box">ComicBook</label>
</li>
<li>
<input type='checkbox' value='ComicStrip' id='ComicStrip_ck_box' name='ComicStrip'>
<label for="ComicStrip_ck_box">ComicStrip</label>
</li>
<li>
<input type='checkbox' value='Creator' id='Creator_ck_box' name='Creator'>
<label for="Creator_ck_box">Creator</label>
</li>
<li>
<input type='checkbox' value='Fanfic' id='Fanfic_ck_box' name='Fanfic'>
<label for="Fanfic_ck_box">Fanfic</label>
</li>
<li>
<input type='checkbox' value='Film' id='Film_ck_box' name='Film'>
<label for="Film_ck_box">Film</label>
</li>
<li>
<input type='checkbox' value='Franchise' id='Franchise_ck_box' name='Franchise'>
<label for="Franchise_ck_box">Franchise</label>
</li>
<li>
<input type='checkbox' value='LARP' id='LARP_ck_box' name='LARP'>
<label for="LARP_ck_box">LARP</label>
</li>
<li>
<input type='checkbox' value='LetsPlay' id='LetsPlay_ck_box' name='LetsPlay'>
<label for="LetsPlay_ck_box">LetsPlay</label>
</li>
<li>
<input type='checkbox' value='LightNovel' id='LightNovel_ck_box' name='LightNovel'>
<label for="LightNovel_ck_box">LightNovel</label>
</li>
 <li>
<input type='checkbox' value='Literature' id='Literature_ck_box' name='Literature'>
<label for="Literature_ck_box">Literature</label>
</li>
<li>
<input type='checkbox' value='Machinima' id='Machinima_ck_box' name='Machinima'>
<label for="Machinima_ck_box">Machinima</label>
</li>
<li>
<input type='checkbox' value='Magazine' id='Magazine_ck_box' name='Magazine'>
<label for="Magazine_ck_box">Magazine</label>
</li>
<li>
<input type='checkbox' value='Manga' id='Manga_ck_box' name='Manga'>
<label for="Manga_ck_box">Manga</label>
</li>
<li>
<input type='checkbox' value='Manhua' id='Manhua_ck_box' name='Manhua'>
<label for="Manhua_ck_box">Manhua</label>
</li>
<li>
<input type='checkbox' value='Manhwa' id='Manhwa_ck_box' name='Manhwa'>
<label for="Manhwa_ck_box">Manhwa</label>
</li>
<li>
<input type='checkbox' value='Music' id='Music_ck_box' name='Music'>
<label for="Music_ck_box">Music</label>
</li>
<li>
<input type='checkbox' value='Pinball' id='Pinball_ck_box' name='Pinball'>
<label for="Pinball_ck_box">Pinball</label>
</li>
<li>
<input type='checkbox' value='Podcast' id='Podcast_ck_box' name='Podcast'>
<label for="Podcast_ck_box">Podcast</label>
</li>
<li>
<input type='checkbox' value='Radio' id='Radio_ck_box' name='Radio'>
<label for="Radio_ck_box">Radio</label>
</li>
<li>
<input type='checkbox' value='Ride' id='Ride_ck_box' name='Ride'>
<label for="Ride_ck_box">Ride</label>
</li>
<li>
<input type='checkbox' value='Roleplay' id='Roleplay_ck_box' name='Roleplay'>
<label for="Roleplay_ck_box">Roleplay</label>
</li>
<li>
<input type='checkbox' value='Series' id='Series_ck_box' name='Series'>
<label for="Series_ck_box">Series</label>
</li>
<li>
<input type='checkbox' value='TabletopGame' id='TabletopGame_ck_box' name='TabletopGame'>
<label for="TabletopGame_ck_box">TabletopGame</label>
</li>
<li>
<input type='checkbox' value='Theatre' id='Theatre_ck_box' name='Theatre'>
<label for="Theatre_ck_box">Theatre</label>
</li>
<li>
<input type='checkbox' value='Toys' id='Toys_ck_box' name='Toys'>
<label for="Toys_ck_box">Toys</label>
</li>
<li>
<input type='checkbox' value='VideoGame' id='VideoGame_ck_box' name='VideoGame'>
<label for="VideoGame_ck_box">VideoGame</label>
</li>
<li>
<input type='checkbox' value='VisualNovel' id='VisualNovel_ck_box' name='VisualNovel'>
<label for="VisualNovel_ck_box">VisualNovel</label>
</li>
<li>
<input type='checkbox' value='WebAnimation' id='WebAnimation_ck_box' name='WebAnimation'>
<label for="WebAnimation_ck_box">WebAnimation</label>
</li>
<li>
<input type='checkbox' value='Webcomic' id='Webcomic_ck_box' name='Webcomic'>
<label for="Webcomic_ck_box">Webcomic</label>
</li>
<li>
<input type='checkbox' value='Website' id='Website_ck_box' name='Website'>
<label for="Website_ck_box">Website</label>
</li>
<li>
<input type='checkbox' value='WebOriginal' id='WebOriginal_ck_box' name='WebOriginal'>
<label for="WebOriginal_ck_box">WebOriginal</label>
</li>
<li>
<input type='checkbox' value='WebVideo' id='WebVideo_ck_box' name='WebVideo'>
<label for="WebVideo_ck_box">WebVideo</label>
</li>
<li>
<input type='checkbox' value='WesternAnimation' id='WesternAnimation_ck_box' name='WesternAnimation'>
<label for="WesternAnimation_ck_box">WesternAnimation</label>
</li>
<li>
<input type='checkbox' value='Wiki' id='Wiki_ck_box' name='Wiki'>
<label for="Wiki_ck_box">Wiki</label>
</li>
<li>
<input type='checkbox' value='Wrestling' id='Wrestling_ck_box' name='Wrestling'>
<label for="Wrestling_ck_box">Wrestling</label>
</li>
</ul>
</div>
<div id="filters-other" class="filters-box font-s">
<p class="font-s text-light separator not-full-width">Subpage:</p>
<ul id="subpages">
<li>
<input type='checkbox' value='Analysis' id='Analysis_ck_box' name='Analysis'>
<label for="Analysis_ck_box">Analysis</label>
</li>
<li>
<input type='checkbox' value='Characters' id='Characters_ck_box' name='Characters'>
<label for="Characters_ck_box">Characters</label>
</li>
<li>
<input type='checkbox' value='FanficRecs' id='FanficRecs_ck_box' name='FanficRecs'>
<label for="FanficRecs_ck_box">FanficRecs</label>
</li>
<li>
<input type='checkbox' value='FanWorks' id='FanWorks_ck_box' name='FanWorks'>
<label for="FanWorks_ck_box">FanWorks</label>
</li>
<li>
<input type='checkbox' value='Fridge' id='Fridge_ck_box' name='Fridge'>
<label for="Fridge_ck_box">Fridge</label>
</li>
<li>
<input type='checkbox' value='Haiku' id='Haiku_ck_box' name='Haiku'>
<label for="Haiku_ck_box">Haiku</label>
</li>
<li>
<input type='checkbox' value='Headscratchers' id='Headscratchers_ck_box' name='Headscratchers'>
<label for="Headscratchers_ck_box">Headscratchers</label>
</li>
<li>
<input type='checkbox' value='ImageLinks' id='ImageLinks_ck_box' name='ImageLinks'>
<label for="ImageLinks_ck_box">ImageLinks</label>
</li>
<li>
<input type='checkbox' value='Laconic' id='Laconic_ck_box' name='Laconic'>
<label for="Laconic_ck_box">Laconic</label>
</li>
<li>
<input type='checkbox' value='PlayingWith' id='PlayingWith_ck_box' name='PlayingWith'>
<label for="PlayingWith_ck_box">PlayingWith</label>
</li>
<li>
<input type='checkbox' value='Quotes' id='Quotes_ck_box' name='Quotes'>
<label for="Quotes_ck_box">Quotes</label>
</li>
<li>
<input type='checkbox' value='Recap' id='Recap_ck_box' name='Recap'>
<label for="Recap_ck_box">Recap</label>
</li>
<li>
<input type='checkbox' value='ReferencedBy' id='ReferencedBy_ck_box' name='ReferencedBy'>
<label for="ReferencedBy_ck_box">ReferencedBy</label>
</li>
<li>
<input type='checkbox' value='Synopsis' id='Synopsis_ck_box' name='Synopsis'>
<label for="Synopsis_ck_box">Synopsis</label>
</li>
<li>
<input type='checkbox' value='Timeline' id='Timeline_ck_box' name='Timeline'>
<label for="Timeline_ck_box">Timeline</label>
</li>
<li>
<input type='checkbox' value='Trivia' id='Trivia_ck_box' name='Trivia'>
<label for="Trivia_ck_box">Trivia</label>
</li>
<li>
<input type='checkbox' value='WMG' id='WMG_ck_box' name='WMG'>
<label for="WMG_ck_box">WMG</label>
</li>
<li>
<input type='checkbox' value='YMMV' id='YMMV_ck_box' name='YMMV'>
<label for="YMMV_ck_box">YMMV</label>
</li>
</ul>
<p class="font-s text-light separator not-full-width">Moments:</p>
<ul id="moments">
<li>
<input type='checkbox' value='Awesome' id='Awesome_ck_box' name='Awesome'>
<label for="Awesome_ck_box">Awesome</label>
</li>
<li>
<input type='checkbox' value='Funny' id='Funny_ck_box' name='Funny'>
<label for="Funny_ck_box">Funny</label>
</li>
<li>
<input type='checkbox' value='Heartwarming' id='Heartwarming_ck_box' name='Heartwarming'>
<label for="Heartwarming_ck_box">Heartwarming</label>
</li>
<li>
<input type='checkbox' value='NightmareFuel' id='NightmareFuel_ck_box' name='NightmareFuel'>
<label for="NightmareFuel_ck_box">NightmareFuel</label>
</li>
<li>
<input type='checkbox' value='TearJerker' id='TearJerker_ck_box' name='TearJerker'>
<label for="TearJerker_ck_box">TearJerker</label>
</li>
</ul>
<p class="font-s text-light separator not-full-width clear-both">Other:</p>
<ul id="other">
<li>
<input type='checkbox' value='AATAFOVS' id='AATAFOVS_ck_box' name='AATAFOVS'>
<label for="AATAFOVS_ck_box">AATAFOVS</label>
</li>
<li>
<input type='checkbox' value='Administrivia' id='Administrivia_ck_box' name='Administrivia'>
<label for="Administrivia_ck_box">Administrivia</label>
</li>
<li>
<input type='checkbox' value='CompletedMigrations' id='CompletedMigrations_ck_box' name='CompletedMigrations'>
<label for="CompletedMigrations_ck_box">CompletedMigrations</label>
</li>
<li>
<input type='checkbox' value='DarthWiki' id='DarthWiki_ck_box' name='DarthWiki'>
<label for="DarthWiki_ck_box">DarthWiki</label>
</li>
<li>
<input type='checkbox' value='JustForFun' id='JustForFun_ck_box' name='JustForFun'>
<label for="JustForFun_ck_box">JustForFun</label>
</li>
<li>
<input type='checkbox' value='Pantheon' id='Pantheon_ck_box' name='Pantheon'>
<label for="Pantheon_ck_box">Pantheon</label>
</li>
<li>
<input type='checkbox' value='RealLife' id='RealLife_ck_box' name='RealLife'>
<label for="RealLife_ck_box">RealLife</label>
</li>
<li>
<input type='checkbox' value='SelfDemonstrating' id='SelfDemonstrating_ck_box' name='SelfDemonstrating'>
<label for="SelfDemonstrating_ck_box">SelfDemonstrating</label>
</li>
<li>
<input type='checkbox' value='SoYouWantTo' id='SoYouWantTo_ck_box' name='SoYouWantTo'>
<label for="SoYouWantTo_ck_box">SoYouWantTo</label>
</li>
<li>
<input type='checkbox' value='SugarWiki' id='SugarWiki_ck_box' name='SugarWiki'>
<label for="SugarWiki_ck_box">SugarWiki</label>
</li>
<li>
<input type='checkbox' value='TropeCo' id='TropeCo_ck_box' name='TropeCo'>
<label for="TropeCo_ck_box">TropeCo</label>
</li>
<li>
<input type='checkbox' value='Tropers' id='Tropers_ck_box' name='Tropers'>
<label for="Tropers_ck_box">Tropers</label>
</li>
<li>
<input type='checkbox' value='TroperWall' id='TroperWall_ck_box' name='TroperWall'>
<label for="TroperWall_ck_box">TroperWall</label>
</li>
<li>
<input type='checkbox' value='UsefulNotes' id='UsefulNotes_ck_box' name='UsefulNotes'>
<label for="UsefulNotes_ck_box">UsefulNotes</label>
</li>
</ul>
</div>
<hr class="clear-both" style="padding-top:18px" />
<div class="text-right font-s">
<div class="float-left">
<input type='checkbox' value='1' id='has_image_ck_box' checked="true" name='has_image'>
<label for="has_image_ck_box">With Image</label>
</div>
<button type="button" class="skinny" data-reset-form-onclick="browse-form">Reset</button>
<button class="blue skinny">Apply</button>
</div>
</div> </div>
<div class="max-width tile-view gutter-top grid">
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,ConverseError"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/ConverseError">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/converse_error350_9795.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Converse Error</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,TheManyDeathsOfYou"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/TheManyDeathsOfYou">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/MarioDeaths_3082.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">The Many Deaths Of You</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,FancyCamping"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/FancyCamping">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/img_0117_3.PNG"></div>
<span class="category bubble blue">Main</span>
<span class="title">Fancy Camping</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,OlderThanCableTV"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/OlderThanCableTV">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/family_watching_bw_tv.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Older Than Cable TV</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,AlcoholIsGasoline"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/AlcoholIsGasoline">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/what_happens_if_you_fill_up_a_car_with_alcohol_youtube_thumbnail.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Alcohol Is Gasoline</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,ObfuscatingDisability"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/ObfuscatingDisability">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/xavier_9651.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Obfuscating Disability</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,FightingIrish"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/FightingIrish">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/4fea7ff7e7a86843c0e0e3aea6b82bd2.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Fighting Irish</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,PanAndScan"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/PanAndScan">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/panscan.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Pan And Scan</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,TabletopRPG"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/TabletopRPG">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/roleplayers.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Tabletop RPG</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,OminousPipeOrgan"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/OminousPipeOrgan">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/Pipe_Organ_of_the_Oude_Kerk_dark_2975.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Ominous Pipe Organ</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,HeadsUpDisplay"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/HeadsUpDisplay">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/rsz_hud_7778.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Heads Up Display</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,SuperPersistentPredator"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/SuperPersistentPredator">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/gN4qY_1780.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Super Persistent Predator</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,RedFilterOfDoom"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/RedFilterOfDoom">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/dyingsoldier_9.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Red Filter Of Doom</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,DyeingForYourArt"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/DyeingForYourArt">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/baleweightchange_6558.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Dyeing For Your Art</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,AlternateTimeline"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/AlternateTimeline">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/1306701872chalkboardwhole_3558.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Alternate Timeline</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,DelusionConclusion"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/DelusionConclusion">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/comatose_kid_theorist_6.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Delusion Conclusion</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,OldNewBorrowedAndBlue"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/OldNewBorrowedAndBlue">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/oldnewborrowedblue.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Old New Borrowed And Blue</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,ConvenientlyPlacedSharpThing"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/ConvenientlyPlacedSharpThing">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/yet_another_suggestion_3.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Conveniently Placed Sharp Thing</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,GreyGoo"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/GreyGoo">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/e5440d05b9479ff6e13ab8cde8b95afc.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Grey Goo</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,IDidntMeanToKillHim"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/IDidntMeanToKillHim">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/i_didnt_mean_to_kill_him.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">I Didnt Mean To Kill Him</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,TerribleArtist"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/TerribleArtist">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/dress.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Terrible Artist</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,YowiesAndBunyipsAndDropBearsOhMy"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/YowiesAndBunyipsAndDropBearsOhMy">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/dropbears_5534.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Yowies And Bunyips And Drop Bears Oh My</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,ThisIndexMeows"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/ThisIndexMeows">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/ccc2_5359.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">This Index Meows</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,SinisterScrapingSound"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/SinisterScrapingSound">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/FreddysFrightfulFingers_6263.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Sinister Scraping Sound</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,NestedMouths"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/NestedMouths">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/nested_mouths.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Nested Mouths</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,BeautyMark"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/BeautyMark">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/beauty_mark_monroe_6670.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Beauty Mark</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,HumanCannonball"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/HumanCannonball">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/cannonball_small_9949.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Human Cannonball</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,PortalCrossroadWorld"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/PortalCrossroadWorld">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/rsz_arch_2658505_1280.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Portal Crossroad World</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,SummoningRitual"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/SummoningRitual">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/SummoningRitual.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Summoning Ritual</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,DoomTroops"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/DoomTroops">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/helghastdoomtroops_5771.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Doom Troops</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,ProductPromotionParade"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/ProductPromotionParade">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/chocobots_523.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Product Promotion Parade</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,YouCantGetYeFlask"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/YouCantGetYeFlask">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/get_ye_flask.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">You Cant Get Ye Flask</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,LumberMillMayhem"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/LumberMillMayhem">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/dkctf_sawmill_thrill1.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Lumber Mill Mayhem</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,VampiresHarem"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/VampiresHarem">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/van_helsing_brides_of_dracula.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Vampires Harem</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,WithThisRing"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/WithThisRing">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/tvt-tangledrings_5925.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">With This Ring</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,SmurfetteBreakout"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/SmurfetteBreakout">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/efd71ec974f3ad35f379a49d46720138.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Smurfette Breakout</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,FinalLoveDuet"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/FinalLoveDuet">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/aladdin_jasmine_final_duet.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Final Love Duet</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,InspectorLestrade"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/InspectorLestrade">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/inspector-lestrade2_153.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Inspector Lestrade</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,MuscleAngst"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/MuscleAngst">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/jaredcommander_9027.png"></div>
<span class="category bubble blue">Main</span>
<span class="title">Muscle Angst</span>
</a>
</article>
<article class="grid-item tile ">
<div class="tile-watch-button watch-button" data-modal-target="login" data-watch-info="Main,OurGraphicsWillSuckInTheFuture"><i class="fa fa-thumb-tack"></i></div>
<a href="/pmwiki/pmwiki.php/Main/OurGraphicsWillSuckInTheFuture">
<div class="image-wrapper"><img src="https://static.tvtropes.org/pmwiki/pub/images/anewhope_screen_8481.jpg"></div>
<span class="category bubble blue">Main</span>
<span class="title">Our Graphics Will Suck In The Future</span>
</a>
</article>
</div>
<div class="text-center">
<button name="randomize" value="1" class="button blue"><i class="fa fa-refresh"></i> Refresh</button>
</div>
</form>
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
<video id='overlay-video-player-box' data-video-id="" class='video-js vjs-default-skin vjs-16-9'>
</video>
<div class="_pmvv-vidbox-desc">
<h1 id="overlay-title"></h1>
<p id="overlay-descrip" class="_pmvv-vidbox-descTxt">
</p>
<div class="rating-row" data-video-id="">
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
</div>
</div>
</div>
<div class="example-media-row">
<div class="example-overlay">
<p>Example of:</p>
<div id="overlay-trope"> / </div>
</div>
<div class="media-sources-overlay example-overlay">
<p>Media sources:</p>
<div id="overlay-media"> / </div>
</div>
</div>
<p class="_pmvv-vidbox-stats text-right font-s" style="padding-top:8px; border-top: solid 1px rgba(255,255,255,0.2)">

<a href="#video-feedback" class="float-right" data-modal-target="login">Report</a>
</p>
</div>
</div>
</div>
</div>
<script type='text/javascript'>
        window.special_ops =  {
            member : 'no',
            isolated : 1,
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
                            var elem2 = document.createElement('script');
                elem2.async = false;
                elem2.src = "/design/js/browse.js?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7";
                document.getElementsByTagName('head')[0].appendChild(elem2);
                            var elem2 = document.createElement('script');
                elem2.async = false;
                elem2.src = "/design/js/imagesLoaded.js?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7";
                document.getElementsByTagName('head')[0].appendChild(elem2);
                                         var elem2 = document.createElement('script');
                elem2.async = false;
                elem2.src = "https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js";
                document.getElementsByTagName('head')[0].appendChild(elem2);
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
