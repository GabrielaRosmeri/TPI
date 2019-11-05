<?php

if(!empty($_POST)){
	if(isset($_POST["Nombre"]) && isset($_POST["DNI"]) && isset($_POST["Paterno"]) && isset($_POST["Materno"]) && isset($_POST["Celular"])){
			include "conexion.php";
			$sql = "update alumno set nombre=\"$_POST[Nombre]\",dni=\"$_POST[DNI]\",apPaterno=\"$_POST[Paterno]\",apMaterno=\"$_POST[Materno]\",celular=\"$_POST[Celular]\",genero=\"$_POST[Genero]\",feNacimiento=\"$_POST[fecha]\",direccion=\"$_POST[Direccion]\" where idAlumno=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
	}
}



?>