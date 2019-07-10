<html lang="en">
  <head>
    <meta charset="utf-8">

  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Raspored vozaca</title>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <!-- Image and text -->
     <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">BANJA PREVOZ
        </a>
      </nav>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">RASPORED<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tabele2.php">VOZILA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PLATE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">GORIVO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">EVIDENCIJA</a>
      </li>
    </ul>
           <form class="form-inline my-2 my-lg-0" >
            <input class="form-control mr-sm-2" type="search" placeholder="Registracija" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registracija</button>
           </form>
  </div>
</nav>




<?php

if(isset($_POST["UnosPodataka"])){
	//klik postoji
$PolicMilojko = $_POST['PolicMilojko'];
$DamjanovicBranimir = $_POST["DamjanovicBranimir"];
$NikolicMiroslav = $_POST["NikolicMiroslav"];
$ZivanovicNened = $_POST["ZivanovicNened"];
$MilanaovicZarko = $_POST["MilanaovicZarko"];
$IgnjatovicSlobodan = $_POST["IgnjatovicSlobodan"];
$PuricZoran = $_POST["PuricZoran"];
$IgnjatovicZoran = $_POST["IgnjatovicZoran"];
$DobrosavDzinovic = $_POST["DobrosavDzinovic"];
$MilovanovicZoran = $_POST["MilovanovicZoran"];
$MaksicDalibor = $_POST["MaksicDalibor"];
$MajarosZoran = $_POST["MajarosZoran"];
$ZoranCvetanovic = $_POST["ZoranCvetanovic"];
$GalonicDragan = $_POST["GalonicDragan"];
$MarkovicDragan = $_POST["MarkovicDragan"];
$VuinovicBojan = $_POST["VuinovicBojan"];
$VeselinovicMarinko = $_POST["VeselinovicMarinko"];
$MilicDusan = $_POST["MilicDusan"];
$GligoricZivko = $_POST["GligoricZivko"];

//Konekcija
$conn = mysqli_connect('localhost', 'root', '','duga');
if(mysqli_connect_errno()){
echo mysqli_connect_errno();
die();
}

else {
  echo "Uspesna Konekcija"."</br>";
}

//ubacivanje podataka u tabelu
$q = "INSERT INTO JunRaspored (
PolicMilojko,
DamjanovicBranimir,
NikolicMiroslav,
ZivanovicNened,
MilanaovicZarko,
IgnjatovicSlobodan,
PuricZoran,
IgnjatovicZoran,
DobrosavDzinovic,
MilovanovicZoran,
MaksicDalibor,
MajarosZoran,
ZoranCvetanovic,
GalonicDragan,
MarkovicDragan,
VuinovicBojan,
VeselinovicMarinko,
MilicDusan,
GligoricZivko
 ) VALUES (
'$PolicMilojko',
'$DamjanovicBranimir',
'$NikolicMiroslav',
'$ZivanovicNened',
'$MilanaovicZarko',
'$IgnjatovicSlobodan',
'$PuricZoran',
'$IgnjatovicZoran',
'$DobrosavDzinovic',
'$MilovanovicZoran',
'$MaksicDalibor',
'$MajarosZoran',
'$ZoranCvetanovic',
'$GalonicDragan',
'$MarkovicDragan',
'$VuinovicBojan',
'$VeselinovicMarinko',
'$MilicDusan',
'$GligoricZivko'
)";



$query = mysqli_query($conn, $q);
if ($query){
  echo "Uspesno uneti podaci u tabelu JunRaspored";
}
else{
  echo "Neuspela operacija";
} 

}
?>

<form action="tabele1.php" method="post">

<div class="form-group row">
        <label for="PolicMilojko" class="col-sm-2 col-form-label">Polic Milojko</label>
     <div class="col-sm-3">
           <input type="text" class="form-control form-control-sm" type="text" placeholder="PolicMilojko" id="PolicMilojko" name="PolicMilojko">
        </div>
</div>

<div class="form-group row">
         <label for="DamjanovicBranimir" class="col-sm-2 col-form-label">Damjanovic Branimir</label>
    <div class="col-sm-3">
         <input type="text" name="DamjanovicBranimir" class="form-control form-control-sm" placeholder="DamjanovicBranimir" id="DamjanovicBranimir">	
        </div>
</div>

<div class="form-group row">
      <label for="NikolicMiroslav" class="col-sm-2 col-form-label">Nikolic Miroslav</label>
    <div class="col-sm-3"> 
       <input type="text" name="NikolicMiroslav" class="form-control form-control-sm" placeholder="NikolicMiroslav" id="NikolicMiroslav">
    </div>
</div>

<div class="form-group row">
         <label for="Zivanovic Nened" class="col-sm-2 col-form-label">Zivanovic Nened</label>
    <div class="col-sm-3">
         <input type="text" name="ZivanovicNened" class="form-control form-control-sm" placeholder="ZivanovicNened" id="ZivanovicNened">
</div>
</div>

