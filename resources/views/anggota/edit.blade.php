@extends('layout.app') 
@section('title', 'Tambah Data Anggota')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Anggota</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Anggota</h4>
            </div>

            <div class="card-body">
                <form action="{{route('anggota.update',  $anggota->id)}}" enctype="multipart/form-data" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="kode">Kode</label>
                            <input type="text" name="kode" id="kode" class="form-control" value="{{$anggota->kode}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{$anggota->nama}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="{{$anggota->jenis_kelamin}}">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tempat_lahir">Tempat_Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{$anggota->tempat_lahir}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tanggal_lahir">Tanggal_Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{$anggota->tanggal_lahir}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="telepon">telepon</label>
                            <input type="number" name="telepon" id="telepon" class="form-control" value="{{$anggota->telepon}}">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"> value="{{$anggota->alamat}}"</textarea>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control" value="{{$anggota->foto}}">
                        </div>
                        
                        <button type="submit" class="btn btn-warning"><i class="far fa-save"></i> Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</form>
</div>
</div>
</div>
</section>
@endsection