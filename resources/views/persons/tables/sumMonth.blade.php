<table id = "monthStat" align="center" style="border:1px solid black;">
	<thead>
		<tr>
			<th>№</th>
			<th>Месец</th>
			<th>Такса</th>
		</tr>
	</thead>

	<tbody>
		@foreach($sumMounths as $sumMounth)
		<tr>
			<td>{{ $loop->iteration }}</td>	
			<td>{{ $sumMounth->month }}</td>
			<td>{{ $sumMounth->sum }}</td>
		</tr>
		@endforeach
	</tbody>
</table>