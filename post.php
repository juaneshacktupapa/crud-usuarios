<?php
    include "conexion.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $DNI = $_POST["DNI"];
        $Nombres = $_POST["nombres"];
        $Apellidos = $_POST["apellidos"];
        $Correo = $_POST["correo"];
        $Telefono = $_POST["telefono"];
        $Direccion = $_POST["direccion"];

        if(isset($_POST["buscar"])){
            
            $consulta = "SELECT * FROM usuarios";
            $result = consulta($consulta);

            if($result){
                while($row = mysqli_fetch_array($result)){
                    echo "DNI: ".$row["DNI"]." ";
                    echo "Nombre: ".$row["Nombres"]." ";
                    echo "Apellido: ".$row["Apellidos"]." ";
                    echo "Correo: ".$row["Correo"]." ";
                    echo "Telefono: ".$row["Telefono"]." ";
                    echo "Direccion: ".$row["Direccion"]."<br>";
                }
            }
        }

        if(isset($_POST["enviar"])){

            $consulta = "INSERT INTO usuarios (DNI, Nombres, Apellidos, Correo, Telefono, Direccion) VALUES ($DNI, '$Nombres', '$Apellidos', '$Correo', '$Telefono', '$Direccion')";    
            $result = consulta($consulta);

            if ($result){
                echo "Datos almacenados correctamente";
            }
        }
    }   
?>