<div class="container">

    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const colors=[
        '#007FFF',
        '#AA0000',
        '#32de84',
        '#800080',
        '#d2b12d',
        '#cc99ff',

    ]

    const data = {
        labels: ['18', '20', '30', '40', '50','60+'],
        datasets: [
            {
                label: 'Percentagem',
                data:[21,17,23,21,10,8] ,
                backgroundColor: colors,
            }
        ]
    };

    const config = {
        type: 'pie',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'right',
                },

            }
        },
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
