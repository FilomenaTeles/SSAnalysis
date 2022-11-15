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
                <a class="nav link {{(Request::is('tests') || Request::is('tests/*')) ? 'active' : ''}}" href="{{ ('/tests') }}">Testes</a>
                <a class="nav link {{(Request::is('studentTests') || Request::is('studentTests/*')) ? 'active' : ''}}" href="{{ ('/studentTests') }}">Registar Notas</a>
                <a class="nav link {{(Request::is('charts') || Request::is('charts/*')) ? 'active' : ''}}" href="{{ ('/charts') }}">Análise Comparativa</a>

                {{--                <a class="nav-link  @if($_SERVER['REQUEST_URI']=='/tests')--}}
{{--                    active--}}
{{--                    @endif" href="{{url('/tests')}}"--}}

{{--                    >Testes</a>--}}
{{--                <a class="nav-link @if($_SERVER['REQUEST_URI']=='/studentTests')--}}
{{--                    active--}}
{{--                    @endif" href="{{url('/studentTests')}}">Registar notas</a>--}}
{{--                <a class="nav-link @if($_SERVER['REQUEST_URI']=='/charts')--}}
{{--                    active--}}
{{--                    @endif " href="{{url('/charts')}}">Análise Comparativa</a>--}}
            </ul>
            <li  data-target="#managment" >
                <a class="nav-link" href="#">Gestão</a>
            </li>
            <ul id="managment">
                <a class="nav link {{(Request::is('courses') || Request::is('courses/*')) ? 'active' : ''}}" href="{{ ('/courses') }}">Cursos</a>
                <a class="nav link {{(Request::is('groups') || Request::is('groups/*')) ? 'active' : ''}}" href="{{ ('/groups') }}">Turmas</a>
                <a class="nav link {{(Request::is('students') || Request::is('students/*')) ? 'active' : ''}}" href="{{ ('/students') }}">Alunos</a>

                @if (Auth::user() && Auth::user()-> user_type_id==1)
                    <a class="nav-link {{(Request::is('users') || Request::is('users/*')) ? 'active' : ''}}" href="{{ ('/users') }}">Técnicos</a>
                @endif

{{--                <a class="nav-link @if($_SERVER['REQUEST_URI']=='/courses')--}}
{{--                    active--}}
{{--                    @endif" href="{{url('/courses')}}">Cursos</a>--}}

{{--                <a class="nav-link @if($_SERVER['REQUEST_URI']=='/groups')--}}
{{--                    active--}}
{{--                    @endif" href="{{url('/groups')}}">Turmas</a>--}}

{{--                <a class="nav-link @if($_SERVER['REQUEST_URI']=='/students' || $_SERVER['REQUEST_URI']=='/students/create' || $_SERVER['REQUEST_URI']=='/students/' )--}}
{{--                    active--}}
{{--                    @endif" href="{{url('/students')}}">Alunos</a>--}}

{{--                @if (Auth::user() && Auth::user()-> user_type_id==1)--}}
{{--                    <a class="nav-link @if($_SERVER['REQUEST_URI']=='/users')--}}
{{--                    active--}}
{{--                    @endif" href="{{url('/users')}}">Técnicos</a>--}}
{{--                @endif--}}

            </ul>
        </ul>
    </div>
</div>
