<?php

$cerrar=$_GET['cerrar'];

  if($cerrar=="cerrado"){
	  
		session_unset('nombre');
		session_destroy();
	}
	
if(isset($_POST['entrar'])){
  	require('conexion.php');

	session_start();

	$nombre=$_POST['nombre'];
	$contra=$_POST['contra'];

if(!empty($nombre)){
			if(!empty($contra)){
				$consulta="select * from login where nombre='$nombre' and contra='$contra'";
				$resultado=mysqli_query($conexion, $consulta);
				
				if(count($resultado)>0){
					$arreglo=mysqli_fetch_array($resultado);
					$_SESSION["nombre"]=$arreglo["nombre"];
                    
                    header('location:../vista/index.php');
                    session_start();
					
				}else{
					$error="Usuario o Contraseña incorrecta";
				}
			}else{
				$error="Ingrese la contraseña";
			}
		}else{
			$error="Ingrese el su DNI";
		}
}
?>

