<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NovoDecor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- header -->
    <!-- navbar desktop -->
    @include('partials.header'  )
    <!-- navbar desktop -->
    <!-- header -->

    <!-- main -->
    <main>
        @yield('content')
    </main>
    <!-- main -->

    @include('partials.menuBars')

    <!-- navbar mobile -->
    @include('partials.navbarMobile')
    <!-- navbar mobile -->
    
    <!-- navbar modals -->
    @include('partials.modals')
    <!-- navbar modals-->

    
</body>

</html>