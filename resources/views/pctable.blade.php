@if(empty($tab))
    <h1>Почему-то ничего не нашли</h1>>
@endif
@if(isset($tab))
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>Инв.№</th>
            <th>Сер. №</th>
            <th>Корпус</th>
            <th>Этаж</th>
            <th>Помещение</th>
            <th>Кабинет</th>
            <th>Имя ПК</th>
            <th>IP</th>
            <th>МАС адрес</th>
            <th>Система</th>
            <th>Лицензия ОС</th>
            <th>Офис</th>
            <th>Лицензия офиса</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tab as $row)
            <tr>
                <td>{{$row->inv}}</td>
                <td>{{$row->ser}}</td>
                <td>{{$row->korp}}</td>
                <td>{{$row->etaj}}</td>
                <td>{{$row->pom}}</td>
                <td>{{$row->kab}}</td>
                <td>{{$row->pc}}</td>
                <td>{{$row->ip}}</td>
                <td>{{$row->mac}}</td>
                <td>{{$row->os}}</td>
                <td>{{$row->licos}}</td>
                <td>{{$row->office}}</td>
                <td>{{$row->licoffice}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
