
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>NEWDEALPOPCON</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=yes">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script language = "javascript"> 
var foinUrl = "";
$(document).ready(function() {

    $.ajax({
        type: "GET", 
        async: true,
        data: "pageid=05oM&lang=utf-8&out=json", 
        url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
        cache: false, 
        dataType: "jsonp", 
        jsonp: "jquerycallback",
        success: function(data) 
        {
            foinUrl = data.clickurl;
        },
        error: function(xhr, status, error) {} 
    });

    if (window.history && window.history.pushState) {
        window.history.pushState('forward', null, document.location.href);
        
        var popped = ('state' in window.history && window.history.state !== null), initialURL = location.href;

        $(window).bind('popstate', function (event) {
          // Ignore inital popstate that some browsers fire on page load
          var initialPop = !popped && location.href == initialURL
          popped = true
          if (initialPop) return;

          pelicanCount('05oM');

        });
    }

    

     

    $("#div_ajax_load_image").on("click",function(){
      pelicanCount('05oM');
    });

    $("#x_button").on("click",function(){

      window.open('', '_self', '');
      window.close();





    });

});

function pelicanCount() {

   
    $.ajax({
        type: "GET", 
        async: true,
        url: foinUrl, 
        cache: false, 
        dataType: "jsonp", 
        jsonp: "jquerycallback",
        success: function(data) 
        {
            
        },
        error: function(xhr, status, error) {} 
    });
    parent.top.location.replace("http://www.topickorea.co.kr/edu/Rental_hiadoneCPA/mo_news/rental01-6.html?code=rental_M_Newdeal_b1");
}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88829342-7', 'auto');
  ga('send', 'pageview');

</script>
<style>
body {
  margin: 0;
}
</style>
</head>
<body>
<div id="hiadone_pageid" style="position:fixed;width:100%;height:5000px;top:0px;background:#000; background:rgba(0, 0, 0, 0.8);z-index:9999;">
<!-- <div style="position: absolute;width:100%">
<div style="position: relative; top: 0px; left: 0px;" ><img id="x_button" src="http://newdealpopcon.com/image/x_button.png" style="padding:2px;width:6.5%;float:right;margin-top:10%;background-color: rgba(0, 0, 0, 0.73)">
</div>
</div> -->
<div  id="div_ajax_load_image" style="width:100%;text-align:center;margin-top:10%;">
<img src="http://newdealpopcon.com/image/720x785_2.jpg" style="vertical-align:middle;width:100%;">
</div>
</div>


</body>
</html>
