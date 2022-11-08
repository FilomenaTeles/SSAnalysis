<!-- <table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Testes</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tests->student as $student)
        <tr>
            @if($test->id === $student ->test_id)
            <td>{{$test->test_date}}.{{$student->group->edition}}</td>
            <td>
                @foreach($test-> students as $student)
                    <li></li>
                @endforeach
            </td>
            @endif

        </tr>
    @endforeach
    </tbody>
</table> -->
