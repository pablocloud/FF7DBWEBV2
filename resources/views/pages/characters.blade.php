@extends('template')

@section('title')
    @lang('main.characters')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table id="table" class="table table-responsive table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>@lang('characters.img')</th>
                        <th>@lang('characters.name')</th>
                        <th>@lang('characters.age')</th>
                        <th>@lang('characters.ocupation')</th>
                        <th>@lang('characters.weapon')</th>
                        <th>@lang('characters.birthDate')</th>
                        <th>@lang('characters.birthPlace')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($characters as $character)
                        <tr>
                            <td><img width="100%" src="{{asset('assets/'.$character->imagen)}}"/></td>
                            <td>{{$character->nombre}}</td>
                            <td>{{$character->edad}}</td>
                            <td>{{$character->ocupacion}}</td>
                            <td>{{$character->arma}}</td>
                            <td>{{$character->fechana}}</td>
                            <td>{{$character->lugarna}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>@lang('shared.empty')</td>
                            <td>@lang('shared.empty')</td>
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