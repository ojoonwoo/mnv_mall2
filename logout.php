<?
	include_once "./header.php";

    if ($_SESSION['ss_chon_way'] == "kakao")
    {
        session_destroy();
        echo "<script>Kakao.Auth.logout();location.href='index.php';</script>";
    }else if ($_SESSION['ss_chon_way'] == "naver"){
        session_destroy();
        echo "<script>location.href='index.php';</script>";
    }else if ($_SESSION['ss_chon_way'] == "facebook"){
        session_destroy();        
        echo "<script>location.href='index.php';</script>";
    }else{
        session_destroy();        
        echo "<script>location.href='index.php';</script>";
    }
?>