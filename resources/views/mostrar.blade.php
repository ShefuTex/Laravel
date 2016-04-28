
  <table class="table table-striped">
<thead>
  <tr>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      <th>Apellido Marteno</th>
      
  </tr>
</thead>
<tbody>

      <?php foreach ($egresados as $egresado):  ?>
  <tr>
    <td><?=$egresado['Id_CorreoEgresado']?></td>
    <td><?=$egresado['Contrasena']?></td>
    <td><?=$egresado['Id_ClavePerfil']?></td>
      <td><?=$egresado['Id_DomEgresado']?></td>
      <td><?=$egresado['Nombre_Egresado']?></td>
      <td><?=$egresado['Ape_Paterno']?></td>
      <td><?=$egresado['Ape_Materno']?></td>
      <td><?=$egresado['No_Control']?></td>
      <td><?=$egresado['Fecha_Nacimiento']?></td>
      <td><?=$egresado['Genero']?></td>
      <td><?=$egresado['Estado_Civil']?></td>
      <td><?=$egresado['Tel_Celular']?></td>
      <td><?=$egresado['Tel_Fijo']?></td>
      <td><?=$egresado['Especialidad_Carrera']?></td>
      <td><?=$egresado['Ano_Egreso']?></td>
      <td><?=$egresado['Mes_Egreso']?></td>
      <td><?=$egresado['Esta_Titulado']?></td>
      
  </tr>
    <?php endforeach ?>

</tbody>
</table>
