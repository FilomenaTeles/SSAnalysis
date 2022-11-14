<div class="container">
    <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>


    const labels = [];

    @foreach($labels_names as $key => $names )

        labels[{{$key}}] = '{{$names}}'

    @endforeach;


    const dataTec = [];

    @foreach($gradeTec as $key => $grade)
        dataTec[{{$key}}] = {{$grade}}
        @endforeach;

    const dataSS = [];
    @foreach($gradeSS as $key => $grade)
        dataSS[{{$key}}] = {{$grade}}
        @endforeach;



    const data = {
        labels: labels,
        datasets: [
                @if(!empty($gradeTec))
            {
                label: 'Teste Técnico',
                backgroundColor: '#00adef',
                data: dataTec,

            },
                @endif
                @if(!empty($gradeSS))
            {
                label: 'Dinâmica de Grupo',
                backgroundColor: '#ec008b',
                data: dataSS,

            },
            @endif


        ]
    };

    function average(ctx) {
        const values = ctx.chart.data.datasets[0].data;
        return values.reduce((a, b) => a + b, 0) / values.length;
    }

    const annotation ={
        type: 'line',
        borderColor: 'black',
        borderDash: [6, 6],
        borderDashOffset: 0,
        borderWidth: 3,
        label: {
            enabled: true,
            content: (ctx) => 'Average: ' + average(ctx).toFixed(2),
            position: 'end'
        },
        scaleID: 'y',
        value: (ctx) => average(ctx)
    }

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 20
                }
            }
        },
        plugins:{
            annotation:{
                annotations:{
                    annotation
                }
            }
        }
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
