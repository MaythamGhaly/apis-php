<?php

$todaydate = $_GET;
$christmasDay = date("Y") . "-12-25";
if(date("m") == 12 && date("d") > 25){
    $christmasDay = (date("Y") + 1) . "-12-25";
}
$christmasDay = new DateTime($christmasDay);
$result = $today->diff($christmasDay);

$data=["result"=>$result];
echo json_encode($data);;
?>