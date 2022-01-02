@extends("start")

@section('divtype')
    "container"
@endsection

@section('content')
    <table class="table table-bordered">
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
                <td>
                    <input type="button" class="btn-warning" value="-" name="delbutt" data-id="{{$doc->id}}">
                </td>
            @endif
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection

