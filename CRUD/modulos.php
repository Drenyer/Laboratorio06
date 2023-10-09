<?php

$conexion = mysqli_connect("localhost", "root", "", "crud");

$resultado = mysqli_query($conexion, "SELECT * FROM modulos");

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        .indices {
            width: 100%;
            border-collapse: collapse;
            border: 3px solid #ddd;
            padding: auto;
            background-color:goldenrod;
            color: whitesmoke;
            position: fixed;
            top: 10px;
            z-index: 1;
        }
        .promociones {
            width: 100%;
            border-collapse: collapse;
            margin-top: 150px;
            z-index: 2;
        }

        .promociones th,td {
            border: 1px solid #ddd;
            padding: 8px;
           
        }

        .promociones th {
            background-color: #4CAF50;
            color: white;
            
        }

        
        body{
            background-color: black;
        }
    </style>
</head>

<body>
    <table class="indices">
        <tr>
            <th>Destino</th>
            <th>Precio</th>
            <th>Fecha de inicio</th>
            <th>Fecha de culminación</th>
        </tr>

        <?php while ($fila = mysqli_fetch_assoc($resultado)) : ?>
            <tr>
                <td><?php echo $fila['destino']; ?></td>
                <td><?php echo $fila['precio']; ?></td>
                <td><?php echo $fila['fecha_inicio']; ?></td>
                <td><?php echo $fila['fecha_final']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <h3>Empresas</h3>
    <table class="promociones">
        <tr>
            <th>San román</th>
            <th>Julsa</th>
            <th>Tauru bus</th>
            <th>Zolorsano</th>
            <th>Tranzela</th>
        </tr>
        <tr>
            <th><img src="imagenes/Bus-de-EXPRESO-SAN-ROMAN-.jpg" alt="" width=500px><br>
                <p>HORA DE PARTIDA 23:30 PM</p>
            </th>
            <th><img src="imagenes/julsa.jpg" alt="sdsd" width=500px><br>
                <p>HORA DE PARTIDA 09:30 AM</p>
            </th>
            <th><img src="imagenes/taurubus.jpg" alt="sdsd" width=500px><br>
                <p>HORA DE PARTIDA 11:30 AM</p>
            </th>
            <th><img src="imagenes/Zolorsano568_n.jpg" alt="sdsd" width=500px><br>
                <p>HORA DE PARTIDA 17:30 PM</p>
            </th>
            <th><img src="imagenes/Buss-TRANSZELA.png" alt="sdsd" width=500px><br>
                <p>HORA DE PARTIDA 18:30 PM</p>
            </th>
        </tr>
    </table>

</body>

</html>