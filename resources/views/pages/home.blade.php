@extends('layouts.appweb')

@section('title', 'Grupo Codware')

@section('content')

    {{-- Hero / Banner --}}
    @include('sections.banner')

    {{-- Servicios --}}
    @include('sections.services')

    {{-- Clientes --}}
    @include('sections.clients')

    {{-- Sobre nosotros --}}
    @include('sections.about')

    {{-- Cómo trabajamos --}}
    @include('sections.steps')

    {{-- Contacto --}}
    @include('sections.contact')

    {{-- Testimonios --}}
    @include('sections.blog')

@endsection

