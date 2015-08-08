<div class="wrapper wrapper-content" ng-controller="UnifyController as vm">


    <div class="row">


        <div class="col-md-6 col-lg-3 col-xs-12">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.base-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    @include('Unify::admin.setting-dropdown', ['name' => 'header'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'footer'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'breadcrumbs'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'pagination'])

                </div>

            </div>

        </div>


        <div class="col-md-6 col-lg-3 col-xs-12">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.blog-layout') }}</h5>
                </div>

                <div class="ibox-content">
                    @include('Unify::admin.setting-dropdown', ['name' => 'blogOverview'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'blogDetail'])
                </div>

            </div>
        </div>


        <div class="col-md-6 col-lg-3 col-xs-12">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.contact-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    @include('Unify::admin.setting-dropdown', ['name' => 'contactLayout'])

                </div>

            </div>
        </div>

        <div class="col-md-6 col-lg-3 col-xs-12">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.team-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    @include('Unify::admin.setting-dropdown', ['name' => 'teamOverview'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'teamDetail'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'teamHiring'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'teamHireMe'])

                </div>

            </div>
        </div>


    </div>


</div>