
<br>

<form method="POST" action="{{ url('/studentTests/'.$testID->id.'ss') }}">
    {{ csrf_field() }}
    {{ method_field('put') }}
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Alunos</th>
        <th scope="col">Autonomia</th>
        <th scope="col">Capacidade de Aprendizagem</th>
        <th scope="col">Organização</th>
        <th scope="col">Comunicação</th>
        <th scope="col">Motivação</th>
        <th scope="col">Proatividade</th>
        <th scope="col">Resolução de Problemas</th>
        <th scope="col">Responsabilidade</th>
        <th scope="col">Trabalho em Equipa</th>

    </tr>
    </thead>
    <tbody>

        @foreach($tests as $test)
            @if($test ->id == $testID->id)
                @foreach($test->students as $student)
                    @if($student->group_id == $groupTest->id)
                        <tr>
                        <td>
                            <div class="form-group">

                            {{$student->name}}
                                <input name="pivot_id[]" type="number" value="{{$student->pivot->id}}" hidden>
                            </div>
                        </td>
                            <td>
                                <input type="number" name="ss1[]"  max="20" min="0">
                            </td>

                            <td>
                                <input type="number" name="ss2[]"  max="20" min="0">
                            </td>

                            <td>
                                <input type="number" name="ss3[]"  max="20" min="0">
                            </td>

                            <td>
                                <input type="number" name="ss4[]"  max="20" min="0">
                            </td>

                            <td>
                                <input type="number" name="ss5[]"  max="20" min="0">
                            </td>

                            <td>
                                <input type="number" name="ss6[]"  max="20" min="0">
                            </td>

                            <td>
                                <input type="number" name="ss7[]"  max="20" min="0">
                            </td>

                            <td>
                                <input type="number" name="ss8[]"  max="20" min="0">
                            </td>

                            <td>
                                <input type="number" name="ss9[]"  max="20" min="0">
                            </td>


                        </tr>
                    @endif
                @endforeach
            @endif
        @endforeach
    </tbody>
</table>
    <br>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Associar nota</button>
    <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Cancelar</a>
</form>
