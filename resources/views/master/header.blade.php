<div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
        <header>

            <img id="logo" src="images/cesae.png" alt="">


        </header>

        <ul class="nav flex-column" id="sidenav">
            <li data-target="#softskills" class="collapsed active">
                <a class="nav-link" href="#">Análise de Soft Skills</a>
            </li>
            <ul id="softskills">
                <a class="nav-link" href="#">Criar testes</a>
                <a class="nav-link" href="#">Registar notas</a>
                <a class="nav-link" href="#">Análise Comparativa</a>
            </ul>
            <li data-toggle="collapse" data-target="#managment" class="collapsed active">
                <a class="nav-link" href="#">Gestão</a>
            </li>
            <ul class="sub-menu collapse" id="managment">
                <a class="nav-link" href="#">Turmas</a>
                <a class="nav-link" href="{{url('/students')}}">Alunos</a>
                <a class="nav-link" href="#">Técnicos</a>
            </ul>
        </ul>
    </div>
    <!-- Content -->
    <div id="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"> </a>

                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <nav class="navbar navbar-default">

                    <div class="container-fluid col-9">
                        <h1>Soft Skills Analysis</h1>

                    </div>
                    <div class="container text-right col-3">
                        <img src="" alt="">
                        <h5>Nome</h5>
                        <ul class="nav flex-column" >

                            <li data-toggle="collapse"  data-target="#user" class="collapsed active">

                                <a class="nav-link" href="#" style="color: black"><i class="bi bi-caret-down text-danger"></i></a>
                            </li>
                            <ul class="sub-menu collapse" id="user">
                                <a class="nav-link" href="#">Editar</a>
                                <a class="nav-link" href="#">Logout</a>
                            </ul>
                        </ul>

                    </div>
            </nav>
        </div>
    </div>
</div>
