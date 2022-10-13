<?php
if(G5_IS_MOBILE) {
	include_once(G5_PATH.'/page/sayhi-m.php');
} else {
	include_once(G5_PATH.'/page/sayhi.php');
}
?>