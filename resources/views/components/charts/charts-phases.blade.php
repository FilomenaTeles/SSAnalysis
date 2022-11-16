<h1>Análise Comparativa - <small>{{$groupId->edition}}</small></h1>
<br>
<?php
$comp = 4;
$student = 10;

?>
<div class="container">
    <div class="d-grid gap-2 col-8 mx-auto row">
            @foreach($testPhases as $testPhase)
                <div class="col"><a id="phase-btn" class="btn @if(!hasPhase($testPhase->id,$testsPhasesList)) disable_btn @endif" type="button"
                                    href="{{'/charts/'.$groupId->id.'/'.$testPhase->id}}">{{$testPhase->description}}</a>
                </div>
            @endforeach
            <div class="col"><a id="phase-btn" class="btn @if(count($testsPhasesList)<2 ) disable_btn @endif" type="button" href="{{'/charts/'.$groupId->id.'/compare/'.$comp}}">Comparação</a>

            </div>
            <div class="col"><a id="phase-btn" class="btn" type="button" href="{{'/charts/'.$groupId->id.'/students/'.$student}}">Alunos</a>

            </div>
    </div>
    <br>

</div>

<?php
function hasPhase($phaseId, $testsPhasesList)
{
foreach ($testsPhasesList as $testPhase){
    if ( $testPhase["id"] ==$phaseId) {
        return true;
    }
    }
    return false;
}




