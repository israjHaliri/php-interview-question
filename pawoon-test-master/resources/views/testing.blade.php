<!DOCTYPE html>
<html>
<head>
	<title>Pawoon Test</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<section class="container">
		<section>
			<div class="col-md-12"><h4>Form Registrasi</h4></div>
			{{ Form::open(array('route' => 'insert','id' => "form_registrasi")) }}
			<div class="form-group">
				<label>ID :</label>
				{{ Form::text('uuid' , '', array('class'=>'form-control uuid','readonly')) }}
			</div>
			<div class="form-group">
				<label>name :</label>
				{{ Form::text('nama' , '', array('class'=>'form-control')) }}
			</div>
			<div class="form-group">
				<label>alamat :</label>
				{{ Form::text('alamat' , '', array('class'=>'form-control')) }}
			</div>
			<div class="form-group" align="center">
				{{ Form::submit('Submit', array('class'=>'btn btn-success')) }}
			</div>
			{{ Form::close() }}
		</section>
		<section>
			<div class="col-md-12"><h4>Daftar User</h4></div>
			<div class="col-md-12">
				<table id="table-register" class="table table-bordered">
					<thead>
						<tr>
							<td>ID Customer</td>
							<td>Nama</td>
							<td>Alamat</td>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			<div class="col-md-12">
				<button id="reload" class="btn btn-success">Reload</button>
			</div>
		</section>
	</section>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

	$( document ).ready(function() {
		$.ajax({
			url:"load",
			type: 'GET',
			dataType: "json",
			success: function(data){
				console.log(data);
				var ret_value = "";
				$("table tbody").empty();

				$.each(data.list_data , function(i,val){
					ret_value += "<tr>"+
					"<td>"+val.uuid+"</td>"+
					"<td>"+val.nama+"</td>"+
					"<td>"+val.alamat+"</td>"+
					"</tr>";

				});
				$("table tbody").append(ret_value);	
				$(".uuid").val(data.myStr);
			}
		});
	});


	$( "#reload" ).click(function() {
		$.ajax({
			url:"load",
			type: 'GET',
			dataType: "json",
			success: function(data){
				var ret_value = "";
				$("table tbody").empty();

				$.each(data.list_data , function(i,val){
					ret_value += "<tr>"+
					"<td>"+val.uuid+"</td>"+
					"<td>"+val.nama+"</td>"+
					"<td>"+val.alamat+"</td>"+
					"</tr>";

				});
				$("table tbody").append(ret_value);		
				$(".uuid").val(data.myStr);
			}
		});
	});

	$( "#form_registrasi" ).submit(function( event ) {
		var form = $(this);
		var url = form.prop('action');
		$.ajax({
			url:url,
			data:form.serialize(),
			type: 'POST',
			dataType: "text",
			success: function(response){
				console.log(response);
				alert(response);
				$( "#reload" ).trigger( "click" );
			}
		});
		event.preventDefault();
	});
</script>
</html>

