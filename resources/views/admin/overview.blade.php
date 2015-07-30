<div class="wrapper wrapper-content" ng-controller="UnifyController as vm">


    <div class="row">


        <div class="col-md-6">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('unify::admin.base-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    <div class="form-group">

                        <label>{{ Lang::get('unify::admin.header') }}</label>

                        <select class="form-control" ng-model="vm.header" ng-options="header.value for header in vm.headers" ng-change="vm.save('header')"></select>

                        {{--<select name="header" class="form-control" id="header">--}}
                        {{--@foreach ($header->options as $option)--}}
                        {{--<option value="{{ $option->id }}" {{ $header->value && $header->value->option_id == $option->id ? 'selected':'' }}>{{ $option->value }}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}}

                    </div>

                    <div class="form-group">

                        <label>{{ Lang::get('unify::admin.footer') }}</label>

                        <select class="form-control" ng-model="vm.footer" ng-options="footer.value for footer in vm.footers" ng-change="vm.save('footer')"></select>

                        {{--<select name="footer" class="form-control" id="footer">--}}
                        {{--@foreach ($footer->options as $option)--}}
                        {{--<option value="{{ $option->id }}" {{ $footer->value && $footer->value->option_id == $option->id ? 'selected':'' }}>{{ $option->value }}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}}

                    </div>

                </div>

            </div>

        </div>

    </div>


</div>