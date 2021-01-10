<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Crowner Activity - TV Tropes</title>
<meta name="description" content="" />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="Crowner Activity - TV Tropes" />
<meta name="twitter:description" content="" />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="Crowner Activity" />
<meta property="og:type" content="" />
<meta property="og:url" content="https://tvtropes.org/pmwiki/crown_activity.php" />
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
<a href="/pmwiki/pmwiki.php/Main/RPGElements" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/Manga/AnatoliaStory" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
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
<li class="link-changes"><a href="/pmwiki/cutlist.php">
<i class="fa fa-cut"></i> Cutlist</a></li><li class="link-launches"><a href="/pmwiki/changes.php">
<i class="fa fa-pencil-square-o"></i> New Edits</a></li><li class="link-discards"><a href="/pmwiki/recent_edit_reasons.php">
<i class="fa fa-quote-left"></i> Edit Reasons</a></li><li class="link-cutList"><a href="/pmwiki/crown_activity.php">
<i class="fa crowner-icon">&#9819;</i> Crowner Activity</a></li> </ul>
<button id="top_more_button" onclick="toggle_more_menu('top');" type="button" class="nav__dropdown-toggle">More</button>
<ul id="top_more_list" class="more_menu hidden_more_list">
<li class="link-cutList more_list_item"><a href="/pmwiki/img_list.php">
<i class="fa fa-picture-o"></i> Images List</a></li><li class="link-videos more_list_item"><a href="/pmwiki/recent_videos.php">
<i class="fa fa-picture-o"></i> Recent Videos</a></li><li class="link-cutList more_list_item"><a href="/pmwiki/articles_new.php">
<i class="fa fa-newspaper-o"></i> New Articles</a></li> </ul>
</nav>
<div class="WikiWordModalStub"></div>
<div class="ImgUploadModalStub" data-page-type="Crowner Activity"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-Crowner Activity ">
<div id="main-entry" class="with-sidebar">

