<div class="wrapper wrapper-content" ng-controller="UnifyController as vm">


    <div class="row">


        <div class="col-md-6">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.base-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    <div class="form-group">

                        <label>{{ Lang::get('Unify::admin.header') }}</label>

                        <select class="form-control" ng-model="vm.header" ng-options="header.value for header in vm.headers" ng-change="vm.save('header')"></select>

                    </div>

                    <div class="form-group">

                        <label>{{ Lang::get('Unify::admin.footer') }}</label>

                        <select class="form-control" ng-model="vm.footer" ng-options="footer.value for footer in vm.footers" ng-change="vm.save('footer')"></select>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-md-6">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.blog-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    <div class="form-group">

                        <label>{{ Lang::get('Unify::admin.blogOverview') }}</label>

                        <select class="form-control" ng-model="vm.blogOverview" ng-options="blogOverview.value for blogOverview in vm.blogOverviews" ng-change="vm.save('blogOverview')"></select>

                    </div>

                    <div class="form-group">

                        <label>{{ Lang::get('Unify::admin.blogDetail') }}</label>

                        <select class="form-control" ng-model="vm.blogDetail" ng-options="blogDetail.value for blogDetail in vm.blogDetails" ng-change="vm.save('blogDetail')"></select>

                    </div>

                </div>

            </div>
        </div>


        <div class="col-md-6">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.contact-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    <div class="form-group">

                        <label>{{ Lang::get('Unify::admin.contactLayout') }}</label>

                        <select class="form-control" ng-model="vm.contactLayout" ng-options="contactLayout.value for contactLayout in vm.contactLayouts" ng-change="vm.save('contactLayout')"></select>

                    </div>

                </div>

            </div>
        </div>

    </div>


</div>