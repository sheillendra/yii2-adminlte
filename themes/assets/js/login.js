var yii = yii || {};
yii.login = (function ($) {
    return {
        isActive: false,
        init: function () {
            $('input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        }
    };
})(jQuery);