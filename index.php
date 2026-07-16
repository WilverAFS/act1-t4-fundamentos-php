<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 - PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        #container {
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        h2 {
            color: #34495e;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
            margin-top: 30px;
        }

        h3 {
            color: #2980b9;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
        }

        code {
            background: #ecf0f1;
            padding: 3px 6px;
            border-radius: 4px;
            font-family: Consolas, monospace;
            color: #c0392b;
        }

        section {
            margin-bottom: 40px;
        }

        hr {
            border: none;
            border-top: 2px solid #ddd;
            margin: 30px 0;
        }

        /* Estilo para las salidas de var_dump */
        pre {
            background: #f0f0f0;
            padding: 10px;
            border-radius: 6px;
            overflow-x: auto;
            font-size: 14px;
        }

        nav {
            background-color: #3498db;
            padding: 10px 0;
            position: sticky;
            /* se queda arriba al hacer scroll */
            top: 0;
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline-block;
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #f1c40f;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="#a">Variables</a></li>
            <li><a href="#b">Operadores</a></li>
            <li><a href="#c">Condicionales</a></li>
            <li><a href="#d">Ciclos</a></li>
            <li><a href="#e">Funciones</a></li>
        </ul>
    </nav>
    <div id="container">
        <h1>Fundamentos de PHP</h1>
        <hr>
        <section id="a">
            <h2> a) Variables</h2>
            <?php
            h3("Variable de tipo string");
            $nombre = "Wilver";       // string
            echo "Nombre: " . $nombre;

            h3("Variable de tipo int");
            $edad = 22;               // int
            echo "Edad: " . $edad;

            h3("Variable de tipo float");
            $altura = 1.60;           // float
            echo "Altura: " . $altura;

            h3("Variables de tipo boolean");
            print "Los tipos boolean al mostrase con echo interactua diferente, pues 'true' muestra 1, mientras que 'false' no muestra nada.";
            saltarLinea();
            $soltero = true;           // boolean
            $casado = false;           // boolean
            echo "Soltero: " . $soltero;
            saltarLinea();
            echo "Casado: " . $casado;
            saltarLinea(2);

            h3("Inspeccionado las variable con var_dump() ");
            print "La función var_dump() en PHP sirve para inspeccionar el contenido y el tipo de una variable. Es una herramienta de depuración muy útil porque no solo muestra el valor, sino también el tipo de dato y, en el caso de arrays u objetos, su estructura completa.";
            saltarLinea(2);
            echo "Nombre: ";
            var_dump($nombre);
            saltarLinea();
            echo "Edad: ";
            var_dump($edad);
            saltarLinea();
            echo "Altura: ";
            var_dump($altura);
            saltarLinea();
            echo "Soltero: ";
            var_dump($soltero);
            saltarLinea();
            echo "Casado: ";
            var_dump($casado);
            saltarLinea(2);

            $numeros = [10, 20, 30, 40];
            $nombres = ["Wilver", "Alfredo", "Flores", "Santiago"];
            $tipos = ["Wilver", 22, 1.6, true];
            print "Una array no puede representarse con echo, pues daria un error:";
            //echo "Arreglo de numeros: ". $numeros;

            saltarLinea(2);
            print "Por otro lado con la funcion var_dump() si es posible mostralo directamente.";
            saltarLinea();
            echo "Arreglo de numeros: ";
            saltarLinea();
            var_dump($numeros);
            saltarLinea(2);
            echo "Arreglo de nombres: ";
            saltarLinea();
            var_dump($nombres);

            saltarLinea(2);
            echo "Arreglo de tipos de datos: ";
            saltarLinea();
            var_dump($tipos);


            ?>
        </section>
        <hr>
        <section id="b">
            <h2> b) Uso de operadores</h2>
            <p>
                Para hacer uso de los operadores puedes hacer uso de la variables en la URL del navegador. <br>
                Por ejemplo agrega lo siguiente: <br> <code> /index.php?a=12&b=17</code> <br>
            </p>
            <?php
            $a = existeParametro("a", true);
            $b = existeParametro("b", true);
            $activo = true;           // boolean
            print "Valor y tipo de las variables:";
            saltarLinea();
            echo "a = ";
            var_dump($a);
            saltarLinea();
            echo "b = ";
            var_dump($b);
            saltarLinea();

            h3("Aritmeticos");
            echo "Suma a + b: " . "($a + $b) = ";
            var_dump($a + $b);
            saltarLinea();
            echo "Resta a - b: " . "($a - $b) = ";
            var_dump($a - $b);
            saltarLinea();
            echo "Dividir a / b: " . "($a / $b) =";
            if ($b == 0) {
                echo "Error de division por cero.";
            } else {
                var_dump($a / $b);
            }
            saltarLinea();
            echo "Multiplicar a * b: " . "($a * $b) = ";
            var_dump($a * $b);


            h3("Comparacion");
            echo "Igualdad a == b: " . "($a == $b) : ";
            var_dump($a == $b);
            saltarLinea();
            echo "Identico a === b: " . "($a === $b) : ";
            var_dump($a === $b);
            saltarLinea();
            echo "Distinto a != b: " . "($a != $b) : ";
            var_dump($a != $b);
            saltarLinea();
            echo "Mayor que (a > b): " . "($a > $b) : ";
            var_dump($a > $b);
            saltarLinea();

            echo "Menor que (a < b): " . "($a < $b) : ";
            var_dump($a < $b);
            saltarLinea();
            echo "Mayor o igual (a >= b): " . "($a >= $b) : ";
            var_dump($a > +$b);
            saltarLinea();
            echo "Menor o igual (a <= b): " . "($a <= $b) : ";
            var_dump($a <= $b);
            saltarLinea();
            echo "Nave espacial (a <=> b): " . "($a <=> $b) : ";
            var_dump($a <=> $b);
            saltarLinea();

            h3("Logicos");
            print "Para estos operadores introdusca valores booleanos en la URL";
            saltarLinea();
            print "Por ejemplo agrega lo siguiente: <br> <code> /index.php?a=true&b=false</code> <br>";
            saltarLinea();
            echo "Y logico (a && b): ($a && $b) : ";
            var_dump($a && $b);
            saltarLinea();
            echo "O logico (a || b): ($a || $b) : ";
            var_dump($a || $b);
            saltarLinea();
            echo "! negacion (!a): (!$b) :";
            var_dump(!$a);
            ?>
        </section>
        <hr>
        <section id="c">
            <h2>c) Condicionales</h2>
            <p>
                Usualmente los condicionales se emplean con los operadores de logicos y de comparacion
            </p>
            <p>
                Nuevamente pruebe a introducir sus propios valores para las variables a y b directamente en le URL del navegador. <br>
                Por ejemplo agrega lo siguiente: <br> <code> /index.php?a=3&b=7</code> <br>
            </p>

            <?php

            h3("if-else");
            echo "Indicar si al menos uno de los dos nuemeros es par";
            saltarLinea();
            echo " <code>if (a % 2 == 0  || b % 2 == 0){SI} else{NO}</code> ";
            saltarLinea();
            echo "Resultado de ($a % 2 == 0  || $b % 2 == 0): ";
            if ($a % 2 == 0  || $b % 2 == 0) {
                echo "SI";
            } else {
                echo "NO";
            }

            h3("switch");
            echo "Indicar el dia segun el numero de dia dado";
            saltarLinea();
            echo "<code>switch (a) { case 1: Lunes; ... case 7: Domingo; ... default: ERROR }</code>";
            saltarLinea();
            echo "Dia $a: ";
            switch ($a) {
                case 1:
                    echo "Lunes";
                    break;
                case 2:
                    echo "Martes";
                    break;
                case 3:
                    echo "Miércoles";
                    break;
                case 4:
                    echo "Jueves";
                    break;
                case 5:
                    echo "Viernes";
                    break;
                case 6:
                    echo "Sábado";
                    break;
                case 7:
                    echo "Domingo";
                    break;
                default:
                    echo "ERROR: Número inválido, debe ser un numero entre 1 y 7";
            }

            ?>
        </section>
        <hr>
        <section id="d">
            <h2>d) Ciclos</h2>
            <p>
                Un ciclo permite repetir instrucciones según se especifique. <br>
            </p>
            <p>
                Nuevamente pruebe a introducir sus propios valores para las variables a y b directamente en la URL del navegador. <br>
                Por ejemplo agrega lo siguiente: <br> <code>/index.php?a=3&b=7</code> <br>
            </p>
            <?php
            h3("Ciclo for");
            echo "Imprimir una pirámide de asteriscos según la altura (a) especificada";
            saltarLinea();

            // Pirámide con for
            for ($i = 1; $i <= $a; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }

            h3("Ciclo while");
            echo "Contar desde 1 hasta b usando while";
            saltarLinea();

            $contador = 1;
            while ($contador <= $b) {
                echo $contador . " ";
                $contador++;
            }

            h3("Ciclo foreach");
            echo "Uno de los usos de este tipo de ciclo es recorrer un arreglo.";
            saltarLinea();
            print "Prueba ingresando un arreglo en la variable (c): <br> <code>/index.php?c[]=2&c[]=4&c[]=6</code> <br>";
            saltarLinea();


            // Si se pasa un arreglo por la URL con ?c[]=...
            if (isset($_GET['c'])) {
                $c = $_GET['c'];
            } else {
                $c = [10, 20, 30, 40]; // arreglo por defecto
            }

            echo "Contenido del arreglo dado por var_dum()";
            saltarLinea();
            var_dump($c);
            saltarLinea(2);

            echo "Contenido y recorrido del arreglo mediante el ciclo foreach";
            saltarLinea(1);
            foreach ($c as $indice => $valor) {
                echo "Elemento $indice: $valor <br>";
            }
            ?>
        </section>

        <hr>
        <section id="e">
            <h2>e) Funciones</h2>
            <p>Las funciones son muy utiles para reutilizar codigo, a lo largo de esta pagina web se utilizaron funciones para repetir fragmentos de codigo sin tener que escribirlos.</p>
            <?php
            h3("Promedio de un arreglo");
            echo "La siguiente funcion es promedio(), recibe como parametro un arreglo y retorna el promedio de sus elementos.";
            saltarLinea();
            print "Prueba modificando el arreglo de la variable (c): <br> <code>/index.php?c[]=90&c[]=80&c[]=70</code> <br>";

            saltarLinea();
            echo "Promedio del arreglo: " . promedio($c) . "<br>";

            h3("Saltar linea");
            echo "La siguiente funcion es saltarLinea(), recibe como parametro un numero y salta esa cantidad de lineas.";
            saltarLinea();
            print "Prueba indicando una cantidad de lineas a saltar en la variable (l): <br> <code>/index.php?l=3</code> <br>";
            saltarLinea();
            if (isset($_GET['l'])) {
                $l = $_GET['l'];
            } else {
                $l = 1;
            }

            echo "Inicio";
            saltarLinea($l);
            echo "Fin";

            function promedio($arr)
            {
                $suma = array_sum($arr);
                return $suma / count($arr);
            }

            function existeParametro($parametro, $numero)
            {
                if (isset($_GET[$parametro])) {
                    $valor = $_GET[$parametro];
                } else {
                    $valor = "No especificado";

                    if ($numero) {
                        $valor = 5;
                    }
                }
                return $valor;
            }

            function saltarLinea($n = 1)
            {
                // Si no se pasa argumento o es 0, imprime una sola línea
                if ($n <= 0) {
                    echo "<br>";
                } else {
                    //Imprime tantas líneas como indique $n
                    for ($i = 0; $i != abs($n); $i++) {
                        echo "<br>";
                    }
                }
            }

            function h3($txt)
            {
                echo "<h3>$txt</h3>";
            }
            ?>
        </section>

    </div>
</body>

</html>