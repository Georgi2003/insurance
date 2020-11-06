<!DOCTYPE html>
<html>
<link rel = "stylesheet" href = "{{ asset('css/dropdown.css') }}"></link>
<!-- <link rel = "stylesheet" href = "{{ asset('css/app.css') }}"></link> -->
<style>
	body
	{
		text-align: center;
	}
</style>
<head>
	<title></title>
</head>
<body>
	<h1>Формули</h1>
	<br>
	<table align="center" style="border:1px solid black;">
		<thead>
			<tr>
				<th>№</th>
				<th>Име</th>
				<th>Възраст</th>
				<th>Телефон</th>
				<th>Месечна такса</th>
				<th>Месец</th>
			</tr>
		</thead>

		<tbody>
			@foreach($allPersons as $persons)
			<tr>
				<td>{{ $loop->iteration }}</td>	
				<td>{{ $persons->name }}</td>
				<td>{{ $persons->age }}</td>
				<td>{{ $persons->phone }}</td>
				<td>{{ $persons->monthly_fee }}</td>
				<td>{{ $persons->month }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<br>
	@include('persons.create')
</body>
</html>