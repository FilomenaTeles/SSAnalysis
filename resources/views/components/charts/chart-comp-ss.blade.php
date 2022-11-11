<div class="container">
    <p>Teste</p>
    <canvas id="myChartSS" ></canvas>
</div>

<script>


   const label_name =[];
   const colors =[
       '#00adef',
       '#ec008b',
       '#36236a'
   ];

    @foreach($labels_names as $key => $names )

        label_name[{{$key}}]= '{{$names}}'

    @endforeach;

    const labels =[
        'Fase 1',
        'Fase 2',
        'Fase 3'
    ];


const dataSSFase1=[];
const dataSSFase2=[];
const dataSSFase3=[];

<!-- NOTAS DA FASE 1 De Soft Skills-->
    @foreach($gradesFase1 as $key => $grade1)
        dataSSFase1[{{$key}}]={{$grade1}}
    @endforeach;
   <!-- NOTAS DA FASE 2 De Soft Skills-->
   @foreach($gradesFase2 as $key => $grade2)
       dataSSFase2[{{$key}}]={{$grade2}}
       @endforeach;
   <!-- NOTAS DA FASE 3 De Soft Skills-->
   @foreach($gradesFase3 as $key => $grade3)
       dataSSFase3[{{$key}}]={{$grade3}}
       @endforeach;



    const data = {
        labels: labels,
        datasets: [

            @for ($i = 0; $i < sizeof($labels_names); $i++)

            {
                label: label_name[{{$i}}],
                backgroundColor: colors[{{$i}}],
                borderColor: colors[{{$i}}],
                data: [
                    dataSSFase1[{{$i}}],
                    dataSSFase2[{{$i}}],
                    dataSSFase3[{{$i}}]
                ],

            },
                @endfor

        ]
    };

    const config2 = {
        type: 'line',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChartSS'),
        config2
    );
</script>
