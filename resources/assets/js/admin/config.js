angular.module('theme-active', [])
    .config(function ($stateProvider) {

        $stateProvider
            .state('admin.theme.unify', {
                url: "/unify",
                templateUrl: "templates/admin/theme/unify"
            });
    });