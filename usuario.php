<?php 
//Importar la conexion
require"includes/config/database.php";
$db = conectarDB();

//Crear un email y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT); //En BD pusimos CHAR 60 xq mantiene los valores fijos de 60 caracteres
                                                            //a diferencia de varchar que guardara la longitud que le demos. Los pass hasheados
                                                            //siempre tendran la extension de 60

//Query para crear el usuario
$query = " INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}'); ";



//Agregarlo a la BD
mysqli_query($db, $query);