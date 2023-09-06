<?php
class Db{
	
	private $con;
	
	public function conectar(){
$this->con=mysqli_connect("localhost","id2230432_adminblue","Artinet61009","id2230432_adminblue",3306);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  }
  
  public function consulta($c)
  {
	  
	  echo $c;
	  $resultado = mysqli_query($this->con,$c);
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}
	  return $resultado;
  }
  
}
?>