@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">


        @component('components.charts.charts-phases',[
        'groupId' => $groupId,
        'tests'      => $tests,
        'groups'    => $groups,
        'testPhases' =>$testPhases
    ])
        @endcomponent
        <?php

        $labels_names[] = [];

        $data_gradeTec1[] = [];
        $data_gradeSS1[] = [];

        $data_gradeTec2[] = [];
        $data_gradeSS2[] = [];

        $data_gradeTec3[] = [];
        $data_gradeSS3[] = [];

        $data_grade_avg_Tec[] = [];
        $data_grade_avg_SS[] = [];


        ?>

        @foreach($tests as $test)
            <!--FASE 1-->
            @if($test->test_phase_id ==1 && $test -> test_type_id ==1)
                <!--Teste Tecnico-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id)
                        <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeTec1[$key]=$student->pivot -> grade}}" hidden>

                    @endif
                @endforeach

            @endif

            @if($test->test_phase_id ==1 && $test -> test_type_id ==2)
                <!--Teste SS-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id)
                        <input type="text" value="  {{$data_gradeSS1[$key]=$student->pivot -> grade}}" hidden>

                    @endif
                @endforeach

            @endif

            <!--FASE 2-->
            @if($test->test_phase_id ==2 && $test -> test_type_id ==1)
                <!--Teste Tecnico-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id)
                        <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeTec2[$key]=$student->pivot -> grade}}" hidden>

                    @endif
                @endforeach

            @endif

            @if($test->test_phase_id ==2 && $test -> test_type_id ==2)
                <!--Teste SS-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id)
                        <input type="text" value="  {{$data_gradeSS2[$key]=$student->pivot -> grade}}" hidden>

                    @endif
                @endforeach

            @endif
            <!--FASE 3-->
            @if($test->test_phase_id ==3 && $test -> test_type_id ==1)
                <!--Teste Tecnico-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id)
                        <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeTec3[$key]=$student->pivot -> grade}}" hidden>

                    @endif
                @endforeach

            @endif

            @if($test->test_phase_id ==3 && $test -> test_type_id ==2)
                <!--Teste SS-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id)
                        <input type="text" value="  {{$data_gradeSS3[$key]=$student->pivot -> grade}}" hidden>

                    @endif
                @endforeach

            @endif
                <!--Sem Teste Tecnico-->
                @if($test->test_phase_id ==1 && $test -> test_type_id ==1)
                @endif
                <!--Sem Teste SS-->
        @endforeach

        <!--CRIAÇÃO DOS GRÁFICOS-->
        @if(isset($phaseId))
            @if($phaseId->id==1)
                <h4>Fase 1</h4>


                @component('components.charts.chart',[
                'phaseId'=>$phaseId,
                 'labels_names'=>$labels_names,
                 'gradeTec'=>$data_gradeTec1,
                 'gradeSS'=>$data_gradeSS1,

])
                @endcomponent

                <br>

            @elseif($phaseId->id==2)
                <h4>Fase 2</h4>
                @component('components.charts.chart',[
                'phaseId'=>$phaseId,
                'labels_names'=>$labels_names,
                'gradeTec'=>$data_gradeTec2,
                'gradeSS'=>$data_gradeSS2,
   ])
                @endcomponent
                <br>
            @else()
                <h4>Fase 3</h4>


                @component('components.charts.chart',[
                          'phaseId'=>$phaseId,
                          'labels_names'=>$labels_names,
                          'gradeTec'=>$data_gradeTec3,
                          'gradeSS'=>$data_gradeSS3,

            ])
                @endcomponent
                <br>
            @endif
        @endif

        @if(isset($comp))
            <h4>Comparação</h4>
            <div class="container">
                <h5>Teste Técnico</h5>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <div class="container p-5">
                <canvas id="myChart"></canvas>
                <p class="text-center"><small>Gráfico das 3 fases dos testes técnicos de cada aluno;</small></p>
            </div>

            @component('components.charts.chart-comp',[

               'labels_names'=>$labels_names,
               'gradesFase1' => $data_gradeTec1,
               'gradesFase2' => $data_gradeTec2,
               'gradesFase3' => $data_gradeTec3,
  ])
            @endcomponent
            <br>

            <div class="container">
                <h5>Teste Dinâmica de Grupo</h5>
            </div>
            <div class="container p-5">
                <canvas id="lineChartSS"></canvas>
                <p class="text-center"><small>Gráfico das 3 fases das dinâmicas de grupo de cada aluno;</small></p>
            </div>

            @component('components.charts.chart-comp-ss',[

                   'labels_names'=>$labels_names,
                   'gradesFase1' => $data_gradeSS1,
                   'gradesFase2' => $data_gradeSS2,
                   'gradesFase3' => $data_gradeSS3,
      ])
            @endcomponent

            <br>

            <div class="container">
                <h5>Testes Técnicos vs Dinâmica de Grupo</h5>
            </div>
            <!--FAZER MEDIA DE TODAS AS FASES PARA CADA TIPO DE TESTE-->


            @for ($i = 0; $i < sizeof($labels_names); $i++)
                <input type="text"
                       value="  {{$data_grade_avg_Tec[$i]= (($data_gradeTec1[$i]+$data_gradeTec2[$i]+$data_gradeTec3[$i])/3)}}"
                       hidden>
                <input type="text"
                       value="  {{$data_grade_avg_SS[$i]= (($data_gradeSS1[$i]+$data_gradeSS2[$i]+$data_gradeSS3[$i])/3)}}"
                       hidden>
                <input type="text"
                       value="   {{$data_grade_avg_Tec[$i] = number_format($data_grade_avg_Tec[$i], 2, '.', '')}}"
                       hidden>
                <input type="text"
                       value="   {{$data_grade_avg_SS[$i] = number_format($data_grade_avg_SS[$i], 2, '.', '')}}" hidden>
            @endfor

            <div class="container p-5">
                <canvas id="ChartComp"></canvas>
                <p class="text-center"><small>Gráfico da média das 3 fases de cada tipo de teste;</small></p>
            </div>

            @component('components.charts.chart-comp-comp',[

                      'labels_names'=>$labels_names,
                      'data_grade_avg_Tec' =>$data_grade_avg_Tec,
                      'data_grade_avg_SS' =>$data_grade_avg_SS
         ])
            @endcomponent

        @endif
        @if(isset($st))
                <br>
            @component('components.charts.chart-students-list',[
         'students' =>$students,
         'groupId' => $groupId,
         'tests'      => $tests,
         'groups'    => $groups,
         'testPhases' =>$testPhases,

])
            @endcomponent
                <br>
        @endif
    </div>

@endsection
