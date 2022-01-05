
@extends("start")

@section('divtype')
    "container"
@endsection

@section("content")
    <table align="center">
        <thead>
            <tr>
                <th colspan="3">
                   АРМ Контент-менеджера
                </th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Пожалуйста, выберите раздел
            </td>
            <td>
                <select id="sel_vol">
                    <option value="0">-----</option>
                    <option value="mis">МИС</option>
                    <option value="eln">ЭЛН</option>
                    <option value="poly">Поликлиника</option>
                    <option value="order">Приказы</option>
                    <option value="blank">Бланки</option>
                    <option value="video">Видео</option>
                    <option value="telemed">Телемедицина</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Введите название документа:
            </td>
            <td>
                <input type="text" id="tdname" />
            </td>
        </tr>
        <tr>
            <td>
                Выберите файл с документом:
            </td>
            <td>
                <input type="file" id="uplfname" multiple>
            </td>
        </tr>
        <tr>
            <td colspan="3"><input type="button" class="btn-success" value="Добавить" id="add_data_button"></td>
        </tr>
        </tbody>
    </table>

@endsection
