<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="keturkampis.php" action="get">
    <input type="text" name="a" value="5" />
    <input type="text" name="b" value="4" />  
    <button type="submit" name="keturkampis">SUBMIT</button>
</form>

<!-- 3. Susikurti klasę "Keturkampis". Pagal klasę sukurti objektą.
Objektas turi priimti du kintamuosius: a ir b kraštines.
Sukurti metodus, kurie skaičiuoja kvadrato plotą, perimetrą, įstrižainės ilgį.
Informaciją išvesti į <p> žymę.

Papildoma: nubraižyti kvadratą(pikseliais) pagal a ir b kraštines. Kvadrato nubraižymas turi būti objekto metodas. -->

<?php 

class Keturkampis {
    public $a;
    public $b;
    public $rezultatas;

    function __construct($a, $b){
        $this->a = floatval($a);
        $this->b = floatval($b);
        $this->plotis();
        $this->perimetras();
        $this->istrizaine();
        $this->braizymas();
    }

    function plotis(){
        $this->rezultatas = $this->a * $this->b;
        echo "plotis: ".$this->rezultatas;
        echo "<br>";

    }
    function perimetras(){
        $this->rezultatas = 2 * ($this->a + $this->b);
        echo "perimetras: ".$this->rezultatas;
        echo "<br>";

    }
    function istrizaine(){
        $this->rezultatas = sqrt(($this->a**2) + ($this->b**2));
        echo "istrizaine: ".$this->rezultatas;
        echo "<br>";

    }
    function braizymas() {
        echo "<div class='braizymas' ";
        echo "style='height:" . $this->b . "px; width:" . $this->a . "px;";
        echo "background:brown' ></div>";
    }
}    

if(isset($_GET["keturkampis"])) {
    if(isset($_GET["a"]) && !empty($_GET["a"]) && isset($_GET["b"]) && !empty($_GET["b"])) {
        $a = $_GET["a"];
        $b = $_GET["b"];
        $keturkampis = new Keturkampis($a, $b);
    }
}

?>

<!-- truksta atvaizdavimo -->
    
</body>
</html>