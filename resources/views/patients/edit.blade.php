@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <h1 class="ml-2 text-2xl font-medium text-gray-900">
                        Edit Patient: {{ $patient->name }}
                    </h1>
                </div>
            </div>

            <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
                <form method="POST" action="{{ route('patients.update', $patient) }}">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $patient->name)" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $patient->email)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div>
                            <x-label for="phone" value="{{ __('Phone') }}" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone', $patient->phone)" autocomplete="tel" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <x-label for="date_of_birth" value="{{ __('Date of Birth') }}" />
                            <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth', $patient->date_of_birth ? $patient->date_of_birth->format('Y-m-d') : '')" />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-label for="medical_history" value="{{ __('Medical History') }}" />
                        <textarea id="medical_history" name="medical_history" rows="4" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('medical_history', $patient->medical_history) }}</textarea>
                        <x-input-error :messages="$errors->get('medical_history')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-label for="allergies" value="{{ __('Allergies') }}" />
                        <textarea id="allergies" name="allergies" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('allergies', $patient->allergies) }}</textarea>
                        <x-input-error :messages="$errors->get('allergies')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-label for="current_medications" value="{{ __('Current Medications') }}" />
                        <textarea id="current_medications" name="current_medications" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('current_medications', $patient->current_medications) }}</textarea>
                        <x-input-error :messages="$errors->get('current_medications')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <a href="{{ route('patients.show', $patient) }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mr-3">
                            Cancel
                        </a>

                        <x-button class="ml-3">
                            {{ __('Update Patient') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
