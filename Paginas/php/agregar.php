<?php

if(!empty($_POST)){
	if(isset($_POST["Nombre"]) && isset($_POST["DNI"]) && isset($_POST["Paterno"]) && isset($_POST["Materno"]) && isset($_POST["Celular"])){
			include "conexion.php";
			$sql = "insert into alumno(nombre,dni,apPaterno,apMaterno,celular,genero,feNacimiento,direccion) value (\"$_POST[Nombre]\",\"$_POST[DNI]\",\"$_POST[Paterno]\",\"$_POST[Materno]\",\"$_POST[Celular]\",\"$_POST[Genero]\",\"$_POST[fecha]\",\"$_POST[Direccion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		
	}else{
        print "<script>alert(\"No agregar.\");window.location='../ver.php';</script>";
    }
}



?>