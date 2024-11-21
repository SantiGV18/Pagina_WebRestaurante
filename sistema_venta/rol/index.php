<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

<html>
<body>
  <form action="backend.php" method="post">
     <input type="text" name="username"/>
     <input type="password" name="password"/>
     <input type="submit" value="Ingresar"/>
  </form>
</body>
</html>