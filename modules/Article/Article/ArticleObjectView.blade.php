<?php
$app_title = 'Article';
$app_module = 'Article';
$app_submodule = 'Article';
$app_theme = 'default';
$app_company = 'Laravel';
$app_name = 'Worker';
$app_lang = 'fr';
?>

@extends('modules.app')

@section('template')
    @include('themes.'.$app_theme.'.templates.form_crud')
@endsection
