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


const {{$dataTec}}=[19,18,17];


    const {{$dataSS}}=[18,17,19];


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
        options: {}
    };

    const {{$name}} = new Chart(
        document.getElementById('{{$name}}'),
        config{{$name}}
    );
</script>
