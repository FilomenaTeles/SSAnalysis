

<script>


   const label_namess =[];
   const colorsss =[
       // Blue:
       '#007FFF',
       '#002D62',
       '#B2FFFF',
       '#008E97',
       '#1ca9c9',

       // Red:
       '#AA0000',
       '#FBCEB1',
       '#FF7F50',
       '#FF004F',
       '#C04000',

       // Green:
       '#8F9779',
       '#32de84',
       '#4FFFB0',
       '#006400',
       '#A9BA9D',

       // Purple:
       '#452c63',
       '#800080',
       '#ff99e6',
       '#ff00bf',
       '#cc0066',

       // Yellow:
       '#F0E68C',
       '#FFFF00',
       '#FFC72C',
       '#bfff00',
       '#d2b12d',

       // Pink:
       '#FF69B4',
       '#FFC0CB',
       '#660066',
       '#cc99ff',
       '#dbbddb',

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
        options: {
            scales:{
                y:{

                    max:20
                }
            }
        }
    };

    const lineChartSS = new Chart(
        document.getElementById('lineChartSS'),
        config2
    );
</script>
