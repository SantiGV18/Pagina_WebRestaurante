<?php
session_start();


if(isset($_POST['submit']))

{
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$query = "SELECT username, password FROM admin WHERE username='$username' 
AND passcode='$password'";
// Conectar a la base de datos
// ejecutar la consulta
// $result contiene el resultado de la consulta
if (password_verify($result['password'], password_hash($password, PASSWORD_BCRYPT))) {
   $startingPage = [
      'admin' => 'menu.php',
      'user' => 'user_menu.php',
   ];
   $nextPage = array_key_exists($result['role'], $startingPage) ? $startinPage['role'] : 'user_menu.php';
   if (array_key_exists($result['role'], $startingPage)) {
      $nextPage = $startinPage[$result['role']];
   } else {
      $nextPage = $startinPage['user'];
      error_log('There is no starting page for role '.$result['role']);
   }
   session_start();
   $_SESSION['user_id'] = $result['id'];
   $_SESSION['role'] = $result['role'];
   header('Location: '.$nextPage);
} else {
   header('Location: login.html');
}


?>

<?php

// admin_home.php
session_start();
if (!array_key_exists('user_id', $_SESSION)) {
   header('Location: login.html');
   die;
}
$allowedRoles = ['admin'];
if (!array_key_exists('role', $_SESSION) || !in_array($_SESSION['role'], $allowdRoles)) {
   header('Location: login.html');
   die;
}
}
?>
<h1>Bienvenido!</h1>
