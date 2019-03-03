<?php
//connectivity
error_reporting(1);
$con = mysqli_connect("localhost","root","","bikes");

if(isset($_POST['submit']))
{
    $c = $_POST['comp'];
    $n = $_POST['nme'];
    $m = $_POST['mod'];
    $s = $_POST['spd'];
    $cl = $_POST['clr'];

    $query = "INSERT INTO items VALUES ('$c','$n','$m','$s','$cl')";
    mysqli_query($con,$query);

}
$query = "SELECT * FROM items";

if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {

        $co = $row["company"];
        $na= $row["name"];
        $mo = $row["model"];
        $sp = $row["speed"];
        $clr = $row["color"]; 

        echo "
        <div class='container'>
    <div class='row'>
        <div class='col col-md-3'>
 <div class='card card-body' style='width: 13rem;'>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'>".$co."</li>
    <li class='list-group-item'>".$na."</li>
    <li class='list-group-item'>".$mo."</li>
     <li class='list-group-item'>".$sp."</li>
      <li class='list-group-item'>".$clr."</li>
  </ul>
</div>
</div>
</div>
</div>

 ";
    }
    $result->free();
} 

?>
<html>
<head>
<head>
    <meta charset="utf-8">
    <title>Basic Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body style="background-color:#E5E5E5">


<form role="form" method="post" >">
 <fieldset style="display: inline-flex">
<div class="form-group row">
<label for="bikeCompany" class="col-sm-2 col-form-label">Co.:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="bikeCompany" name="comp" required>
</div>
</div>

<div class="form-group row">
<label for="bikeName" class="col-sm-2 col-form-label">Name:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="bikeName" name="nme" required>
</div>
</div>

<div class="form-group row">
<label for="bikeModel" class="col-sm-2 col-form-label">Model:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="bikeModel" name="mod" required>
</div>
</div>

<div class="form-group row">
<label for="bikeSpeed" class="col-sm-2 col-form-label">Speed:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="bikeSpeed" name="spd" required>
</div>
</div>

<div class="form-group row">
<label for="bikeColor" class="col-sm-2 col-form-label">Color:</label>   
<div class="col-sm-10">
<input type="text" class="form-control" id="bikeColor" name="clr" required>
</div>
</div>


<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<input type="submit" value="SUBMIT" name="submit" class="btn btn-primary"/>
</div>
</div>
</form>
</div>
</body>
</html>