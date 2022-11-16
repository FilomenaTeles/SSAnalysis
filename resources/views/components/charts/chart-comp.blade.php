

<script>

   const label_name =[];
   const colors =[
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
       '#dbbddb',   ];

    @foreach($labels_names as $key => $names )

        label_name[{{$key}}]= '{{$names}}'

    @endforeach;

    const labels =[
        'Fase 1',
        'Fase 2',
        'Fase 3'
    ];

const dataTecFase1=[];
const dataTecFase2=[];
const dataTecFase3=[];

<!-- NOTAS DA FASE 1 DO TESTE TECNICO-->
    @foreach($gradesFase1 as $key => $grade1)
        dataTecFase1[{{$key}}]={{$grade1}}
    @endforeach;
   <!-- NOTAS DA FASE 2 DO TESTE TECNICO-->
   @foreach($gradesFase2 as $key => $grade2)
       dataTecFase2[{{$key}}]={{$grade2}}
       @endforeach;
   <!-- NOTAS DA FASE 3 DO TESTE TECNICO-->
   @foreach($gradesFase3 as $key => $grade3)
       dataTecFase3[{{$key}}]={{$grade3}}
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
                    dataTecFase1[{{$i}}],
                    dataTecFase2[{{$i}}],
                    dataTecFase3[{{$i}}]
                ],

            },
                @endfor

        ]
    };



    const config = {
        type: 'line',
        data: data,
        options: {
            scales:{
                y:{
                    max:20
                }
            }
        },

    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
