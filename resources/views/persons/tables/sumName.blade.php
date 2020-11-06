<table class="table table-inverse" id="personStat" align="center" style="border:1px solid black;">
	<thead>
		<tr>
			<th>№</th>
			<th>Име</th>
			<th>Такса</th>
		</tr>
	</thead>

	<tbody>
		@foreach($sumNames as $sumName)
		<tr>
			<td>{{ $loop->iteration }}</td>	
			<td>{{ $sumName->name }}</td>
			<td>{{ $sumName->sum }}</td>
		</tr>
		@endforeach
	</tbody>
</table>