<div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
        <header>

            <a class="nav-link" href="{{ url('/home') }}">
                <img id="logo" src="../../../images/cesae.png" alt="">
            </a>

        </header>

        <ul class="nav flex-column" id="sidenav">
            <li data-target="#softskills" >
                <a class="nav-link" href="#">Análise de Soft Skills</a>
            </li>
            <ul id="softskills">
                <a class="nav-link" href="{{url('/tests')}}">Testes</a>
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
</div>
