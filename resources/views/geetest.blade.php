<script src="https://cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
<script src="https://static.geetest.com/static/tools/gt.js"></script>
<div id="{{ $captchaid }}"></div>
<p id="wait-{{ $captchaid }}" class="show">{{ Config::get('geetest.loading', '验证码正在加载中') }}</p>
<script>
    var geetest = function (url) {
        var handlerEmbed = function (captchaObj) {
            $("#{{ $captchaid }}").closest('form').submit(function (e) {
                var validate = captchaObj.getValidate();
                if (!validate) {
                    //Custom Dialog
                    e.preventDefault();
                } else {
                    //Custom Dialog
                }
            });
            captchaObj.appendTo("#{{ $captchaid }}");
            captchaObj.onReady(function () {
                $("#wait-{{ $captchaid }}")[0].className = "hide";
            });
            captchaObj.onSuccess(function () {
                //Custom Dialog
            });
            captchaObj.onError(function () {
                //Custom Dialog
            });
            if ('{{ Config::get('geetest.product', 'float')}}' == 'popup') {
                captchaObj.bindOn($('#{{ $captchaid }}').closest('form').find(':submit'));
                captchaObj.appendTo("#{{ $captchaid }}");
            }
        };
        $.ajax({
            url: url + "?t=" + (new Date()).getTime(),
            type: "get",
            dataType: "json",
            success: function (data) {
                initGeetest({
                    gt: data.gt,
                    challenge: data.challenge,
                    offline: !data.success,
                    new_captcha: data.new_captcha,
                    product: "{{ Config::get('geetest.product', 'float')}}",
                    width: '{{ Config::get('geetest.width', '300px') }}',
                    lang: '{{ Config::get('geetest.lang', 'zh-cn') }}',
                    http: '{{ Config::get('geetest.protocol', 'https') }}' + '://'
                }, handlerEmbed);
            }
        });
    };
    (function () {
        geetest('{{Config::get('geetest.url', 'geetest')}}');
    })();
</script>
<style>
    .hide {
        display: none;
    }
</style>
