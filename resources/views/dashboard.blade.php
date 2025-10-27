@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <h1 class="ml-2 text-2xl font-medium text-gray-900">
                        Welcome, {{ Auth::user()->name }}
                    </h1>
                </div>

                <p class="mt-6 text-gray-500 leading-relaxed">
                    Eye consultant dashboard. Manage your patients and medical appointments.
                </p>
            </div>

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 p-6 lg:p-8">
                <div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-900">
                            Patients
                        </h2>
                    </div>
                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        Manage your patients' information, including medical history and contact details.
                    </p>
                    <a href="{{ route('patients.index') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Patients
                    </a>
                </div>

                <div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-900">
                            Appointments
                        </h2>
                    </div>
                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        Schedule and manage your patients' medical appointments.
                    </p>
                    <a href="{{ route('appointments.index') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Appointments
                    </a>
                </div>

                <div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-900">
                            Statistics
                        </h2>
                    </div>
                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        Review important metrics about your practice and patients.
                    </p>
                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">{{ \App\Models\Patient::count() }}</div>
                            <div class="text-sm text-blue-600">Total Patients</div>
                        </div>
                        <div class="bg-green-50 p-3 rounded-lg">
                            <div class="text-2xl font-bold text-green-600">{{ \App\Models\Appointment::where('status', 'scheduled')->count() }}</div>
                            <div class="text-sm text-green-600">Scheduled Appointments</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
