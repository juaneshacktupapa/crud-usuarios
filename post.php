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
                echo"
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <td>DNI</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Correo</td>
                                <td>Telefono</td>
                                <td>Dirección</td>
                                </tr>
                            </thead>
                            <tbody>
                    ";
                                while($row = mysqli_fetch_array($result)){
                                    echo"<tr>";
                                        echo"<td>".$row['DNI']."</td>";                  
                                        echo"<td>".$row['Nombres']."</td>";                  
                                        echo"<td>".$row['Apellidos']."</td>";                  
                                        echo"<td>".$row['Correo']."</td>";                  
                                        echo"<td>".$row['Telefono']."</td>";                  
                                        echo"<td>".$row['Direccion']."</td>";                
                                    echo"</tr>";
                                    }
                    echo"
                            </tbody>
                        </table>
                    </div>";
            }
        }

        if(isset($_POST["enviar"])){

            $consulta = "INSERT INTO usuarios (DNI, Nombres, Apellidos, Correo, Telefono, Direccion) VALUES ($DNI, '$Nombres', '$Apellidos', '$Correo', '$Telefono', '$Direccion')";    
            $result = consulta($consulta);

            if ($result){
                echo "Datos almacenados correctamente";
            }
        }

        if(isset($_POST["eliminar"])){
            
            $consulta = "DELETE FROM usuarios where DNI = $DNI";    
            $result = consulta($consulta);

            if ($result){
                echo "Datos eliminados correctamente";
            }
        }

        if(isset($_POST["actualizar"])){

            $consulta = "UPDATE usuarios SET Nombres = '$Nombres', Apellidos = '$Apellidos', Correo = '$Correo', Telefono = '$Telefono', Direccion = '$Direccion' WHERE DNI = '$DNI'";    
            $result = consulta($consulta);

            if ($result){
                echo "Datos actualizados correctamente";
            }
        }
    }   
?>