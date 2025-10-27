<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patients = Patient::all();

        if ($patients->count() >= 3) {
            Appointment::create([
                'patient_id' => $patients[0]->id,
                'appointment_date' => now()->addDays(1)->format('Y-m-d H:i:s'),
                'reason' => 'Routine eye examination and vision check',
                'status' => 'scheduled',
                'notes' => 'Patient reports occasional headaches and blurred vision',
            ]);

            Appointment::create([
                'patient_id' => $patients[1]->id,
                'appointment_date' => now()->addDays(3)->format('Y-m-d H:i:s'),
                'reason' => 'Follow-up for cataract evaluation',
                'status' => 'scheduled',
                'notes' => 'Previous appointment showed early cataract formation',
            ]);

            Appointment::create([
                'patient_id' => $patients[2]->id,
                'appointment_date' => now()->subDays(2)->format('Y-m-d H:i:s'),
                'reason' => 'Glaucoma screening',
                'status' => 'completed',
                'notes' => 'Normal intraocular pressure, recommended annual screening',
            ]);

            Appointment::create([
                'patient_id' => $patients[3]->id,
                'appointment_date' => now()->addDays(7)->format('Y-m-d H:i:s'),
                'reason' => 'Contact lens fitting and prescription update',
                'status' => 'scheduled',
                'notes' => 'Patient needs new prescription for progressive lenses',
            ]);

            Appointment::create([
                'patient_id' => $patients[4]->id,
                'appointment_date' => now()->subDays(5)->format('Y-m-d H:i:s'),
                'reason' => 'Emergency consultation for eye injury',
                'status' => 'completed',
                'notes' => 'Foreign body removed from cornea, prescribed antibiotic drops',
            ]);

            Appointment::create([
                'patient_id' => $patients[0]->id,
                'appointment_date' => now()->addDays(14)->format('Y-m-d H:i:s'),
                'reason' => 'Post-operative follow-up after cataract surgery',
                'status' => 'scheduled',
                'notes' => 'Surgery performed 2 weeks ago, checking healing progress',
            ]);
        }
    }
}
