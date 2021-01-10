<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Trope Launch Pad - TV Tropes</title>
<meta name="description" content="" />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="Trope Launch Pad - TV Tropes" />
<meta name="twitter:description" content="" />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="Trope Launch Pad" />
<meta property="og:type" content="" />
<meta property="og:url" content="https://tvtropes.org/pmwiki/tlp_activity.php" />
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
<link rel="stylesheet" href="/design/css/ykttw.css?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7" type="text/css">
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
<a href="/pmwiki/pmwiki.php/Main/FireAndBrimstoneHell" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/Literature/AmeliaBedelia" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
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
<li class="link-changes"><a href="/pmwiki/yk_activity.php">
<i class="io icon-rocket"></i> Launch Pad</a></li><li class="link-launches"><a href="/pmwiki/launches.php">
<i class="io icon-hat"></i> Launches</a></li><li class="link-discards"><a href="/pmwiki/discards.php">
<i class="fa fa-bomb"></i> Discards</a></li><li class="link-cutList"><a href="#history" data-modal-target="login"><i class="fa fa-history"></i> History</a></li> </ul>
<ul id="top_more_list" class="more_menu hidden_more_list">
</ul>
</nav>
<div class="WikiWordModalStub"></div>
<div class="ImgUploadModalStub" data-page-type="YKTTW"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-YKTTW ">
<div id="main-entry" class="with-sidebar">
<h1 itemprop="headline" class="entry-title">Trope Launch Pad</h1>
<a href="#mobile-actions-toggle" id="mobile-actionbar-toggle" class="mobile-actionbar-toggle mobile-on" data-click-toggle="active">
<p class="tiny-off">Go To</p><span></span><span></span><span></span><i class="fa fa-pencil"></i></a>
<nav id="mobile-actions-bar" class="mobile-actions-wrapper mobile-on"></nav>
<div id="main-article" class="article-content">
<p>You have a trope that you have seen a million times. It just needs a snappy name. Discuss it here! This is also a good place to call for examples.</p>
<p><strong>How this works:</strong> Cruise through the list looking for a title or synopsis (which we call the 'laconic version') that might interest you. View the draft description with attached discussion, then give the sponsor your feedback and maybe an example or two of where you have seen the trope in media. </p>
<p>Have an awesome idea but think it might already exist? Check the <a href="/pmwiki/query.php?type=tf">Trope Finder</a> or explore the <a href="/pmwiki/index_report.php">TV Trope indexes</a> to see whether another troper beat you to the punch.</p>
<p>Please see the <a href="/pmwiki/pmwiki.php/Administrivia/TLPGuidelines">TLP Guidelines</a> for the full etiquette of TLP.</p>
<div class="submit-trope">
<div class="two-column gutter-top">
<div class="column-box left">
<a href="#new" class="full-width button text-center blue logged-in " data-modal-target='login'>
<i class="fa fa-rocket"></i> Launch a New Trope
</a>
</div>
<div class="column-box right">
<form action="/pmwiki/yk_activity.php" class="search-form" name="search" method="get">
<div class="column-box">
<input type="text" id="ykttw-search" class="form-control" name="q" placeholder="Search Launch Pad">
<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
</div>
</form>
</div>
</div>
</div>
<hr class="solid gutter-top" />
<div class="two-column text-right">
<div class="inline-block position-relative button-group skinny font-s float-right gutter-left">
<a href="/pmwiki/yk_activity.php?filter=all" class="blue">All</a></li>
<a href="/pmwiki/yk_activity.php?filter=flagged" class=""><i class="fa fa-thumbs-up"></i></a>
</div>
<div class="inline-block gutter-left position-relative">
<a class="button skinny" data-hover-menu-target="filter-menu"><i class="fa fa-angle-down"></i> Sort By</a>
<div id="filter-menu" class="hover-menu text-left right" data-arrow="right" style="margin-top:4px;">
<a href="/pmwiki/yk_activity.php?sort=latest">Latest Reply</a>
<a href="/pmwiki/yk_activity.php?sort=newest">Newest</a>
<a href="/pmwiki/yk_activity.php?sort=oldest">Oldest</a>
<a href="/pmwiki/yk_activity.php?sort=replies">Most Replies</a>
<a href="/pmwiki/yk_activity.php?sort=hats">Hats</a>
<a href="/pmwiki/yk_activity.php?sort=discards">Discards</a>
</div>
</div>
</div>
<div class="item-list">
<a name="xhjk7klcdqjtsg4tbufx5u9p"></a>
<div id="comment-xhjk7klcdqjtsg4tbufx5u9p" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-xhjk7klcdqjtsg4tbufx5u9p" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 37</span><a href='/pmwiki/discussion.php?id=xhjk7klcdqjtsg4tbufx5u9p' class='bold '>Fanon Welding [YMMV]</a></h2>
<p>Two unrelated works are <a class='twikilink' href='/pmwiki/pmwiki.php/Main/EpilepticTrees' title='/pmwiki/pmwiki.php/Main/EpilepticTrees'>theorized</a> to share the same universe or continuity.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=xhjk7klcdqjtsg4tbufx5u9p><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=xhjk7klcdqjtsg4tbufx5u9p'>55 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/Unnerving_Posterior' class='gutter-right'>Unnerving_Posterior</a><br />Created: Nov 2nd 2020 at 12:18:06 PM</div></div>
</div>
</div>
</div>
</div>
<a name="mpbezlt3ltm45fohehty7qqk"></a>
<div id="comment-mpbezlt3ltm45fohehty7qqk" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-mpbezlt3ltm45fohehty7qqk" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 6</span><a href='/pmwiki/discussion.php?id=mpbezlt3ltm45fohehty7qqk' class='bold '>Forged "Insect in Food" Complaint</a></h2>
<p>Putting something gross in your food after purchase and pretending it was always there to get a refund or tarnish a reputation.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=mpbezlt3ltm45fohehty7qqk><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=mpbezlt3ltm45fohehty7qqk'>16 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/Kirby0189' class='gutter-right'>Kirby0189</a><br />Created: yesterday</div></div>
</div>
</div>
</div>
</div>
<a name="33onyz5ruvfoa45c9c283cj4"></a>
<div id="comment-33onyz5ruvfoa45c9c283cj4" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-33onyz5ruvfoa45c9c283cj4" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 2</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 13</span><a href='/pmwiki/discussion.php?id=33onyz5ruvfoa45c9c283cj4' class='bold '>Sea Of Sand</a></h2>
<p>A desert depicted as being nothing but sand and sand dunes.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=33onyz5ruvfoa45c9c283cj4><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=33onyz5ruvfoa45c9c283cj4'>56 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/MaxWest' class='gutter-right'>MaxWest</a><br />Created: Jun 18th 2014 at 9:14:28 PM</div></div>
</div>
</div>
</div>
</div>
<a name="bslamxz1jc5i2o32yme9e76g"></a>
<div id="comment-bslamxz1jc5i2o32yme9e76g" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-bslamxz1jc5i2o32yme9e76g" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 1</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 2</span><a href='/pmwiki/discussion.php?id=bslamxz1jc5i2o32yme9e76g' class='bold '>Romance With The Fan</a></h2>
<p>An artist has relations with one of their dedicated fans.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=bslamxz1jc5i2o32yme9e76g><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=bslamxz1jc5i2o32yme9e76g'>14 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/mightymewtron' class='gutter-right'>mightymewtron</a><br />Created: 20 hours ago</div></div>
</div>
</div>
</div>
</div>
<a name="mv74kmtin6f4j2de4e1ghlnq"></a>
<div id="comment-mv74kmtin6f4j2de4e1ghlnq" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-mv74kmtin6f4j2de4e1ghlnq" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 1</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 5</span><a href='/pmwiki/discussion.php?id=mv74kmtin6f4j2de4e1ghlnq' class='bold '>Buddha Earlobes (Needs Examples)</a></h2>
<p>Stretched/Elongated earlobes are used to symbolize wisdom and/or a connection with Buddhism.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=mv74kmtin6f4j2de4e1ghlnq><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=mv74kmtin6f4j2de4e1ghlnq'>16 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/Makir' class='gutter-right'>Makir</a><br />Created: Dec 26th 2020 at 6:52:49 AM</div></div>
</div>
</div>
</div>
</div>
<a name="6u5akmb9w0fgx5u4lv6bfp10"></a>
<div id="comment-6u5akmb9w0fgx5u4lv6bfp10" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-6u5akmb9w0fgx5u4lv6bfp10" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 8</span><a href='/pmwiki/discussion.php?id=6u5akmb9w0fgx5u4lv6bfp10' class='bold '>Guest Protagonist</a></h2>
<p>A entry in a franchise in which the main character is a guest character, rather than an established part of the franchise.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=6u5akmb9w0fgx5u4lv6bfp10><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=6u5akmb9w0fgx5u4lv6bfp10'>12 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/RossN' class='gutter-right'>RossN</a><br />Created: Dec 15th 2020 at 2:45:08 PM</div></div>
</div>
</div>
</div>
</div>
<a name="1mamqmmxxd0kwgbd9tjjo1ki"></a>
<div id="comment-1mamqmmxxd0kwgbd9tjjo1ki" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-1mamqmmxxd0kwgbd9tjjo1ki" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 2</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 6</span><a href='/pmwiki/discussion.php?id=1mamqmmxxd0kwgbd9tjjo1ki' class='bold '>"Avoid This Area" Effect</a></h2>
<p>A location is altered so (certain types of) people avoid it.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=1mamqmmxxd0kwgbd9tjjo1ki><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=1mamqmmxxd0kwgbd9tjjo1ki'>36 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/Malady' class='gutter-right'>Malady</a><br />Created: Jul 26th 2017 at 2:58:09 PM</div></div>
</div>
</div>
</div>
</div>
<a name="i5dconqeqbwpswpnfruz2qim"></a>
<div id="comment-i5dconqeqbwpswpnfruz2qim" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-i5dconqeqbwpswpnfruz2qim" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 3</span><a href='/pmwiki/discussion.php?id=i5dconqeqbwpswpnfruz2qim' class='bold '>Red Riding Hood Replica</a></h2>
<p>A character is based on Little Red Riding Hood aesthetically and/or characteristically.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=i5dconqeqbwpswpnfruz2qim><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=i5dconqeqbwpswpnfruz2qim'>0 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/SkyCat32' class='gutter-right'>SkyCat32</a><br />Created: 1 hour ago</div></div>
</div>
</div>
</div>
</div>
<a name="6xp7z1bqy35jzyj6zrfy8qcl"></a>
<div id="comment-6xp7z1bqy35jzyj6zrfy8qcl" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-6xp7z1bqy35jzyj6zrfy8qcl" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 8</span><a href='/pmwiki/discussion.php?id=6xp7z1bqy35jzyj6zrfy8qcl' class='bold '>Shouting Free-For-All</a></h2>
<p>An entire group all shouting at each other at the same time.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=6xp7z1bqy35jzyj6zrfy8qcl><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=6xp7z1bqy35jzyj6zrfy8qcl'>8 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/Tallens' class='gutter-right'>Tallens</a><br />Created: Jan 2nd 2021 at 5:46:08 PM</div></div>
</div>
</div>
</div>
</div>
<a name="cni3v1f8r7oxxkaea73p55dx"></a>
<div id="comment-cni3v1f8r7oxxkaea73p55dx" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-cni3v1f8r7oxxkaea73p55dx" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 1</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 6</span><a href='/pmwiki/discussion.php?id=cni3v1f8r7oxxkaea73p55dx' class='bold '>Stealing The Help (LAUNCHABLE?)</a></h2>
<p>Someone has a particularly competent servant and their acquaintances covet the servant so much that try to hire them themselves by offering them a bigger salary or other benefits.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=cni3v1f8r7oxxkaea73p55dx><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=cni3v1f8r7oxxkaea73p55dx'>37 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/XFllo' class='gutter-right'>XFllo</a><br />Created: Sep 7th 2020 at 2:08:25 PM</div></div>
</div>
</div>
</div>
</div>
<a name="an1tfgllz3go28w0ez144fqu"></a>
<div id="comment-an1tfgllz3go28w0ez144fqu" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-an1tfgllz3go28w0ez144fqu" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 8</span><a href='/pmwiki/discussion.php?id=an1tfgllz3go28w0ez144fqu' class='bold '>Ultra Copy (Launching Soon)</a></h2>
<p>Characters based on the <em><a class='twikilink' href='/pmwiki/pmwiki.php/Franchise/UltraSeries' title='/pmwiki/pmwiki.php/Franchise/UltraSeries'>Ultra Series</a></em> character Ultraman.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=an1tfgllz3go28w0ez144fqu><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=an1tfgllz3go28w0ez144fqu'>12 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/VengefulBale' class='gutter-right'>VengefulBale</a><br />Created: Dec 26th 2020 at 11:07:36 PM</div></div>
</div>
</div>
</div>
</div>
<a name="i04cikwt5zmk2xezt03px9fj"></a>
<div id="comment-i04cikwt5zmk2xezt03px9fj" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-i04cikwt5zmk2xezt03px9fj" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 3</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 7</span><a href='/pmwiki/discussion.php?id=i04cikwt5zmk2xezt03px9fj' class='bold '>Chain Lethality Enabler</a></h2>
<p>A character or unit is rewarded for scoring a kill (or some equivalent) in a way that directly facilitates immediately scoring more kills.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=i04cikwt5zmk2xezt03px9fj><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=i04cikwt5zmk2xezt03px9fj'>37 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/AGuy' class='gutter-right'>AGuy</a><br />Created: Dec 9th 2020 at 12:42:43 PM</div></div>
</div>
</div>
</div>
</div>
<a name="axxeh7nzbm7sqi59ho0led4w"></a>
<div id="comment-axxeh7nzbm7sqi59ho0led4w" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-axxeh7nzbm7sqi59ho0led4w" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-light'><i class='io icon-hat'></i> 0</span><a href='/pmwiki/discussion.php?id=axxeh7nzbm7sqi59ho0led4w' class='bold '>Pull The Knife Out</a></h2>
<p>Someone pulls out a knife (or another edged weapon) out of themselves after they've been stabbed.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=axxeh7nzbm7sqi59ho0led4w><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=axxeh7nzbm7sqi59ho0led4w'>18 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/Traveler123' class='gutter-right'>Traveler123</a><br />Created: 20 hours ago</div></div>
</div>
</div>
</div>
</div>
<a name="xqdedn4x1wc3496634dn2oet"></a>
<div id="comment-xqdedn4x1wc3496634dn2oet" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-xqdedn4x1wc3496634dn2oet" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 13</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 19</span><a href='/pmwiki/discussion.php?id=xqdedn4x1wc3496634dn2oet' class='bold '>Signature Role</a></h2>
<p>An actor's most well-known role(s).
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=xqdedn4x1wc3496634dn2oet><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=xqdedn4x1wc3496634dn2oet'>65 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/Autism97' class='gutter-right'>Autism97</a><br />Created: Jul 25th 2019 at 7:35:06 PM</div></div>
</div>
</div>
</div>
</div>
<a name="8iz45pl5hsxowu52m3mhxgth"></a>
<div id="comment-8iz45pl5hsxowu52m3mhxgth" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-8iz45pl5hsxowu52m3mhxgth" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 2</span><a href='/pmwiki/discussion.php?id=8iz45pl5hsxowu52m3mhxgth' class='bold '>Right Warzone, Wrong Time</a></h2>
<p>A character references doing a wartime activity during an improper time.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=8iz45pl5hsxowu52m3mhxgth><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=8iz45pl5hsxowu52m3mhxgth'>2 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/SasquatchJim' class='gutter-right'>SasquatchJim</a><br />Created: 3 hours ago</div></div>
</div>
</div>
</div>
</div>
<a name="0z16mrl36fi16oai9yu1gl6m"></a>
<div id="comment-0z16mrl36fi16oai9yu1gl6m" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-0z16mrl36fi16oai9yu1gl6m" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-light'><i class='io icon-hat'></i> 0</span><a href='/pmwiki/discussion.php?id=0z16mrl36fi16oai9yu1gl6m' class='bold '>Wounds To Keep</a></h2>
<p><a class='twikilink' href='/pmwiki/pmwiki.php/Main/VoluntaryShapeshifting' title='/pmwiki/pmwiki.php/Main/VoluntaryShapeshifting'>Voluntary Shapeshifters</a> and <a class='twikilink' href='/pmwiki/pmwiki.php/Main/HealingFactor' title='/pmwiki/pmwiki.php/Main/HealingFactor'>fast healers</a> keeping their wound/scar for personal reasons.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=0z16mrl36fi16oai9yu1gl6m><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=0z16mrl36fi16oai9yu1gl6m'>2 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/EvilerThanThou' class='gutter-right'>EvilerThanThou</a><br />Created: 4 hours ago</div></div>
</div>
</div>
</div>
</div>
<a name="ffpqmyu7tvjj8dwtrww390xk"></a>
<div id="comment-ffpqmyu7tvjj8dwtrww390xk" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-ffpqmyu7tvjj8dwtrww390xk" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 2</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 8</span><a href='/pmwiki/discussion.php?id=ffpqmyu7tvjj8dwtrww390xk' class='bold '>Hunger Causes Lethargy (formerly Hunger Causes Drowsiness)</a></h2>
<p>When a character is hungry, they become tired or even fall asleep (and it's not malnutrition or hypoglycemia).
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=ffpqmyu7tvjj8dwtrww390xk><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=ffpqmyu7tvjj8dwtrww390xk'>15 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/Unicorndance' class='gutter-right'>Unicorndance</a><br />Created: Oct 31st 2020 at 6:27:37 PM</div></div>
</div>
</div>
</div>
</div>
<a name="wde5xmje1mhk3a86wphl535t"></a>
<div id="comment-wde5xmje1mhk3a86wphl535t" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-wde5xmje1mhk3a86wphl535t" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 2</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 19</span><a href='/pmwiki/discussion.php?id=wde5xmje1mhk3a86wphl535t' class='bold '>Fake Italian</a></h2>
<p>Italians played by non-Italians.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=wde5xmje1mhk3a86wphl535t><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=wde5xmje1mhk3a86wphl535t'>44 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/eggyolks' class='gutter-right'>eggyolks</a><br />Created: Apr 9th 2019 at 10:19:25 AM</div></div>
</div>
</div>
</div>
</div>
<a name="39h9qv19jvgwg8dfo2drb6ev"></a>
<div id="comment-39h9qv19jvgwg8dfo2drb6ev" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-39h9qv19jvgwg8dfo2drb6ev" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-light'><i class='fa fa-bomb'></i> 0</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 5</span><a href='/pmwiki/discussion.php?id=39h9qv19jvgwg8dfo2drb6ev' class='bold '>Deliverance From Damnation</a></h2>
<p>A person can be rescued from Hell and brought to Heaven.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=39h9qv19jvgwg8dfo2drb6ev><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=39h9qv19jvgwg8dfo2drb6ev'>9 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/AutumnLeaves' class='gutter-right'>AutumnLeaves</a><br />Created: yesterday</div></div>
</div>
</div>
</div>
</div>
<a name="f22fistzadwxgwm90g32njlb"></a>
<div id="comment-f22fistzadwxgwm90g32njlb" class="comment-box  has-footer no-avatar ">
<div class="comment-body">
<div class="troper-avatar-wrapper">
<span class="troper-avatar">
<a href="pmwiki.php/Tropers/">
<img src="" />
</a>
</span>
</div>
<div class="troper-comment has-title">
<a href="#comment-f22fistzadwxgwm90g32njlb" class="troper-post-time"></a>
<div class="comment">
<h2 class='comment-title'><span class='gutter-left float-right font-s text-red'><i class='fa fa-bomb'></i> 1</span><span class='float-right font-s text-green-dark'><i class='io icon-hat'></i> 17</span><a href='/pmwiki/discussion.php?id=f22fistzadwxgwm90g32njlb' class='bold '>Booing Crowd</a></h2>
<p>A character tries to perform, but gets booed by the crowd.
</p>
<div class='footer'><div class='button-group skinny font-s float-right'><a href='#upvote' class='upvote-button ' data-modal-target='login' name=f22fistzadwxgwm90g32njlb><i class='fa fa-thumbs-up'></i> <span class='count'></span></a><a href='/pmwiki/discussion.php?id=f22fistzadwxgwm90g32njlb'>48 replies <i class='fa fa-chevron-right font-xs'></i></a></div><div class='font-s text-light' style='line-height:1.2em;'>Sponsor: <a href='/pmwiki/pmwiki.php/Tropers/WarJay77' class='gutter-right'>WarJay77</a><br />Created: Oct 2nd 2020 at 6:11:00 PM</div></div>
</div>
</div>
</div>
</div>
<div style="display: none">
<a name="f22fistzadwxgwm90g32njlb"></a>
<a class="nuke"><i class="fa fa-bomb"></i>1</a>
<a class="tropeworthy"><i class="io icon-hat"></i>17</a>
<a href="/pmwiki/discussion.php?id=f22fistzadwxgwm90g32njlb#comment-section" class='new-comments'><i class="fa fa-comments"></i>48</a>
<p class="desc">A character tries to perform, but gets booed by the crowd.
</p>
Sponsor: <a href="#user-link-here">WarJay77</a>
Created: Oct 2nd 2020 at 6:11:00 PM Last reply: 4 hours ago by Segal991
<a class="btn view-trope" href="/pmwiki/discussion.php?id=f22fistzadwxgwm90g32njlb">View draft <i class="fa fa-chevron-right"></i></a>
</div>
</div>
<nav class="pagination-box button-group text-center gutter-topx2" data-total-pages="394" data-url-prefix="/pmwiki/tlp_activity.php?filter=all&sort=latest&q=&page=">
<span class="pagination-jump-box-wrapper mobile-on">
<form class="pagination-jump-box hidden-until-active font-m">
<input value="1" type="tel">
<a href="#jump-to-page" title="Jump to page" class="color-white dead-button" onClick="activate_jump_menu(this);return false;">GO <i class="fa fa-angle-right"></i></a>
</form>
</span>
<a href="/pmwiki/tlp_activity.php?filter=all&sort=latest&q=&page=1" class="mobile-off ">
<span class="current-page"> 1 </span> </a>
<a href="/pmwiki/tlp_activity.php?filter=all&sort=latest&q=&page=2" class="mobile-off ">
2 </a>
<a href="/pmwiki/tlp_activity.php?filter=all&sort=latest&q=&page=3" class="mobile-off ">
3 </a>
<a href="#jump-to-page" title="Jump to page" class="pagination-jump-box-toggle mobile-on dead-button" onClick="toggle_jump_menu(this);return false;">
<span class="font-s">page 1 of 394</span>
</a>
<a href="/pmwiki/tlp_activity.php?filter=all&sort=latest&q=&page=2">
<span class="mobile-on"><i class="fa fa-angle-right"></i></span>
<span class="mobile-off">Next</span>
</a>
<a href="/pmwiki/tlp_activity.php?filter=all&sort=latest&q=&page=394">
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
<hr />
<div class="font-s">
<p><strong>Looking for a discussion you thought was here? One of two things could have happened.</strong></p>
<p>It could have been launched or "discarded". Check <a href="/pmwiki/launches.php">here</a>. Discarded just means that someone thought it had come to a resolution not needing a launch. It can be restored. Just push the "restore" button on the Launches list.</p>
<p>You thought you had written it up or read it here, but it was all just a dream or an elaborate daylight fantasy. Don't feel bad. It happens to us all.</p>
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
                            var elem2 = document.createElement('script');
                elem2.async = false;
                elem2.src = "/design/js/ykttw.js?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7";
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
