<?php
    include_once "persona.php";

    $lista =  [
        new Persona("Fulano", "1969-11-02", "5546546554"),
        new Persona("Karleishon", "2003-01-13", "5647566574"),
        new Persona("Michelle", "1967-10-02", "5546546758"),
        new Persona("Jair", "1999-01-02", "5540549554"),
        new Persona("Brayan", "2000-05-02", "5578890054"),
        new Persona("Viera", "2004-09-02", "5546569854"),
        new Persona("Valdepe", "1969-11-01", "5546540054"),
        new Persona("Aladin", "1969-09-02", "5566096554"),
        new Persona("Estrella", "1989-07-02", "5546906554"),
        new Persona("Max", "1997-09-09", "5546549054"),
    ];
    echo "Todo bien";

    function edades($edadActual){
        $fecNac = new DateTime($edadActual); 
        $edad = new DateTime();
        $actual = $edad->diff($fecNac)->y;
        return $actual;


    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Personas</title>
        <style>
            td {
                background-color: #e3f957;
            }
        </style>
    </head>
    <body>
        <h1>Lista de Personas</h1>
        <table border>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Edad Actual</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $p): ?>
                <tr>
                    <td><?php echo $p->getNombre(); ?></td>
                    <td><?php echo $p->getFecNac(); ?></td>
                    <td><?php echo edades ($p->getFecNac());?></td>
                    <td><?php echo $p->getTelefono(); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>