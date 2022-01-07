<?php
	/**
	 * 
	 */
	class database
	{
		function conectar(){
			$con1 = mysqli_connect('localhost','root','');
			mysqli_select_db($con1,"");
			return($con1);
		}
		function muestra(){
			$con1 = mysqli_connect('HOST/IP','USUARIO','CONTRASEÑA');
			mysqli_select_db($con1,'BASE_DE_DATOS');
			return($con1);
		}
	}