<?php 
require "../config/connection.php";

Class Usuario
{
	public function __construct()
	{

	}

	public function insertar($first_name,$last_name,$email,$clave)
	{
		$sql="INSERT INTO user (first_name,last_name,email,password)
		VALUES ('$first_name','$last_name','$email','$clave')";
		ejecutarConsulta($sql);
		$sw=true;

		return $sw;
	}

	public function editar($email,$password,$newpassword)
	{
		$sql="UPDATE user SET password='$newpassword' WHERE email='$email' and password='$password'";
		ejecutarConsulta($sql);

		$sw=true;


		return $sw;

	}

	public function verificar($login,$clave)
    {
    	$sql="SELECT idUser,first_name,last_name,email FROM user WHERE email='$login' AND password='$clave' "; 
    	return ejecutarConsulta($sql);  
    }


}

?>
