<?php
function captcha(){
	session_start();
	header("Content-type:image/png");
	$captcha = '';
	$arr = array(
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
		'0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
	);
	for ($i = 0; $i < 6; $i++) {
		$random = rand(0, 61);
		$captcha .= $arr[$random];
	}
	if ($captcha) {
		$_SESSION["guvenlik_kodu"] = $captcha;
		$width = 150;
		$height = 38;
		$resim = ImageCreate($width, $height); 
		$beyaz = ImageColorAllocate($resim, 255, 255, 255);
		$siyah = ImageColorAllocate($resim, 0, 0, 0);
		ImageFill($resim, 0, 0, $siyah);
		ImageString($resim, 10, 50, 10, $_SESSION["guvenlik_kodu"], $beyaz);
		ImagePng($resim);
		ImageDestroy($resim);
	}
}
captcha();

?>