<?php
    session_start();
    $params=json_decode(file_get_contents("php://input"),true);
    if(isset($_SESSION['admin'])){
        $res['isLogin']="yes";
        $res['user']=$_SESSION['admin'];
        exit(json_encode($res));
    }
    else{
        $res['isLogin']="no";
        exit(json_encode($res));
    }
?>