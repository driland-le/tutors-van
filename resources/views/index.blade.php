{{-- append header --}}
@include('partials._header')
    <body>
        <div style="background: linear-gradient(141deg, #2388b0, #3ac);">
            <div class="frame-area" style="background: #e9e9e9;">
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
                <div class="banner">
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
        </div>
        <a href="javascript:;" id="to_top" class="move-top">
            <img src="images/icon_gototop.png" alt="gia sư top" />
            {{-- <%= image_tag('static_pages/icon_gototop.png')%> --}}
        </a>
    </body>

{{-- append footer --}}
@include('partials._footer')
<script type="text/javascript">
 $(document).ready(function() {
    $("#to_top").hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#to_top').fadeIn(500);
        } else {
            $('#to_top').fadeOut(300);
        }
    });
    $(".move-top").click(function(){
      $('html, body').animate({scrollTop:0}, 'slow');
  });
});
</script>