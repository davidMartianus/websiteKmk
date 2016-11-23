@extends('/admin/navbar')
@section('content')
<div class="container-fluid" id="table-dashboard">	
	<h4>Event</h4>
	<table class="table table-responsive table-bordered">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Glaroma</th>
				<th>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</th>
				<th><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>&nbsp;<button type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></button></th>
			</tr>

			<tr>
				<th>Kaderisasi</th>
				<th>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</th>
				<th><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>&nbsp;<button type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></button></th>
			</tr>
		</tbody>
	</table>
</div>
@endsection