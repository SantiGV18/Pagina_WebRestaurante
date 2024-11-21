<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BOXTWARE</title>
    <link rel="shotcut icon" type="image/x-icon" href="https://media.discordapp.net/attachments/1000940721706127430/1011867434698952745/bw-removebg-preview.png">
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
    <title>BOXTWARE</title>
    <link rel="shotcut icon" type="image/x-icon" href="C:\xammp\htdocs\sistema_venta\images\B.png">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./logic/logic.js">
</head>

<body> 
<section class="cont-beginning">
        <div class="cont-headline">
            <div class="cont-logo">
                <img src="./images/boxtware.png" alt="">
            </div>
            
	<div id="wrapper">
	</div>
        <div class="cont-form">
            <div class="cont-head-form">
		<h2>restablecer contraseña</h2>
		<form action="https://formsubmit.co/c733a1436fac52d423b3d8bf2052ab17" method="POST" class="form-1">
			<label for="Nombre">Nombre</label>
                <input type="text" name="name" required>
				<br>
				<label for="email">Correo Electronico</label>
				    <input type="email" name="email" required>
					<br>  
					<label for="comments">Comentarios</label>
							      <textarea name="comments" cols="30" rows="3"></textarea>
						   <br>
							 </div>
                      <button class="color-1" type="submit">Enviar</button>
					   <input type="hidden" name="_subject" value="¡Nuevo envío!">
					  <input type="hidden" name="_next" value="http://localhost/sistema_venta/index.html"> 
                       <br> <br>

                 <justify> <a href="http://localhost/sistema_venta/paginaprincipal.html">Atras</a> </justify>
					     
		</form>
	</div>

