<!DOCTYPE html>
<html>
  <head>
    <title>Horarios IES El Rincón</title>
    <meta charset="UTF-8">
  </head>

<body>
  <h1>Seleccione el horario que quiera ver:</h1>
  <form action="tabla.php" method="post">
    <select name="horario" id="horario">
      <optgroup label="Según el grupo:">
        <option value="DAW">2 DAW M</option>
        <option value="DAM">2 DAM M</option>
      </optgroup>
      <optgroup label="Según el docente:">
        <option value="Sergio">Sergio Ramos Suárez</option>
        <option value="Maria">Maria del Carmen Rodriguez Suárez</option>
      </optgroup>
    </select>
    <br><br>
    <input type="submit" value="Submit">
  </form>
  
</body>
</html>
