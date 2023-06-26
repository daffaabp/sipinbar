<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="main">

            @include('layouts.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    {{-- @include('flash::message')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    @include('flash::message')
                    @yield('content')

                </div>
            </main>
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.scripts')
    @yield('js')
</body>

</html>
