
<html lang="en">
  <head>
    <meta charset="utf-8">

  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Vozila</title>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
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
      <li class="nav-item ">
        <a class="nav-link" href="tabele1.php">RASPORED<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">VOZILA</a>
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
    </div>

     <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search">serch</i>
          </button>
        </div>
      </div>
    </form>

  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<?php

class Bilding
{
  
  public $NumberWindous = 4;
  public $NumberDoors = 4;
  public $NumberSteps = 4;

  public function BrojOtvora()
  {
    return  ($this->NumberWindous + $this->NumberDoors + $this->NumberSteps) * 3;
    
  }

}
$bilding = new Bilding;
 class House extends Bilding
 {
   public $NumberWindous = 10;
    } 

$house  = new House;


class Hotel extends Bilding
 {
    }
$hotel = new Hotel;
?>        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-10 col-lg-ofset-1">
                <img src="img/slika1.png" alt="img" class="img-responsive img-thumbnail">
             </div>
          </div>       
        </div>

        <div class="row">

          <div class="col-lg-4">
           <div class="panel">
            <div class="panel-body">
              <h2 class="text-center">STATIC CLASS</h2>
               <img src="img/slika1.png" alt="img" class="img-responsive img-thumbnail">
               <br>
               <br> 
               <?php
 class StaticClass 
{
  static $a = 10;
  function  Hello($txt="Man")
  {
    echo "Good day {$txt}";
  }

   public function add()
  {
   return self::$a*2;
  }
}

/**
 * 
 */
class StaticClass1 extends StaticClass
{
  
}
               ?>
               <p>class StaticClass<br> 
{
  static a = 5;<br>
  function  Hello($txt="Man")<br>
  {
    echo "Good day {$txt}";
  }
}</p>
               <p>echo StaticClass::$a; Print: <?php echo StaticClass::$a;   ?></p>
               <p> StaticClass::$a=10;  <?php StaticClass::$a=10;   ?></p>
               <p>echo StaticClass::$a; Print: <?php echo StaticClass::$a;   ?></p>
               <p> StaticClass::Hello(); Print: <?php StaticClass::Hello();  ?></p> 
               <p> StaticClass::Hello("Woman"); Print: <?php  StaticClass::Hello("Woman"); ?></p>
                <p>echo StaticClass1::$a; Print: <?php echo StaticClass1::$a;   ?></p>
               <p><?php echo StaticClass::add();  ?></p>
               <button class="btn">more...</button>            
            </div>             
           </div> 
          </div>

            <div class="col-lg-4">
           <div class="panel">
            <div class="panel-body">
              <h2 class="text-center">NASLEDJIVANJE CLASS</h2>
               <img src="img/slika1.png" alt="img" class="img-responsive img-thumbnail">
                <br>
               <br> 
               <P>Hotel have is <?php echo  $hotel->NumberWindous; ?></P>
<P>Broj prozora  in house <?php echo  $house->NumberWindous; ?>       </P>
<P>Number hoope in bilding <?php echo  $bilding->BrojOtvora(); ?>       </P>
<P>my parent is <?php echo  get_parent_class("Bilding"); ?>       </P>
<P>my parent is <?php   echo  get_parent_class("Hotel"); ?>       </P>
<P>Does Bliding parents from Hotel <?php   echo  is_subclass_of("Hotel", "Bilding") ? "true" : "false"; ?>       </P> 
               <button class="btn">more...</button>              
            </div>             
           </div> 
          </div>

          <div class="col-lg-4">
           <div class="panel">
            <div class="panel-body">
              <h2 class="text-center">ENJOY</h2>
               <img src="img/slika1.png" alt="img" class="img-responsive img-thumbnail">
                <br>
               <br> 
               <p>mmmmmm mmmmmmmm mmmm mmmmmmmmm mmmmmm mmmmmmmmm mmmmmmmmmmmmmmmmm mmmmmmmmmmm mmmmmmm mmmmmmmmmm mmmmmmmmmm mmmmmmmmm mmmmmmm mmmmmmmmmmm mmmmmmmmmmm mmmmmmmmmmm mmmmmmmmmmmm mmmmmmmmmmm m mmmmmmmm mmmmm mmmmmmmmmm mmmmmmmmmm mmmmmmmmmmmm mmmmmmmmmm mmmmmmmmmmm mmmmmmmmmmmm mmmmmm mmmmmmmm mmmmmmmm mmmmmmmmm mmmmmmmmmmm mmmmmmm mmmmmmm mm</p> 
               <button class="btn">more...</button>              
            </div>             
           </div> 
          </div>

        </div>


<div class="container-fluid">
<form action="tabele2.php" enctype="multipart/from-data" method="post">
 <input type="hidden" name="MAX-FILE-SIZE" value="1000000" /><br> 
<input type="file" name="file_upload" /><br>
<input type="submit" name="submit" value="Upload"><br>
</form>
<?php

if(isset($_FILES["file_upload"])){
echo "<h2>podaci datoteke</h2><br>";
print_r($_FILES["file_upload"]);
}

?>

</div>
<?php
class Covek {

 public $name;
 public $SecondName;
 public $NumberHand = 2;
 public $NumberLegs = 2;

public $a = 1;
private $b = 3;
protected $c = 4;

public function name_secendname()
{
  return $this->name . " " . $this->SecondName;
}

public function set_b($value)
{
 return $this->b = $value;
}

public function get_b()
{
  echo $this->b . "<br>";
}

private function FunctionName1()
{
  echo "string1" . "<br>";
}

private function FunctionName2()
{
  echo "string2" . "<br>";
}

private function FunctionName3()
{
  echo "string3" . "<br>";
}

public function FunctionName4()
{
  $k = $this->FunctionName1();
  $k .= $this->FunctionName2();
  $k .= $this->FunctionName3();
  echo $k;
}

public function show_b_c()
{
  echo "vrednosti b " . $this->b . "<br>";
  echo "vrednosti  c " .  $this->c . "<br>";
}


  public function pozdrav()
  {
    echo "potdrav iz klase " . get_class($this) . "<br>";
  }

public function poz()
{
  return $this->pozdrav();
}

}
$metode = get_class_methods("covek");
foreach ($metode as $metoda) {
  echo $metoda ."<br>";
}
if(class_exists(Covek)){

  echo "postuji";

  if (class_exists("Covek","pozdrav")) {
   echo "postuji";
  }
}

$covek = new Covek();
$covek1 = new Covek();

echo get_class($covek)."<br>";
echo get_class($covek1)."<br>";

if (is_a($covek, "Covek")) {
  echo "Yes it is man";
}
 $covek->pozdrav();

$covek2 = new Covek();

$covek2 -> pozdrav();
$covek2 -> poz();

echo "vrednost a " . $covek2 ->a;
$covek2 ->show_b_c();
$covek2 ->FunctionName4();

$covek2 ->get_b();
$covek2 ->set_b(12);
$covek2 ->get_b();

echo  $covek->NumberHand . "<br>";
$covek->NumberHand=5;
echo  $covek->NumberHand . "<br>";

$covek->name = "Zoran";
$covek->SecondName = "Pavlovic";

$covek1->name = "Zoran1";
$covek1->SecondName = "Pavlovic1";

echo $covek->name_secendname() . "<br>";
echo $covek1->name_secendname() . "<br>"; 

$varijabla= get_class_vars("Covek");
foreach ($varijabla as $key => $value) {
  echo "{$key}: {$value} <br>";
}

echo property_exists("Covek", "name") ? "true" : "falsh";
?>

<div class="footer " >
  


</div>

</body>

</html>