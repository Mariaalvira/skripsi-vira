<!DOCTYPE html>
<html>
<head>
	<title>Edit File</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">Edit File</a></h2>
	<h3>Edit Sakramen</h3>

	<a href="/sakramen">Kembali</a>

	<br/>
	<br/>

	@foreach($sakramen as $p)
	<form action="/sakramen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->sakramen_id }}"> <br/>
	</form>
	@endforeach

	
</body>
</html>