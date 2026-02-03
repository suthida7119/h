<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สุธิดา นาสีแสน (บุ๊กบิ๊ก)</title>
</head>


<body>
<h1>a.php</h1>

<?php
$_SESSION['name'] = "สุธิดา นาสีแสน"."</br>";
$_SESSION['nickname'] = "บุ๊กบิ๊ก"."</br>";

//$name = "สุธิดา นาสีแสน";
echo $_SESSION['name'];
echo $_SESSION['nickname'];


?>

</body>
</html>