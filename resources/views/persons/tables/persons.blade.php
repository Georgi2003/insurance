<h1>Такси</h1>
	<br>
	<table id = "statistics" align="center" style="border:1px solid black;">
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