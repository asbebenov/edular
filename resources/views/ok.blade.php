@extends("start")

@section('content')
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>Документы и бланки отдела кадров</th>
        </tr>
        </thead>
        <tbody>
            @foreach($fdirs as $dir)
                <tr><td> <a href="{{url($path.'/'.$dir)}}">{{'['.$dir.']'}}</a> </td></tr>
            @endforeach
            @foreach($ffiles as $ffile)
                <tr><td> <a href="{{url('storage/'.$path.'/'.$ffile)}}">{{$ffile}}</a> </td></tr>
            @endforeach

        </tbody>
    </table>
@endsection
