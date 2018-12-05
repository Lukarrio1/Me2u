<?php
function sanitize($dirty) {
    $connect = mysqli_connect('localhost','root','','me2u');
        return mysqli_real_escape_string($connect,htmlentities($dirty, ENT_QUOTES, "UTF-8"));
    } 

    function Photoupload($photo,$location){
    $photoname = $photo['photo']['name'];
    $phototmpname = $photo['photo']['tmp_name'];
    $photosize = $photo['photo']['size'];
    $photoerror= $photo['photo']['error'];
    $phototype= $photo['photo']['type'];
    $photoext = explode('.',$photoname);
    $photoactualext =strtolower(end($photoext));
    $allowed = array('jpg','jpeg','png');
    if(in_array($photoactualext,$allowed)){
    if($photoerror===0){
    $img =uniqid(''.true).".".$photoactualext;
    move_uploaded_file($phototmpname,$location);
    return $img;
    }
    }else{
    exit("failed");
    }
    }
