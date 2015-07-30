angular.module('theme-active')
    .controller('UnifyController', function (ThemeService) {
        var me = this;

        ThemeService.current(function (theme) {
            me.theme = theme;
            me.headers = theme.settings.header.options;
            me.footers = theme.settings.footer.options;

            me.setSelectValue('header');
            me.setSelectValue('footer');
        });


        this.save = function (setting) {

            ThemeService.saveSetting(me.theme, me[setting]);

        };

        this.setSelectValue = function(select)
        {
            var list = select + 's';

            list = me[list];

            if(me.theme.settings[select].value)
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