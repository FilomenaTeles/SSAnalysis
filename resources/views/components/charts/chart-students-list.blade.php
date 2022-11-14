<?php $cont=1 ?>



<table class="table table-striped  text-center" id="group-student" style="margin: auto">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Gráfico</th>


    </tr>
    </thead>
    <tbody>
    @foreach($students as $key => $student)
        @if($student -> group_id == $groupId->id)
            <tr>
                <td>{{$cont}}</td>
                <td>{{$student -> name}}</td>

                <td>
                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#collapse{{$student->id}}" aria-expanded="false"
                            aria-controls="collapseExample">
                        <i class="bi bi-clipboard-data"></i>
                    </button>

                    <div class="collapse" id="collapse{{$student->id}}">
                        <div class="card card-body">
                            @component('components.charts.chart-student',[
                            'name' =>'chart'.$student->id,
                            'label' => 'label'.$student->id,
                            'dataTec' => 'dataTec'.$student->id,
                            'dataSS' => 'dataSS'.$student->id,
                            'data' => 'data'.$student->id,

           ])
                            @endcomponent
                        </div>
                    </div>
                </td>


            </tr>
            <input type="text" value="{{$cont++}}" hidden>
        @endif

    @endforeach

    </tbody>
</table>
