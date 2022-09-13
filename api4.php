<?php

$todaydate= date_create($_GET["todaydate"]);
$christmasdate= date_create('25-12-2022');

$result=date_diff($todaydate, $christmasdate);

$data=["result"=>$result->format('%R%a days')];
echo json_encode($data);;
?>