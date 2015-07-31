angular.module('theme-active', [])
    .config(function ($stateProvider) {

        $stateProvider
            .state('admin.theme.Unify', {
                url: "/unify",
                templateUrl: "templates/admin/theme/unify"
            });
    });