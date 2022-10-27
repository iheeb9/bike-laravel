<!-- NAVIGATION -->
<nav id="navigation">
  <!-- container -->
  <div class="container">
    <!-- responsive-nav -->
    <div id="responsive-nav">
      <!-- NAV -->
      <ul class="main-nav nav navbar-nav">

        <li class="active"><a href="{{route('home')}}">Home</a></li>

        <li><a href="#">Location</a></li>

        <li><a href="#">Tournois</a></li>


        <li><a href="#">Evennement</a></li>
        <li><a href="{{route('clientbalade.index')}}">Balade</a></li>

        <li><a href="#">Blog</a></li>

        @guest
          @if (Route::has('login'))
            <li class="nav-item">
            </li>
          @endif
            @if (Route::has('register'))
              <li class="nav-item">
              </li>
            @endif
        @else
          <li class="active" class="nav-item">
            <a class="nav-link" href="{{ route('clientreview.index') }}">Review</a>
          </li>
        @endguest

        <li><a href="{{url('/allvelo')}}">Velo</a></li>
        <li><a href="{{url('/allcategories')}}">Categories</a></li>

        <li><a href="#">Association</a></li>
      </ul>
      <!-- /NAV -->
    </div>
    <!-- /responsive-nav -->
  </div>
  <!-- /container -->
</nav>
<!-- /NAVIGATION -->
