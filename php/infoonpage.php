<?php
    header("Content-Type:application/json;charset=utf-8");
    require('init1.php');
    $sql="select * from chatroom order by cid desc LIMIT 50";
    $result=mysqli_query($conn,$sql);
    $posts=array();
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $posts[]=$row;
    }
    if($posts!=null){
        echo json_encode($posts);
    }
?>