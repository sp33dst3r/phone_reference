<table class="table">
    <thead>
    <tr>
        <th scope="col">ФИО</th>
        <th scope="col">Номер</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($phones as $phone)
            <tr>
                <td>{{ $phone->name }}</td>
                <td>{{ $phone->number }}</td>
            </tr>
        @empty
            <tr>
                <td rowspan="2">Нет номеров для отображения</td>
            </tr>
        @endforelse
    </tbody>
</table>
{{ $phones->links() }}
