@extends('template')

@section('content')
	<table style="width: 100%">
		<thead>
		<tr>
			<th>@lang('songs.name')</th>
			<th>@lang('songs.url')</th>
		</tr>
		</thead>
		<tbody>
		@forelse($songs as $song)
			<tr>
				<td>{{$song->nombre}}</td>
				<td>{{$song->mp3}}</td>
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