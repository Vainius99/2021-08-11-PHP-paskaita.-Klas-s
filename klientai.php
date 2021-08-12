<?php

// <!-- 1.Susikurti klasę "Klientas".
// Kintamieji:
// vardas
// pavarde
// asmens kodas
// prisijungimo data
// adresas
// elpastas.

// Susikūrus klasę, sukurti masyvą, kuriame turi būti 200 kliento objektų
// Duomenis užpildyti savo nuožiūrą.
// Visą "Klientai" objektų masyvą atvaizduoti lentelėje <table>. -->

class Klientas{

    public $vardas;
    public $pavarde;
    public $asmensKodas;
    public $prisijungimoData;
    public $adresas;
    public $elpastas;

    function __construct($a, $b, $c, $d, $e, $f)
    {
        $this->vardas = $a;
        $this->pavarde = $b;
        $this->asmensKodas = $c;
        $this->prisijungimoData = $d;
        $this->adresas = $e;
        $this->elpastas = $f;

    }
}

 

$klientai = array();

for($i=0; $i<200; $i++) {
    array_push($klientai, new Klientas("vardas".$i, "pavarde".$i, "asmensKodas".$i, "prisijungimoData".$i, "adresas".$i, "elpastas".$i));
}



echo "<table>";
foreach ($klientai as $eilute){
    echo "<tr>";
        foreach ($eilute as $stulpelis){
            echo "<td>";
            echo $stulpelis;
            echo "</td>";
        }
    echo "</tr>";
}
echo "</table>"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>