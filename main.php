<html>
<head>
    <title>Tabla de horario escolar</title>
    <style>
        table, tr, td, th{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<?php
    $Horario= array(
        "Lunes"=>array(1=>array("Nombre"=>"Empresa e iniciativa emprendedora","Docente"=>"María del Sol García Tarajano","Aula"=>"201","Hora"=>"1ª"),
                        2=>array("Nombre"=>"Desarrollo Web en entorno servidor","Docente"=>"Sergio Ramos Suárez","Aula"=>"201","Hora"=>"2ª"),
                        3=>array("Nombre"=>"Desarrollo Web en entorno servidor","Docente"=>"Sergio Ramos Suárez","Aula"=>"201","Hora"=>"3ª"),
                        4=>array("Nombre"=>"Desarrollo Web en entorno cliente","Docente"=>"María del Carmen Rodríguez Suárez","Aula"=>"201","Hora"=>"4ª"),
                        5=>array("Nombre"=>"Desarrollo Web en entorno cliente","Docente"=>"María del Carmen Rodríguez Suárez","Aula"=>"201","Hora"=>"5ª"),
                        6=>array("Nombre"=>"Desarrollo Web en entorno cliente","Docente"=>"María del Carmen Rodríguez Suárez","Aula"=>"201","Hora"=>"6ª"),
                    ),
        "Martes"=>array(1=>array("Nombre"=>"Despliegue de aplicaciones web","Docente"=>"María Antonia Montesdeoca Viera","Aula"=>"201","Hora"=>"1ª"),
                        2=>array("Nombre"=>"Despliegue de aplicaciones web","Docente"=>"María Antonia Montesdeoca Viera","Aula"=>"201","Hora"=>"2ª"),
                        3=>array("Nombre"=>"Desarrollo Web en entorno servidor","Docente"=>"Sergio Ramos Suárez","Aula"=>"201","Hora"=>"3ª"),
                        4=>array("Nombre"=>"Desarrollo Web en entorno servidor","Docente"=>"Sergio Ramos Suárez","Aula"=>"201","Hora"=>"4ª"),
                        5=>array("Nombre"=>"Diseño de interfaces web","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"201","Hora"=>"5ª"),
                        6=>array("Nombre"=>"Diseño de interfaces web","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"201","Hora"=>"6ª"),
                    ),
        "Miércoles"=>array(1=>array("Nombre"=>"Desarrollo Web en entorno cliente","Docente"=>"María del Carmen Rodríguez Suárez","Aula"=>"201","Hora"=>"1ª"),
                        2=>array("Nombre"=>"Desarrollo Web en entorno cliente","Docente"=>"María del Carmen Rodríguez Suárez","Aula"=>"201","Hora"=>"2ª"),
                        3=>array("Nombre"=>"Desarrollo Web en entorno servidor","Docente"=>"Sergio Ramos Suárez","Aula"=>"201","Hora"=>"3ª"),
                        4=>array("Nombre"=>"Desarrollo Web en entorno servidor","Docente"=>"Sergio Ramos Suárez","Aula"=>"201","Hora"=>"4ª"),
                        5=>array("Nombre"=>"Diseño de interfaces web","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"201","Hora"=>"5ª"),
                        6=>array("Nombre"=>"Diseño de interfaces web","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"201","Hora"=>"6ª"),
                    ),
        "Jueves"=>array(1=>array("Nombre"=>"Despliegue de aplicaciones web","Docente"=>"María Antonia Montesdeoca Viera","Aula"=>"201","Hora"=>"1ª"),
                    2=>array("Nombre"=>"Despliegue de aplicaciones web","Docente"=>"María Antonia Montesdeoca Viera","Aula"=>"201","Hora"=>"2ª"),
                    3=>array("Nombre"=>"Despliegue de aplicaciones web","Docente"=>"María Antonia Montesdeoca Viera","Aula"=>"201","Hora"=>"3ª"),
                    4=>array("Nombre"=>"Desarrollo Web en entorno cliente","Docente"=>"María del Carmen Rodríguez Suárez","Aula"=>"201","Hora"=>"4ª"),
                    5=>array("Nombre"=>"Desarrollo Web en entorno cliente","Docente"=>"María del Carmen Rodríguez Suárez","Aula"=>"201","Hora"=>"5ª"),
                    6=>array("Nombre"=>"Empresa e iniciativa emprendedora","Docente"=>"María del Sol García Tarajano","Aula"=>"201","Hora"=>"6ª"),
                ),
        "Viernes"=>array(1=>array("Nombre"=>"Diseño de interfaces web","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"201","Hora"=>"1ª"),
                2=>array("Nombre"=>"Diseño de interfaces web","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"201","Hora"=>"2ª"),
                3=>array("Nombre"=>"Despliegue de aplicaciones web","Docente"=>"María Antonia Montesdeoca Viera","Aula"=>"201","Hora"=>"3ª"),
                4=>array("Nombre"=>"Empresa e iniciativa emprendedora","Docente"=>"María del Sol García Tarajano","Aula"=>"201","Hora"=>"4ª"),
                5=>array("Nombre"=>"Desarrollo Web en entorno servidor","Docente"=>"Sergio Ramos Suárez","Aula"=>"201","Hora"=>"5ª"),
                6=>array("Nombre"=>"Desarrollo Web en entorno servidor","Docente"=>"Sergio Ramos Suárez","Aula"=>"201","Hora"=>"6ª"),
            ),
        );

//Función que muestra por pantalla el horario guardado en el array.
        function mostrarhorario(){
            global $Horario;
            foreach($Horario as $clave => $valor){
                echo "<pre>";
                echo "$clave : ";
                echo "</pre>";
                foreach($valor as $clave1 => $valor1){
                    echo "<pre>";
                    echo "A $clave1 ª hora:";
                    echo "</pre>";
                    foreach($valor1 as $clave2=>$valor2){
                        echo "<pre>";
                        echo "$clave2 : $valor2";
                        echo "</pre>";
                    }
                    echo "</pre>";
                    }  
                }
            }

//Función que muestra por pantalla la clase actual en función de la hora que sea en el momento de ejecutarlo.
        function queClase(){ 
           global $Horario;
           $diaActual = date("N");
           $horaActual = date("G")-1;
           $minActual = date("i");
           $horaclase = quehora($horaActual, $minActual);
            if($horaActual>24 or $horaActual<0 or $minActual<0 or $minActual>60){
                 echo("Los datos de la hora introducidos son incorrectos.");
            }else{
                if($horaclase==0){
                    echo("Clase actual: Descanso");
                }elseif($horaclase==7){
                    echo ("La hora introducida no es horario escolar.");
                }else{
                    if($diaActual == 1){
                        echo("Clase actual: ");
                        print_r($Horario["Lunes"][$horaclase]);
                    }elseif($diaActual == 3){
                        print_r($Horario["Martes"][$horaclase]);
                    
                    }elseif($diaActual == 3){
                        echo("Clase actual: ");
                        print_r($Horario["Miércoles"][$horaclase]);

                    }elseif($diaActual == 4){
                        echo("Clase actual: ");
                        print_r($Horario["Jueves"][$horaclase]);
                    
                    }elseif($diaActual == 5){
                        echo("Clase actual: "); 
                        print_r($Horario["Viernes"][$horaclase]);
                    
                    }elseif($diaActual == 6 or $diaActual == 7){
                        echo("El día introducido no hay clases");
                    }else
                    echo("No se reconoce el día introducido");
                }
            }
        }

//Función auxiliar para saber en que clase del día se encuentra según la hora
        function queHora($hora, $min){
            $horatotal = ($hora * 100) + $min;
            if($horatotal>=800 and $horatotal<855){
                return 1;
            }elseif($horatotal<=855 and $horatotal<950){
                return 2;
            }elseif($horatotal<=950 and $horatotal<1045){
                return 3;
            }elseif($horatotal<=1045 and $horatotal<1115){
                return 0;
            }elseif($horatotal<=1115 and $horatotal<1210){
                return 4;
            }elseif($horatotal<=1210 and $horatotal<1305){
                return 5;
            }elseif($horatotal<=1305 and $horatotal<1400){
                return 6;
            }else
                return 7;
        }

?>
<body>
    <table>
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
            <td>8:00-8:55</td>
            <td><?php print_r($Horario["Lunes"][1]["Nombre"]."</br> Docente: ".$Horario["Lunes"][1]["Docente"]."</br> Aula: ".$Horario["Lunes"][1]["Aula"])?></td>
            <td><?php print_r($Horario["Martes"][1]["Nombre"]."</br> Docente: ".$Horario["Martes"][1]["Docente"]."</br> Aula: ".$Horario["Martes"][1]["Aula"])?></td>
            <td><?php print_r($Horario["Miércoles"][1]["Nombre"]."</br> Docente: ".$Horario["Miércoles"][1]["Docente"]."</br> Aula: ".$Horario["Miércoles"][1]["Aula"])?></td>
            <td><?php print_r($Horario["Jueves"][1]["Nombre"]."</br> Docente: ".$Horario["Jueves"][1]["Docente"]."</br> Aula: ".$Horario["Jueves"][1]["Aula"])?></td>
            <td><?php print_r($Horario["Viernes"][1]["Nombre"]."</br> Docente: ".$Horario["Viernes"][1]["Docente"]."</br> Aula: ".$Horario["Viernes"][1]["Aula"])?></td>
        </tr>
        <tr>
            <td>8:55-9:50</td>
            <td><?php print_r($Horario["Lunes"][2]["Nombre"]."</br> Docente: ".$Horario["Lunes"][2]["Docente"]."</br> Aula: ".$Horario["Lunes"][2]["Aula"])?></td>
            <td><?php print_r($Horario["Martes"][2]["Nombre"]."</br> Docente: ".$Horario["Martes"][2]["Docente"]."</br> Aula: ".$Horario["Martes"][2]["Aula"])?></td>
            <td><?php print_r($Horario["Miércoles"][2]["Nombre"]."</br> Docente: ".$Horario["Miércoles"][2]["Docente"]."</br> Aula: ".$Horario["Miércoles"][2]["Aula"])?></td>
            <td><?php print_r($Horario["Jueves"][2]["Nombre"]."</br> Docente: ".$Horario["Jueves"][2]["Docente"]."</br> Aula: ".$Horario["Jueves"][2]["Aula"])?></td>
            <td><?php print_r($Horario["Viernes"][2]["Nombre"]."</br> Docente: ".$Horario["Viernes"][2]["Docente"]."</br> Aula: ".$Horario["Viernes"][2]["Aula"])?></td>
        </tr>
        <tr>
            <td>9:50-10:45</td>
            <td><?php print_r($Horario["Lunes"][3]["Nombre"]."</br> Docente: ".$Horario["Lunes"][3]["Docente"]."</br> Aula: ".$Horario["Lunes"][3]["Aula"])?></td>
            <td><?php print_r($Horario["Martes"][3]["Nombre"]."</br> Docente: ".$Horario["Martes"][3]["Docente"]."</br> Aula: ".$Horario["Martes"][3]["Aula"])?></td>
            <td><?php print_r($Horario["Miércoles"][3]["Nombre"]."</br> Docente: ".$Horario["Miércoles"][3]["Docente"]."</br> Aula: ".$Horario["Miércoles"][3]["Aula"])?></td>
            <td><?php print_r($Horario["Jueves"][3]["Nombre"]."</br> Docente: ".$Horario["Jueves"][3]["Docente"]."</br> Aula: ".$Horario["Jueves"][3]["Aula"])?></td>
            <td><?php print_r($Horario["Viernes"][3]["Nombre"]."</br> Docente: ".$Horario["Viernes"][3]["Docente"]."</br> Aula: ".$Horario["Viernes"][3]["Aula"])?></td>
        </tr>
        <tr>
            <td>10:45-11:15</td>
            <td colspan="5" id="descanso">DESCANSO</td>
        </tr>
        <tr>
            <td>11:15-12:10</td>
            <td><?php print_r($Horario["Lunes"][4]["Nombre"]."</br> Docente: ".$Horario["Lunes"][4]["Docente"]."</br> Aula: ".$Horario["Lunes"][4]["Aula"])?></td>
            <td><?php print_r($Horario["Martes"][4]["Nombre"]."</br> Docente: ".$Horario["Martes"][4]["Docente"]."</br> Aula: ".$Horario["Martes"][4]["Aula"])?></td>
            <td><?php print_r($Horario["Miércoles"][4]["Nombre"]."</br> Docente: ".$Horario["Miércoles"][4]["Docente"]."</br> Aula: ".$Horario["Miércoles"][4]["Aula"])?></td>
            <td><?php print_r($Horario["Jueves"][4]["Nombre"]."</br> Docente: ".$Horario["Jueves"][4]["Docente"]."</br> Aula: ".$Horario["Jueves"][4]["Aula"])?></td>
            <td><?php print_r($Horario["Viernes"][4]["Nombre"]."</br> Docente: ".$Horario["Viernes"][4]["Docente"]."</br> Aula: ".$Horario["Viernes"][4]["Aula"])?></td>

        </tr>
        <tr>
            <td>12:10-13:05</td>
            <td><?php print_r($Horario["Lunes"][5]["Nombre"]."</br> Docente: ".$Horario["Lunes"][5]["Docente"]."</br> Aula: ".$Horario["Lunes"][5]["Aula"])?></td>
            <td><?php print_r($Horario["Martes"][5]["Nombre"]."</br> Docente: ".$Horario["Martes"][5]["Docente"]."</br> Aula: ".$Horario["Martes"][5]["Aula"])?></td>
            <td><?php print_r($Horario["Miércoles"][5]["Nombre"]."</br> Docente: ".$Horario["Miércoles"][5]["Docente"]."</br> Aula: ".$Horario["Miércoles"][5]["Aula"])?></td>
            <td><?php print_r($Horario["Jueves"][5]["Nombre"]."</br> Docente: ".$Horario["Jueves"][5]["Docente"]."</br> Aula: ".$Horario["Jueves"][5]["Aula"])?></td>
            <td><?php print_r($Horario["Viernes"][5]["Nombre"]."</br> Docente: ".$Horario["Viernes"][5]["Docente"]."</br> Aula: ".$Horario["Viernes"][5]["Aula"])?></td>

        </tr>
        <tr>
            <td>13:05-14:00</td>
            <td><?php print_r($Horario["Lunes"][6]["Nombre"]."</br> Docente: ".$Horario["Lunes"][6]["Docente"]."</br> Aula: ".$Horario["Lunes"][6]["Aula"])?></td>
            <td><?php print_r($Horario["Martes"][6]["Nombre"]."</br> Docente: ".$Horario["Martes"][6]["Docente"]."</br> Aula: ".$Horario["Martes"][6]["Aula"])?></td>
            <td><?php print_r($Horario["Miércoles"][6]["Nombre"]."</br> Docente: ".$Horario["Miércoles"][6]["Docente"]."</br> Aula: ".$Horario["Miércoles"][6]["Aula"])?></td>
            <td><?php print_r($Horario["Jueves"][6]["Nombre"]."</br> Docente: ".$Horario["Jueves"][6]["Docente"]."</br> Aula: ".$Horario["Jueves"][6]["Aula"])?></td>
            <td><?php print_r($Horario["Viernes"][6]["Nombre"]."</br> Docente: ".$Horario["Viernes"][6]["Docente"]."</br> Aula: ".$Horario["Viernes"][6]["Aula"])?></td>

        </tr>
    </table>
    <br>
    <p><?php queclase()?></p>
</body>
</html>