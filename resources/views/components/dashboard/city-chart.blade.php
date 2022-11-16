<div class="container">

    <canvas id="cityChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>


    const data_city = {
        labels: ['Maia', 'Ermesinde', 'Matosinhos', 'Porto', 'Gaia'],
        datasets: [
            {
                label: 'Alunos',
                data:[10,12,18,32,15] ,
                backgroundColor: '#00adef',
            }
        ]
    };

    const config2 = {
        type: 'bar',
        data: data_city,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },

            }
        },
    };

    const cityChart = new Chart(
        document.getElementById('cityChart'),
        config2
    );
</script>
