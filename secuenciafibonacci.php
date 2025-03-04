<html>
<head>
    <title>Mis Pininos</title>
</head>
<body>
<h1>Los 2048 numeros de Fibonacci en pagina Web</h1>
    <?php
        $x = 0;
        $y = 1;  

        for ($i=1;$i<=2048;$i++) {
            echo "$x, ";
            $z = $x + $y;
            $x = $y; 
            $y = $z;
        }
    ?>
    </p>
</body>
</html>