<h1>Welcome</h1>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>NPSN</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Desa</th>
        <th>Kecamatan</th>
        <th>Kabupaten</th>
        <th>Provinsi</th>
        <th>Status</th>
        <th>Jenjang</th>
    </tr>
    @foreach ($project as $p)
    <tr>

        <td>{{$p->nama}}</td>
        <td>{{$p->npsn}}</td>
        <td>{{$p->alamat}}</td>
        <td>{{$p->kodepos}}</td>
        <td>{{$p->desa}}</td>
        <td>{{$p->kecamatan}}</td>
        <td>{{$p->kabupaten}}</td>
        <td>{{$p->provinsi}}</td>
        <td>{{$p->status}}</td>
        <td>{{$p->jenjang}}</td>

    </tr>
    @endforeach

</table>
