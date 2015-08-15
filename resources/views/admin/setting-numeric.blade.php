<div class="form-group col-xs-12">
    <label>{{ Lang::get('Unify::admin.' . $name) }}</label>

    <input type="text" class="form-control" ng-model="vm.{{$name}}.value" ng-change="vm.delayedSave('{{$name}}')">
</div>