<?php 
include ("conecto.php");
//session_start();
/*if (!isset($_SESSION["id"])){
header('location:index.html');

}*/
$emp = $_POST["emp"];
?>


	<?php 
                    		$sql= "select * from aseguradora where id = $emp ";
										$rc = mysqli_query($mysql,$sql);
											if($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$emp5t = $row["nombre"];
									
											}
												?>


  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>Nuevo Caso</title>
   
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
   
  </head>
 

<form method="post" action="guarda.php" enctype="multipart/form-data" style="align: center">

<div style ='width: 22cm; margin:22px auto; height:29.7cm; align=center; table.auto {table-layout: auto};  '>
  <!-- border: 1px; border-color: black; border-style: solid;-->
        <div>
  <img src='img/logo1.png' align='auto' width='40%'>
    
    </div>
                         <div> 
                                
                              

                                                  <table align='right' style = 'font-size: 14px;  margin-top: -50px;'> 

                                                  
                                                         <tr align='right'>
                                                         	<?php
												setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
												$d = date("Y-m-d");
												$fecha = strftime("%d de %B de %Y", strtotime($d));
												//echo $fecha; // 09 de marzo de 2010?>
                                                        <td align='right'> <p> <b>Ciudad de M&eacute;xico a  <?php echo $fecha;?>   &nbsp;&nbsp;&nbsp;&nbsp; </b></p> </td> </td> 
                                                            
                                                         </tr> 
                                                         </table>
                                                         <table align='right' style = 'font-size: 14px;  margin-top: -20px;'>
                                                         <tr align='right'> 
                                                        <td align='right'> <input type="text" name="refint" class= 'form-control' placeholder = 'Ref. Int.' required = ''>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  </b></p> </td> </td> 
                                                            
                                                         </tr>
                  
                                                       
                                                     </table>

                                      <table align='left' style = 'font-size: 14px;  margin-top: 40px;margin-left: 20px;'> 

                                  
                                         <tr align='left'>
                                        <td > <p> <b><?php echo $emp5t;?>  </b></p> </td> 
                                            
                                         </tr>
                                          <tr align='left'> 
                                        <td align='left'> <input type="text" name="dirig" class= 'form-control'  size = '30'   placeholder = 'Dirigido a:' required = ''> </td> 
                                            
                                         </tr> <tr align='left'>
                                        <td ><input type="text" name="dirig2" class= 'form-control' placeholder = 'Cargo:'  size = '30'  required = ''> </td> </td 
                                            
                                         </tr>
                                          <tr align='left'> 
                                        <td align='left'> <p> <b>Presente.</b></p> </td> </td> 
                                            
                                         </tr>
  
                                       
                                     </table>
                                    <table align='right' style = 'font-size: 14px; margin-top: 180px; margin-right:-200px; ' > 

                                  
                                         <tr align='right'>
                                        <td align='right'> <p> <b>Asunto: <input type="text" name="dirig22" class= 'form-control' placeholder = 'Asunto' required = ''  size = '50' > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</b></p> </td> </td> 
                                            
                                         </tr> 
                                       
                                  </table>   
                          <table align='left' style = 'font-size: 14px;  margin-right: 35px; margin-left: 20px;'> 

                                  
                                         <tr align='justify'>
                                        <td > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  En relaci&oacute;n al siniestro citado anteriormente, mismo que nos encomend&oacute; hacer un an&aacute;lisis, e investigaci&oacute;n del hecho ocurrido, y de acuerdo a las diferentes t&eacute;cnicas y m&eacute;todos de investigaci&oacute;n empleados le proporciono el siguiente informe detallado. </p> </td> </td> 
                                            
                                         </tr>
                                      <tr>
                                          <td> <br></td>
                                        </tr>
  
                                       
                                     </table>  


                         
                          <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> DATOS DEL SINIESTRO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>
                          <table align='left' style = 'font-size: 14px;   margin-left: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> No. Siniestro:</td> <td> <input type="text" name="nsin" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Fecha del Siniestro:</td>  <td> <input type="date" name="fsin" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Fecha del Reporte:</td> <td> <input type="date" name="frep"style="border-radius: 5px;" > </td> 

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>

                                       <tr align='left'>
                                        <td align='right' width=""> No. de P&oacute;liza:</td> <td> <input type="text" name="pol" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Inciso:</td>  <td> <input type="text" name="inci" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Inicio Vigencia:</td> <td> <input type="date" name="ivig"style="border-radius: 5px;" > </td> 
                                      </tr>
                                      <tr><td><br></td></tr>
                                    </table>

                                      
                                      <table align='left' style = 'font-size: 14px;   margin-left: 0px;'> 
                                      <tr align='left'>
                                         <td  align='right'>&nbsp;&nbsp;&nbsp;&nbsp; T&eacute;rmino Vigencia:</td> <td> <input type="date" name="fvig"style="border-radius: 5px;" > </td> 
                                         <td  align='right'>&nbsp;&nbsp; Cobertura:</td> <td> <input type="text" name="cober"style="border-radius: 5px;" > </td> 

                                            
                                         </tr>
                                        <tr><td><br></td></tr>
                                      <tr align='left'  >
                                         <td  align='right'> Nombre del Asegurado:</td> <td> <input type="text" name="aseg"style="border-radius: 5px;"  >&nbsp;&nbsp; </td> 
                                         <td  align='right' > &nbsp;&nbsp;Nombre del Conductor:</td> <td> <input type="text" name="conduce"style="border-radius: 5px;"  > </td> 

                                            
                                         </tr>
                                      
                                         <tr><td><br></td></tr>
                                       
                                     </table>   
                                        <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                                      <tr align='left'>
                                         <td  align='left'><b>Tipo de siniestro </b> &nbsp; Robo:</td> 
                                         	<?php 
                                        		$sql= "select * from tipo_siniestro ";
										$rc = mysqli_query($mysql,$sql);
											while($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$tipo = $row["tipo"];
										echo" <td  align='right'><input type='checkbox' name='tiposin[]' value='$id'>". utf8_encode($tipo)." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
											}
												?>
												</tr>
											 <tr align='left'>
                                         <td  align='right'>Otros: &nbsp;&nbsp;&nbsp; <input type="text" name="otro"style="border-radius: 5px;"  > </td> 
                                            </tr>
                                            
                                         </tr>
                                        <tr><td><br></td></tr>
                                      
                                     </table>           
                            <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> DATOS DEL VEH&Iacute;CULO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                            <table align='left' style = 'font-size: 14px; '> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> Marca:&nbsp;&nbsp;&nbsp;</td> 
                                        <td> <select name ="marca"   style="border-radius: 5px;">
									<option value = ''> .: Seleccione una Marca :.</option>
                                        	<?php 
                                        		$sql= "select * from marca ";
										$rc = mysqli_query($mysql,$sql);
											while($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$marca = $row["marca"];
										echo"<option value='$id'>".utf8_encode($marca)."</option>";
											}
                                        	?>
                                         </td> 
                                        <td  align='right'> Tipo:&nbsp;&nbsp;&nbsp;</td>  <td> <input type="text" name="tipov" style="border-radius: 5px;" >&nbsp;&nbsp;&nbsp; </td> 
                                         </tr> 
                                      <tr><td><br></td></tr>
                                      <tr align='left'>
                                        <td  align='right'> Modelo:&nbsp;&nbsp;&nbsp;</td> <td> <input type="text" name="modelo"style="border-radius: 5px;" >&nbsp;&nbsp;&nbsp; </td> 
                                        <td  align='right'> Color:&nbsp;&nbsp;&nbsp;</td> <td> <input type="text" name="color"style="border-radius: 5px;" > &nbsp;&nbsp;&nbsp;</td> 

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>
                                    </table>
 <table align='left' style = 'font-size: 14px;   > 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width="">&nbsp;&nbsp;&nbsp; No. Serie:&nbsp;&nbsp;&nbsp;</td> <td> <input type="text" name="serie" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> &nbsp;&nbsp;&nbsp;No. Motor:&nbsp;&nbsp;&nbsp;</td>  <td> <input type="text" name="motor" style="border-radius: 5px;" > </td> 
                                        <td  align='right'>&nbsp;&nbsp;&nbsp; Placa:&nbsp;&nbsp;&nbsp;</td> <td> <input type="text" name="placa"style="border-radius: 5px;" > </td> 
                                        

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>
                                    </table>

                                     </table>           
                            <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> MOTIVO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                                   <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                                      <tr align='left'>
                                      		<?php 
                                        		$sql= "select * from motivo limit 0,4 ";
										$rc = mysqli_query($mysql,$sql);
											while($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$motivo = $row["motivo"];
										//echo" <td  align='right'><input type='checkbox' name='motivo[]' value='$id'> $tipo </td>";
										echo"<td  align='center'><input type='checkbox' name='motivo[]' value='$id'> ".utf8_encode($motivo)." &nbsp;&nbsp;&nbsp;</td>";
											}
												?>


                                         </tr>
                                        <tr><td><br></td></tr>   
                                        <tr align='left'>
                                        	<?php 
                                        		$sql= "select * from motivo limit 4,8 ";
										$rc = mysqli_query($mysql,$sql);
											while($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$motivo = $row["motivo"];
										//echo" <td  align='right'><input type='checkbox' name='motivo[]' value='$id'> $tipo </td>";
										echo"<td  align='center'><input type='checkbox' name='motivo[]' value='$id'> ".utf8_encode($motivo)." &nbsp;&nbsp;&nbsp;</td>";
											}
												?>
                                        
                                         </tr>
                                        <tr><td><br></td></tr>
                                      
                                     </table>     
                                     <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> RESULTADO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                                   <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                                      <tr align='center'>
                                         <td   align='center'>El siniestro es: </td>
                                          <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td   align='center'><input type="radio" name="sinies" value="Procedente"> Procedente. </td>
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td   align='center'><input type="radio" name="sinies" value="Rechazado">Rechazado. </td>
                                           <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td   align='center'><input type="radio" name="sinies" value="Convenio"> Convenio. </td>
                                        
                                         </tr>
                                        <tr><td><br></td></tr>   
                                      
                                     </table>     

                                  </div >
                               <br> <br> <br> <br>

    </div><div style ='width: 22cm; margin:22px auto; height:32cm; align=center; table.auto {table-layout: auto};  margin-top: 300px;'>
  <!-- border: 1px; border-color: black; border-style: solid;-->
	    
                         <div> 
                              	
                              

                                                  <table align='center' style = 'font-size: 14px;  margin-top: 50px;'> 

                                                  
                                                          <tr align='center'>
                                          <th align='center'><center> DESARROLLO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> </td>
                                        </tr>
                                                     </table>
                                                  <table align='center' style = 'font-size: 14px;  margin-top: 0px;'> 

                                                  
                                                          <tr align='center'>
                                          <th align='center'><center> DECLARACI&Oacute;N DEL ASEGURADO O CONDUCTOR VERTIDA AL AJUSTADOR.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>
                                                     </table>

                                     
        
                          <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                  
                                         <tr align='left'>
                                        <td width="20%" style="border-color: black; border-style: solid; border: 1px;"> Desarrollo Inicial:</td> 
                                        <td width="80%" style="border-color: black; border-style: solid; border: 1px;"> <textarea name="desarrollo" class='form-control' rows = '3' cols="80"></textarea> </td> 
                                            
                                         </tr>
                                      <tr>
                                          <td> <br></td>
                                        </tr>

  
                                       
                                     </table>  
                                	<table align='center' style = 'font-size: 14px;  margin-top: 0px;'> 

                                                                                  
                                                                                          <tr align='center'>
                                                                          <th align='center'><center> ENTREVISTA CON EL ASEGURADO O CONDUCTOR.</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                                                                     
                                        
                                                          <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                                        <td width="20%" style="border-color: black; border-style: solid; border: 1px;"> Desarrollo de la Entrevista:</td> 
                                                                        <td width="80%" style="border-color: black; border-style: solid; border: 1px;"> <textarea name="entrevista" class='form-control' rows = '3' cols="80"></textarea> </td> 
                                                                            
                                                                         </tr>
                                                                      <tr>
                                                                          <td> <br></td>
                                                                        </tr>

                                  
                                                                       
                                                                     </table>  
                                <table align='center' style = 'font-size: 14px;  margin-top: 0px;'> 
                                          
                                           <tr align='center'>
                                               <th align='center'><center> RECONSTRUCCI&Oacute;N E INSPECCION EN LUGAR DE LOS HECHOS.</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                                                                     
                                        
                                                          <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                 <td > Visitado: &nbsp; &nbsp;&nbsp; &nbsp;
                                                  <input type="radio" name="visitado" value="SI"> SI &nbsp; &nbsp;&nbsp; &nbsp;
                                                <input type="radio" name="visitado" value="NO"> No &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                               <td> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; </td>
                                                 <td > Ubicaci&oacute;n &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                                  <td> <textarea  name="ubica" class='form-control' rows = '2' cols="60"></textarea> </td> 
                                                                            
                                                       </tr>
                                                        
                                                       
                                    </table> 
                                      <table align='center' style = 'font-size: 14px;  margin-top: 60px;'> 
                                     <tr align='left'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ" class='form-control' rows = '2' cols="80"></textarea> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                          <table align='center' style = 'font-size: 14px;  margin-top: 0px;'> 
                                          
                                           <tr align='center'>
                                               <th align='center'><center> DOCUMENTOS DE PROPIEDAD.</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>
                          
                          <table align='left' style = 'font-size: 14px;   margin-left: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> Tipo de Documento:</td> <td> <input type="text" name="doc" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Fecha:</td>  <td> <input type="date" name="fecdoc" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Raz&oacute;n Social o Nombre del establecimiento:</td> <td> <input type="text" name="razon"style="border-radius: 5px;" > </td> 

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>

                                      
                                    </table>
                                             <table align='left' style = 'font-size: 14px;   margin-left: 15px; margin-right: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> Documento Legal:</td> <td> <input type="text" name="legal" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Cotejado con:</td>  <td> <input type="text" name="cotejo" style="border-radius: 5px;" > </td> 
                                         </tr> 
                                      <tr><td><br></td></tr>
                                       <tr align='left'>
                                        <td  align='right'> Cargo / Dpto.:</td> <td> <input type="text" name="cargo"style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Tel&eacute;fono:</td> <td> <input type="text" name="tlf"style="border-radius: 5px;" > </td> 

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>
                                    </table>

                                     <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                 <td > Contacto: &nbsp; &nbsp;&nbsp; &nbsp;
                                                  <input type="radio" name="contacto" value="Personal"> Personal &nbsp; &nbsp;&nbsp; &nbsp;
                                                <input type="radio" name="contacto" value="Fax"> Otro medio &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                             <!-- <td> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; </td> -->
                                                
                                                   <td  align='right'>&nbsp; &nbsp;&nbsp; &nbsp; Fecha:</td>  <td> <input type="date" name="feccontacto" style="border-radius: 5px;" > </td> 
                                                                            
                                                       </tr>
                                                       <tr> 
                                                        <td >&nbsp; &nbsp;&nbsp; &nbsp; Lugar de Contacto: <textarea  name="lugar"class='form-control' rows = '1' cols="40"></textarea> </td> 
                                                       </tr>
                                                      
                                                       
                                    </table> 
                                      
                                            <table align='center' style = 'font-size: 14px;  margin-top: 320px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ2" class='form-control' rows = '2' cols="80"></textarea> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>                             
                                             
                            <table align='left' style = 'font-size: 14px;   margin-left: 280px; margin-top: 10px;'> 
                            <tr align='center'>
                                          <th align='center'><center> PREEXISTENCIA DEL VEH&Iacute;CULO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td> </tr>
                                         

                          </table>
                          <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                            <tr align='left'>
                                          <td align='center'> <p>La preexistencia del bien asegurado se verific&oacute; en: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p> </td>
                                        </tr>
                                     
                          </table>

                              <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                                        <td > 
                                                                          Domicilio de N/A: &nbsp; &nbsp;&nbsp; &nbsp;
                                                        <input type="radio" name="domicilio1" value="SI"> SI &nbsp; &nbsp;&nbsp; &nbsp;
                                                         <input type="radio" name="domicilio1" value="NO"> No &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                                                        <td > Direcci&oacute;n: &nbsp; &nbsp;</td><td> <textarea name="dirdom" class='form-control' rows = '2' cols="60"></textarea> </td> 
                                                                            
                                                                         </tr>
                                                                         <tr> <td> </td> </tr>
                                                                         </table>
                                                                        <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 
                                                                        
                                                                         <tr> 


                                                                           <td > 
                                                                          Testigos de la Presencia del Veh&iacute;culo: &nbsp;
                                                        <input type="radio" name="vehiculo2" value="SI"> SI &nbsp;
                                                         <input type="radio" name="vehiculo2" value="NO"> No  </td> 
                                                                        <td > </td> 
                                                                            
                                                                         </tr>
                                                                     
                                                                      </table>
                                                                       <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 
                                                                           <tr>
                                                                           <td>Nombre: </td>
                                                                            <td> <input type="text" name="ncontacto" style="border-radius: 5px;" > </td>
                                                                              <td> &nbsp; &nbsp; &nbsp; &nbsp;Direcci&oacute;n o Referencia: &nbsp; &nbsp; </td>
                                                                           <td> <textarea name="dircontact" class='form-control' rows = '2' cols="56"></textarea> </td> 
                                                                         </tr>
                                  
                                                                       
                                                                     </table>  
                                                                      
                                                             <table align='center' style = 'font-size: 14px;  margin-top: 280px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ3" class='form-control' rows = '2' cols="80"></textarea> 
                                                          <input type="hidden" name="empaseg" value ="<?php echo $emp;?>"></td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>             
                                  <table align='left' style = 'font-size: 14px;   margin-left: 300px; margin-top: 10px;'> 
                            <tr align='center'>
                                          <th align='center'><center> VERIFICACI&Oacute;N DE P&Oacute;LIZAS.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td> </tr>
                                         

                          </table>
                            <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                                        <td > 
                                                                        <b>  P&oacute;liza Anterior: </b> &nbsp;
                                                        <input type="radio" name="polk" value="SI"> SI &nbsp;&nbsp;
                                                         <input type="radio" name="polk" value="NO"> No &nbsp; &nbsp;</td> 
                                                                        <td > 
                                                                         <b>&nbsp;&nbsp; Cobertura: </b> &nbsp;&nbsp;&nbsp;
                                                        <input type="radio" name="cober2" value="Amplia"> Amplia &nbsp; &nbsp;&nbsp;
                                                         <input type="radio" name="cober2" value="Limitada"> Limitada &nbsp; &nbsp;&nbsp;
                                                         <input type="radio" name="cober2" value="Otra"> Otra &nbsp;&nbsp;&nbsp; </td> 
                                                       
                                                                            
                                                                         </tr>
                                                                           <tr align='left'>
                                                                         	 <td > Vigencia Desde:</td>  <td> <input type="date" name="vdsd" style="border-radius: 5px;" > </td>
                                                         <td > Hasta:</td>  <td> <input type="date" name="vhst" style="border-radius: 5px;" > </td> 
                                                                         </tr>
                                                                       </table>
                                         <table align='center' style = 'font-size: 14px;  margin-top: 120px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ4" class='form-control' rows = '2' cols="80"></textarea> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>   

                                           <table align='left' style = 'font-size: 14px;   margin-left: 300px; margin-top: 30px;'> 
                            <tr align='center'>
                                          <th align='center'><center> CARPETA DE INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td> </tr>
                                         

                          </table>

                          	  <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 
                                                                           <tr>
                                                                           <td>Denuncia ante el Ministerio P&uacute;blico: </td>
                                                                            <td> <input type="text" name="ministerio" style="border-radius: 5px;" > </td>
                                                                              <td align="rigth">&nbsp; Alcald&iacute;a o Municipio:  </td>
                                                                           <td> <input type="text" name="alcaldia" style="border-radius: 5px;" > </td> 
                                                                          
                                                                         </tr>
                                                                         <tr> <td> <br> </td>  </tr>
                                  
                                                                       
                                                                     </table> 


                                                                       <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 
                                                                           <tr>
                                                                           <td align="rigth">&nbsp; Carpeta: &nbsp;  </td>
                                                                           <td> <input type="text" name="carpeta" style="border-radius: 5px;" > &nbsp; </td>
                                                                           <td align="rigth">&nbsp; Fecha: &nbsp;  </td>
                                                                           <td> <input type="date" name="fcarpeta" style="border-radius: 5px;" >&nbsp;  </td>
                                                                           <td align="rigth">&nbsp; Hora: &nbsp;  </td>
                                                                           <td> <input type="text" name="horas" style="border-radius: 5px;" >&nbsp;  </td>
                                                                           
                                                                         </tr>
                                                                     <tr> <td> <br> </td>  </tr>
                                                                       
                                                                     </table>  
 <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 
                                                                           <tr>
                                                                           	        <td > 
                                                                        <b>  Registrada: </b> &nbsp;
                                                        <input type="radio" name="regis" value="SI"> SI &nbsp; 
                                                         <input type="radio" name="regis" value="NO"> No &nbsp; </td> 
                                                                        <td > 
                                                                           <td align="rigth">&nbsp; Carpeta: &nbsp; </td>
                                                                           <td align="rigth"> <input type="text" name="carpeta2" style="border-radius: 5px;" >&nbsp;&nbsp; </td>
                                                                           <td align="rigth">&nbsp;&nbsp; Motivo Carpeta Relacionada: &nbsp; </td>
                                                                           <td align="rigth"> <input type="text" name="mcarpeta" style="border-radius: 5px;" > </td>
                                                                           
                                                                         </tr>
                                  
                                                                       
                                                                     </table>  




                              		</div >
		</div>
		<div style ='width: 22cm; margin:22px auto; height:32cm; align=center; table.auto {table-layout: auto};  margin-top: 600px;'>
  <!-- border: 1px; border-color: black; border-style: solid;-->
	    
                         <div> 
                              	
                              

                                                  <table align='center' style = 'font-size: 14px;  margin-top: 10px;'> 

                                                  
                                                          <tr align='center'>
                                          <th align='center'><center> DESARROLLO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> </td>
                                        </tr>
                                                     </table>
                                                 <table align='center' style = 'font-size: 14px;  margin-top: 20px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ5" class='form-control' rows = '2' cols="80"></textarea> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>   
                                     
        
                         
                                	<table align='center' style = 'font-size: 14px;  margin-top: 20px;'> 

                                                                                  
                                                                                          <tr align='center'>
                                                                          <th align='center'><center> DOCUMENTOS ANEXOS.</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>
                                      <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                            <tr align='left'>
                                          <td align='center'> <p>Documentos que se anexan a la investigaci&oacute;n: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p> </td>
                                        </tr>
                                        <tr>
                                        	<td><br></td>
                                        </tr>
                                     
                          </table>

                                                                     
                                        
                       <table align='left' style = 'font-size: 14px; margin-top: 40px; margin-left: -360px;'> 

                                                                  
                                   

                                   	<?php 
                                        		$sql= "select * from documentos ";
										$rc = mysqli_query($mysql,$sql);
											while($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$docu = $row["documento"];
										echo" <tr align='left'> <th > <input type='checkbox' name='pol3[]' value= '$id'>".utf8_encode($docu)." </th> </tr> ";
											}
												?>


                                 

                             <tr>
                              <td> <br></td>
                              </tr>                     
                                 </table>  
                                <table align='center' style = 'font-size: 14px;  margin-top: 230px; margin-left: 350px;'> 
                                          
                                           <tr align='center'>
                                               <th align='center'><center> CONCLUSIONES</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                                                                     
                                        
                 <table align='left' style = 'font-size: 14px; margin-top: 0px; margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                 <th> Resultado del Siniestro: &nbsp; &nbsp;&nbsp; &nbsp; </th>
                                              <th> <input type="radio" name="resul" value="Procede"> Procede &nbsp; &nbsp;&nbsp; &nbsp;</th>
                                              <th> <input type="radio" name="resul" value="Rechazo"> Rechazo &nbsp; &nbsp;&nbsp; &nbsp;</th>
                                              <th> <input type="radio" name="resul" value="Convenio"> Convenio &nbsp; &nbsp;&nbsp; &nbsp;</th>
                                                
                                                                            
                                                       </tr>
                                                        
                                                       
                                    </table> 

                   <table align='left' style = 'font-size: 14px;  margin-right: 35px; margin-left: 20px; margin-top: 20px;'> 

                                  
                                         <tr align='justify'>
                                        <td > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Por lo anterior, el presente siniestro resulta procedente toda vez que no se puede comprobar de manera fehaciente que el robo haya ocurrido en el periodo al descubierto, no encontrando para ello ning&uacute;n indicio que pudiera hacer creer o pensar mediante dicho o documentales que hubieran sido susceptibles de investigaci&oacute;n. </p> </td> 
                                            
                                         </tr>
                                      <tr>
                                          <td> <br></td>
                                        </tr>
  											 <tr align='justify'>
                                        <td > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sin m&aacute;s por el momento reciba un afectuoso saludo, no sin antes reiterarle que quedo a sus órdenes para cualquier aclaraci&oacute;n al respecto. </p> </td>  
                                       <tr>
                                          <td> <br></td>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr> 
                                        </table>
                                        <table  align='center' style = 'font-size: 14px;  margin-right: 35px; margin-left: 250px; margin-top: 20px;'>
                                        
                                         <tr align='justify'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Atentamente. </p> </th> 
                                       <tr>
                                       
                                       
                                      <tr>
                                          <td> <br></td>
                                        </tr>
                                         <tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Licenciado. C&eacute;sar Qui&ntilde;ones G. </p> </th> 
                                       </tr> <tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Director Operativo. </p> </th>  </tr>
                                       <tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asesor&iacute;a Legal Especializada e Investigaciones S.C. </p> </th> 
                                       </tr> <tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cquinones@alesi.org.mx </p> </th> 
                                       </tr><tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; alesi.sc@prodigy.net.mx</p> </th> 
                                       </tr>
                                       <tr>  <td> <br> <br></td> </tr>


                                     </table>  

                              		</div >
                              		<input type="submit" class="btn btn-danger" value="Guardar" required = '' style="margin-left: 350px;">
                              		
		</div>


</form>
<br> <br> <br>
	