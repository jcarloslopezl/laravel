@extends("layout")

@section('content')
    <div class="container-fluid" ng-app="">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('users.title')</div>
                    <div class="panel-body">
                        @include('partials/errors')

                        <form class="form-horizontal" role="form" method="POST" action="">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Buscar:</label>
                                <div class="col-md-6">
                                    <input name="buscar" type="text" value="" class="form-control">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection