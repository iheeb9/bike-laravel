<!-- NAVIGATION -->
<nav id="navigation">
  <!-- container -->
  <div class="container">
    <!-- responsive-nav -->
    <div id="responsive-nav">
      <!-- NAV -->
      <ul class="main-nav nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        @if(Illuminate\Support\Facades\Auth::check())
        <li><a href="{{route('c_location.index')}}">Location</a></li>
        @endif
        <li><a href="#">Evennement</a></li>
        <li><a href="#">Balade</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Velo</a></li>
        <li><a href="#">Association</a></li>
      </ul>
      <!-- /NAV -->
    </div>
    <!-- /responsive-nav -->
  </div>
  <!-- /container -->
</nav>
<!-- /NAVIGATION -->
