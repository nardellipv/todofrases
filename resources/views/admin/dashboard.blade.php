@extends('layouts.main_admin')

@section('content')
    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Frases</h4>
                    <h3>{{ $phrase }}</h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-users"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Usuarios</h4>
                    <h3>{{ $user }}</h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        {{--<div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Sales</h4>
                    <h3>1,500</h3>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-4">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Orders</h4>
                    <h3>1,500</h3>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>--}}
        <div class="clearfix"></div>
    </div>

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Frases Ranking
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Frase</th>
                        <th>Votos</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rankings as $ranking)
                        <tr>
                            <td>{{ $ranking->phrase->text }}</td>
                            <td>{{ $ranking->vote }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-7 text-right text-center-xs">
                        {!! $rankings->render() !!}
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script data-cfasync='false' type='text/javascript' src='//p285918.clksite.com/adServe/banners?tid=285918_554159_0'></script>
@endsection