<?php
require_once '../connect.php';
if (isset($_GET['sil'])){
    $id= $_GET['sil'];
    $delete= $db->prepare('Delete FROM urun WHERE urun_id=:urun_id');
    $delete->execute(array(
        'urun_id'=>$id,
    ));

    if($delete){
        header('location:admin.php?basarili=true');
    }
}

if(isset($_GET['gorunmez'])){
    $id= $_GET['gorunmez'];
    $delete= $db->prepare('Update urun set urun_gorunmez = NOT urun_gorunmez  where urun_id=:urun_id');
    $delete->execute(array(
        'urun_id'=>$id,
    ));

    if($delete){
        header('location:admin.php?basarili=true');
    }
}

?>