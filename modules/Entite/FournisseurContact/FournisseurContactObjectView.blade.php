<?php
$app_title = 'default';
$app_module = 'Entite';
$app_submodule = 'FournisseurContact';
$app_theme = 'default';
$app_company = 'Laravel';
$app_name = 'Worker';
$app_lang = 'fr';
?>

@extends('modules.app')

@section('template')
    @include('themes.'.$app_theme.'.templates.default')
@endsection
