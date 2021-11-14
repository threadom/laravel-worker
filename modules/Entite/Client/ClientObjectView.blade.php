<?php
$app_title = '{TITLE}';
$app_module = 'Entite';
$app_submodule = 'Client';
$app_theme = '{THEME}';
$app_company = 'Laravel';
$app_name = 'Worker';
$app_lang = 'fr';
?>

@extends('modules.app')

@section('template')
    @include('themes.'.$app_theme.'.templates.{TEMPLATE}')
@endsection
