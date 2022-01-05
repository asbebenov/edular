@extends("start")

@section('divtype')
    "container"
@endsection

@section('content')
    <table class="table table-bordered" id="doctab">
        <thead class="table-dark">
        <tr>

            @if(\Illuminate\Support\Facades\Auth::check())
                <th colspan="2">
                    Список документов
                </th>

            @else
                <th>
                    Список документов
                </th>
            @endif
       </tr>
        </thead>
       <tbody>
    @foreach($docs as $doc)

        <tr>
            <td>
                <a href={{$doc->doc}}>{{$doc->name}}</a>
            </td>
            @if(\Illuminate\Support\Facades\Auth::check())
                <td class="col-sm-1">
                    <input type="button" class="removebutton btn-warning btn" value="-" name="delbutt" data-id="{{$doc->id}}">
                </td>
            @endif
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection

