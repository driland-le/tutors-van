{{-- append header --}}
@include('partial._header')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            {{-- banner --}}
            <div>
                @yield('banner')
            </div>
            {{-- end banner --}}

            {{-- side bar --}}
            <div class="sidebar">
                @yield('sidebar')
            </div>
            {{-- end side bar --}}

            {{-- content --}}
            <div class="content">
                @yield('content')
            </div>
            {{-- end content --}}
        </div>
    </body>
{{-- append footer --}}
@include('partial._footer')
