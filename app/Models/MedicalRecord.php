<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable = [
        'patient_id', // ID pasien
        'doctor_id',  // ID dokter
        'health_condition', // Kondisi kesehatan (string)
        'body_temperature', // Suhu tubuh (numeric)
        'prescription_image', // Gambar resep (nama file)
    ];
    
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('doctor_id');
            $table->text('health_condition');
            $table->decimal('body_temperature', 5, 2);
            $table->string('prescription_image')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }


}

