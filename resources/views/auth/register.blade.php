@extends('layouts.master')
@section('title','Login')
@section('content')
<section class="vh-150 centro" style="background-color: #f5f2f2;">
  <div class="container py-5 h-150">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
                <x-guest-layout>
              <h3 class="titulo">Registrar</h3>
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <!-- Name -->
            <div class="form-outline mb-4">
                <x-input-label for="name" :value="__('Nombre')" />
                <x-text-input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="form-outline mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

              <!-- Password -->
              <div class="form-outline mb-4">
                <x-input-label for="password" :value="__('Contraseña')" />

                <x-text-input id="password" class="form-control form-control-lg"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <!-- Confirm Password -->
                <div class="form-outline mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                    <x-text-input id="password_confirmation" class="form-control form-control-lg"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('¿Ya estás Registrado?') }}
                    </a>
                    <div align="center">
                      <br>
                      <x-primary-button class="btn tmenu">
                        {{ __('Registrar') }}
                    </x-primary-button>
                    </div>
                    
                </div>
                </form>
                </x-guest-layout>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

