<?php
$idu=$_COOKIE['id_usuario'];
$acceso=$_COOKIE['acceso'];
$tipo=$_COOKIE['tipo'];
if($idu=="" or $acceso=="")
{	print "<meta http-equiv='refresh' content='0; url=./index.php?msg='>";
    exit;
}
?>
<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>Practica01 MVC</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href='home'>Home</a></li>
                <li><a href='nosotros'>Nosotros</a></li>
                <li><a href='galeria'>Galeria</a></li>
                <li><a href='contacto'>Contacto</a></li>
                <li><a href='Myusuario'>Myusuario</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<?php
$sql="select * from usuario where id=$idu";
$consulta=mysql_query($sql) or die ("error de consulta $sql");
$idu=mysql_result($consulta, 0, 'id');
$nombre=mysql_result($consulta, 0, 'Nombre');
$nombre=ucwords("$nombre");
$Ap=mysql_result($consulta, 0, 'ApellidoPaterno');
$Ap=ucwords("$Ap");
$Am=mysql_result($consulta, 0, 'ApellidoMaterno');
$Am=ucwords("$Am");
echo"<div>Bienvenido:<b>$nombre $Ap $Am</div><br>";
?>