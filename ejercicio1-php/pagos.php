<?php
/*
1.- ARRAY INDEXADO:
    Se crea usando [] o array().
    Cada elemento del array se identifican con un indice numérico (0,1,2,3...)
    Ejemplos:
        $nombres = ["Marco","Laura","Raul"];
        o
        $nombres = array("Marco","Laura","Raul");
    Para poder visualizar: echo $nombre[0];

2.- ARRAY ASOCIATIVO:
    Se crea usando [] o array().
    Cada elemento del array tiene una clave que puede ser string o numero.
    Ejemplo:
        $coche = [
                    "marca" => "Audi"
                    "modelo" => "A3"
                    "cv" => "250"
                 ];
    Para poder visualizar: echo $coche["marca"];

3.- ARRAY MULTIDIMENSIONAL
    Es un array dentro de otro array.
    Se pueden combinar indexados y asociativos.
    Ejemplo:
        $personas = [
                        "Juan" => ["edad" => 20, "nacionalidad" => "español", "vehiculo" => ["tipo" => "coche", "marca" => "audi", "modelo" => "a4"]],
                        "Andrea" => ["edad" => 18, "nacionalidad" => "belga", "vehiculo" => ["tipo" => "moto", "marca" => "bmw", "modelo" => "r"]]
                    ];
    Para poder visualizar: $personas["Juan"]["nacionalidad"];

*/
$socios = [
    1 => [
        "nombre" => "Juan",
        "apellidos" => "Ibañez",
        "DNI" => "12345678A",
        "email" => "jibañez@gmail.com",
        "telefono" => "612312322",
        "pagos_mensuales" => [
            "2025-01" => ["mes" => "Enero", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/01/2025"],
            "2025-02" => ["mes" => "Febrero", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-03" => ["mes" => "Marzo", "importe_cuota" => 120, "estado_pago" => "Pagado", "fecha_pago" => "31/03/2025"],
            "2025-04" => ["mes" => "Abril", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-05" => ["mes" => "Mayo", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/05/2025"],
            "2025-06" => ["mes" => "Junio", "importe_cuota" => 110, "estado_pago" => "Pagado", "fecha_pago" => "30/06/2025"],
            "2025-07" => ["mes" => "Julio", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-08" => ["mes" => "Agosto", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/08/2025"],
            "2025-09" => ["mes" => "Septiembre", "importe_cuota" => 105, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-10" => ["mes" => "Octubre", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/10/2025"],
            "2025-11" => ["mes" => "Noviembre", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "30/11/2025"],
            "2025-12" => ["mes" => "Diciembre", "importe_cuota" => 120, "estado_pago" => "Pendiente", "fecha_pago" => "-"]
        ]
    ],
    2 => [
        "nombre" => "Antonio",
        "apellidos" => "Valencia",
        "DNI" => "72121311Z",
        "email" => "antoioval@gmail.com",
        "telefono" => "602123778",
        "pagos_mensuales" => [
            "2025-01" => ["mes" => "Enero", "importe_cuota" => 90, "estado_pago" => "Pagado", "fecha_pago" => "31/01/2025"],
            "2025-02" => ["mes" => "Febrero", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-03" => ["mes" => "Marzo", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/03/2025"],
            "2025-04" => ["mes" => "Abril", "importe_cuota" => 95, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-05" => ["mes" => "Mayo", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/05/2025"],
            "2025-06" => ["mes" => "Junio", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-07" => ["mes" => "Julio", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/07/2025"],
            "2025-08" => ["mes" => "Agosto", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-09" => ["mes" => "Septiembre", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "30/09/2025"],
            "2025-10" => ["mes" => "Octubre", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-11" => ["mes" => "Noviembre", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "30/11/2025"],
            "2025-12" => ["mes" => "Diciembre", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"]
        ]
    ],
    3 => [
        "nombre" => "Marta",
        "apellidos" => "Jimenez",
        "DNI" => "77712312Q",
        "email" => "marta.jimenez123@gmail.com",
        "telefono" => "662121007",
        "pagos_mensuales" => [
            "2025-01" => ["mes" => "Enero", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-02" => ["mes" => "Febrero", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "28/02/2025"],
            "2025-03" => ["mes" => "Marzo", "importe_cuota" => 110, "estado_pago" => "Pagado", "fecha_pago" => "31/03/2025"],
            "2025-04" => ["mes" => "Abril", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-05" => ["mes" => "Mayo", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/05/2025"],
            "2025-06" => ["mes" => "Junio", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-07" => ["mes" => "Julio", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "31/07/2025"],
            "2025-08" => ["mes" => "Agosto", "importe_cuota" => 95, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-09" => ["mes" => "Septiembre", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "30/09/2025"],
            "2025-10" => ["mes" => "Octubre", "importe_cuota" => 100, "estado_pago" => "Pendiente", "fecha_pago" => "-"],
            "2025-11" => ["mes" => "Noviembre", "importe_cuota" => 100, "estado_pago" => "Pagado", "fecha_pago" => "30/11/2025"],
            "2025-12" => ["mes" => "Diciembre", "importe_cuota" => 120, "estado_pago" => "Pendiente", "fecha_pago" => "-"]
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <ul>            
            <?php foreach($socios as $socio): ?>
                <?php $totalPagado = 0; ?>
                <li>
                    <strong>Nombree:</strong> <?= ($socio["nombre"]) ?><br/>
                    <strong>Apellidos:</strong> <?= ($socio["apellidos"]) ?><br/>
                    <strong>DNI:</strong> <?= ($socio["DNI"]) ?><br/>
                    <strong>E-mail:</strong> <?= ($socio["email"]) ?><br/>
                    <strong>Teléfono:</strong> <?= ($socio["telefono"]) ?><br/>
                    <table border="1">
                        <tr>
                            <th>Mes</th>
                            <th>Importe Cuota</th>
                            <th>Estado Pago</th>
                            <th>Fecha Pago</th>
                        </tr>
                        <?php foreach($socio["pagos_mensuales"] as $pago): ?>
                            <tr>
                                <td><?= ($pago["mes"]) ?></td>
                                <td><?= ($pago["importe_cuota"]) ?></td>
                                <?php if ($pago["estado_pago"] === "Pagado"): ?>
                                    <td style="color:green"><?= ($pago["estado_pago"]) ?></td>
                                    <?php $totalPagado += $pago["importe_cuota"]; ?>
                                <?php else: ?>
                                    <td style="color:red;"><?= ($pago["estado_pago"]) ?></td>                                    
                                <?php endif; ?>
                                <td><?= ($pago["fecha_pago"]) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td>Importe total abonado</td>
                            <td><?= $totalPagado ?></td>
                        </tr>
                    </table>
                </li>
                <br/>
            <?php endforeach; ?>
        </ul>          
    </main>
</body>
</html>

