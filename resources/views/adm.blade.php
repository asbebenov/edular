
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

            <td>
                Please select volume
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
            <td>
                <input type="text" id="tdname" />
            </td>
        <td>
            <input type="file" id="uplfname" />
        </td>
        </tbody>
    </table>

@endsection
