@include('admin.components.header')
    <div class="img-fluid d-flex justify-content-start">
       @include('admin.components.sidebar')
        @yield('content')
    </div>
@include('admin.components.footer')
