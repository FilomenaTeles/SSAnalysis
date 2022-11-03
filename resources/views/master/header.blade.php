<div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
        <header>

            <a class="nav-link" href="{{ url('/home') }}">
                <img id="logo" src="images/logoCesae.png" alt="">
            </a>

        </header>

        <ul class="nav flex-column" id="sidenav">
            <li data-target="#softskills" >
                <a class="nav-link" href="#">Análise de Soft Skills</a>
            </li>
            <ul id="softskills">
                <a class="nav-link" href="{{url('/tests/create')}}">Criar testes</a>
                <a class="nav-link" href="{{url('/studentTests')}}">Registar notas</a>
                <a class="nav-link" href="">Análise Comparativa</a>
            </ul>
            <li  data-target="#managment" >
                <a class="nav-link" href="#">Gestão</a>
            </li>
            <ul id="managment">
                <a class="nav-link" href="{{url('/courses')}}">Cursos</a>
                <a class="nav-link" href="{{url('/groups')}}">Turmas</a>
                <a class="nav-link" href="{{url('/students')}}">Alunos</a>
                @if (Auth::user() && Auth::user()-> user_type_id==1)
                <a class="nav-link" href="{{url('/users')}}">Técnicos</a>
                @endif

            </ul>
        </ul>
    </div>
    <!-- Content -->
    <div id="content">

        <div class="container-fluid">
            <nav class="navbar navbar-default">

                <div class="container-fluid col-9">
                    <h1>Soft Skills Analysis</h1>
                </div>

                <div class="container text-right col-3">
                        <div class="dropdown">

                            <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-512.png"
                                 width="30%" alt="">
                            <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/user/' . Auth::user()->id)}}">Detalhes</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                </div>
            </nav>
        </div>
    </div>
</div>
