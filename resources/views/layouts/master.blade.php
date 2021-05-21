<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta_tags')
    <title>@yield('title') {{ $title }} </title>
    @yield('head-script')

    <!-- Custom style head -->
    @yield('stylesheet')
    @stack('extra-stylesheet')

</head>
<body>


    
    @yield('script')
</body>
</html>
