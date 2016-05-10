@extends('template')

@section('content')
	<table style="width: 100%">
		<thead>
		<tr>
			<th>@lang('materia.type')</th>
			<th>@lang('materia.name')</th>
			<th>@lang('materia.description')</th>
		</tr>
		</thead>
		<tbody>
		@forelse($materia as $mater)
			<tr>
				<td>{{$mater->tipo}}</td>
				<td>{{$mater->nombre}}</td>
				<td>{{$mater->descripcion}}</td>
			</tr>
		@empty
			<tr>
				<td>@lang('shared.empty')</td>
				<td>@lang('shared.empty')</td>
				<td>@lang('shared.empty')</td>
			</tr>
		@endforelse
		</tbody>
	</table>
@endsection