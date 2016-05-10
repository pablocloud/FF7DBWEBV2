@extends('template')

@section('title')
	@lang('main.secondaryCharacters')
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<table id="table" class="table table-responsive table-bordered table-striped table-hover">
					<thead>
					<tr>
						<th>@lang('characters.name')</th>
						<th>@lang('characters.ocupation')</th>
						<th>@lang('characters.birthDate')</th>
						<th>@lang('characters.birthPlace')</th>
					</tr>
					</thead>
					<tbody>
					@forelse($secondaryCharacters as $secondaryCharacter)
						<tr>
							<td>{{$secondaryCharacter->nombre}}</td>
							<td>{{$secondaryCharacter->ocupacion}}</td>
							<td>{{$secondaryCharacter->fechana}}</td>
							<td>{{$secondaryCharacter->lugarna}}</td>
						</tr>
					@empty
						<tr>
							<td>@lang('shared.empty')</td>
							<td>@lang('shared.empty')</td>
							<td>@lang('shared.empty')</td>
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
				'language': {
					'url' : '{{asset('assets/datatables-spanish.json')}}'
				}
			});
		})
		;
	</script>
@endsection