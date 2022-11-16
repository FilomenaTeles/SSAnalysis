<?php $contador=0 ?>
<br>

<div class="container p-3 ">
    <div class="row">
        <div class="col-6"><h5><i class="bi bi-geo-alt"></i> Distribuição localidades dos ALunos</h5></div>
        <div class="col-6"> <h5><i class="bi bi-percent"></i> Percentagem de idades</h5></div>
    </div>
    <div class="row">
        <div class="col-6 align-self-center">
            @component('components.dashboard.city-chart')
            @endcomponent
        </div>
        <div class="col-6">
        @component('components.dashboard.course-chart')
            @endcomponent
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-6 "><h5><i class="bi bi-calendar-week"></i> Próximos Testes</h5> </div>
        <div class="col"><h5><i class="bi bi-calendar-heart"></i> Próximos Aniversários</h5></div>
    </div>
    <div class="row">

        <table class="table table-striped col-5 text-center" style="margin: auto">
            <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Turma</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fase</th>
            </tr>
            </thead>
            <tbody>

            @foreach($tests as $test)

                <tr>
                    <td>{{$test->test_date}}</td>
                    @foreach($test-> students as $student)
                        @if($contador == 0)
                            <td>{{$student->group->edition}}</td>
                                <?php $contador++ ?>
                        @endif
                    @endforeach
                        <?php $contador=0 ?>

                    @foreach($testTypes as $testType)
                        @if(($testType->id) == ($test-> test_type_id))
                            <td>{{$testType->description}}</td>
                        @endif
                    @endforeach

                    <td>{{$test->test_phase_id}}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
        <div class="col-1"></div>
        <table class="table table-striped col-5 text-center" style="margin: auto">
            <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Turma</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>

                </tr>
            @endforeach
            </tbody>
        </table>
<div class="col-1"></div>
    </div>

</div>
<br>
<br>
