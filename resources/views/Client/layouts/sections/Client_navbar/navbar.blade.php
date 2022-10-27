<!-- NAVIGATION -->
<nav id="navigation">
  <!-- container -->
  <div class="container">
    <!-- responsive-nav -->
    <div id="responsive-nav">
      <!-- NAV -->
      <ul class="main-nav nav navbar-nav">
        <li ><a href="#">Home</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="#">Evennement</a></li>
        <li><a href="#">Balade</a></li>
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
        <li><a href="#">Association</a></li>
      </ul>
      <!-- /NAV -->
    </div>
    <!-- /responsive-nav -->
  </div>
  <!-- /container -->
</nav>
<!-- /NAVIGATION -->
