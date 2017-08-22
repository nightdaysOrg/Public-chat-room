<?php
    header("Content-Type:application/json;charset=utf-8");
    require('init1.php');
    $sql="select * from chatroom order by chattime desc LIMIT 50";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($rows);
?>