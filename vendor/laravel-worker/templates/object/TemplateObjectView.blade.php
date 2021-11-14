<?php
$app_title = '{TITLE}';
$app_module = '{MODULE}';
$app_submodule = '{SUBMODULE}';
?>

@extends('modules.app')

@section('content')
    @include('modules.themes.{THEME}.{TEMPLATE}')
    @include('modules.scripts.content')
@endsection
