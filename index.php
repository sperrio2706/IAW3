<html>
    <head>
        <title>Practica 5</title>
    </head>
    <body>
        <h1>Tarea</h1>
        <p>
            <p><br><br>
                <?php
                    $dia = date('w');
                    switch ($dia) {
                    case 0:
                        echo "Hoy es Domingo";
                        break;
                    case 1:
                        echo "Hoy es Lunes";
                        break;
                    case 2:
                        echo "Hoy es Martes";
                        break;
                    case 3:
                        echo "Hoy es Miércoles";
                        break;
                    case 4:
                        echo "Hoy es Jueves";
                        break;
                    case 5:
                        echo "Hoy es Viernes";
                        break;
                    case 6:
                        echo "Hoy es Sábado";
                        break;
                    default:
                        echo "No me mientas";
                    }
                ?>
            </p>
        </p>
    </body>
</html>
