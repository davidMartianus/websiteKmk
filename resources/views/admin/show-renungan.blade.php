@extends('/admin/navbar')
@section('content')
<div class="container-fluid" id="table-dashboard">	
	<header class="clearfix">
		<h3 class="page_title pull-left">List Renungan</h3>
		<a href="/admin/tulis-event" class="btn btn-xs btn-primary pull-right">Tulis Renungan Baru</a>
	</header>

	<div class="content-inner">
		<div class="row search-row">
			<div class="col-md-12">
				<div class="input-group">
					<input type="text" name="cari-renungan" class="form-control search-field" id="inputCari" placeholder="Cari...">
					<span class="input-group-btn">
						<button type="button" class="btn btn-primary cari">Cari</button>
					</span>
				</div>
			</div>
		</div>

		<div class="row article-row">
			<!--div class="col-md-1">
				<span class="label label-success">Active</span>
			</div-->

			<div class="col-md-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<small>Created 11 November 2016</small>
			</div>

			<div class="col-md-4">
				<div class="article-actions pull-right">
					<a class="btn btn-xs btn-default" href="#" role="button">
						<span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;Lihat</span>
					</a>

					<a class="btn btn-xs btn-default" href="#" role="button">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Edit</span>
					</a>

					<a class="btn btn-xs btn-default" href="#" role="button">
						<span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Hapus</span>
					</a>
				</div>
			</div>
		</div>

		<hr>
	</div>
	
</div>
@endsection