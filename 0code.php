<?php
    require($rut.'constant.php');
    //----------------------------
    $location = HTTP.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    //----------------------------
    //variables
	$sid=null;$pid=null;$vid=null;
    //capturar valores URL
    if (isset($_SESSION['sid'])) { $sid = $_SESSION['sid']; } else { $sid = $_SESSION['sid'] = session_id(); }
    if (isset($_REQUEST['p'])) { $pid = base64_decode($_REQUEST['p']); }
    if (isset($_REQUEST['v'])) { $vid = base64_decode($_REQUEST['v']); }