@extends('template')

@section('content')
	<table style="width: 100%">
		<thead>
		<tr>
			<th>@lang('items.name')</th>
			<th>@lang('items.description')</th>
		</tr>
		</thead>
		<tbody>
		@forelse($items as $item)
			<tr>
				<td>{{$item->nombre}}</td>
				<td>{{$item->descripcion}}</td>
			</tr>
		@empty
			<tr>
				<td>@lang('shared.empty')</td>
				<td>@lang('shared.empty')</td>
			</tr>
		@endforelse
		</tbody>
	</table>
@endsection