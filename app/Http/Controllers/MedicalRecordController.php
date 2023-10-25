<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalRecord; 

class MedicalRecordController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'health_condition' => 'required|string',
            'body_temperature' => 'required|numeric|min:35|max:45.5',
            'prescription_image' => 'image|mimes:png,jpg,jpeg,pdf|max:2048', // Misalnya, maksimum 2MB
        ]);

        // Simpan data rekam medis ke database (jika diperlukan)
        // ...

        // Tampilkan pesan flash berhasil
        return redirect()->route('medical-records.create')->with('success', 'Rekam medis berhasil ditambahkan.');
    }
    public function index()
    {
        $medicalRecords = MedicalRecord::all();
        return view('medical_records.index', compact('medicalRecords'));
    }
    public function create()
    {
        // Logika untuk menampilkan formulir rekam medis
        return view('medical-records.create');
    }

}
