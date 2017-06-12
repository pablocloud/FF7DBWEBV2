@extends('template')

@section('title')
    @lang('main.materia')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table id="table" class="table table-responsive table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>@lang('materia.type')</th>
                        <th>@lang('materia.name')</th>
                        <th>@lang('materia.description')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($materia as $mater)
                        @if($mater->tipo === 'Apoyo' || $mater->tipo === 'Support')
                            <tr style="background-color: #0bc7ff">
                        @elseif($mater->tipo === 'Comando' || $mater->tipo === 'Command')
                            <tr style="background-color: #fffd00">
                        @elseif($mater->tipo === 'Independiente' || $mater->tipo === 'Independent')
                            <tr style="background-color: #ff7cd1">
                        @elseif($mater->tipo === 'Invocacion' || $mater->tipo === 'Summon')
                            <tr style="background-color: #ff4b44">
                        @elseif($mater->tipo === 'Magia' || $mater->tipo === 'Magic')
                            <tr style="background-color: #7bff66">
                        @else
                            <tr>
                                @endif

                                <td>
                                    {{$mater->tipo}}
                                </td>
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