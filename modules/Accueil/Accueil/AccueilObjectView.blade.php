<?php
$app_title = 'Accueil';
$app_module = 'Accueil';
$app_submodule = 'Accueil';
$app_theme = 'default';
$app_company = 'Laravel';
$app_name = 'Worker';
$app_lang = 'fr';
?>

@extends('modules.app')

@section('template')
    @include('themes.'.$app_theme.'.templates.dashboard')
@endsection