<div class="form-group row">
          <label for="MilanaovicZarko" class="col-sm-2 col-form-label">Milanaovic Zarko</label>
    <div class="col-sm-3">
          <input type="text" name="MilanaovicZarko"  class="form-control form-control-sm" placeholder="MilanaovicZarko" id="MilanaovicZarko">
    </div>
</div>

<div class="form-group row">
          <label for="IgnjatovicSlobodan" class="col-sm-2 col-form-label">Ignjatovic Slobodan</label>
     <div class="col-sm-3">
<input type="text" name="IgnjatovicSlobodan" class="form-control form-control-sm" placeholder="IgnjatovicSlobodan" id="IgnjatovicSlobodan">
     </div>
</div>

<div class="form-group row">
          <label for="PuricZoran" class="col-sm-2 col-form-label">Puric Zoran</label>
    <div class="col-sm-3">
<input type="text" name="PuricZoran" class="form-control form-control-sm" placeholder="PuricZoran" id="PuricZoran">
</div>
</div>


<div class="form-group row">
          <label for="IgnjatovicZoran" class="col-sm-2 col-form-label">Ignjatovic Zoran</label>
    <div class="col-sm-3">
          <input type="text" name="IgnjatovicZoran" class="form-control form-control-sm" placeholder="IgnjatovicZoran" id="IgnjatovicZoran">
     </div>
</div>

<div class="form-group row">
          <label for="DobrosavDzinovic" class="col-sm-2 col-form-label">Dobrosav Dzinovic</label>
        <div class="col-sm-3">
           <input type="text" name="DobrosavDzinovic" class="form-control form-control-sm" placeholder="DobrosavDzinovic" id="DobrosavDzinovic">
        </div>
</div>


<div class="form-group row">
           <label for="MilovanovicZoran" class="col-sm-2 col-form-label">Milovanovic Zoran</label>
    <div class="col-sm-3">
    	   <input type="text" name="MilovanovicZoran" class="form-control form-control-sm" placeholder="MilovanovicZoran" id="MilovanovicZoran">
     </div>
</div>   	

<div class="form-group row">
          <label for="MaksicDalibor" class="col-sm-2 col-form-label">Maksic Dalibor</label>
    <div class="col-sm-3">	
          <input type="text" name="MaksicDalibor" class="form-control form-control-sm" placeholder="MaksicDalibor" id="MaksicDalibor">
    </div>
</div>         
     
<div class="form-group row">
          <label for="MajarosZoran" class="col-sm-2 col-form-label">Majaros Zoran</label>
    <div class="col-sm-3">	
          <input type="text" name="MajarosZoran" class="form-control form-control-sm" placeholder="MajarosZoran" id="MajarosZoran">
    </div>
</div> 

<div class="form-group row">
          <label for="ZoranCvetanovic" class="col-sm-2 col-form-label">Zoran Cvetanovic</label>
    <div class="col-sm-3">	
          <input type="text" name="ZoranCvetanovic" class="form-control form-control-sm" placeholder="ZoranCvetanovic" id="ZoranCvetanovic">
    </div>
</div> 

<div class="form-group row">
          <label for="GalonicDragan" class="col-sm-2 col-form-label">Galonic Dragan</label>
    <div class="col-sm-3">	
          <input type="text" name="GalonicDragan" class="form-control form-control-sm" placeholder="GalonicDragan" id="GalonicDragan">
    </div>
</div>

<div class="form-group row">
          <label for="MarkovicDragan" class="col-sm-2 col-form-label">Markovic Dragan</label>
    <div class="col-sm-3">	
          <input type="text" name="MarkovicDragan" class="form-control form-control-sm" placeholder="MarkovicDragan" id="MarkovicDragan">
    </div>
 </div>


<div class="form-group row">
          <label for="VuinovicBojan" class="col-sm-2 col-form-label">Vuinovic Bojan</label>
    <div class="col-sm-3">	
          <input type="text" name="VuinovicBojan" class="form-control form-control-sm" placeholder="VuinovicBojan" id="VuinovicBojan">
    </div>
</div>

<div class="form-group row">
          <label for="VeselinovicMarinko" class="col-sm-2 col-form-label">Veselinovic Marinko</label>
    <div class="col-sm-3">	
          <input type="text" name="VeselinovicMarinko" class="form-control form-control-sm" placeholder="VeselinovicMarinko" id="VeselinovicMarinko">
    </div>
</div>

<div class="form-group row">
          <label for="MilicDusan" class="col-sm-2 col-form-label">Milic Dusan</label>
    <div class="col-sm-3">	
          <input type="text" name="MilicDusan" class="form-control form-control-sm" placeholder="MilicDusan" id="MilicDusan">
    </div>
</div>

<div class="form-group row">
          <label for="GligoricZivko" class="col-sm-2 col-form-label">Gligoric Zivko</label>
    <div class="col-sm-3">	
          <input type="text" name="GligoricZivko" class="form-control form-control-sm" placeholder="GligoricZivko" id="GligoricZivko">
    </div>
</div>


<input type="submit" name="UnosPodataka">
</form>
</body>
</html>




