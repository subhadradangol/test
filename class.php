<?php
class books
{
var $title;
var $price;

public function setprice($par)
{
$this->price=$par;
}
public function getprice()
{
echo $this->price ."<br/>";
}

public function settitle($par)
{
$this->title= $par;
}
public function gettitle()
{
echo $this->title ."<br/>";
}
}

$physics= new books("physics",800);
$physics->settitle("physics");
$physics->setprice(800);
//var_dump($physics);
$physics->gettitle();
$physics->getprice();
?>



<!--With constructor-->
<?php
class books1
{
var $title;
var $price;
function __construct($par1,$par2){
$this->price=$par2;
$this->title=$par1;
}
public function setprice($par)
{
$this->price=$par;
}
public function getprice()
{
echo $this->price ."<br/>";
}

public function settitle($par)
{
$this->title= $par;
}
public function gettitle()
{
echo $this->title ."<br/>";
}
}

$physics= new books1("physics",800);
$maths=new books1("maths",500);

$physics->gettitle();
$physics->getprice();
$maths->gettitle();
$maths->getprice();
?>
<?php echo $physics->title;?>
<?php echo $physics->price;?>
