<h1>Data Praktikan</h1>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>NPM</th>
        <th>File</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->npm }}</td>
        <td>
            <a href="{{ asset('storage/'.$item->file_pdf) }}" target="_blank">
                Lihat PDF
            </a>
        </td>
    </tr>
    @endforeach
</table>
