<?php
    header("Content-Type:application/json;charset=utf-8");
    @$uname=$_REQUEST['uname'] or die('{"code":-2,"msg":"用户名是必须的"}');
    @$cinfo=$_REQUEST['cinfo'] or die('{"code":-3,"msg":"请输入聊天内容"}');
    require("init1.php");
    $sql="insert into chatroom values(null,'$uname','$cinfo',now())";
    $result=mysqli_query($conn,$sql);
    if($result===true){
        echo '{"code":1,"msg":"发送成功"}';
    }else{
        echo '{"code":-1,"msg":"发送失败,检查网络"}';
    }
?>