<form method="post" action="/persons" enctype="multipart/form-data">
	@csrf
	<input type="file" id="file" accept=".csv" name="file" required>
	<div class="dropdown">
		<button onclick="myFunction()" class="dropbtn">Месец</button>
		<div id="myDropdown" class="dropdown-content">
			<input type="text" placeholder="Търсене..." id="myInput" onkeyup="filterFunction()">		
			<div> 
				<a>
					@include('persons.dropInput')
				</a>
			</div>
		</div>
	</div>
	<input type="submit" value="Качи файл">
</form>
<script src = "{{ asset('js/dropdown.js') }}"></script>