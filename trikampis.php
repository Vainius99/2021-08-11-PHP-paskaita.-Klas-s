<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="trikampis.php" action="get">
    <input type="text" name="a" value="5" />
    <input type="text" name="b" value="4" />
    <input type="text" name="c" value="3" />  
    <button type="submit" name="trikampis">SUBMIT</button>
</form>

<?php

// 2. Susikurti klasę "Trikampis". Pagal klasę sukurti objektą.
// Objektas turi priimti du kintamuosius: a, b, c kraštines.
// Turi būti tikrinama ar trikampį galima sudaryti.
// Sukurti metodus, kurie skaičiuoja plotą, perimetrą, pusperimetrį, bei kiekvieną iš trikampio kampų.
// Informaciją išvesti į <p> žymę.

class Trikampis {
    private $a;
    private $b;
    private $c;
    private $pusperimetris;
    private $rezultatas;
    
    function __construct($a, $b, $c) {
        $this->a = floatval($a);
        $this->b = floatval($b);
        $this->c = floatval($c);
        $this->perimetras();
        $this->pusPerimetras();
        $this->plotas();
    }
    
        function perimetras() {
            $this->rezultatas = $this->a + $this->b + $this->c;
            echo "perimetras: ".$this->rezultatas;
            echo "<br>";
        }
        function pusPerimetras() {
            $this->rezultatas = (($this->a + $this->b + $this->c)/2);
            $this->pusperimetris = $this->rezultatas;
            echo "pusperimetras: ".$this->rezultatas;
            echo "<br>";
        }
        function plotas() {
            $this->rezultatas = sqrt(($this->pusperimetris * ($this->pusperimetris - $this->a) * ($this->pusperimetris - $this->b) * ($this->pusperimetris - $this->c)));
            echo "plotas: ".$this->rezultatas;
            echo "<br>";
        }
}    

if(isset($_GET["trikampis"])) {
    if(isset($_GET["a"]) && !empty($_GET["a"]) && isset($_GET["b"]) && !empty($_GET["b"]) && isset($_GET["c"]) && !empty($_GET["c"])) {
        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];
        if($a + $b > $c && $a + $c > $b && $b + $c > $a) {
                    echo "Tai trikampis";
                    echo "<br>";
                    $trikampis = new Trikampis($a, $b, $c);
                    
            } else { echo "Tai NE trikampis"; }
    } else {
        echo "Laukeliai yra tusti";
    }
}

// truksta kampu skaiciavimo funkciju

?>
    
</body>
</html>