@include('layout.links')

<body class="vertical-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-columns">
    <div class="app-content content">
        @include('layout.message')
        @yield('content')

@include('layout.footer')