
@extends('layouts.master')
@section('title','Panel del Usuario')
@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel del Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
         @include('layouts.navigation')
    </div>
</x-app-layout>
@endsection