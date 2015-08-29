<div class="form-group col-xs-12 col-md-6">
    <label>{{ $name }}</label>

    <textarea class="form-control" ng-model="vm.{{$name}}.translations[vm.options.locale].text" ng-change="vm.delayedSave('{{$name}}')"></textarea>
</div>