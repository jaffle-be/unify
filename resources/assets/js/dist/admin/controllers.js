angular.module('theme-active')
    .controller('UnifyController', function (ThemeService) {
        var me = this;

        ThemeService.current(function (theme) {
            me.theme = theme;
            me.setSelectValue('header');
            me.setSelectValue('footer');
            me.setSelectValue('blogOverview');
            me.setSelectValue('blogDetail');
            me.setSelectValue('contactLayout');
        });


        this.save = function (setting) {

            ThemeService.saveSetting(me.theme, me[setting]);

        };

        this.setSelectValue = function (select) {
            var list = select + 's';

            me[list] = me.theme.settings[select].options;

            list = me[list];

            if (me.theme.settings[select].value)
            {
                _.each(list, function (option) {
                    if (option.id == me.theme.settings[select].value.option_id)
                    {
                        me[select] = option;
                    }
                });
            }
        };

        //Theme.show(function(theme)
        //{
        //    me.theme = theme
        //});

    });