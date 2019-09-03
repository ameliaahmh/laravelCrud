@extends('master.master')


@section('header')
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop

@section('content')
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<style type="text/css">
			.content {
				margin-top: 1%;
			}
		</style>
	</head>
	<body>
			<div class="content">
					<div class="profile-left">
								<div class="panel">
								<div class="panel-heading">
									<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
										Tambah Nilai
									</button>
									<h3 class="panel-title">Mata Pelajaran</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Kode</th>
												<th>Nama</th>
												<th>Semester</th>
												<th>Nilai</th>
												<th>Guru</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($siswa->nilai as $mapel)
											<tr>
												<td>{{$mapel->id}}</td>
												<td>{{$mapel->nama_mapel}}</td>
												<td>{{$mapel->semester}}</td>
												<td><a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id_mapel}}" data-url="/api/siswa/{{$siswa->nis}}/editnilai" data-title="Masukkan Nilai">{{$mapel->pivot->nilai}}</a></td>
												<td><a href="/guru/{{$mapel->guru_id}}/profil">{{$mapel->guru->nama_guru}}</a></td>
												<td><a href="/siswa/{{$siswa->nis}}/{{$mapel->id_mapel}}/deletenilai" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
								<div class="panel">
									<div id="chartNilai">
									</div>
								</div>
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<br>
		<br>
		<br>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="/siswa/{{$siswa->nis}}/addnilai" method="POST" enctype="multipart/form-data">
				    	{{csrf_field()}}
						<div class="form-group">
							<label for="mapel">Mata Pelajaran</label>
							<select class="form-control" id="mapel" name="mapel">
								@foreach($mataPelajaran as $mp)
									<option value="{{$mp->id}}">{{$mp->nama_mapel}}</option>
								@endforeach
							</select>
						</div>
					  <div class="form-group{{$errors->has('nilai')? 'has-error' : ''}}">
					    <label for="exampleInputEmail1">Nilai</label>
					    <input name="nilai" type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nilai" value="{{old('nilai')}}">
					    @if ($errors->has('nilai'))
					    	<span class="help-block">{{$errors->first('nilai')}}</span>
					    @endif
					  </div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('footer')
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script>
		Highcharts.chart('chartNilai', {
    chart: {
			type: 'column'
		},
		title: {
			text: 'Laporan Nilai Siswa'
		},
		xAxis: {
			categories: {!!json_encode($kategori)!!}, //echo spesial
			crosshair: true
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Nilai'
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		series: [{
			name: 'Nilai',
			data: {!!json_encode($data)!!}

		}]
	});

	$(document).ready(function() {
    	$('.nilai').editable();
	});
	</script>
	</body>
	</html>
@stop