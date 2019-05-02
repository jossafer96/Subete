<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("../libraries/password_compatibility_library.php");
}		
		if  (empty($_POST['nombre_usuario'])) {
            $errors[] = "Nombre de usuario vacío";
        } elseif (empty($_POST['password']) || empty($_POST['password_repeat'])) {
            $errors[] = "Contraseña vacía";
        } elseif ($_POST['password'] !== $_POST['password_repeat']) {
            $errors[] = "la contraseña y la repetición de la contraseña no son lo mismo";
        } elseif (strlen($_POST['password']) < 6) {
            $errors[] = "La contraseña debe tener como mínimo 6 caracteres";
        } elseif (strlen($_POST['nombre_usuario']) > 64 || strlen($_POST['nombre_usuario']) < 2) {
            $errors[] = "Nombre de usuario no puede ser inferior a 2 o más de 64 caracteres";
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['nombre_usuario'])) {
            $errors[] = "Nombre de usuario no encaja en el esquema de nombre: Sólo aZ y los números están permitidos , de 2 a 64 caracteres";
        } elseif (empty($_POST['correo_usuario'])) {
            $errors[] = "El correo electrónico no puede estar vacío";
        } elseif (strlen($_POST['correo_usuario']) > 64) {
            $errors[] = "El correo electrónico no puede ser superior a 64 caracteres";
        } elseif (!filter_var($_POST['correo_usuario'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Su dirección de correo electrónico no está en un formato de correo electrónico válida";
        } elseif (
			!empty($_POST['nombre_usuario'])
            && strlen($_POST['nombre_usuario']) <= 64
            && strlen($_POST['nombre_usuario']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['nombre_usuario'])
            && !empty($_POST['correo_usuario'])
            && strlen($_POST['correo_usuario']) <= 64
            && filter_var($_POST['correo_usuario'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['password'])
            && !empty($_POST['password_repeat'])
            && ($_POST['password'] === $_POST['password_repeat'])
        ) {
            require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			
				// escaping, additionally removing everything that could be (html/javascript-) code
				
                $nombre_usuario = mysqli_real_escape_string($con,(strip_tags($_POST["nombre_usuario"],ENT_QUOTES)));
                $apellido_usuario = mysqli_real_escape_string($con,(strip_tags($_POST["apellido_usuario"],ENT_QUOTES)));
                $identidad_usuario = mysqli_real_escape_string($con,(strip_tags($_POST["identidad_usuario"],ENT_QUOTES)));
                $correo_usuario = mysqli_real_escape_string($con,(strip_tags($_POST["correo_usuario"],ENT_QUOTES)));
                $user_password = $_POST['password'];
                $genero = mysqli_real_escape_string($con,(strip_tags($_POST["gender"],ENT_QUOTES)));
                $telefono_usuario= $_POST['telefono_usuario'];
				$fecha_nacimiento= $_POST['fecha_nacimiento'];
                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
				$user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);
					
                // check if user or email address already exists
                $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '" . $nombre_usuario . "' OR correo_usuario = '" . $correo_usuario . "';";
                $query_check_name_usuario = mysqli_query($con,$sql);
				$query_check_user=mysqli_num_rows($query_check_name_usuario);
                if ($query_check_user == 1) {
                    echo "Lo sentimos , el nombre de usuario ó la dirección de correo electrónico ya está en uso.";
                } else {
					// write new user's data into database
                    $sql = "INSERT INTO usuarios (id_usuario, nombre_usuario, apellido_usuario, identidad_usuario, password, 
                    genero, correo_usuario, telefono_usuario, fecha_nacimiento) 
                    VALUES (null,'". $nombre_usuario . "', '". $apellido_usuario . "', '". $identidad_usuario . "', '". $user_password_hash . "', '"
                    . $genero. "', '". $correo_usuario . "', '". $telefono_usuario . "', '". $fecha_nacimiento . "')";
                   
                    $query_new_user_insert = mysqli_query($con,$sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        echo "La cuenta ha sido creada con éxito.";
                    } else {
                        echo "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                }
            
        } else {
            echo "Un error desconocido ocurrió.";
        }
		
		if (isset($errors)){
			
			?>
			
					
			
			<?php
			}
			if (isset($errors)){
				echo $errors;
				?>
				
				<?php
			}

?>