<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href={{route('homepage')}}>Libreria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                <li class="nav-item"><a class="nav-link" href={{route('login')}}>Accedi</a></li>
                <li class="nav-item"><a class="nav-link" href={{route('register')}}>Registrati</a></li>
                @endguest
                @auth
                <li class="text-light mx-auto p-2">
                    <span>{{Auth::user()->name}}</span>
                </li>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" onclick="event.preventDefault(); this.closest('form').submit();">
                            Esci
                        </button>
                    </form>
                </li>
                @endauth
              
                

            </ul>
        </div>
    </div>
</nav>