<!DOCTYPE html>
@extends('adminlte::page')

@yield('css')

@section('title', 'Iglesia viva')




@section('content')

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@yield('js')

