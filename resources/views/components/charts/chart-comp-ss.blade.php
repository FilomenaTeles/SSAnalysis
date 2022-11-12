

<script>


   const label_namess =[];
   const colorsss =[
       '#00adef',
       '#ec008b',
       '#36236a'
   ];

    @foreach($labels_names as $key => $names )

        label_namess[{{$key}}]= '{{$names}}'

    @endforeach;

    const labelsss =[
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



    const datass = {
        labels: labelsss,
        datasets: [

            @for ($i = 0; $i < sizeof($labels_names); $i++)

            {
                label: label_namess[{{$i}}],
                backgroundColor: colorsss[{{$i}}],
                borderColor: colorsss[{{$i}}],
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
        data: datass,
        options: {}
    };

    const lineChartSS = new Chart(
        document.getElementById('lineChartSS'),
        config2
    );
</script>
