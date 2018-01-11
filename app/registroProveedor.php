

<?php

	   		include ("cnx.php");




            $nombre             = $_POST['nombre'];
            $especialidad1      = $_POST['especialidad1'];
            $especialidad2      = $_POST['especialidad2'];
            $especialidad3      = $_POST['especialidad3'];
            $email              = $_POST['email'];
            $telefono1          = $_POST['telefono1'];
            $telefono2          = $_POST['telefono2'];
            $tipodeproveedor    = $_POST['tipodeproveedor'];
            $encargado          = $_POST['encargado'];
            $direccion          = $_POST['direccion'];
            $ciudad             = $_POST['ciudad'];
            $estado             = $_POST['estado'];
            $pais               = $_POST['pais'];
            $calificacion       = 0;
            $estatus            = "nuevo";
            $logo               = "img";
               

              

                mysql_query ("INSERT INTO proveedor VALUES ('','$nombre','$especialidad1','$especialidad2','$especialidad3','$email','$telefono1','$telefono2','$tipodeproveedor','$encargado','$direccion','$estado','$ciudad','$pais','$calificacion','$estatus','$logo')");


                 $consulta = "UPDATE usuario  SET 
                        tipoUsuario='proveedor'
                            WHERE  email='$email'";     
                        $hacerconsulta = mysql_query ($consulta);
                
                mysql_close ($conexion); 





                        $to       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject  =   "Nuevo Registro de PROVEEDOR";          
                        //$from     =   $_POST['from'];
                        $from     =   $email;
                        $headers  =   "From:" . $from;
                        //$message  =   $_POST['mensaje'];
                        $message  =  "Se ha Registrado el proveedor:"

                        .$nombre. " " .

                        "//Email:"." ".

                        $email. " ".

                        "//Telefono1:"." ".

                        $telefono1. " ".

                        "//Telefono2:"." ".

                        $telefono2. " ".

                        "//Tipo de Proveedor:"." ".

                        $tipodeproveedor." ".

                        "//Especialidad1:"." ".

                        $especialidad1. " ".

                        "//Especialidad2:"." ".

                        $especialidad2. " ".

                        "//Especialidad3:"." ".

                        $especialidad3. " ".

                        "//Encargado:"." ".

                        $encargado. " ".

                        "//Direccion:". " ".

                        $direccion.".".$ciudad.".".$estado.".".$pais
                        ;                       
                                
                        mail($to,$subject,$message,$headers); 








          

?>
 
 <script type="text/javascript">
                          window.location="okProveedor.php";
                    </script>