<div class="row wrapper-content" ng-controller="UnifyController as vm" ng-init="vm.options = {{ system_options() }}">

    @include('system::admin.locale-tabs')

    <div class="ibox">

        <div class="ibox-tabs">

            <tabset>

                @foreach($theme->settings->byModule() as $module => $group)
                    <tab heading="{{ $module }}">

                        <div class="ibox-content">

                            @foreach($group as $setting)

                                @include('Unify::admin.setting-' . $setting->type->name, ['name' => $setting->key])

                            @endforeach


                            <div class="clearfix"></div>

                        </div>
                    </tab>
                @endforeach

            </tabset>
        </div>

    </div>

</div>