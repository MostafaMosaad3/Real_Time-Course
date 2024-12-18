<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/feather.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/select2.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/dropzone.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/uppy.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.steps.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/app-dark.css" id="darkTheme" disabled>
    @stack('styles')

{{--    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>--}}
{{--    <script>--}}

{{--        // Enable pusher logging - don't include this in production--}}
{{--        Pusher.logToConsole = false;--}}

{{--        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {--}}
{{--            cluster: 'mt1'--}}
{{--        });--}}

{{--        var channel = pusher.subscribe('new_user_channel');--}}
{{--        channel.bind('App\\Events\\NewUserRegisteredEvent', function(data) {--}}
{{--            console.log(data['message']);--}}
{{--            $(" .notificationsIcon").load(" .notificationsIcon > *");--}}
{{--            $("#notificationModel").load("#notificationModel > *");--}}
{{--        });--}}
{{--    </script>--}}
@vite('resources/js/app.js')
{{--    <script src="{{asset('js/app.js')}}"></script>--}}
{{--    <script>--}}
{{--        console.log('hello from laravel mix')--}}
{{--        window.Echo.channel(`new_user_channel`)--}}
{{--            .listen('.App\\Events\\NewUserRegisteredEvent', (e) => {--}}
{{--                console.log(e) ;--}}
{{--                $(" .notificationsIcon").load(" .notificationsIcon > *");--}}
{{--                $("#notificationModel").load("#notificationModel > *");--}}
{{--            });--}}
{{--    </script>--}}
</head>
