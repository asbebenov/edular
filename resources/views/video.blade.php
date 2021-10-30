@extends("start")

@section('content')
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>
                Список видеоматериалов
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($docs as $doc)

            <tr>
                <td>
                    <p> {{$doc->name}} </p>
                    <video  width="720" height="540" controls preload="auto">
                        <source src="{{$doc->doc}}" type="video/webm">
                    </video>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
