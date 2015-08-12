<div class="form-group">
    <label>{{ Lang::get('Unify::admin.' . $name) }}</label>

    <textarea class="form-control" ng-model="vm.{{$name}}.translations[vm.options.locale].text" ng-change="vm.delayedSave('{{$name}}')"></textarea>
</div>