<div class="container">
    <canvas id="myChart" ></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = [
        'Anabela',
        'Bruno',
        'Catia',
        'Diogo',
        'Maria',
        'João',
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Testes Técnicos',
            backgroundColor: '#00adef',
            borderColor: 'rgb(255, 99, 132)',
            data: [18, 10,20, 13, 15, 12, 10, 20],

        },
            {
                label: 'Dinâmicas de Grupo',
                backgroundColor: '#ec008b',
                borderColor: 'rgb(255, 99, 132)',
                data: [15, 10, 15, 12, 20, 19, 20],

            },
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
