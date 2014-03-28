@extends('layout/main')

@section('title')
	Form Tambah Soal - Administrator - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<h1>Data Soal</h1>
		<a href="{{ URL::to($logout) }}" data-icon="back" data-ajax="false" title="logout">Logout</a>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
	@if($errors->has())
				    <div class="alert alert-danger fade in">
				        <center><span class="fa fa-warning"></span>&nbsp; <b>{{ $errors->first() }}</b></center>
				    </div>
				@endif
				<?php
				    $true=Session::get('true');
				    $false=Session::get('false');
				?>
				@if(@$true)
				    <div class="alert alert-success fade in">
				        <center><span class="fa fa-check"></span>&nbsp; <b>{{ $true }}</b></center>
				    </div>
				@elseif(@$false)
				    <div class="alert alert-danger fade in">
				        <center><span class="fa fa-warning"></span>&nbsp; <b>{{ $false }}</b></center>
				    </div>
				@endif
		<table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke table table-bordered">
			<thead>
				<tr>
					<th data-priority="2">No</th>
					<th data-priority="2">Soal</th>
					<th data-priority="2">Opsi A</th>
					<th data-priority="2">Opsi B</th>
					<th data-priority="2">Opsi C</th>
					<th data-priority="2">Opsi D</th>
					<th data-priority="2">Opsi E</th>
					<th data-priority="2">Jawaban</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=$data->getFrom(); ?>
				@foreach($data as $dt)
					<tr>
						<td>{{ $no }}</td>
						<td>{{ $dt->soal }}</td>
						<td>{{ $dt->a }}</td>
						<td>{{ $dt->b }}</td>
						<td>{{ $dt->c }}</td>
						<td>{{ $dt->d }}</td>
						<td>{{ $dt->e }}</td>
						<td>{{ ucfirst($dt->jwb) }}</td>
						<td>
							<a href="{{ URL::to($pre.'/edit-soal/'.$dt->id) }}" data-ajax="false" title="edit soal"><i class="fa fa-pencil"></i></a>
							<a href="{{ URL::to($pre.'/delete-soal/'.$dt->id) }}" data-ajax="false" id="remove" title='delete soal'><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<?php $no++; ?>
				@endforeach
			</tbody>
		</table>

	</div>
	{{ $data->links() }}
	@include('admin/menu')
@stop

@section('js')
	$('table tbody tr td').on('click','#remove',function()
	{
		if(confirm('yakin hapus ??'))
		{
			return true;
		}
		else
		{
			return false;
		}
	});
@stop