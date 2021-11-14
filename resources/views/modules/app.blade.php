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
	@include('modules.styles.fonts')
	@include('modules.styles.header')
	@include('modules.scripts.header')
</head>
<body>
    <div class="w-full min-h-screen bg-gray-600">
        @yield('content')
    </div>
	@include('modules.scripts.body')
</body>
</html>
