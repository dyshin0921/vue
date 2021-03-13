<?
// db연결
$userId = $_POST['userId'];
// form 에 method="post" 이기때문에 $_POST
$userPw = $_POST['userPw'];
$userEmail = $_POST['userEmail'];

// sql
$txt += $userId;
$txt += $userPw;
$txt += $userEmail;

echo $txt;
// = echo $userId.$userPw.$userEmail; 
?>