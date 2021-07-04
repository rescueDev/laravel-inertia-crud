<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="mt-2 app-title">Laravel Inertia Js CRUD</h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            @inertia
        </div>
    </div>

</body>

</html>
