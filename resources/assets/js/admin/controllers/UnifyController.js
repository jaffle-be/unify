angular.module('theme-active')
    .controller('UnifyController', function (ThemeService) {
        var me = this;

        ThemeService.current(function (theme) {
            me.theme = theme;

            _.each(me.theme.settings, function(setting){
                var type = setting.type.name;

                if(type == 'select')
                {
                    me.setSelectValue(setting.key);
                }
                else if(type == 'boolean')
                {
                    me.setCheckbox(setting.key);
                }
                else if(type == 'string' || type == 'text')
                {
                    me.setStringValue(setting.key);
                }
                else if(type == 'numeric')
                {
                    me.setNumeric(setting.key);
                }
            });

        });

        this.save = function (setting) {
            var settingObject = me.theme.settings[setting];

            if (settingObject.type.name == 'boolean')
            {
                ThemeService.saveCheckbox(me.theme, settingObject, settingObject.value)
            }
            else
            {
                ThemeService.saveSelect(me.theme, settingObject, me[setting]);
            }
        };

        this.delayedSave = function(setting)
        {
            var settingObject = me.theme.settings[setting];

            ThemeService.delayedSave(me.theme, settingObject, me[setting]);
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

        this.setStringValue = function (control) {
            var value = me.theme.settings[control].value ?
                me.theme.settings[control].value : {translations: {}};

            me[control] = me.theme.settings[control].value;
        }

        this.setNumeric = function(numeric)
        {
            me[numeric] = me.theme.settings[numeric].value;
        }

    });