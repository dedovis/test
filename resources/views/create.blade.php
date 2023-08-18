@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div>
                        Tambah Data
                    </div>
                    <div >
                        <form action="{{route('ujian_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div ><label>kode mobil</label>
                                <input type="text" name="kode_mobil" placeholder="nama">
                            </div>
                            <div ><label>nomor plat</label>
                                <input type="text" name="nomor_plat" placeholder="nomor plat">
                            </div>
                            <div ><label>merk</label>
                                <input type="text" name="merk" placeholder="merk">
                            </div>
                            <div ><label>jenis</label>
                                <input type="text" name="jenis" placeholder="jenis">
                            </div>
                            <div ><label>tahun</label>
                                <input type="text" name="tahun" placeholder="tahun">
                            </div>
                            <div ><label>harga</label>
                                <input type="text" name="harga" placeholder="harga">
                            </div>
                    </div>
                </div>
                <div >
                    <a href="{{route('ujian_index')}}">Batal</a>
                    <button type="submit" >Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
