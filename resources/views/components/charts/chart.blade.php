<div class="container">
    <canvas id="myChart" ></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>


    const labels =[];

    @foreach($labels_names as $key => $names )

        labels[{{$key}}]= '{{$names}}'

    @endforeach;


const dataTec=[];
    @foreach($gradeTec as $key => $grade)
        dataTec[{{$key}}]={{$grade}}
    @endforeach;

    const dataSS=[];
    @foreach($gradeSS as $key => $grade)
        dataSS[{{$key}}]={{$grade}}
        @endforeach;

    const data = {
        labels: labels,
        datasets: [
            @if(!empty($gradeTec))
            {
            label: 'Testes Técnicos',
            backgroundColor: '#00adef',
            borderColor: 'rgb(255, 99, 132)',
            data: dataTec,

        },
                @endif
                @if(!empty($gradeSS))
            {
                label: 'Dinâmicas de Grupo',
                backgroundColor: '#ec008b',
                borderColor: 'rgb(255, 99, 132)',
                data: dataSS,

            },
            @endif


        ]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
