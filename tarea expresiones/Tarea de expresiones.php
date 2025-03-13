//DE JESUS PALMA JHOANA MICHELLE

//PROGWEB

<?php
// Funcion para hacer el calculo de la ecuacion "A"

function exp1($x, $y) {
    $div = ($x / $y);
    return ((1 / $x) + (($x + $y) / 3) + (2 * $div));
}

// Funcion para hacer el calculo de la ecuacion "B"

function exp2($x) {
    $op1 = 2 * pow($x, 2);
    $sum1 = ((1 / 2) * $x) + (((3 + $x) / 2) * $op1);
    $sum2 = ((2 + 3) * $x);
    return $sum1 / $sum2;
}

// Funcion para hacer el calculo de la ecuacion "C"

function exp3($x) {
    $op1 = sqrt(pow((2 * $x), 2) + pow(3, 2));
    $op2 = sqrt(pow($x, 2));
    return ($op1 / 5) + $op2;
}

// Funcion para hacer el calculo de la ecuacion "D"
 
function exp4($x) {
    $op1 = (1 / 2) + (1 / 4) + (1 / 8);
    $op2 = pow($x, 1.0 / 3.0);
    $op3 = sqrt($x) / 2;
    $op4 = (3 * pow($x, 2)) / 4;
    return ($op1 * $op2) / ($op3 + $op4);
}

// Funcion para hacer el calculo de la ecuacion "E"

function exp5($x) {
    $op1 = (pow($x, 2) / 2) + (1 / sqrt($x));
    $op2 = 3 + ((1 / 2) * pow($x, 3));
    return sqrt($op1 / $op2);
}

// Deficion de valores para las ecuaciones dadas
$x1 = 2;
$y1 = 4;
$x2 = 3;
$x3 = 2;
$x4 = 2;
$x5 = 4;

// Calculo de resultados llamando a las funciones dadas

$res1 = exp1($x1, $y1);
$res2 = exp2($x2);
$res3 = exp3($x3);
$res4 = exp4($x4);
$res5 = exp5($x5);
?>

<html>
<head>
    <title>Expresiones</title>
</head>
<body>
    <h1>Expresiones</h1>   
    <h2>Declaracion de variables y asignacion de valores</h2>   
    
    <p>El resultado de la ecuacion A es: <?php echo $res1; ?></p>
    <img src="ecua1.jpg" alt="Ecuacion A">

    <p>El resultado de la ecuacion B es: <?php echo $res2; ?></p>
    <img src="ecua2.jpg" alt="Ecuacion B">

    <p>El resultado de la ecuacion C es: <?php echo $res3; ?></p>
    <img src="ecua3.jpg" alt="Ecuacion C">

    <p>El resultado de la ecuacion D es: <?php echo $res4; ?></p>
    <img src="ecua4.jpg" alt="Ecuacion D">

    <p>El resultado de la ecuacion E es: <?php echo $res5; ?></p>
    <img src="ecua5.jpg" alt="Ecuacion E">

</body>
</html>