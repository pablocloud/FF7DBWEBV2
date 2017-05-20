@extends('template')

@section('title')
    @lang('main.weapons')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table id="table" class="table table-responsive table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>@lang('weapons.name')</th>
                        <th>@lang('weapons.attack')</th>
                        <th>@lang('weapons.hit')</th>
                        <th>@lang('weapons.growth')</th>
                        <th>@lang('weapons.location')</th>
                        <th>@lang('weapons.cost')</th>
                        <th>@lang('weapons.notes')</th>
                        <th>@lang('weapons.character')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($weapons as $weapon)
                        <tr>
                            <td>{{$weapon->nombre}}</td>
                            <td>{{$weapon->ataque}}</td>
                            <td>{{$weapon->golpe}}</td>
                            <td>{{$weapon->materia9}}</td>
                            <td>{{$weapon->localizacion}}</td>
                            <td>{{$weapon->coste}}</td>
                            <td>{{$weapon->notas}}</td>
                            <td>{{$weapon->equipadopor}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>@lang('shared.empty')</td>
                            <td>@lang('shared.empty')</td>
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