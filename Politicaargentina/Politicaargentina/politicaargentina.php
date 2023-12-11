<?php include('template/cabecera.php'); ?>


<?php 
include("config/bd.php");?>


<div class="col-md-12">
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Partidos politicos</h4>
            <a name="" id="" class="btn btn-primary" href="$partidospoliticos" role="button">Ver mas</a>
        </div>
    </div>    

    <div class="col-md-12">
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Politicos</h4>
       <a name="" id="" class="btn btn-primary" href="sentenciaSQL = $conexion->prepare(select * from partidospoliticos)" role="button">Ver mas</a>
        </div>
    </div>    

    <table id="partidos" class="table table-bordered">

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

    <table id="politicos" class="table table-bordered">

<?php
$base = "politicaargentina";
$conexion = mysqli_connect("localhost","root","", $base);
$consulta = "SELECT * from politicos";
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


<?php include('template/pie.php'); ?>