@extends('master.master')

@section('content')

  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
        <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nis</label>
              <input name="id" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nis" value="{{$siswa->id}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Siswa</label>
              <input name="nama_siswa" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Siswa" value="{{$siswa->nama_siswa}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option  value="Laki-laki" @if($siswa->jenis_kelamin == 'Laki-laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Agama</label>
              <select name="agama" class="form-control" id="exampleFormControlSelect1">
                <option  value="Islam" @if($siswa->agama == 'Islam') selected @endif>Islam</option>
                <option value="Kristen" @if($siswa->agama == 'Kristen') selected @endif>Kristen</option>
                <option value="Hindu" @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>
                <option value="Budha" @if($siswa->agama == 'Budha') selected @endif>Budha</option>
                <option value="Konghuchu" @if($siswa->agama == 'Konghuchu') selected @endif>Konghuchu</option>
              </select>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Tempat Lahir</label>
              <input name="tempat_lahir" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir" value="{{$siswa->tempat_lahir}}">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input name="tanggal_lahir" type="date" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" value="{{$siswa->tanggal_lahir}}">
            </div>
             <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"  rows="3">{{$siswa->alamat}}</textarea>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">No Telepon</label>
              <input name="no_telepon" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telepon" value="{{$siswa->no_telepon}}">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Asal Sekolah</label>
              <input name="asal_sekolah" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Sekolah" value="{{$siswa->asal_sekolah}}">
            </div>
            <div class="modal-footer"><button type="submit" class="btn btn-warning">Update</button></div>
            </form>
  </body>
  </html>
@stop