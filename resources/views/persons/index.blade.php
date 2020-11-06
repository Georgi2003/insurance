<!DOCTYPE html>
<html>
<link rel = "stylesheet" href = "{{ asset('css/dropdown.css') }}"></link>
<!-- <link rel = "stylesheet" href = "{{ asset('css/app.css') }}"></link> -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
	<button id="statisticsTable">Обща статистика</button>
	<button id="monthStatistics">Месечна статистика</button>
	<button id="personStatistics">Статистика по хора</button>

	@include('persons.tables.persons')
	<br>
	@include('persons.create')
	<br>
	@include('persons.tables.sumMonth')
	<br>
	@include('persons.tables.sumName')
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src = "{{ asset('js/table.js') }}"></script>
</html>