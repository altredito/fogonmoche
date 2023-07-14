@extends('layouts.master')
@section('title','Login')
@section('content')
<section class="vh-100" style="background-color: #f5f2f2;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
<x-guest-layout>
    <h3 class="titulo">Recuperar Contraseña</h3>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email"  class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4" align="center">
            <x-primary-button class="btn tmenu" style=" width: 100px;">
                {{ __('Recuperar') }}
            </x-primary-button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</section>
</x-guest-layout>
@endsection