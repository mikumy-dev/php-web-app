<?php

$arr = array(["name"=>"book1", "price"=>100, "pages"=>200, "id"=>1],["name"=>"book2", "price"=>105, "pages"=>205, "id"=>2]);
header("Content-Type: application/json; charset=utf-8");
echo json_encode($arr);
exit;
?>