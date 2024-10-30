<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Receta Médica - Clínica Innovadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 2px solid #4CAF50;
            margin-bottom: 30px;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
            color: #4CAF50;
            font-weight: bold;
        }
        .clinic-info {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }
        .details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 18px;
            color: #4CAF50;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .detail-item {
            margin-bottom: 10px;
        }
        .detail-item strong {
            font-size: 15px;
            color: #555;
            display: inline-block;
            width: 150px;
        }
        .signature {
            margin-top: 30px;
            text-align: center;
        }
        .signature .name {
            font-weight: bold;
            font-size: 16px;
        }
        .signature .position {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Receta Médica</h1>
        <div class="clinic-info">
            Puesto de Salud Llanos Del Pinal <br>
          
        </div>
    </div>

    <div class="details">
        <div class="section-title">Detalles del Paciente</div>
        <div class="detail-item"><strong>Nombre:</strong> {{ $tablaRecetum->consulta->paciente->nombre }}</div>
        <div class="detail-item"><strong>DPI:</strong> {{ $tablaRecetum->consulta->paciente->dpi_cui }}</div>
        
        <div class="detail-item"><strong>Motivo de la consulta:</strong> {{ $tablaRecetum->consulta->motivo_consulta }}</div>

        <div class="detail-item"><strong>Diagnostico del paciente:</strong> {{ $tablaRecetum->consulta->diagnostico }}</div>

        <div class="section-title">Información de la Receta</div>
        <div class="detail-item"><strong>Fecha de Emisión:</strong> {{ $tablaRecetum->fecha_emision }}</div>
        <div class="detail-item"><strong>Contenido de la Receta:</strong> {{ $tablaRecetum->contenido_receta }}</div>

        <div class="section-title">Autorización</div>
        <div class="detail-item"><strong>Firma del Médico:</strong> {{ $tablaRecetum->firma }}</div>
        <div class="detail-item"><strong>Sello de la Clínica:</strong> {{ $tablaRecetum->sello }}</div>
    </div>

    <div class="signature">
        <p class="name">{{ $tablaRecetum->firma }}</p>
        <p class="position">Médico Responsable</p>
    </div>

</body>
</html>
