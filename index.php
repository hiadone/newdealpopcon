<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>NEWDEALPOPCON</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="format-detection" content="telephone=no, email=no, address=no">
<!-- 자동 링크 적용 안되게 -->
<meta property="og:site_name" content="NEWDEALPOPCON">
<meta property="og:title" content="NEWDEALPOPCON">
<meta property="og:type" content="website">
<meta property="og:url" content=" ">
<meta property="og:image" content=" ">
<meta property="og:description" content="NEWDEALPOPCON">
<meta name="description" content="NEWDEALPOPCON">
<link rel="shortcut icon" href=" ">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=yes">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="common_newdeal/css/normalize.css" rel="stylesheet" type="text/css">
<link href="common_newdeal/css/common.css" rel="stylesheet" type="text/css">
<link href="common_newdeal/css/main.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="plugins/jquery.fitvids.js"></script>


<!-- 페이지 버튼 스크립트 -->
<script src="common_newdeal/js/main.js"></script>
<script type='text/javascript' src='http://www.mobipopcon.com/js/jquery.cookie.js'></script>
<script type='text/javascript' src='http://www.mobipopcon.com/js/shortcut.js'></script>
 <!--script src="js/jssor.slider-22.1.8.mini.js" type="text/javascript"></script-->

<script type="text/javascript">
      window.addEventListener('load', function() { window.scrollTo(0,1); }, false);//주소창 숨기기
    </script>


<script language = "javascript"> 
$(document).ready(function() {
    if (window.history && window.history.pushState) {
        window.history.pushState('forward', null, document.location.href);
        
        var popped = ('state' in window.history && window.history.state !== null), initialURL = location.href;

        $(window).bind('popstate', function (event) {
          // Ignore inital popstate that some browsers fire on page load
          var initialPop = !popped && location.href == initialURL
          popped = true
          if (initialPop) return;

          pelicanCount('05WM');

        });
    }
});

function pelicanCount(value) {

  //  if (index < 1) { return; }
    $.ajax({
        type: "GET", 
        async: true,
        data: "pageid="+value+"&lang=utf-8&out=json", 
        url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
        cache: false, 
        dataType: "jsonp", 
        jsonp: "jquerycallback",
        success: function(data) 
        {
            parent.top.location.replace("http://tracking.performix.co.kr/aff_c?offer_id=30&aff_id=1042&aff_sub2=hi4");
        },
        error: function(xhr, status, error) {} 
    });
}







function autoResize(i)
{
    var iframeHeight=
    (i).contentWindow.document.body.scrollHeight;
//  console.log(iframeHeight);
  //  $("#sliders").css('height',iframeHeight);
    
 
}


function goLink058f(url)
{ 
  window.location.href=url;
}

function goLink058W(url)
{ 
  window.location.href=url;
}

</script>


<style>
ul.slider li:nth-child(n+2) {display:none;}
</style>

</head>
<body >

<!-- 구글애널리틱스 시작 --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88829342-5', 'auto');
  ga('send', 'pageview');
</script> 

     

<body>
<header >
    <h1>
        <img src="image/logo.png" alt="logo">
    </h1>
   
</header>
<div  id="div_ajax_load_image" style="position:fixed;display:block;top:0px;left:0px;width:100%;height:100%;z-index:9999;text-align:center;line-height:500px;"><img src="image/loading.gif" style="vertical-align:cmiddle;">
</div>

<!-- header -->
<div class="wrap" id="shop_" style="padding-top: 13.5%">
                
                  <!-- 이미지 슬라이드 -->
    <div id="banner_00" >
        <div class="slide" > 
            <ul class="slider foin_058W" >
            <?php include './include/foin_058W.php' ?>
            </ul>
            <div class="newPager"></div>
            <div class="newAutoControl"></div>
            <span class="btn prev"></span>
            <span class="btn next"></span>
         </div>
    </div>
    <!-- 실시간 핫딜! -->
    <div class="all" >
        <div >
          <h2>실시간 핫딜!</h2>
        </div>
        <div class="prod_list" id="foin_058a" >
        <?php include './include/foin_058a.php' ?>
        </div>
    </div>
        
 

    <div class="banner_01" id="banner_01">
        <div class="slide"> 
            <ul class="slider foin_058f">
            <?php include './include/foin_058f.php' ?>
            </ul>
            <div class="newPager"></div>
            <div class="newAutoControl"></div>
            <span class="btn prev"></span>
            <span class="btn next"></span>
        </div>
    </div> 





    <!-- 상품리스트 영역 -->
    <div class="all">
        <div>
          <h2>대박DEAL</h2>
        </div>
        <div class="prod_list" id="foin_058Y" style="width:100%;">
        <?php include './include/foin_058Y.php' ?>
        </div>

    </div>
     <!-- 배너영역 -->    
       <!-- <div class="banner">
          <img src="image/banner_bottom.png" alt="banner">
        </div>--> 
    <div class="banner_01" id="banner_02">
        <div class="slide"> 
            <ul class="slider foin_058f">
            <?php include './include/foin_058f.php' ?>
            </ul>
            <div class="newPager"></div>
            <div class="newAutoControl"></div>
            <span class="btn prev"></span>
            <span class="btn next"></span>
        </div>
    </div>
    <!-- 핫딜 베스트 -->
    <div class="all">
        <div>
            <h2>베스트잇템</h2>
        </div>
        <div class="prod_list" id="foin_058b" style="width:100%;">
        <?php include './include/foin_058b.php' ?>
        </div>
    </div>
  


   <!-- 배너영역 -->    
         <!--<div class="banner">
          <img src="image/banner_bottom.png" alt="banner">
        </div>

   </div> -->
    <div class="banner_01" id="banner_03">
        <div class="slide"> 
            <ul class="slider foin_058f">
            <?php include './include/foin_058f.php' ?>
            </ul>
            <div class="newPager"></div>
            <div class="newAutoControl"></div>
            <span class="btn prev"></span>
            <span class="btn next"></span>
        </div>
    </div>

   <!--  상품리스트 영역 -->
    <div class="all">
        <div>
            <h2>패션/뷰티</h2>
        </div>
        <div class="prod_list" id="foin_058d" style="width:100%;">
        <?php include './include/foin_058d.php' ?>
        </div>
    </div>

    



        <!-- 순위영역 -->    
    <div class="all">
        <div><h2>인기기획전 TOP6</h2></div>
        <div class="top_05" id="foin_058k" style="width:100%;">
        <?php include './include/foin_058k.php' ?>
        
        </div>
    </div>
</div>

<div id="int-footer-copyright"> <span class="copyright"><img src="common_newdeal/image/copyright.png" alt="카피라이터"/></span>
  <iframe src='http://script.theprimead.co.kr/winggoSetCookiePage.php?code=MzkzNw%3D%3D&_NMNCODE_=&_NMNURL_=http%3A%2F%2FNEWDEALPOPCON.com%2Fany.asp%3Ftype%3Dadpop' height='0' width='0'></iframe>
  <iframe width="0" height="0" src="http://ad.ad4989.co.kr/cgi-bin/PelicanC.dll?impr?pageid=05Pr&out=iframe" allowTransparency = "true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" ></iframe>
</div>
</body>
</html>
