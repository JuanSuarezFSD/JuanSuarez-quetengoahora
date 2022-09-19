<?php
    $horario= array(
        "Lunes"=>array(1=>array("modulo"=>"EMR","nombre"=>"Empresa e iniciativa emprendedora","docente"=>"María del Sol García Tarajano","aula"=>"201","hora"=>"1ª"),
                        2=>array("modulo"=>"DSW","nombre"=>"Desarrollo Web en entorno servidor","docente"=>"Sergio Ramos Suárez","aula"=>"201","hora"=>"2ª"),
                        3=>array("modulo"=>"DSW","nombre"=>"Desarrollo Web en entorno servidor","docente"=>"Sergio Ramos Suárez","aula"=>"201","hora"=>"3ª"),
                        4=>array("modulo"=>"DEW","nombre"=>"Desarrollo Web en entorno cliente","docente"=>"María del Carmen Rodríguez Suárez","aula"=>"201","hora"=>"4ª"),
                        5=>array("modulo"=>"DEW","nombre"=>"Desarrollo Web en entorno cliente","docente"=>"María del Carmen Rodríguez Suárez","aula"=>"201","hora"=>"5ª"),
                        6=>array("modulo"=>"DEW","nombre"=>"Desarrollo Web en entorno cliente","docente"=>"María del Carmen Rodríguez Suárez","aula"=>"201","hora"=>"6ª"),
                    ),
        "Martes"=>array(1=>array("modulo"=>"DPL","nombre"=>"Despliegue de aplicaciones web","docente"=>"María Antonia Montesdeoca Viera","aula"=>"201","hora"=>"1ª"),
                        2=>array("modulo"=>"DPL","nombre"=>"Despliegue de aplicaciones web","docente"=>"María Antonia Montesdeoca Viera","aula"=>"201","hora"=>"2ª"),
                        3=>array("modulo"=>"DSW","nombre"=>"Desarrollo Web en entorno servidor","docente"=>"Sergio Ramos Suárez","aula"=>"201","hora"=>"3ª"),
                        4=>array("modulo"=>"DSW","nombre"=>"Desarrollo Web en entorno servidor","docente"=>"Sergio Ramos Suárez","aula"=>"201","hora"=>"4ª"),
                        5=>array("modulo"=>"DOR","nombre"=>"Diseño de interfaces web","docente"=>"Ermis Papakonstantinou Baez","aula"=>"201","hora"=>"5ª"),
                        6=>array("modulo"=>"DOR","nombre"=>"Diseño de interfaces web","docente"=>"Ermis Papakonstantinou Baez","aula"=>"201","hora"=>"6ª"),
                    ),
        "Miércoles"=>array(1=>array("modulo"=>"DEW","nombre"=>"Desarrollo Web en entorno cliente","docente"=>"María del Carmen Rodríguez Suárez","aula"=>"201","hora"=>"1ª"),
                        2=>array("modulo"=>"DEW","nombre"=>"Desarrollo Web en entorno cliente","docente"=>"María del Carmen Rodríguez Suárez","aula"=>"201","hora"=>"2ª"),
                        3=>array("modulo"=>"DSW","nombre"=>"Desarrollo Web en entorno servidor","docente"=>"Sergio Ramos Suárez","aula"=>"201","hora"=>"3ª"),
                        4=>array("modulo"=>"DSW","nombre"=>"Desarrollo Web en entorno servidor","docente"=>"Sergio Ramos Suárez","aula"=>"201","hora"=>"4ª"),
                        5=>array("modulo"=>"DOR","nombre"=>"Diseño de interfaces web","docente"=>"Ermis Papakonstantinou Baez","aula"=>"201","hora"=>"5ª"),
                        6=>array("modulo"=>"DOR","nombre"=>"Diseño de interfaces web","docente"=>"Ermis Papakonstantinou Baez","aula"=>"201","hora"=>"6ª"),
                    ),
        "Jueves"=>array(1=>array("modulo"=>"DPL","nombre"=>"Despliegue de aplicaciones web","docente"=>"María Antonia Montesdeoca Viera","aula"=>"201","hora"=>"1ª"),
                    2=>array("modulo"=>"DPL","nombre"=>"Despliegue de aplicaciones web","docente"=>"María Antonia Montesdeoca Viera","aula"=>"201","hora"=>"2ª"),
                    3=>array("modulo"=>"DPL","nombre"=>"Despliegue de aplicaciones web","docente"=>"María Antonia Montesdeoca Viera","aula"=>"201","hora"=>"3ª"),
                    4=>array("modulo"=>"DEW","nombre"=>"Desarrollo Web en entorno cliente","docente"=>"María del Carmen Rodríguez Suárez","aula"=>"201","hora"=>"4ª"),
                    5=>array("modulo"=>"DEW","nombre"=>"Desarrollo Web en entorno cliente","docente"=>"María del Carmen Rodríguez Suárez","aula"=>"201","hora"=>"5ª"),
                    6=>array("modulo"=>"EMR","nombre"=>"Empresa e iniciativa emprendedora","docente"=>"María del Sol García Tarajano","aula"=>"201","hora"=>"6ª"),
                ),
        "Viernes"=>array(1=>array("modulo"=>"DOR","nombre"=>"Diseño de interfaces web","docente"=>"Ermis Papakonstantinou Baez","aula"=>"201","hora"=>"1ª"),
                2=>array("modulo"=>"DOR","nombre"=>"Diseño de interfaces web","docente"=>"Ermis Papakonstantinou Baez","aula"=>"201","hora"=>"2ª"),
                3=>array("modulo"=>"DPL","nombre"=>"Despliegue de aplicaciones web","docente"=>"María Antonia Montesdeoca Viera","aula"=>"201","hora"=>"3ª"),
                4=>array("modulo"=>"EMR","nombre"=>"Empresa e iniciativa emprendedora","docente"=>"María del Sol García Tarajano","aula"=>"201","hora"=>"4ª"),
                5=>array("modulo"=>"DSW","nombre"=>"Desarrollo Web en entorno servidor","docente"=>"Sergio Ramos Suárez","aula"=>"201","hora"=>"5ª"),
                6=>array("modulo"=>"DSW","nombre"=>"Desarrollo Web en entorno servidor","docente"=>"Sergio Ramos Suárez","aula"=>"201","hora"=>"6ª"),
            ),
        );

        function mostrarcontenido(){
            foreach($horario as $clave => $valor){
                echo "Las asignaturas del $clave son:"
                foreach($valor as $clave1 => $valor1)
                    echo "A $clave1 ª hora:"
                    foreach($valor1 as $clave11=>$valor11)
                        echo "Tienes "
            }
        }

?>

