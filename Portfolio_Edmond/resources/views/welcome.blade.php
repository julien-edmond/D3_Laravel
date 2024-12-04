<!DOCTYPE html>
@extends('modeles/modele')
    @section('content')

        Bienvenu sur mon Portfolio
        <a href="{{ route('stage1') }}">Exercice route</a>
        <img src="{{ asset('images/goku.png') }}">
        <button type="button" class="btn btn-primary">Primary</button>
        <i class="fa-solid fa-arrow-right"></i>
        
        @endsection
