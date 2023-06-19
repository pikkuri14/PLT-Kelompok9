@section('content')

<div class="card">
        <div class="card-header">
            <b>Defense</b> | Mark of Final Defenses
        </div>
    <form class="form-inline">
        <div class="input-group mt-3 ml-5">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

<div class="table-responsive mt-3 ml-5">
    <table class="table table-sm" style="border: none; width: auto;">
        <tr>
            <td><strong>Event ID</strong></td>
            <td>    </td>
            @foreach ($atas as $atas)
            <td>
                {{
                    $atas->eventType->event_id
                }}
            </td>
            @break
            @endforeach
        </tr>
        
        <tr>
            <td><strong>Event Name</strong></td>
            <td>    </td>
            @foreach ($atas1 as $atas1)
            <td>
                {{
                    $atas1->eventType->type->description 
                }} {{
                    $date
                }}
            </td>
            @break
            @endforeach
        </tr>
    </table>
</div>

@php
    $prev = 0;
    $prev_applicant = 0;
    $index = 1;
@endphp

{{-- @foreach ($jo as $jo)
    <h5>
        {{$jo->examiner_id}}
    </h5>
@endforeach --}}

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th><strong>No</strong></th>
                <th><strong>Student</strong></th>
                <th><strong>Supervisors</strong></th>
                <th><strong>Examiners</strong></th>
            </tr>
        </thead>


        @foreach($score as $score)
                    <tbody>
                        @if ($prev != $score->event_id || $prev_applicant != $score->applicant_id)
                        <tr>
                            <td>
                                {{$index}}
                            </td>
                            <td>
                                {{$score->applicant->research->student->program->code}} {{$score->applicant->research->student->student_number}}<br>
                                {{$score->applicant->research->student->first_name}} {{$score->applicant->research->student->last_name}}
                            </td>
                            <td>

                                <div class="table-responsive">
                                    <table class="table table-sm" style="border: none; width: auto;">
                                        <tr>
                                            <th><strong><!--nama super-->{{$score->applicant->research->supervisor[0]->faculty->code}}</strong></td>
                                        </tr>
                                        <tr>
                                            <td><!--nama super-->{{$score->applicant->research->supervisor[0]->supervisorScore->mark}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                            <td>
                                <div class="table-responsive">
                                    
                                        <table class="table table-sm" style="border: none; width: auto;">
                                            <tr>
                                                @foreach ($asd2 as $asd22)
                                                    @if ($asd22->applicant_id==$score->applicant_id)
                                                            <th><strong><!--nama exami-->{{  isset($asd22->defense->examiner->code) ? $asd22->defense->examiner->code : 'null' ;}}</strong></td>
                                                            {{-- <th><strong><!--nama exami-->{{  isset($asd22->applicant_id) ? $asd22->examiner_id : 'null' ;}}</strong></td> --}}
                                                    @endif
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach ($asd3 as $asd33)
                                                    @if ($asd33->applicant_id==$score->applicant_id)
                                                    <td>
                                                        <!--nama super-->{{ $asd33->mark ? $asd33->mark : "null"  ;}}
                                                    </td>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        </table>
                                    
                                    
                                </div>
                            </td>
                        </tr>

                        @php
                            $prev = $score->event_id;
                            $prev_applicant = $score->applicant_id; 
                            $index++;
                        @endphp

                        @endif
                    </tbody>
        @endforeach
    </table>
</div>
    
        </div>
        <div class="card-footer text-muted">
            @ArSys<i>2023</i>
        </div>
    </div>

@endsection