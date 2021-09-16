<?php
ob_start();

require_once "../models/User.php";

$usuario=new Usuario();

$iduser=isset($_POST["iduser"])? limpiarCadena($_POST["iduser"]):"";
$first_name=isset($_POST["firstName"])? limpiarCadena($_POST["firstName"]):"";
$last_name=isset($_POST["lastName"])? limpiarCadena($_POST["lastName"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$password=isset($_POST["password"])? limpiarCadena($_POST["password"]):"";
$newpassword=isset($_POST["newpassword"])? limpiarCadena($_POST["newpassword"]):"";

switch ($_GET["op"]){
	case 'save':

		if (empty($idusuario)){
			$rspta=$usuario->insertar($first_name,$last_name,$email,$password);
			
			echo $rspta ? "Usuario registrado" : "No se pudieron registrar todos los datos del usuario";
		}
		
	break;

    case 'edit':

		
		$rspta=$usuario->editar($email,$password,$newpassword );
			
		echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		
	break;

	case 'verificar':
		$logina=$_POST['logina'];
	    $clavea=$_POST['clavea'];


		$rspta=$usuario->verificar($logina, $clavea);

		$fetch=$rspta->fetch_object();

		if (isset($fetch))
	    {
	        $_SESSION['idusuario']=$fetch->idusuario;
			$_SESSION['first_name']=$fetch->first_name;
			$_SESSION['email']=$fetch->email;
	        $_SESSION['last_name']=$fetch->last_name;

	    }
	    echo json_encode($fetch);
	break;

	case 'salir':  
        session_unset();
        session_destroy();
        header("Location: ../views/signin.php");

	break;

	
}


ob_end_flush();
?>