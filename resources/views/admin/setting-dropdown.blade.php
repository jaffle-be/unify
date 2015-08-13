<div class="form-group col-md-6">

    <label>{{ Lang::get('Unify::admin.' . $name) }}</label>

    <select class="form-control" ng-model="vm.{{$name}}" ng-options="{{$name}}.value for {{$name}} in vm.{{$name}}s" ng-change="vm.save('{{$name}}')"></select>

</div>