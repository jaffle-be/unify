<div class="wrapper wrapper-content" ng-controller="UnifyController as vm" ng-init="vm.options = {{ system_options() }}">

    <tabset>

        <tab ng-repeat="locale in vm.options.locales" heading="@{{ locale.locale }}" active="vm.options.locales[locale.locale].active" select="vm.options.locale = locale.locale">

        </tab>
    </tabset>


    <tabset>

        <tab heading="test"></tab>
        <tab heading="test"></tab>
        <tab heading="test"></tab>
        <tab heading="test"></tab>
    </tabset>


    <div class="row">

        <div class="col-xs-12 col-md-6">
            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.base-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    @include('Unify::admin.setting-dropdown', ['name' => 'header'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'footer'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'breadcrumbs'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'pagination'])

                    @include('Unify::admin.setting-string', ['name' => 'footerContactTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerLinksTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerPostsTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerTweetsTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerSocialIconsTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'footerAboutTitle'])
                    @include('Unify::admin.setting-text', ['name' => 'footerAboutText'])
                    @include('Unify::admin.setting-string', ['name' => 'footerNewsletterTitle'])
                    @include('Unify::admin.setting-text', ['name' => 'footerNewsletterText'])

                    <div class="clearfix"></div>
                </div>

            </div>

        </div>



        <div class="col-xs-12 col-md-6">

            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.blog-layout') }}</h5>
                </div>

                <div class="ibox-content">
                    @include('Unify::admin.setting-dropdown', ['name' => 'blogOverview'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'blogDetail'])
                    @include('Unify::admin.setting-string', ['name' => 'blogMainTitleDetail'])
                    @include('Unify::admin.setting-string', ['name' => 'blogMainTitleOverview'])

                    <div class="clearfix"></div>
                </div>

            </div>

        </div>


        <div class="col-xs-12 col-md-6">
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
                    @include('Unify::admin.setting-string', ['name' => 'contactHoursTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'contactMainTitle'])

                    <div class="clearfix"></div>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.team-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    @include('Unify::admin.setting-dropdown', ['name' => 'teamOverview'])
                    @include('Unify::admin.setting-dropdown', ['name' => 'teamDetail'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'teamHiring'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'teamHireMe'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'teamLightQuote'])
                    @include('Unify::admin.setting-string', ['name' => 'teamMemberCounterLabel1'])
                    @include('Unify::admin.setting-numeric', ['name' => 'teamMemberCounterValue1'])
                    @include('Unify::admin.setting-string', ['name' => 'teamMemberCounterLabel2'])
                    @include('Unify::admin.setting-numeric', ['name' => 'teamMemberCounterValue2'])
                    @include('Unify::admin.setting-string', ['name' => 'teamMemberCounterLabel3'])
                    @include('Unify::admin.setting-numeric', ['name' => 'teamMemberCounterValue3'])
                    @include('Unify::admin.setting-string', ['name' => 'teamMemberCounterLabel4'])
                    @include('Unify::admin.setting-numeric', ['name' => 'teamMemberCounterValue4'])
                    @include('Unify::admin.setting-string', ['name' => 'teamAboutMemberMainTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'teamAboutTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'teamMemberAboutTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'teamMemberPortfolioText'])
                    @include('Unify::admin.setting-string', ['name' => 'teamMemberPortfolioTitle'])
                    @include('Unify::admin.setting-string', ['name' => 'teamMemberSkillsTitle'])

                    <div class="clearfix"></div>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.portfolio-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    @include('Unify::admin.setting-dropdown', ['name' => 'portfolioColumns'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'portfolioGrid'])
                    @include('Unify::admin.setting-checkbox', ['name' => 'portfolioSpaced'])

                    @include('Unify::admin.setting-string', ['name' => 'portfolioMainTitleDetail'])
                    @include('Unify::admin.setting-string', ['name' => 'portfolioMainTitleOverview'])
                    @include('Unify::admin.setting-string', ['name' => 'portfolioProjectDescription'])
                    @include('Unify::admin.setting-string', ['name' => 'portfolioProjectDetails'])

                    <div class="clearfix"></div>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="ibox">

                <div class="ibox-title">
                    <h5>{{ Lang::get('Unify::admin.widgets-layout') }}</h5>
                </div>

                <div class="ibox-content">

                    @include('Unify::admin.setting-string', ['name' => 'widgetOurClientsTitle'])

                    <div class="clearfix"></div>
                </div>

            </div>
        </div>



    </div>



</div>