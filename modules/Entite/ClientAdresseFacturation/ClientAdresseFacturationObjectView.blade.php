<?php
$app_company = '{COMPANY}';
$app_name = '{NAME}';
$app_title = 'default';
$app_module = 'Entite';
$app_submodule = 'ClientAdresseFacturation';
$app_theme = 'default';
?>

@extends('modules.app')

@section('content')
    @include('themes.'.$app_theme.'.templates.default')
    @include('themes.'.$app_theme.'.scripts.content')
@endsection
