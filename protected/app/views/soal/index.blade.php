<?php
$true=Session::get('true');
$false=Session::get('false');
?>
@if($true)
	{{ $true }}<br>
@elseif($false)
	{{ $false }}<br>
@endif
<a href="{{ URL::to('soal/form') }}">tambah</a>
<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Soal</th>
			<th>A</th>
			<th>B</th>
			<th>C</th>
			<th>D</th>
			<th>E</th>
			<th>Jawab</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach($data as $dt)
			<tr>
				<td>{{ $no }}</td>
				<td>{{ $dt->soal }}</td>
				<td>{{ $dt->a }}</td>
				<td>{{ $dt->b }}</td>
				<td>{{ $dt->c }}</td>
				<td>{{ $dt->d }}</td>
				<td>{{ $dt->e }}</td>
				<td>{{ $dt->jwb }}</td>
				<td>
					<a href="{{ URL::to('soal/hapus/'.$dt->id) }}">hapus</a>
					<a href="{{ URL::to('soal/edit/'.$dt->id) }}">edit</a>
				</td>
			</tr>
			<?php
			$no++;
			?>
		@endforeach
	</tbody>
</thead>