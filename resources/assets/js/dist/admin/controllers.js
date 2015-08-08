angular.module('theme-active')
    .controller('UnifyController', function (ThemeService) {
        var me = this;

        ThemeService.current(function (theme) {
            me.theme = theme;
            me.setSelectValue('header');
            me.setSelectValue('footer');
            me.setSelectValue('breadcrumbs');
            me.setSelectValue('pagination');
            me.setSelectValue('blogOverview');
            me.setSelectValue('blogDetail');
            me.setSelectValue('contactLayout');
            me.setSelectValue('teamOverview');
            me.setSelectValue('teamDetail');
            me.setCheckbox('teamHiring');
            me.setCheckbox('teamHireMe');
        });

        this.save = function (setting) {
            var settingObject = me.theme.settings[setting];

            if(settingObject.boolean)
            {
                ThemeService.saveCheckbox(me.theme, settingObject, settingObject.value)
            }
            else{
                ThemeService.saveSelect(me.theme, settingObject, me[setting]);
            }
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

        this.setCheckbox = function (checkbox) {
            me[checkbox] = me.theme.settings[checkbox];
        };

    });