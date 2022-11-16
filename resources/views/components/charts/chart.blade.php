<div class="container">

    <canvas id="myChart"></canvas>
    <br>
        <div class="row ">
            <p class="col-3"></p>
            <p class="col-3 mr-0"><i class="bi bi-align-start" id="lineTec"></i><small>Média Técnicos</small> </p>
            <p class="col-3 ml-0"><i class="bi bi-align-start" id="lineSS"></i><small>Média Dinâmicas de Grupo</small> </p>
            <p class="col-3"></p>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>


    const labels = [];

    @foreach($labels_names as $key => $names )

        labels[{{$key}}] = '{{$names}}'

    @endforeach;


    const dataTec = [];
    var avgTec = 0;
    var avgSS = 0;

    @foreach($gradeTec as $key => $grade)
        dataTec[{{$key}}] = {{$grade}}
        avgTec = avgTec + {{$grade}};
    @endforeach;

    const dataSS = [];
    @foreach($gradeSS as $key => $grade)
        dataSS[{{$key}}] = {{$grade}}
        avgSS = avgSS + {{$grade}};
    @endforeach;



    const data = {
        labels: labels,
        datasets: [
                @if(!empty($gradeTec))
            {
                type: 'bar',
                label: 'Teste Técnico',
                backgroundColor: '#0080ff',
                data: dataTec,

            },
                @endif
                @if(!empty($gradeSS))
            {
                type: 'bar',
                label: 'Dinâmica de Grupo',
                backgroundColor: '#80bfff',
                data: dataSS,

            },
            @endif


        ]
    };

    //avg plugin block
    const avg = {
        id: 'avg',
        afterDatasetsDraw(chart, args, pluginoptions) {
            const {ctx, chartArea: {top, bottom, left, right, width, height}, scales: {x, y}} = chart;

            ctx.save();

            const avgt = avgTec / dataTec . length;
            const avgs = avgSS / dataSS . length;


            function hasAvg(value){
               if (value!=0){
                   return true
               }
               return false
            }

            if (hasAvg(avgt)) {
                drawAvgLine(avgt, '#008fc5');
            }

            if (hasAvg(avgs)) {
                drawAvgLine(avgs, '#ec008b');
            }

            function drawAvgLine(yValue, color) {
                ctx.beginPath();
                ctx.lineWidth = 3;

                ctx.strokeStyle = color;
                ctx.moveTo(left, y.getPixelForValue(yValue));
                ctx.lineTo(right, y.getPixelForValue(yValue));
                ctx.stroke();
                ctx.closePath();
                ctx.restore();
            }
        }
    }


    const config = {

        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 20
                }
            }
        },
        plugins: [
            avg
        ]
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
