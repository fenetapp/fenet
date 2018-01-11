

<?php


			
				 $nick	   	= 	$_POST['user'];
				 $pass	   	=	$_POST['llave'];
			  //echo $tipoCuenta 	=  $_POST['tipoCuenta'];

			


			   
			       
			        

			        require("cnx.php");
			        
			       
			        //if($tipoCuenta == "Cliente")
			    	//{	
							        $ssql = "SELECT * FROM usuario WHERE email='$nick' and pass='$pass'";
							        $rs = mysql_query($ssql,$conexion);
							            if (mysql_num_rows($rs)==1)
							            {
							              session_start();
							              $_SESSION["login"] = $nick;    
							             


										              $ssql = mysql_query("SELECT * FROM usuario WHERE email='$nick'");           
													  $tipoUsuario  =  mysql_result($ssql,0,"tipoUsuario");
														
													  	if($tipoUsuario == "cliente")
													  	{
											              ?>
												              <script type="text/javascript">							              	
												              window.location="inicio.php";
											              </script>
											              <?php 
										              	}
										              	else if($tipoUsuario == "proveedor"){
										              	  ?>
												              <script type="text/javascript">							              	
												              window.location="inicioProveedor.php";
											              </script>
											              <?php 
										              	}
										              	else if($tipoUsuario == "asesor"){
										              	  ?>
												              <script type="text/javascript">							              	
												              window.location="asesores.php";
											              </script>
											              <?php 
										              	}

											 mysql_close($conexion); 


							           }
							            
							            else
							            {

			            					?>
			            						

												  <script type="text/javascript">
									              window.location="index.php";
									              </script>
								 				
								 				
			            					<?php     	       
			              				mysql_close($conexion);
			          					}
			        /*}

			    	else if ($tipoCuenta == "Asesor")
			    	{
			    	
				       	
								        $ssql = "SELECT * FROM proveedor WHERE email='$nick' and pass='$pass'";
								        $rs = mysql_query($ssql,$conexion);
								            if (mysql_num_rows($rs)==1)
								            {
								              session_start();
								              $_SESSION["administrador"] = $nick;    
								              mysql_close($conexion); 
								              ?>
								              <script type="text/javascript">
								              window.location="inicioProveedor.php";
								              </script>
								              <?php 
								            }
							            	else
							            	{
								            	?>
													<script type="text/javascript">
													             // window.location="http://managercode.com.ve/loginfail/";
													              </script>
								            	<?php  
								            	echo "No estas registrado como proveedor";   	       
							              	mysql_close($conexion);
							            	} 


			    	}else{
			    		echo "???";
			    	}*/

?>
		