<input type="hidden" id="groupname-hidden" value="" />
<input type="hidden" id="title-hidden" value="" />
<h1 itemprop="headline" class="entry-title">Crowner Activity</h1>
<a href="#mobile-actions-toggle" id="mobile-actionbar-toggle" class="mobile-actionbar-toggle mobile-on" data-click-toggle="active">
<p class="tiny-off">Go To</p><span></span><span></span><span></span><i class="fa fa-pencil"></i></a>
<nav id="mobile-actions-bar" class="mobile-actions-wrapper mobile-on"></nav>
<div id="main-article" class="article-content retro-folders" itemprop="mainContentOfPage">
<div class="button-group skinny font-s">
<a href="/pmwiki/crown_index.php"> Crowner Index </a>
</div>
<div class="acaptionright"><strong>Latest Vote Catchers - Total Votes: 756743</strong><hr /><div class='text-left'><a href="/pmwiki/crowner.php/ImagePickin/ImageSuggestions137"><strong>Image Pickin: </strong>Image Suggestions 137</a><br /><a href="/pmwiki/crowner.php/ImagePickin/CloneJesus"><strong>Image Pickin: </strong>Clone Jesus</a><br /><a href="/pmwiki/crowner.php/PageAction/DoesThisRemindYouOfAnything"><strong>Page Action: </strong>Does This Remind You Of Anything</a><br /><a href="/pmwiki/crowner.php/PageAction/RealLifeSectionMaintenance61"><strong>Page Action: </strong>Real Life Section Maintenance 61</a><br /><a href="/pmwiki/crowner.php/PageAction/TyrannosaurusRex"><strong>Page Action: </strong>Tyrannosaurus Rex</a><br /><a href="/pmwiki/crowner.php/PageAction/GenreKiller2"><strong>Page Action: </strong>Genre Killer 2</a><br /><a href="/pmwiki/crowner.php/ImagePickin/TooManyBabies"><strong>Image Pickin: </strong>Too Many Babies</a><br /><a href="/pmwiki/crowner.php/PageAction/RealLifeSectionMaintenance60"><strong>Page Action: </strong>Real Life Section Maintenance 60</a><br /><a href="/pmwiki/crowner.php/BestEpisode/SpongebobSquarepants"><strong>Best Episode: </strong>Spongebob Squarepants</a><br /><a href="/pmwiki/crowner.php/ImagePickin/DarknessVonGothickname"><strong>Image Pickin: </strong>Darkness Von Gothickname</a><br /><a href="/pmwiki/crowner.php/ImagePickin/FlyingUnderCensorshipKabal"><strong>Image Pickin: </strong>Flying Under Censorship Kabal</a><br /><a href="/pmwiki/crowner.php/AlternativeTitles/SmallAnnoyingCreature"><strong>Alternative Titles: </strong>Small Annoying Creature</a><br /><a href="/pmwiki/crowner.php/PageAction/Suburbia"><strong>Page Action: </strong>Suburbia</a><br /><a href="/pmwiki/crowner.php/PageAction/NextGenFic"><strong>Page Action: </strong>Next Gen Fic</a><br /><a href="/pmwiki/crowner.php/SingleProposition/NoVideoExamplesPlease"><strong>Single Proposition: </strong>No Video Examples Please</a><br /><a href="/pmwiki/crowner.php/BestEpisode/Avatar"><strong>Best Episode: </strong>Avatar</a><br /><a href="/pmwiki/crowner.php/BestEpisode/PhineasAndFerb"><strong>Best Episode: </strong>Phineas And Ferb</a><br /><a href="/pmwiki/crowner.php/SingleProposition/FandomHeresy"><strong>Single Proposition: </strong>Fandom Heresy</a><br /><a href="/pmwiki/crowner.php/ImagePickin/NobleBirdOfPrey"><strong>Image Pickin: </strong>Noble Bird Of Prey</a><br /><a href="/pmwiki/crowner.php/AlternativeTitles/FauxHTMLTags"><strong>Alternative Titles: </strong>Faux HTML Tags</a><br /></div></div>
<span class="font-s bold">new example: 6th Jan '21 10:12:36 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/CloneJesus?openall=yes#2pb4bnh7"><span class="detail_line_crowner">Image Pickin</span>: Clone Jesus</a><hr /><span class="font-s bold">example edited: 6th Jan '21 01:36:52 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/ImageSuggestions137?openall=yes#c3i03mn6"><span class="detail_line_crowner">Image Pickin</span>: Image Suggestions 137</a><hr /><span class="font-s bold">new example: 5th Jan '21 08:28:54 PM</span><br /><a href="/pmwiki/crowner.php/PageAction/RealLifeSectionMaintenance61?openall=yes#rlnvh3d1"><span class="detail_line_crowner">Page Action</span>: Real Life Section Maintenance 61</a><hr /><span class="font-s bold">example edited: 5th Jan '21 08:22:12 PM</span><br /><a href="/pmwiki/crowner.php/PageAction/RealLifeSectionMaintenance60?openall=yes#94unhjlm"><span class="detail_line_crowner">Page Action</span>: Real Life Section Maintenance 60</a><hr /><span class="font-s bold">new example: 5th Jan '21 08:02:26 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/FlyingUnderCensorshipKabal?openall=yes#35mr5v2l"><span class="detail_line_crowner">Image Pickin</span>: Flying Under Censorship Kabal</a><hr /><span class="font-s bold">new example: 5th Jan '21 12:15:54 AM</span><br /><a href="/pmwiki/crowner.php/PageAction/TyrannosaurusRex?openall=yes#caqg63cy"><span class="detail_line_crowner">Page Action</span>: Tyrannosaurus Rex</a><hr /><span class="font-s bold">example edited: 4th Jan '21 08:31:51 PM</span><br /><a href="/pmwiki/crowner.php/PageAction/TheAce?openall=yes#4u676ohb"><span class="detail_line_crowner">Page Action</span>: The Ace</a><hr /><span class="font-s bold">new example: 3rd Jan '21 11:09:41 AM</span><br /><a href="/pmwiki/crowner.php/PageAction/GenreKiller2?openall=yes#sx39fg7f"><span class="detail_line_crowner">Page Action</span>: Genre Killer 2</a><hr /><span class="font-s bold">new example: 3rd Jan '21 11:06:48 AM</span><br /><a href="/pmwiki/crowner.php/PageAction/GenreKiller?openall=yes#ylth5r5w"><span class="detail_line_crowner">Page Action</span>: Genre Killer</a><hr /><span class="font-s bold">new example: 3rd Jan '21 04:44:04 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/DarknessVonGothickname?openall=yes#jko8aomi"><span class="detail_line_crowner">Image Pickin</span>: Darkness Von Gothickname</a><hr /><span class="font-s bold">new example: 2nd Jan '21 11:05:11 AM</span><br /><a href="/pmwiki/crowner.php/AlternativeTitles/BillyElliotPlot?openall=yes#irpcndld"><span class="detail_line_crowner">Alternative Titles</span>: Billy Elliot Plot</a><hr /><span class="font-s bold">example edited: 2nd Jan '21 08:06:04 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/InsultToRocks?openall=yes#7popqhth"><span class="detail_line_crowner">Image Pickin</span>: Insult To Rocks</a><hr /><span class="font-s bold">example edited: 2nd Jan '21 01:35:01 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/NobleBirdOfPrey?openall=yes#45pult5g"><span class="detail_line_crowner">Image Pickin</span>: Noble Bird Of Prey</a><hr /><span class="font-s bold">new example: 1st Jan '21 06:38:38 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/WelcomeToTheBigCity?openall=yes#j43eit0a"><span class="detail_line_crowner">Image Pickin</span>: Welcome To The Big City</a><hr /><span class="font-s bold">new example: 1st Jan '21 03:22:07 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/SuspiciousVideoGameGenerosity?openall=yes#iovi261k"><span class="detail_line_crowner">Image Pickin</span>: Suspicious Video Game Generosity</a><hr /><span class="font-s bold">example edited: 1st Jan '21 03:17:58 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/ImageSuggestions136?openall=yes#0dald68y"><span class="detail_line_crowner">Image Pickin</span>: Image Suggestions 136</a><hr /><span class="font-s bold">new example: 1st Jan '21 10:20:21 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/TooManyBabies?openall=yes#eeskrtf1"><span class="detail_line_crowner">Image Pickin</span>: Too Many Babies</a><hr /><span class="font-s bold">new example: 31st Dec '20 06:14:54 PM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/NoVideoExamplesPlease?openall=yes#7xevpmb6"><span class="detail_line_crowner">Single Proposition</span>: No Video Examples Please</a><hr /><span class="font-s bold">new example: 31st Dec '20 03:43:42 PM</span><br /><a href="/pmwiki/crowner.php/AlternativeTitles/SmallAnnoyingCreature?openall=yes#rgwmne8h"><span class="detail_line_crowner">Alternative Titles</span>: Small Annoying Creature</a><hr /><span class="font-s bold">new example: 31st Dec '20 07:06:24 AM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/GradualGrinder?openall=yes#8cpd3rqb"><span class="detail_line_crowner">Single Proposition</span>: Gradual Grinder</a><hr /><span class="font-s bold">new example: 31st Dec '20 07:04:18 AM</span><br /><a href="/pmwiki/crowner.php/PageAction/HistoryWithCelebrity?openall=yes#eus44vmp"><span class="detail_line_crowner">Page Action</span>: History With Celebrity</a><hr /><span class="font-s bold">new example: 30th Dec '20 12:53:54 AM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/AcceptableTargets?openall=yes#lw6qdibh"><span class="detail_line_crowner">Single Proposition</span>: Acceptable Targets</a><hr /><span class="font-s bold">new example: 29th Dec '20 03:48:14 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/Mockbuster?openall=yes#yolbl5n2"><span class="detail_line_crowner">Image Pickin</span>: Mockbuster</a><hr /><span class="font-s bold">new example: 28th Dec '20 09:48:33 AM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/MoebiusNeighborhood?openall=yes#58xm9krj"><span class="detail_line_crowner">Single Proposition</span>: Moebius Neighborhood</a><hr /><span class="font-s bold">example edited: 28th Dec '20 03:04:34 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/RememberedICouldFly?openall=yes#qap8jxwb"><span class="detail_line_crowner">Image Pickin</span>: Remembered I Could Fly</a><hr /><span class="font-s bold">new example: 27th Dec '20 07:49:59 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/PostApocalypticDog?openall=yes#atr46rmn"><span class="detail_line_crowner">Image Pickin</span>: Post Apocalyptic Dog</a><hr /><span class="font-s bold">new example: 27th Dec '20 07:47:51 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/NightmareFuelTheMandalorian?openall=yes#jdk25lis"><span class="detail_line_crowner">Image Pickin</span>: Nightmare Fuel The Mandalorian</a><hr /><span class="font-s bold">example edited: 27th Dec '20 12:23:11 PM</span><br /><a href="/pmwiki/crowner.php/AlternativeTitles/BugbearTLP?openall=yes#n78t6g4q"><span class="detail_line_crowner">Alternative Titles</span>: Bugbear TLP</a><hr /><span class="font-s bold">new example: 26th Dec '20 12:00:46 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/HiddenElfVillage?openall=yes#v4i074jz"><span class="detail_line_crowner">Image Pickin</span>: Hidden Elf Village</a><hr /><span class="font-s bold">example edited: 25th Dec '20 07:29:37 PM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/FandomHeresy?openall=yes#wlendvwt"><span class="detail_line_crowner">Single Proposition</span>: Fandom Heresy</a><hr /><span class="font-s bold">example edited: 25th Dec '20 08:52:57 AM</span><br /><a href="/pmwiki/crowner.php/PageAction/StandardStatusEffects2?openall=yes#4ihw5pi9"><span class="detail_line_crowner">Page Action</span>: Standard Status Effects 2</a><hr /><span class="font-s bold">new example: 24th Dec '20 01:38:16 PM</span><br /><a href="/pmwiki/crowner.php/AlternativeTitles/RealityEnsues?openall=yes#q0ccuvbh"><span class="detail_line_crowner">Alternative Titles</span>: Reality Ensues</a><hr /><span class="font-s bold">new example: 24th Dec '20 01:21:24 PM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/JohnBarleycornAndFriends?openall=yes#8upnmiz4"><span class="detail_line_crowner">Single Proposition</span>: John Barleycorn And Friends</a><hr /><span class="font-s bold">example edited: 23rd Dec '20 11:36:20 PM</span><br /><a href="/pmwiki/crowner.php/BestEpisode/GameGrumps?openall=yes#6dmf5dt9"><span class="detail_line_crowner">Best Episode</span>: Game Grumps</a><hr /><span class="font-s bold">new example: 23rd Dec '20 10:15:57 AM</span><br /><a href="/pmwiki/crowner.php/AlternativeTitles/ISuckAtSummaries?openall=yes#ync5bnmk"><span class="detail_line_crowner">Alternative Titles</span>: I Suck At Summaries</a><hr /><span class="font-s bold">new example: 21st Dec '20 06:05:53 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/MildlyMilitary?openall=yes#l0a04ea1"><span class="detail_line_crowner">Image Pickin</span>: Mildly Military</a><hr /><span class="font-s bold">example edited: 20th Dec '20 09:57:18 PM</span><br /><a href="/pmwiki/crowner.php/AlternativeTitles/JohnBarleycornAndFriends2?openall=yes#2krx57mi"><span class="detail_line_crowner">Alternative Titles</span>: John Barleycorn And Friends 2</a><hr /><span class="font-s bold">example edited: 20th Dec '20 04:54:35 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/ImageSuggestions135?openall=yes#axdrp5xi"><span class="detail_line_crowner">Image Pickin</span>: Image Suggestions 135</a><hr /><span class="font-s bold">new example: 20th Dec '20 03:42:27 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/AnalogHorror?openall=yes#a14n8zwt"><span class="detail_line_crowner">Image Pickin</span>: Analog Horror</a><hr /><span class="font-s bold">new example: 20th Dec '20 03:39:11 PM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/SeriesIDreamOfJeannie?openall=yes#pxuyq6tu"><span class="detail_line_crowner">Image Pickin</span>: Series I Dream Of Jeannie</a><hr /><span class="font-s bold">example edited: 20th Dec '20 11:43:40 AM</span><br /><a href="/pmwiki/crowner.php/PageAction/RealLifeSectionMaintenance59?openall=yes#bsxt62v8"><span class="detail_line_crowner">Page Action</span>: Real Life Section Maintenance 59</a><hr /><span class="font-s bold">example edited: 20th Dec '20 10:13:36 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/NoHonorAmongThieves?openall=yes#h8q5xdvc"><span class="detail_line_crowner">Image Pickin</span>: No Honor Among Thieves</a><hr /><span class="font-s bold">example edited: 20th Dec '20 08:51:27 AM</span><br /><a href="/pmwiki/crowner.php/PageAction/FranchiseActors?openall=yes#z2evpqfj"><span class="detail_line_crowner">Page Action</span>: Franchise Actors</a><hr /><span class="font-s bold">new example: 19th Dec '20 06:52:46 PM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/AsManyXAsThereAreY?openall=yes#erm9yt7i"><span class="detail_line_crowner">Single Proposition</span>: As Many X As There Are Y</a><hr /><span class="font-s bold">example edited: 19th Dec '20 01:17:47 PM</span><br /><a href="/pmwiki/crowner.php/BestEpisode/OKKOLetsBeHeroes?openall=yes#9zpn8l40"><span class="detail_line_crowner">Best Episode</span>: OKKO Lets Be Heroes</a><hr /><span class="font-s bold">example edited: 18th Dec '20 04:47:19 AM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/RenameTenWithATwotoBeerGoggles?openall=yes#vk6n0jsj"><span class="detail_line_crowner">Single Proposition</span>: Rename Ten With A Twoto Beer Goggles</a><hr /><span class="font-s bold">example edited: 18th Dec '20 01:53:24 AM</span><br /><a href="/pmwiki/crowner.php/AlternativeTitles/FauxHTMLTags?openall=yes#83i1slxy"><span class="detail_line_crowner">Alternative Titles</span>: Faux HTML Tags</a><hr /><span class="font-s bold">new example: 17th Dec '20 08:54:45 AM</span><br /><a href="/pmwiki/crowner.php/SingleProposition/AdaptedOut?openall=yes#8hw17wrj"><span class="detail_line_crowner">Single Proposition</span>: Adapted Out</a><hr /><span class="font-s bold">new example: 17th Dec '20 07:19:29 AM</span><br /><a href="/pmwiki/crowner.php/ImagePickin/StrangeMindsThinkAlike?openall=yes#asov60y5"><span class="detail_line_crowner">Image Pickin</span>: Strange Minds Think Alike</a><hr /><span class="font-s bold">new example: 16th Dec '20 01:50:02 PM</span><br /><a href="/pmwiki/crowner.php/PageAction/DoesThisRemindYouOfAnything?openall=yes#t5crbld6"><span class="detail_line_crowner">Page Action</span>: Does This Remind You Of Anything</a><hr />
<nav class="pagination-box button-group text-center " data-total-pages="15135" data-url-prefix="/pmwiki/crown_activity.php?page=">
<span class="pagination-jump-box-wrapper mobile-on">
<form class="pagination-jump-box hidden-until-active font-m">
<input value="1" type="tel">
<a href="#jump-to-page" title="Jump to page" class="color-white dead-button" onClick="activate_jump_menu(this);return false;">GO <i class="fa fa-angle-right"></i></a>
</form>
</span>
<a href="/pmwiki/crown_activity.php?page=1" class="mobile-off ">
<span class="current-page"> 1 </span> </a>
<a href="/pmwiki/crown_activity.php?page=2" class="mobile-off ">
2 </a>
<a href="/pmwiki/crown_activity.php?page=3" class="mobile-off ">
3 </a>
<a href="#jump-to-page" title="Jump to page" class="pagination-jump-box-toggle mobile-on dead-button" onClick="toggle_jump_menu(this);return false;">
<span class="font-s">page 1 of 15135</span>
</a>
<a href="/pmwiki/crown_activity.php?page=2">
<span class="mobile-on"><i class="fa fa-angle-right"></i></span>
<span class="mobile-off">Next</span>
</a>
<a href="/pmwiki/crown_activity.php?page=15135">
<i class="fa fa-angle-double-right"></i>
</a>
</nav>
<script type="text/javascript">

	function toggle_jump_menu(e){
		$(e).siblings('.pagination-jump-box-wrapper').children('.pagination-jump-box').toggle('active');
	}

	function activate_jump_menu(e){
			var p = $(e).siblings('input').val();
			var t = $(e).closest('.pagination-box').data('total-pages');

			if(p > 0 && p <= t){
					window.location.href = $(e).closest('.pagination-box').data('url-prefix') + p;
			}else{
					show_modal('alert',encodeURIComponent('Whoops, that page might be out of range.'));
			}
	}

</script>
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
