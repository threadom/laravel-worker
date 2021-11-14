<?php
$app_company = '{COMPANY}';
$app_name = '{NAME}';
$app_title = '{TITLE}';
$app_module = '{MODULE}';
$app_submodule = '{SUBMODULE}';
$app_theme = '{THEME}';
?>

@extends('modules.app')

@section('content')
    @include('themes.'.$app_theme.'.templates.{TEMPLATE}')
    @include('themes.'.$app_theme.'.scripts.content')
@endsection
