

<nav class="navbar navbar-default navbar-manual  navbar-static-top">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar5">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="http://disputebills.com"><img src="image/header_logo.png"><span class="logo-name">&nbsp;VISTA ROOMS</span>
         </a>
      </div>
      <div id="navbar5" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
            @guest
            <li class="active"><a class="login-btn" href="#" data-toggle="modal" data-target="#loginModal" >Login</a></li>
            @else
            <li class="active user-name">
               {{ Auth::user()->first_name }} 
            </li>
            <li class="active">
               <a style="margin-right: 200px;font-size: 16px;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
            </form>
            @endguest
         </ul>
      </div>
      <!--/.nav-collapse -->
   </div>
   <!--/.container-fluid -->
</nav>

