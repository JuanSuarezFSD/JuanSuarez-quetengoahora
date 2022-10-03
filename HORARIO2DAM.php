<?php
$Horario= array(
        "Lunes"=>array(1=>array("Nombre"=>"Empresa e iniciativa emprendedora","Docente"=>"María del Sol García Tarajano","Aula"=>"202","Hora"=>"1ª"),
                        2=>array("Nombre"=>"Acceso a datos","Docente"=>"Jose Ignacio Zeballos","Aula"=>"202","Hora"=>"2ª"),
                        3=>array("Nombre"=>"Acceso a datos","Docente"=>"Jose Ignacio Zeballos","Aula"=>"202","Hora"=>"3ª"),
                        4=>array("Nombre"=>"Desarrollo de interfaces","Docente"=>"María de Lourdes Ventura Urbina","Aula"=>"202","Hora"=>"4ª"),
                        5=>array("Nombre"=>"Desarrollo de interfaces","Docente"=>"María de Lourdes Ventura Urbina","Aula"=>"202","Hora"=>"5ª"),
                        6=>array("Nombre"=>"Desarrollo de interfaces","Docente"=>"María de Lourdes Ventura Urbina","Aula"=>"202","Hora"=>"6ª"),
                    ),
        "Martes"=>array(1=>array("Nombre"=>"Programacion multimedia y dispositivos móviles","Docente"=>"Miguel Angel Hernandez Rogríguez","Aula"=>"202","Hora"=>"1ª"),
                        2=>array("Nombre"=>"Programacion multimedia y dispositivos móviles","Docente"=>"Miguel Angel Hernandez Rogríguez","Aula"=>"202","Hora"=>"2ª"),
                        3=>array("Nombre"=>"Acceso a datos","Docente"=>"Jose Ignacio Zeballos","Aula"=>"202","Hora"=>"3ª"),
                        4=>array("Nombre"=>"Acceso a datos","Docente"=>"Jose Ignacio Zeballos","Aula"=>"202","Hora"=>"4ª"),
                        5=>array("Nombre"=>"Programación de servicios y procesos","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"202","Hora"=>"5ª"),
                        6=>array("Nombre"=>"Programación de servicios y procesos","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"202","Hora"=>"6ª"),
                    ),
        "Miércoles"=>array(1=>array("Nombre"=>"Desarrollo de interfaces","Docente"=>"María de Lourdes Ventura Urbina","Aula"=>"202","Hora"=>"1ª"),
                        2=>array("Nombre"=>"Desarrollo de interfaces","Docente"=>"María de Lourdes Ventura Urbina","Aula"=>"202","Hora"=>"2ª"),
                        3=>array("Nombre"=>"Acceso a datos","Docente"=>"Jose Ignacio Zeballos","Aula"=>"202","Hora"=>"3ª"),
                        4=>array("Nombre"=>"Acceso a datos","Docente"=>"Jose Ignacio Zeballos","Aula"=>"202","Hora"=>"4ª"),
                        5=>array("Nombre"=>"Programación de servicios y procesos","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"202","Hora"=>"5ª"),
                        6=>array("Nombre"=>"Programación de servicios y procesos","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"202","Hora"=>"6ª"),
                    ),
        "Jueves"=>array(1=>array("Nombre"=>"Programacion multimedia y dispositivos móviles","Docente"=>"Miguel Angel Hernandez Rogríguez","Aula"=>"202","Hora"=>"1ª"),
                    2=>array("Nombre"=>"Programacion multimedia y dispositivos móviles","Docente"=>"Miguel Angel Hernandez Rogríguez","Aula"=>"202","Hora"=>"2ª"),
                    3=>array("Nombre"=>"Programacion multimedia y dispositivos móviles","Docente"=>"Miguel Angel Hernandez Rogríguez","Aula"=>"202","Hora"=>"3ª"),
                    4=>array("Nombre"=>"Desarrollo de interfaces","Docente"=>"María de Lourdes Ventura Urbina","Aula"=>"202","Hora"=>"4ª"),
                    5=>array("Nombre"=>"Desarrollo de interfaces","Docente"=>"María de Lourdes Ventura Urbina","Aula"=>"202","Hora"=>"5ª"),
                    6=>array("Nombre"=>"Empresa e iniciativa emprendedora","Docente"=>"María del Sol García Tarajano","Aula"=>"202","Hora"=>"6ª"),
                ),
        "Viernes"=>array(1=>array("Nombre"=>"Programación de servicios y procesos","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"202","Hora"=>"1ª"),
                2=>array("Nombre"=>"Programación de servicios y procesos","Docente"=>"Ermis Papakonstantinou Baez","Aula"=>"202","Hora"=>"2ª"),
                3=>array("Nombre"=>"Programacion multimedia y dispositivos móviles","Docente"=>"Miguel Angel Hernandez Rogríguez","Aula"=>"202","Hora"=>"3ª"),
                4=>array("Nombre"=>"Empresa e iniciativa emprendedora","Docente"=>"María del Sol García Tarajano","Aula"=>"202","Hora"=>"4ª"),
                5=>array("Nombre"=>"Acceso a datos","Docente"=>"Jose Ignacio Zeballos","Aula"=>"202","Hora"=>"5ª"),
                6=>array("Nombre"=>"Acceso a datos","Docente"=>"Jose Ignacio Zeballos","Aula"=>"202","Hora"=>"6ª"),
            ),
        );
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
        queClase();
?>