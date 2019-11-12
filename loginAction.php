<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
</head>

<body>
<?php

$userID=$_POST['userID'];
$userPassword=$_POST['userPassword'];

if(($userID=="1111") && ($userPassword=="1111")){

header('Location: string.php');


}
else {
  echo "누구?";
}





?>
</body>
</html>
