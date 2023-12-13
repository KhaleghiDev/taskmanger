<?php
defined('BASE_PATH') OR die("Permision Denied!");
// if(!defined(BASE_PATH)){
//     echo "Permision Denied!";
//     die();
// }
function deleteFloder($folder_id){
    global $DB;
    
    $sql= "DELETE FROM `folders` WHERE `id`=$folder_id";
    $pdo=$DB->prepare($sql);
    $pdo->execute();
    if(!$pdo){
       diemassage($pdo->errorInfo());
    }
    $records=empty($pdo->rowCount())?"حذف انجام نشد ":$pdo->rowCount();
    return $records;

}
function newFloder($data){
 
    global $DB;
   
    $title = $data['title'];

    $user_id=getIdLoginUser();
   $datas=[
    'title'=>$title,
    'user_id'=>$user_id,
   ];
    $sql = 'INSERT INTO folders (title,user_id) VALUES(:title,:user_id)';
 
    $pdo=$DB->prepare($sql);
    // var_dump($pdo);
    // die();
    $pdo->execute($datas);
    $records=$pdo->rowCount();
    return $records;

}
// function folders
function getFolders(){
    global $DB;
    $user_id=getIdLoginUser();
    $sql="select * from folders where user_id=$user_id";
    $pdo=$DB->prepare($sql);
    $pdo->execute();
    $records=$pdo->fetchAll(PDO::FETCH_OBJ);
    return $records;

}
/**
 * function task
 */
function getTask() {
    return 1;
}