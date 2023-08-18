@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group"><label class="form-control-label">kode mobil</label>
                                <input type="text" name="kode_mobil" placeholder="nama" class="form-control"
                                    value="{{ $ujian->kode_mobil }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">nomor plat</label>
                                <input type="text" name="nomor_plat" placeholder="nomor plat" class="form-control"
                                    value="{{ $ujian->nomor_plat }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">merk</label>
                                <input type="text" name="merk" placeholder="merk" class="form-control"
                                    value="{{ $ujian->merk }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">jenis</label>
                                <input type="text" name="jenis" placeholder="jenis" class="form-control"
                                    value="{{ $ujian->jenis }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">tahun</label>
                                <input type="text" name="tahun" placeholder="tahun" class="form-control"
                                    value="{{ $ujian->tahun }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">harga</label>
                                <input type="text" name="harga" placeholder="harga" class="form-control"
                                    value="{{ $ujian->harga }}">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                    <button type="submit" class="btn btn-primary">ubah data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
