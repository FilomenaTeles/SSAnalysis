<script>


    const label_namecomp = [];

    @foreach($labels_names as $key => $names )
        @if(isset($labels_names[$key]) )
        label_namecomp[{{$key}}] = '{{$names}}'
    @else

    if ({{$key == 0}}) {
        label_namecomp.pop();
    }

    @endif

    @endforeach

    const dataTecAvg = [];
    @foreach($data_grade_avg_Tec as $key => $grade)
        @if(isset($data_grade_avg_Tec[$key]) )
        dataTecAvg[{{$key}}] = {{$grade}};
    @else

    if ({{$key == 0}}) {
        dataTecAvg.pop();
    }

    @endif
        @endforeach;


    const dataSSAvg = [];
    @foreach($data_grade_avg_SS as $key => $grade)
        @if(isset($data_grade_avg_SS[$key]) )
        dataSSAvg[{{$key}}] = {{$grade}};
    @else

    if ({{$key == 0}}) {
        dataSSAvg.pop();
    }

    @endif
        @endforeach;

console.log(dataSSAvg)
    const datacomp = {
        labels: label_namecomp,
        datasets: [
                @if(!empty($data_grade_avg_Tec))
            {
                label: 'Teste Técnico',
                backgroundColor: '#00adef',
                borderColor: '#00adef',
                data: dataTecAvg,

            },
                @endif
                @if(!empty($data_grade_avg_SS))
            {
                label: 'Dinâmica de Grupo',
                backgroundColor: '#ec008b',
                borderColor: '#ec008b',
                data: dataSSAvg,

            },
            @endif


        ]
    };

    const config3 = {
        type: 'bar',
        data: datacomp,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 20
                }
            }
        }

    };

    const ChartComp = new Chart(
        document.getElementById('ChartComp'),
        config3
    );
</script>
