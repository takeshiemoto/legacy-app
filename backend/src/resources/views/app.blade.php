<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/js/app.tsx', "resources/js/pages/{$page['component']}.tsx"])
    @inertiaHead
</head>
<body>
@inertia
</body>
</html>
