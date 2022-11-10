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

        @foreach($tests as $test)

            @if($test->test_phase_id ==1 && $test -> test_type_id ==1)<!--Teste Tecnico-->

                @if($test->students->group->id == $groupId)
                   <p>teste</p>
                @endif
            @endif
        @endforeach
            {{$tests}}
        @if(isset($phaseId))
            @if($phaseId->id==1)
                <p>fase 1</p>
                @component('components.charts.chart',[
                'phaseId'=>$phaseId,

])
                @endcomponent
                <br>

            @elseif($phaseId->id==2)
                <p>fase 2</p>
                @component('components.charts.chart',[
                       'phaseId'=>$phaseId,
                       'id'=>'comp'
   ])
                @endcomponent
            @else()
                <p>fase 3</p>
                @component('components.charts.chart',[
                          'phaseId'=>$phaseId,
                          'id'=>'comp'
      ])
                @endcomponent
            @endif
        @endif

        @if(isset($comp))
            <p>comparação</p>
        @endif
    </div>

@endsection
