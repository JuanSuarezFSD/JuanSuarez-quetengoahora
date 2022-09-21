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

        function mostrarcontenido(){
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
                
        function queClase($dia, $hora, $min){ 
           global $Horario;
           $horaclase = quehora($hora, $min);
            $currentDate = conversorDia($dia);
            if($hora>24 or $hora<0 or $min<0 or $min>60){
                 echo("Los datos de la hora introducidos son incorrectos.");
            }else{
                if($horaclase==0){
                    echo("Clase actual: Descanso");
                }elseif($horaclase==7){
                    echo ("La hora introducida no es horario escolar.");
                }else{
                    if($dia == "Lunes" or $dia =="lunes"){
                         print_r($Horario["Lunes"][$horaclase]);
                    }elseif($dia == "Martes" or $dia =="martes"){
                        print_r($Horario["Martes"][$horaclase]);
                    
                    }elseif($dia == "Miércoles" or $dia =="miércoles"){
                        print_r($Horario["Miércoles"][$horaclase]);

                    }elseif($dia == "Jueves" or $dia =="jueves"){
                        print_r($Horario["Jueves"][$horaclase]);
                    
                    }elseif($dia == "Viernes" or $dia =="viernes"){ 
                        print_r($Horario["Viernes"][$horaclase]);
                    
                    }elseif($dia == "Sábado" or $dia =="sabado" or $dia == "Domingo" or $dia =="domingo"){
                        echo("El día introducido no hay clases");
                    }else
                    echo("No se reconoce el día introducido");
                }
            }
        }

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

// prueba del método queclase con datos introducidos manualmente queClase("Lunes", 23,5)

$diaActual = date("N");
$horaActual = date("G");
$minActual = date("i");

function conversorDia($dia){
    $quedia;
    if($dia==1){
       $quedia = "Lunes";
       return $quedia;
    }elseif($dia==2){
        $quedia = "Martes";
        return $quedia;

    }elseif($dia==3){
        $quedia = "Miércoles";
        return $quedia;

    }elseif($dia==4){
        $quedia = "Jueves";
        return $quedia;

    }elseif($dia==5){
        $quedia = "Viernes";
        return $quedia;
    }else
        $quedia = "Domingo";
        return $quedia; 
    
}
//REVISAR LAS ACTUALIZACIONES HECHAS DENTRO DE LA FUNCION 2!
queClase($diaActual, $horaActual, $minActual)
?>

