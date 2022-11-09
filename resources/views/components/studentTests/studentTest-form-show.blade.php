
<br>
<div class="container m-auto">
    <table class="table table-striped w-75">
        <thead>
        <tr>
            <th scope="col">Alunos</th>
            <th scope="col">Nota</th>
        </tr>
        </thead>
        <tbody>

        @foreach($tests as $test)
            @if($test ->id == $testID->id)
                @foreach($test->students as $student)
                    @if($student->group_id == $groupTest->id)
                        <tr>
                            <td>
                                    {{$student->name}}

                            </td>
                            <td>{{$student->pivot->grade}}</td>

                        </tr>
                    @endif
                @endforeach
            @endif
        @endforeach
        </tbody>
    </table>
    <br>
<div class="container text-right">
    <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Voltar</a>
</div>


</div>
