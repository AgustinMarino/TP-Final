<?php include('template/cabecera.php'); ?>


<?php 
include("config/bd.php");?>


<div class="col-md-12">
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Partidos politicos</h4>
            <a onclick="partidos()" name="" id="" class="btn btn-primary" href="#" role="button">Ver mas</a>
        </div>
    </div>    

    <div class="col-md-12">
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Politicos</h4>
       <a onclick="politicos()" name="" id="" class="btn btn-primary" href="#" role="button">Ver mas</a>
        </div>
    </div>    

    <table id="partidos" class="table table-bordered" style="display: none;">

    <?php
    $base = "politicaargentina";
    $conexion = mysqli_connect("localhost","root","", $base);
    $consulta = "SELECT * from partidospoliticos";
    $consulta = mysqli_query($conexion, $consulta);

    echo '<thead>
        <tr>
            <th>Partido_ID</th>
            <th>NombrePartido</th>
            <th>Ideologia</th>
            <th>Aniofundacion</th>
            <th>SedeCentral</th>
            <th>LiderActual</th>
            <th>SitioWeb</th>   
        </tr>
        </thead>';
    while($resultado = mysqli_fetch_row($consulta)){
        echo '<tr>
            <td>'.$resultado[0].'</td>
            <td>'.$resultado[1].'</td>
            <td>'.$resultado[2].'</td>
            <td>'.$resultado[3].'</td>
            <td>'.$resultado[5].'</td>
            <td>'.$resultado[4].'</td>
            <td>'.$resultado[6].'</td>  
        </tr>';
    }
    echo '</tbody>';

    ?>
    </table>

    <table id="politicos" class="table table-bordered" style="display: none;">

<?php
$base = "politicaargentina";
$conexion = mysqli_connect("localhost","root","", $base);
$consulta = "SELECT * from politicos";
$consulta = mysqli_query($conexion, $consulta);

echo '<thead>
    <tr>
        <th>Politico_ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cargo</th>
        <th>Partido_ID</th>
        <th>Educacion</th>
        <th>Fecha de Nacimiento</th>   
        <th>Biografia</th>
        <th>Imagen</th>
        </tr>
    </thead>';
while($resultado = mysqli_fetch_row($consulta)){
    echo '<tr>
        <td>'.$resultado[0].'</td>
        <td>'.$resultado[1].'</td>
        <td>'.$resultado[2].'</td>
        <td>'.$resultado[3].'</td>
        <td>'.$resultado[4].'</td>
        <td>'.$resultado[5].'</td>
        <td>'.$resultado[6].'</td>
        <td>'.$resultado[7].'</td>
        <td>'.$resultado[8].'</td>  
    </tr>';
}
echo '</tbody>';

?>
</table>
<script src="index.js"></script>

<?php include('template/pie.php'); ?>