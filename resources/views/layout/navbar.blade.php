<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        @unless (Auth::guest())

          <!--<li><a href="{{ url('/showlog') }}">Sitelogs</a></li>-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Inventory <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{url('/hwinventory')}}"><span class="glyphicon glyphicon-hdd"></span> HW</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> SW</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-random"></span> NETWORK</a></li>
              <li><a href="{{url('/employees')}}"><span class="glyphicon glyphicon-user"></span> EMPLOYEES</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> SiteMgmt <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/tasks') }}">Tasks</a></li>
              <li><a href="{{ url('/sitetodo') }}">SiteTodo</a></li>
            </ul>
          </li>

          <li><a href="{{ url('/about') }}"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
        @endunless
        <!--<li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
          <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-tag"></span>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
              <li><a href="#"><span class="glyphicon glyphicon-refresh"></span> PWD Change</a></li>
            </ul>
          </li>
        @endif

      </ul>

    </div><!--/.nav-collapse -->
  </div>
</nav>


