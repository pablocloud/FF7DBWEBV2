@extends('template')

@section('title')
    @lang('main.items')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table id="table" class="table table-responsive table-bordered table-striped table-hover">
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