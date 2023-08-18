@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data
                        <div class="text-right">
                            <a href="cetak" class="btn btn-primary"> cetak data</a>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#exampleModalCenter">+ tambah data</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">kode mobil</th>
                                    <th scope="col" class="text-center">nomor plat </th>
                                    <th scope="col" class="text-center">merk </th>
                                    <th scope="col" class="text-center">jenis  </th>
                                    <th scope="col" class="text-center">tahun  </th>
                                    <th scope="col" class="text-center">harga  </th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ujian as $u)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $u->kode_mobil }}</td>
                                        <td class="text-center">{{ $u->nomor_plat }}</td>
                                        <td class="text-center">{{ $u->merk }}</td>
                                        <td class="text-center">{{ $u->jenis }}</td>
                                        <td class="text-center">{{ $u->tahun }}</td>
                                        <td class="text-center">{{ $u->harga }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-info" href="edit/{{ $u->id }}">Edit</a>
                                            <a class="btn btn-danger" href="hapus/{{ $u->id }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group"><label class="form-control-label">kode mobil </label>
                            <input type="text" name="kode_mobil" placeholder="kode mobil" class="form-control">
                        </div>
                        <div class="form-group"><label class="form-control-label">nomor plat </label>
                            <input type="text" name="nomor_plat" placeholder="nomor plat" class="form-control">
                        </div>
                        <div class="form-group"><label class="form-control-label">merk</label>
                            <input type="text" name="merk" placeholder="merk" class="form-control">
                        </div>
                        <div class="form-group"><label class="form-control-label">jenis</label>
                            <input type="text" name="jenis" placeholder="jenis" class="form-control">
                        </div>
                        <div class="form-group"><label class="form-control-label">tahun</label>
                            <input type="text" name="tahun" placeholder="tahun" class="form-control">
                        </div>
                        <div class="form-group"><label class="form-control-label">harga</label>
                            <input type="text" name="harga" placeholder="harga" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
