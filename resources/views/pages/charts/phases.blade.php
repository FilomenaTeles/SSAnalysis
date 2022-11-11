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


        ?>

        @foreach($tests as $test)

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
        @endforeach

        <?php $teste[] = $data_gradeTec3 ?>
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
                <h5>Testes Técnicos</h5>
            </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


                @component('components.charts.chart-comp',[

                   'labels_names'=>$labels_names,
                   'gradesFase1' => $data_gradeTec1,
                   'gradesFase2' => $data_gradeTec2,
                   'gradesFase3' => $data_gradeTec3,
      ])
                @endcomponent
                <br>

                <div class="container">
                    <h5>Testes Dinâmica de Grupo</h5>
                </div>

                <br>
                @component('components.charts.chart-comp-ss',[

                       'labels_names'=>$labels_names,
                       'gradesFase1' => $data_gradeSS1,
                       'gradesFase2' => $data_gradeSS2,
                       'gradesFase3' => $data_gradeSS3,
          ])
                @endcomponent
                <br>


        @endif
    </div>

@endsection
