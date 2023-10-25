<!DOCTYPE html>
<html>
<head>
    <title>Daftar Rekam Medis</title>
</head>
<body>
    <h1>Daftar Rekam Medis</h1>

    <table>
        <thead>
            <tr>
                <th>Nomor Rekam Medis</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Kondisi Kesehatan</th>
                <th>Suhu Tubuh</th>
                <th>Tanggal Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicalRecords as $record)
            <tr>
                <td>{{ $record->medical_record_number }}</td>
                <td>{{ $record->patient->name }}</td>
                <td>{{ $record->doctor->name }}</td>
                <td>{{ $record->health_condition }}</td>
                <td>{{ $record->body_temperature }} °C</td>
                <td>{{ $record->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
