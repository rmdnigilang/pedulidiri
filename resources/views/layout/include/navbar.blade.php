<div class="container"><a class="navbar-brand" background-collor="brown"><img src="{{asset('admin/assets/img/gallery/logoin.png')}}" width="118" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
               @if(isset(Auth::user()->id)) 
              @if(Auth::user()->role == "admin")
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="/home">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="/dataUser">Data User</a></li>
              @endif
              @if(Auth::user()->role == "user")
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="/home">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="/perjalanan">Perjalanan</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="/profile">Profile</a></li>
              @endif

           <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="/logout">Log-out</a>
          </ul>
             @endif
     
          </div>
        </div>


         