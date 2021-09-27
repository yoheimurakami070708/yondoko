<?php

$sex= $_POST['sex'];
$age= $_POST['age'];
$category= $_POST['category'];
$history= $_POST['history'];
$list=array("sex"=>$sex,"age"=>$age,"category"=>$category,"history"=>$history);

echo json_encode($list);
exit;