@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <h1 class="ml-2 text-2xl font-medium text-gray-900">
                            Appointment Details
                        </h1>
                    </div>
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('appointments.edit', $appointment) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Edit
                        </a>
                        <a href="{{ route('appointments.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Back
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Appointment Information -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Appointment Information</h3>
                        <dl class="space-y-3">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Patient</dt>
                                <dd class="text-sm text-gray-900">
                                    <a href="{{ route('patients.show', $appointment->patient) }}" class="text-blue-600 hover:text-blue-900">
                                        {{ $appointment->patient->name }}
                                    </a>
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Date and Time</dt>
                                <dd class="text-sm text-gray-900">{{ $appointment->appointment_date->format('d/m/Y H:i') }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Reason</dt>
                                <dd class="text-sm text-gray-900">{{ $appointment->reason }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Status</dt>
                                <dd class="text-sm text-gray-900">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($appointment->status === 'scheduled') bg-blue-100 text-blue-800
                                        @elseif($appointment->status === 'completed') bg-green-100 text-green-800
                                        @else bg-red-100 text-red-800 @endif">
                                        {{ ucfirst($appointment->status) }}
                                    </span>
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Notes -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Notes</h3>
                        <div class="text-sm text-gray-900">
                            {{ $appointment->notes ?? 'No additional notes.' }}
                        </div>
                    </div>
                </div>

                <!-- Patient Information -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Patient Information</h3>
                    <div class="bg-white shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">Basic Information</h4>
                                    <dl class="mt-2 space-y-1">
                                        <div>
                                            <dt class="text-xs text-gray-500">Name</dt>
                                            <dd class="text-sm text-gray-900">{{ $appointment->patient->name }}</dd>
                                        </div>
                                        <div>
                                            <dt class="text-xs text-gray-500">Email</dt>
                                            <dd class="text-sm text-gray-900">{{ $appointment->patient->email }}</dd>
                                        </div>
                                        <div>
                                            <dt class="text-xs text-gray-500">Phone</dt>
                                            <dd class="text-sm text-gray-900">{{ $appointment->patient->phone ?? 'Not specified' }}</dd>
                                        </div>
                                        <div>
                                            <dt class="text-xs text-gray-500">Date of Birth</dt>
                                            <dd class="text-sm text-gray-900">{{ $appointment->patient->date_of_birth ? $appointment->patient->date_of_birth->format('d/m/Y') : 'Not specified' }}</dd>
                                        </div>
                                    </dl>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">Medical Information</h4>
                                    <dl class="mt-2 space-y-1">
                                        <div>
                                            <dt class="text-xs text-gray-500">Medical History</dt>
                                            <dd class="text-sm text-gray-900">{{ $appointment->patient->medical_history ?? 'Not specified' }}</dd>
                                        </div>
                                        <div>
                                            <dt class="text-xs text-gray-500">Allergies</dt>
                                            <dd class="text-sm text-gray-900">{{ $appointment->patient->allergies ?? 'Not specified' }}</dd>
                                        </div>
                                        <div>
                                            <dt class="text-xs text-gray-500">Current Medications</dt>
                                            <dd class="text-sm text-gray-900">{{ $appointment->patient->current_medications ?? 'Not specified' }}</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('patients.show', $appointment->patient) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-blue-600 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    View Full Patient Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
