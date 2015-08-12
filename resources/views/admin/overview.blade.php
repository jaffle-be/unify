<div class="wrapper wrapper-content" ng-controller="UnifyController as vm" ng-init="vm.options = {{ system_options() }}">

    <tabset>

        <tab ng-repeat="locale in vm.options.locales" heading="@{{ locale.locale }}" active="vm.options.locales[locale.locale].active" select="vm.options.locale = locale.locale">

        </tab>
    </tabset>

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

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.text-customisations') }}</h5>
                </div>

                <div class="ibox-content">
                    @include('Unify::admin.setting-string', ['name' => 'footerContactTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerLinksTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerPostsTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerTweetsTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerSocialIconsTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerAboutTitle'])
                    @include('Unify::admin.setting-text', ['name' => 'footerAboutText'])
                    @include('Unify::admin.setting-string', ['name' => 'footerNewsletterTitle'])
                    @include('Unify::admin.setting-text', ['name' => 'footerNewsletterText'])
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
                    @include('Unify::admin.setting-string', ['name' => 'contactContactTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'contactWidgetTitle'])
                    @include('Unify::admin.setting-text', ['name' => 'contactWidgetText'])
                    @include('Unify::admin.setting-string', ['name' => 'contactFormTitle'])
                    @include('Unify::admin.setting-text', ['name' => 'contactFormText'])

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

        <div class="col-md-6 col-lg-3 col-xs-12">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.team-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    @include('Unify::admin.setting-dropdown', ['name' => 'portfolioColumns'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'portfolioGrid'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'portfolioSpaced'])

                </div>

            </div>
        </div>


    </div>


</div>