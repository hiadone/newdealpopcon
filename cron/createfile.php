#!/usr/bin/php -q
<?php
$ctx = stream_context_create(array(   
   'http' => array(   
       'timeout' => 1 
       )   
   )   
);   

$pelicanc=['058W','058Y','058a','058k','058f','058i','058e','058d','058b'];



foreach($pelicanc as $value){
    $content="";
    $html="";
    $fp2="";
    $content = file_get_contents('http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr&pageid='.$value.'&lang=utf-8&out=json',0,$ctx);

    if ($content !== false) {
      
        $filename=dirname(__FILE__).'/../include/foin_'.$value.'.php';
        $fp2= fopen($filename,"w");

        
        // $html = explode("\"tag\":",$content);        
        // $html[1]=rtrim($html[1],"})\"");
        // $html[1]=str_replace("\\r\\n","",$html[1]);

        $content= ltrim($content,"(");
        $content= rtrim($content,")");




      //$content =  iconv(mb_detect_encoding($content, mb_detect_order(), true), "UTF-8", $content);

         $html=json_decode($content,false);
         

switch (json_last_error()) {
    case JSON_ERROR_NONE:
   // echo $html->tag;
        
        fwrite($fp2,$html->tag);

        $html->tag = ltrim($html->tag,"\"");
        $html->tag = rtrim($html->tag,"\"");
        fclose($fp2);
    break;
    case JSON_ERROR_DEPTH:
        echo ' - Maximum stack depth exceeded';
    break;
    case JSON_ERROR_STATE_MISMATCH:
        echo ' - Underflow or the modes mismatch';
    break;
    case JSON_ERROR_CTRL_CHAR:
        echo $value.' - Unexpected control character found';

        $content=stripcslashes($content);
        $tag=explode("\"tag\":",$content);
        
        $html= rtrim($tag[1],"\"}");

        $html = ltrim($html,"\"");
        $html = rtrim($html,"\"");

        fwrite($fp2,$html);
        fclose($fp2);

    break;
    case JSON_ERROR_SYNTAX:
        echo $value.' - Syntax error, malformed JSON';
        $content=stripcslashes($content);
        $tag=explode("\"tag\":",$content);
        $html= rtrim($tag[1],"\"}");

        $html = ltrim($html,"\"");
        $html = rtrim($html,"\"");
        fwrite($fp2,$html);
        fclose($fp2);
    break;
    case JSON_ERROR_UTF8:
        echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
    break;
    default:
        echo ' - Unknown error';
    break;
}


        
    } else {
      echo ' error http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr&pageid='.$value.'&lang=utf-8&out=json<br>';
       
    }
}


