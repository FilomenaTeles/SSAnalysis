

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
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
