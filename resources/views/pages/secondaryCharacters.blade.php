@extends('template')

@section('content')
	<table style="width: 100%">
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
@endsection