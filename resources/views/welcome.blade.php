@extends('layouts.app')

@section('content')
<div>Data
    <div >
        <a href="{{route('cetak')}}" > cetak data</a>
        <a href="{{route('ujian_tambah')}}">tambah data</a>
    </div>
</div>
<div >
    <table >
        <thead>
            <tr>
                <th>No</th>
                <th>kode mobil</th>
                <th>nomor plat </th>
                <th>merk </th>
                <th>jenis  </th>
                <th>tahun  </th>
                <th>harga  </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $u)
            <tr>
                <td >{{ $loop->iteration }}</td>
                <td >{{ $u->kode_mobil }}</td>
                <td >{{ $u->nomor_plat }}</td>
                <td >{{ $u->merk }}</td>
                <td >{{ $u->jenis }}</td>
                <td >{{ $u->tahun }}</td>
                <td >{{ $u->harga }}</td>
                <td >
                    <a  href="{{route('ujian_edit', $u->id)}}">Edit</a>
                    <a  href="{{route('ujian_hapus', $u->id)}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
