@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('medical-records.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Field Pasien (dropdown) -->
            <label for="patient_id">Pasien:</label>
            <select name="patient_id" id="patient_id">
                <!-- Opsi pasien akan diisi dari data yang Anda miliki -->
            </select>

            <!-- Field Dokter (dropdown) -->
            <label for="doctor_id">Dokter:</label>
            <select name="doctor_id" id="doctor_id">
                <!-- Opsi dokter akan diisi dari data yang Anda miliki -->
            </select>

            <!-- Field Kondisi Kesehatan (teks) -->
            <label for="health_condition">Kondisi Kesehatan:</label>
            <textarea name="health_condition" id="health_condition"></textarea>

            <!-- Field Suhu Tubuh -->
            <label for="body_temperature">Suhu Tubuh (Celsius):</label>
            <input type="number" name="body_temperature" id="body_temperature" step="0.1" min="35" max="45.5">

            <!-- Unggah Gambar Resep -->
            <label for="prescription_image">Unggah Gambar Resep:</label>
            <input type="file" name="prescription_image" id="prescription_image">

            <button type="submit">Kirim</button>
        </form>
    </div>
@endsection
