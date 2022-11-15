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

//avgTec plugin block



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

    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
