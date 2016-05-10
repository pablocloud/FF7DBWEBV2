@extends('template')

@section('title')
	@lang('main.enemies')
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<table id="table" class="table table-responsive table-bordered table-striped table-hover">
					<thead>
					<tr>
						<th>@lang('enemies.img')</th>
						<th>@lang('enemies.name')</th>
						<th>@lang('enemies.level')</th>
						<th>@lang('enemies.pg')</th>
						<th>@lang('enemies.mp')</th>
						<th>@lang('enemies.exp')</th>
						<th>@lang('enemies.ap')</th>
						<th>@lang('enemies.gil')</th>
						<th>@lang('enemies.weak')</th>
						<th>@lang('enemies.strong')</th>
						<th>@lang('enemies.drains')</th>
						<th>@lang('enemies.immune')</th>
					</tr>
					</thead>
					<tbody>
					@forelse($enemies as $enemy)
						<tr>
							<td>{{$enemy->imagen}}</td>
							<td>{{$enemy->nombre}}</td>
							<td>{{$enemy->nivel}}</td>
							<td>{{$enemy->pg}}</td>
							<td>{{$enemy->mp}}</td>
							<td>{{$enemy->exp}}</td>
							<td>{{$enemy->ap}}</td>
							<td>{{$enemy->gil}}</td>
							<td>{{$enemy->debil}}</td>
							<td>{{$enemy->fuerte}}</td>
							<td>{{$enemy->absorve}}</td>
							<td>{{$enemy->inmune}}</td>
						</tr>
					@empty
						<tr>
							<td>@lang('shared.empty')</td>
						</tr>
					@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	<script>
		$(document).ready(function () {
			$('#table').DataTable({
				@if(Session::get('lang') == 'es')
				'language': {
					'url': '{{asset('assets/datatables-spanish.json')}}'
				}
				@endif
			});
		})
		;
	</script>
@endsection