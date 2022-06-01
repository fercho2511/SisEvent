<?php 
 $conexion=mysqli_connect('localhost','root','','dbenventos');
// $continente=$_GET['continente'];

// 	$sql="SELECT id,silla FROM mapa where estado = 1 and mesa = '$continente' GROUP BY 1";

// 	$result=mysqli_query($conexion,$sql);

// 	$cadena="<label>Cantidad</label> 
// 			<select id='lista2' name='lista2'>";

// 	while ($ver=mysqli_fetch_row($result)) {
// 		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
// 	}

// 	echo  $cadena."</select>";
	





	$movInt=$_GET['movInt'];
	$sql="SELECT id,silla FROM mapa where estado = 1 and mesa = '$movInt' GROUP BY 1"; 
$result=$mysqli->query($sql);
$options="";
while ($row=$result->fetch_array(MYSQLI_ASSOC)) { 
    $options.="<option value=\"$row[id]\">$row[id] $row[silla]</option>"; 
}
echo $options;


?>