@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div>
                        Edit Data
                    </div>
                    <div >
                        <form action="{{route('ujian_update', $ujian->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div ><label >kode mobil</label>
                                <input type="text" name="kode_mobil" placeholder="nama"
                                    value="{{ $ujian->kode_mobil }}">
                            </div>
                            <div ><label >nomor plat</label>
                                <input type="text" name="nomor_plat" placeholder="nomor plat"
                                    value="{{ $ujian->nomor_plat }}">
                            </div>
                            <div ><label >merk</label>
                                <input type="text" name="merk" placeholder="merk"
                                    value="{{ $ujian->merk }}">
                            </div>
                            <div ><label >jenis</label>
                                <input type="text" name="jenis" placeholder="jenis"
                                    value="{{ $ujian->jenis }}">
                            </div>
                            <div ><label >tahun</label>
                                <input type="text" name="tahun" placeholder="tahun"
                                    value="{{ $ujian->tahun }}">
                            </div>
                            <div ><label >harga</label>
                                <input type="text" name="harga" placeholder="harga"
                                    value="{{ $ujian->harga }}">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{route('ujian_index')}}" type="button" >Batal</a>
                    <button type="submit" >ubah data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
