<?php
include "./bootstrap/init.php";

if(isset($_GET["deletefolder"]) && is_numeric($_GET["deletefolder"])){
    $folder_id=$_GET["deletefolder"];
    echo deleteFloder($folder_id);
}
if(isset($_POST["title"]) && is_string($_POST["title"] && empty($_POST["title"]))){
    $title=$_POST["title"];
    $data=[
        "title"=>$title,
    ];
    echo newFloder($data);
}



$folders=getFolders();
$tasks=getTask();


include "./tpl/tpl-index.php";