<?php


$password = $_POST["password"];


$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-12]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
    $result='Password should be at least 12 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    $result='Strong password.';
}

$data=["result"=>$result];
echo json_encode($data);

?>