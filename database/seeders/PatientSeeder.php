<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+1234567890',
            'date_of_birth' => '1985-05-15',
            'medical_history' => 'Hypertension, Diabetes Type 2',
            'allergies' => 'Penicillin, Shellfish',
            'current_medications' => 'Lisinopril 10mg daily, Metformin 500mg twice daily',
        ]);

        Patient::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '+0987654321',
            'date_of_birth' => '1990-08-22',
            'medical_history' => 'Asthma, Seasonal allergies',
            'allergies' => 'Dust mites, Pollen',
            'current_medications' => 'Albuterol inhaler as needed, Loratadine 10mg daily',
        ]);

        Patient::create([
            'name' => 'Michael Johnson',
            'email' => 'michael.johnson@example.com',
            'phone' => '+1122334455',
            'date_of_birth' => '1978-12-03',
            'medical_history' => 'Coronary artery disease, High cholesterol',
            'allergies' => 'None known',
            'current_medications' => 'Aspirin 81mg daily, Atorvastatin 20mg daily',
        ]);

        Patient::create([
            'name' => 'Sarah Williams',
            'email' => 'sarah.williams@example.com',
            'phone' => '+5566778899',
            'date_of_birth' => '1995-03-10',
            'medical_history' => 'Migraine headaches, Anxiety',
            'allergies' => 'Latex, Sulfa drugs',
            'current_medications' => 'Sumatriptan as needed, Sertraline 50mg daily',
        ]);

        Patient::create([
            'name' => 'David Brown',
            'email' => 'david.brown@example.com',
            'phone' => '+4433221100',
            'date_of_birth' => '1982-07-28',
            'medical_history' => 'Osteoarthritis, GERD',
            'allergies' => 'NSAIDs, Codeine',
            'current_medications' => 'Ibuprofen 400mg as needed, Omeprazole 20mg daily',
        ]);
    }
}
