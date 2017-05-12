<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<b>Имя:</b> {{ $name }} <br/>
<b>Email:</b> {{ $email }} <br/>
<b>Телефон:</b> {{ $phone }} <br/>
<b>Адрес:</b> {{ $address }} <br/>
<b>Сообщение:</b> {{ $text }} <br/>
<table border="1">
    <tr>
        <td>Наименование</td>
        <td>Количество</td>
        <td>Цена</td>
        <td>Сумма</td>
    </tr>
    @foreach($data as $d)
        <tr>
            <td>{{ $d['name'] }}    </td>
            <td>{{ $d['quantity'] }}</td>
            <td>{{ $d['price'] }}   </td>
            <td>{{ $d['amount'] }}  </td>
        </tr>
    @endforeach
</table>