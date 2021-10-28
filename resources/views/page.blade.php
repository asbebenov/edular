@extends("start")

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>
                Список документов
            </th>
        </tr>
        </thead>
        <tbody>
    @foreach($docs as $doc)

        <tr>
            <td>
                <a href={{$doc->doc}}>{{$doc->name}}</a>
            </td>

        </tr>
    @endforeach
        </tbody>
    </table>
@endsection

