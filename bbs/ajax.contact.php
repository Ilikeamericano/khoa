<?php
include_once('./_common.php');
include_once('../lib/mailer.lib.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

$hostname=$_SERVER["HTTP_HOST"];
if($hostname == 'sungtaek12.dothome.co.kr') {//www.wus.co.kr
	$send_email = 'sungtaek12.dothome.co.kr';//wus.cs@wus.co.kr
} else {
	$send_email = 'sungtaek12.dothome.co.kr';//service@wus.co.kr
	$send_email = 'sungtaek12.dothome.co.kr';//wus.cs@wus.co.kr
}

$mb_name = $_POST['mb_name'];
$mb_company = $_POST['mb_company'];
$mb_hp_front = $_POST['mb_hp_front'];
$mb_hp = $_POST['mb_hp'];
$mb_email1 = $_POST['mb_email1'];
$mb_content = $_POST['mb_content'];

//$filename = basename($userfile['name']);  // 파일명만 추출 후 $filename에 저장
//$fp = fopen($userfile[tmp_name], "r");    // 파일 open
//$file = fread($fp, $userfile['size']);  // 파일 내용을 읽음
//fclose($fp);          // 파일 close

if(!isset($_POST['mb_name']) || !isset($_POST['mb_hp']) || !isset($_POST['mb_email1']) || !isset($_POST['mb_content']) || !isset($_POST['mb_company'])) {
	alert('잘못된 접근입니다.', G5_URL);
}

$content = "<p>문의신청이 왔습니다.</p>";

if(isset($_POST['mb_name']) && $mb_name != '') {
	$content .= "<p>문의자명 : ".$mb_name."</p>";
}
if(isset($_POST['mb_company']) && $mb_company != '') {
	$content .= "<p>회사명 : ".$mb_company."</p>";
}
if(isset($_POST['mb_hp']) && $mb_hp != '') {
	$content .= "<p>연락처 : ".$mb_hp_front.' '.$mb_hp."</p>";
}
if(isset($_POST['mb_email1']) && $mb_email1 != '') {
	$content .= "<p>이메일 : ".$mb_email1."</p>";
}
if(isset($_POST['mb_content']) && $mb_content != '') {
	$content .= "<p>문의내용 : ".$mb_content."</p>";
}




if(isset($_FILES['c_file']) && $_FILES['c_file']['name'] != "") {
    $file = $_FILES['c_file'];
    $upload_directory = '../data/email/';
    $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

    $path = md5(microtime()) . $file['name'] . '.' . $ext;
    if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {
        $file_id = md5(uniqid(rand(), true));
        $name_orig = $file['name'];
        $name_save = $path;
		$content .= "<p>첨부파일 : <a href='".G5_URL."/data/email/".$name_save."' target='_blank'>".$name_orig."</a></p>";
    }
}


//echo "<html><body>".$content."</body></html>";
mailer($mb_name, "w76079490@gmail.com", "w76079490@gmail.com", "문의신청이 왔습니다", $content, 1);
	// 메일발송자이름,	 발송자 메일 				받는사람 메일 
//mailer($mb_name, $send_email, "ddi97014@naver.com", "문의신청이 왔습니다", $content, 1);
alert('문의가 완료되었습니다.', G5_URL);
?>