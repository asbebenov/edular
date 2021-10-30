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
                <!--
                    <video  width="800" height="450" controls preload="auto">
                        <source src="{{$doc->doc}}" type="video/webm">
                    </video>
                -->
                    <button class="btn btn-link" onclick="playvideo({{$doc->doc}})">{{$doc->name}}</button>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <video  width="800" height="450" controls preload="auto">
                    <source src="" type="video/webm">
                </video>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
