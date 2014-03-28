{{ Form::open(array('url'=>$url)) }}
	Soal<br>
	@if(@$data)
		<input type="hidden" name="id" value="{{ $data->id }}">
	@endif
	<textarea name="soal" style="width:500px; height:100px;">{{ @$data->soal }}</textarea><br>
	<textarea name="a" placeholder="A" style="width:500px; height:100px;">{{ @$data->a }}</textarea><br>
	<textarea name="b" placeholder="B" style="width:500px; height:100px;">{{ @$data->b }}</textarea><br>
	<textarea name="c" placeholder="C" style="width:500px; height:100px;">{{ @$data->c }}</textarea><br>
	<textarea name="d" placeholder="D" style="width:500px; height:100px;">{{ @$data->d }}</textarea><br>
	<textarea name="e" placeholder="E" style="width:500px; height:100px;">{{ @$data->e }}</textarea><br>
	<textarea name="jwb" placeholder="JAWABAN" style="width:500px; height:100px;">{{ @$data->jwb }}</textarea>
	<a href="{{ URL::to('soal') }}">batal</a>
	<input type="submit" value="simpan">
{{ Form::close() }}