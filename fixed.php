<?php
error_reporting(0);
@system('rm fixed_url');
function ads1(){
	$ua = ugv();
	
	$hd = array('Host: mypayu.com' , 'user-agent: '.$ua , 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7' , 'referer: https://decent-faucet.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$pss = fxc('https://mypayu.com/banner/1046/300x250', $hd);
	
	$pss = fxc('https://mypayu.com/banner/1046/160x600', $hd);
	
	$pss = fxc('https://mypayu.com/banner/1046/728x90', $hd);
	
	$pss = fxc('https://mypayu.com/banner/1046/300x100', $hd);
	
	$pss = fxc('https://mypayu.com/banner/1046/200x200', $hd);
	
	$pss = fxc('https://mypayu.com/banner/1046/320x50', $hd);
	
	//fxc('https://faucete.my.id/index.php', array("user-agent: ".$ua));
	$input = array("300x250", "160x600", "728x90", "300x100", "200x200", "320x50");
	$rand_keys = array_rand($input, 2);
	$id = $input[$rand_keys[0]];
	$lik = 'https://mypayu.com/banner/1046/'.$id;
	
	$pss = fxc($lik, $hd);
	$pid = par("pubid: '", "'", $pss, 1);
	$key = par("key: '", "'", $pss, 1);
	$var = par("var=", "'", $pss, 1);
	
	$uaa = array('Host: mypayu.com' , 'accept: application/json, text/javascript, */*; q=0.01' , 'content-type: application/x-www-form-urlencoded; charset=UTF-8' , 'x-requested-with: XMLHttpRequest' , 'user-agent: '.$ua , 'origin: https://mypayu.com' , 'referer: '.$lik , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$dat = 'size='.$id.'&pubid=1046&domain=faucete.my.id';
	$gt = json_decode(fxc('https://mypayu.com/banner/load', $uaa, $dat));
	
	$cid = $gt->id;
	if($cid){
	$dat = 'bannerid='.$cid.'&pubid=1046&domain=decent-faucet.my.id';
	$gt = fxc('https://mypayu.com/banner/click', $uaa, $dat);
	
	}
		//exit;
	return $gt;
	}


function ads2(){
	$ua = ugv();
	@system('rm fixed_url');
	$hd = array('user-agent: '.$ua , 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7' , 'referer: https://faucete.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$uaa = array('accept: application/json, text/javascript, */*; q=0.01' , 'content-type: application/x-www-form-urlencoded; charset=UTF-8' , 'x-requested-with: XMLHttpRequest' , 'user-agent: '.$ua , 'referer: https://faucete.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$pss = fxc('https://ad.a-ads.com/2338584?size=160x600', $hd);
	$click_url = par("<a href='", "'", $pss, 2);
	
	$pss = fxc($click_url, $uaa);
	
	
	$ua = ugv();
	
	$hd = array('user-agent: '.$ua , 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7' , 'referer: https://faucete.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$uaa = array('accept: application/json, text/javascript, */*; q=0.01' , 'content-type: application/x-www-form-urlencoded; charset=UTF-8' , 'x-requested-with: XMLHttpRequest' , 'user-agent: '.$ua , 'referer: https://faucete.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$pss = fxc('https://ad.a-ads.com/2338585?size=728x90', $hd);
	$click_url = par("<a href='", "'", $pss, 2);
	
	$pss = fxc($click_url, $uaa);
	
	
	$ua = ugv();
	
	$hd = array('user-agent: '.$ua , 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7' , 'referer: https://faucete.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$uaa = array('accept: application/json, text/javascript, */*; q=0.01' , 'content-type: application/x-www-form-urlencoded; charset=UTF-8' , 'x-requested-with: XMLHttpRequest' , 'user-agent: '.$ua , 'referer: https://faucete.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$pss = fxc('https://ad.a-ads.com/2338583?size=320x100', $hd);
	$click_url = par("<a href='", "'", $pss, 2);
	
	$pss = fxc($click_url, $uaa);
	
	
	$ua = ugv();
	
	$hd = array('user-agent: '.$ua , 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7' , 'referer: https://faucete.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$uaa = array('accept: application/json, text/javascript, */*; q=0.01' , 'content-type: application/x-www-form-urlencoded; charset=UTF-8' , 'x-requested-with: XMLHttpRequest' , 'user-agent: '.$ua , 'referer: https://faucete.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$pss = fxc('https://ad.a-ads.com/2338581?size=300x250', $hd);
	$click_url = par("<a href='", "'", $pss, 2);
	
	$pss = fxc($click_url, $uaa);
	
	$hd = array('Host: bitcotasks.com' , 'user-agent: '.$ua , 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7' , 'referer: https://decent-faucet.my.id/' , 'accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7');
	
	$pss = fxc('https://bitcotasks.com/popad.min.js?pub=MTIz&f=60&t=1', $hd);
	
	$ss = json_decode(fxc('https://bitcotasks.com/popads.php?ads=1&pubdata=MTIz', $hd));
	$adUrl = $ss->adUrl;
	if($adUrl){
	$pss = fxc($adUrl, $hd);
	$ff = head($pss);
	$pss = fxc($ff, array('user-agent: '.$ua));
	}
	@system('rm fixed_url');
	return $ss;
}

function fxc($url, $header, $data = null){
	while(true){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		//curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
		if ($data){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			}
			
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch,CURLOPT_COOKIEJAR,"fixed_url");
		curl_setopt($ch,CURLOPT_COOKIEFILE,"fixed_url");
		$get['exec']=curl_exec($ch);
		curl_close($ch);
		return $get['exec'];
		
		
		}
    }
    
    function ugv(){$lines = file("user_agents.txt");$user = $lines[array_rand($lines)];$userA = preg_replace("/[\n\r]/", "", $user);return $userA;}