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
    if (window.history && window.history.pushState) {
        window.history.pushState('forward', null, document.location.href);
        
        var popped = ('state' in window.history && window.history.state !== null), initialURL = location.href;

        $(window).bind('popstate', function (event) {
          // Ignore inital popstate that some browsers fire on page load
          var initialPop = !popped && location.href == initialURL
          popped = true
          if (initialPop) return;

          pelicanCount('05gu');

        });
    }

    $.ajax({
        type: "GET", 
        async: true,
        data: "pageid=05gu&lang=utf-8&out=json", 
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

    $("#div_ajax_load_image").on("click",function(){
      pelicanCount('05gu');
    });

});

function pelicanCount(value) {

   
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
    parent.top.location.replace("https://ref.ad-brix.com/v1/referrallink?ak=905994553&ck=7650783&Deeplink=true");
}
</script>
</head>
<style>
body {
  margin: 0;
}
</style>
<body>

<div id="hiadone_pageid" style="position:fixed;width:100%;height:5000px;top:0px;background:#000; background:rgba(0, 0, 0, 0.8);z-index:9999;">

<div  id="div_ajax_load_image" style="width:100%;text-align:center;margin-top:10%;"><img src="http://newdealpopcon.com/image/banner.png" style="vertical-align:middle;width:100%;">
</div>

</div>

</body>
</html>
