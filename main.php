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

        function mostrarcontenido($Horario){
            foreach($Horario as $clave => $valor){
                echo "$clave : ";
                echo "<br>";
                foreach($valor as $clave1 => $valor1){
                    echo "A $clave1 ª hora:";
                    foreach($valor1 as $clave2=>$valor2){
                        echo "<br>";
                        echo "$clave2 : $valor2";
                        echo "<br>";
                    }
                    echo "<br>";
                    }  
                }
            }

        function queClase($dia, $hora, $min){ //compararlos con 8:15 en 815 (te ahorras comparar horas y minutos por separado)
           
            $horatotal = ($hora * 100) + $min;
            
            if($hora>24 or $hora<0 or $minuto<0 or $minuto>60){
                 echo("Los datos de la hora introducidos son incorrectos.")
            }else{
                    if($dia == "Lunes" or $dia =="lunes"){
                        
                    }elseif($dia == "Martes" or $dia =="martes"){

                    }elseif($dia == "Miércoles" or $dia =="miércoles"){

                    }elseif($dia == "Jueves" or $dia =="jueves"){

                    }elseif($dia == "Viernes" or $dia =="viernes"){

                    }elseif($dia == "Sábado" or $dia =="sabado"){
                        echo("El día introducido no hay clases");

                    }elseif($dia == "Domingo" or $dia =="domingo"){
                        echo("El día introducido no hay clases");

                    }else
                    echo("No se reconoce el día introducido")
            }
               
                

        }




?>

