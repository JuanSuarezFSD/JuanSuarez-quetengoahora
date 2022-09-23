<html>
    <head>
        <title>Tabla de horario</title>
        <style>
        table, tr, td, th{
            border: 1px solid black;
            text-align: center;
        }
    </style>
    </head>
    <body>
    <?php
    
?>
        <table><?php include 'main.php'?>
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
    </body>
</html>