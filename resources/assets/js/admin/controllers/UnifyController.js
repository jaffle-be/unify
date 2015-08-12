angular.module('theme-active')
    .controller('UnifyController', function (ThemeService) {
        var me = this;

        ThemeService.current(function (theme) {
            me.theme = theme;
            me.setSelectValue('header');
            me.setSelectValue('footer');
            me.setStringValue('footerPostsTitle');
            me.setStringValue('footerLinksTitle');
            me.setStringValue('footerTweetsTitle');
            me.setStringValue('footerContactTitle');
            me.setStringValue('footerSocialIconsTitle');
            me.setStringValue('footerAboutTitle');
            me.setStringValue('footerAboutText');
            me.setStringValue('footerNewsletterTitle');
            me.setStringValue('footerNewsletterText');
            me.setSelectValue('breadcrumbs');
            me.setSelectValue('pagination');
            me.setSelectValue('blogOverview');
            me.setSelectValue('blogDetail');
            me.setSelectValue('contactLayout');
            me.setSelectValue('teamOverview');
            me.setSelectValue('teamDetail');
            me.setCheckbox('teamHiring');
            me.setCheckbox('teamHireMe');
            me.setSelectValue('portfolioColumns');
            me.setCheckbox('portfolioGrid');
            me.setCheckbox('portfolioSpaced');
        });

        this.save = function (setting) {
            var settingObject = me.theme.settings[setting];

            if (settingObject.boolean)
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

    });