<!DOCTYPE html>
<html>
<head>
    <title>Alumnos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Listado de Alumnos</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>NIF</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO 1</th>
                    <th>APELLIDO 2</th>
                    <th>CIUDAD</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th>FECHA DE NACIMIENTO</th>
                    <th>SEXO</th>
                    <th>TIPO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $file = fopen("alumnos.csv", "r");
                fgetcsv($file);

                // Recorrer cada línea del archivo
                while (($data = fgetcsv($file, 0, ",")) !== FALSE) {
                    // Convertir datos a mayúsculas
                    $id = strtoupper($data[0]);
                    $nif = strtoupper($data[1]);
                    $nombre = mb_strtoupper($data[2], 'UTF-8');
                    $apellidos = mb_strtoupper($data[3], 'UTF-8');
                    $apellidos2 = mb_strtoupper($data[4], 'UTF-8');
                    $ciudad = mb_strtoupper($data[5], 'UTF-8');
                    $direccion = mb_strtoupper($data[6], 'UTF-8');
                    $telefono = strtoupper($data[7]);
                    $fechaNacimiento = strtoupper($data[8]);
                    $sexo = strtoupper($data[9]);
                    $tipo = strtoupper($data[10]);

                    $sexo = ($data[9] == 'M') ? 'MUJER' : 'HOMBRE';

                    $fecha = date("d/m/Y", strtotime($data[8]));

                    echo "<tr>
                            <td>$id</td>
                            <td>$nif</td>
                            <td>$nombre</td>
                            <td>$apellidos</td>
                            <td>$apellidos2</td>
                            <td>$ciudad</td>
                            <td>$direccion</td>
                            <td>$telefono</td>
                            <td>$fechaNacimiento</td>
                            <td>$sexo</td>
                            <td>$tipo</td>
                          </tr>";
                }

                fclose($file);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

