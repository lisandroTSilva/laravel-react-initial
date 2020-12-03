<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
</head>

<body>
    <div id="root"></div>
    <script src="{{s mix('/js/app.js') }}" defer></script>
</body>

</html>