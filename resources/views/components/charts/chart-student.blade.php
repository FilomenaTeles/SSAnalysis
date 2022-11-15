<div class="container">
    <canvas id="{{$name}}" ></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>



    const {{$label}} =[
        'Fase 1',
        'Fase 2',
        'Fase 3',
    ];

    const {{$dataTec}}=[0,0,0];

    const {{$dataSS}}=[0,0,0];


    @foreach($gradesTec as $key => $grade)
    {{$dataTec}}[{{$key}}] ={{$grade}}
        @endforeach;


    @foreach($gradesSS as $key => $grade)
    {{$dataSS}}[{{$key}}] ={{$grade}}
        @endforeach;




    const {{$data}} = {
        labels: {{$label}},
        datasets: [

            {
            label: 'Teste Técnico',
            backgroundColor: '#00adef',
            data: {{$dataTec}},

        },

            {
                label: 'Dinâmica de Grupo',
                backgroundColor: '#ec008b',
                data: {{$dataSS}},

            },

        ]
    };

    const config{{$name}} = {
        type: 'bar',
        data: {{$data}},
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 20
                }
            }
        }
    };

    const {{$name}} = new Chart(
        document.getElementById('{{$name}}'),
        config{{$name}}
    );
</script>
