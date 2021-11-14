<?php
$app_company = '{COMPANY}';
$app_name = '{NAME}';
$app_title = 'default';
$app_module = 'Accueil';
$app_submodule = 'Accueil';
$app_theme = 'default';
?>

@extends('modules.app')

@section('content')
    @include('themes.'.$app_theme.'.templates.default')
    @include('themes.'.$app_theme.'.scripts.content')
@endsection
