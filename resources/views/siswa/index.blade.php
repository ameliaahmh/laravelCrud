@extends('master.master')

@section('content')

@if(session ('sukses'))
          <div class="alert alert-success" role="alert">
            {{ session ('sukses')}}
          </div>
        @endif
        @if(session ('error'))
        <div class="alert alert-danger" role="alert">
        {{ session ('error')}}
        </div>
        @endif
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                  Tambah
                </button>
                <h4 class="card-title"> Data Siswa</h4>
                  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                    <tr>
												<th>Nis</th>
												<th>Nama Siswa</th>
												<th>Jenis Kelamin</th>
												<th>Agama</th>
												<th>Tempat, Tanggal Lahir</th>
                        <th>Alamat</th>
												<th>Aksi</th>
											</tr>
										</thead>
                    <tbody>
                      @foreach ($datasiswa as $siswa)
                        <tr>
                          <td>{{$siswa->id}}</td>
                          <td>{{$siswa->nama_siswa}}</td>
                          <td>{{$siswa->jenis_kelamin}}</td>
                          <td>{{$siswa->agama}}</td>
                          <td>{{$siswa->tempat_lahir}}, {{$siswa->tanggal_lahir}}</td>
                          <td>{{$siswa->alamat}}</td>         
                          <td>
                            <a href="/siswa/{{$siswa->id}}/edit" class="edit"><i class="fas fa-edit" data-toggle="tooltip" title="Edit" style="color: yellow;"></i></a>
                            <a href="/datasiswa/{{$siswa->id}}/delete"  class="delete" onclick="return confirm('Yakin mau dihapus ?')"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Hapus" style="color: red"></i></a>
                            
                          </td>
                          <td><a href="/siswa/{{$siswa->id}}/detail">Detail</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="modal-body">
                <!-- form -->
            <form action="{{Route('tambah_siswa')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nis</label>
              <input name="id" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nis" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Siswa</label>
              <input name="nama_siswa" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Siswa">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option  value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Agama</label>
              <select name="agama" class="form-control" id="exampleFormControlSelect1">
                <option  value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
              </select>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Tempat Lahir</label>
              <input name="tempat_lahir" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input name="tanggal_lahir" type="date" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
            </div>
             <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"  rows="3"></textarea>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">No Telepon</label>
              <input name="no_telepon" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telepon">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Asal Sekolah</label>
              <input name="asal_sekolah" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Sekolah">
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
               </form>
            </div>
          </div>
        </div>
      </div>
@stop
