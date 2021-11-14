<?php
$app_title = 'default';
$app_module = 'Accueil';
$app_submodule = 'Accueil';
?>

@extends('modules.app')

@section('content')
    @include('modules.themes.default.default')
    @include('modules.scripts.content')
@endsection
