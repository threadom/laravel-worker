<?php
$app_title = '{TITLE}';
$app_module = '{MODULE}';
$app_submodule = '{SUBMODULE}';
$app_theme = '{THEME}';
$app_company = 'Laravel';
$app_name = 'Worker';
$app_lang = 'fr';
?>

@extends('modules.app')

@section('template')
    @include('themes.'.$app_theme.'.templates.{TEMPLATE}')
@endsection
