<div class="form-group col-md-6">
    <input type="checkbox" class="filled-in" id="{{ $name }}" ng-model="vm.{{$name}}.value" ng-change="vm.save('{{$name}}')"/>
    <label for="{{ $name }}">{{ Lang::get('Unify::admin.' . $name) }}</label>
</div>