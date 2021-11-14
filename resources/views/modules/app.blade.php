<?php
$app_lang = 'fr';
?>
<!DOCTYPE html>
<html lang="{{ $app_lang }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - {{ $app_title }}</title>
	@include('themes.'.$app_theme.'.styles.fonts')
	@include('themes.'.$app_theme.'.styles.header')
	@include('themes.'.$app_theme.'.scripts.header')
</head>
<body>
    @include('themes.'.$app_theme.'.app')
    @include('themes.'.$app_theme.'.scripts.body')
</body>
</html>
