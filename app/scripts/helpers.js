/***************************************************
Description: Các hàm tiện ích
****************************************************/
Object.defineProperty(String.prototype, 'format', {
    value: function () {
        var e=arguments;
        return this.replace(/\{\{|\}\}|\{(\d+)\}/g,function(t,n){
            if(t==='{{'){
                return'{';
            }
            if(t==='}}'){
                return'}';
            }
            return e[n];
        });
    }
});
function scrollToElement(selector, time, verticalOffset) {
    time = typeof(time) != 'undefined' ? time : 1000;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    $('html,body').animate({ scrollTop: offsetTop - 120 }, time);
}
$.fn.bzAccordion = function (autoCollapse, expandFirstItem) {
    var $accord = this.find('.item-quest');

    if(expandFirstItem){
        $accord.first().find('h3').addClass('active');
        $accord.first().find('.info').show();
    }

    $accord.find('h3').click(function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).parent().find('.info').slideUp(200);
        } else {
            if (autoCollapse) {
                $.each($accord.find('h3'), function (i, o) {
                    $(o).removeClass('active');
                     $(o).removeClass('active');
                    $(o).parent().find('.info').slideUp(200);
                });
            }
            $(this).addClass('active');
            $(this).parent().find('.info').slideDown(200);
        }
    });
};


function bzPopup(params) {
    if (typeof ($.magnificPopup) === 'undefined') {
        alert('bzPopupContent: Không tìm thấy thư viện magnificPopup');
        return false;
    } else {
        var o = $.extend({
            rel: '',
            type: 'inline',
            width:700,
            removeDelay:300,
            closeOnBg: true,
            effect: 'bizFromTop',
            beforeOpen: function() {
                this.st.mainClass = o.effect;
            },
            elementParse: function(item) {},
            change: function() {},
            resize: function() {},
            open: function() {},
            beforeClose: function() {},
            close: function() {},
            afterClose: function() {},
            markupParse: function(template, values, item) {},
            updateStatus: function(data) {},
            imageLoadComplete: function() {},
            parseAjax: function(mfpResponse) {},
            ajaxContentAdded: function() {}
        }, params);

        var $element = $(o.rel);
        if ($element.length > 0) {
            $element.css({maxWidth: o.width});
            $.magnificPopup.open({
                removalDelay: o.removeDelay,
                callbacks: {
                    beforeOpen: o.beforeOpen,
                    elementParse: o.elementParse,
                    change: o.change,
                    resize: o.resize,
                    open: o.open,
                    beforeClose: o.beforeClose,
                    close: o.close,
                    afterClose: o.afterClose,
                    markupParse: o.markupParse,
                    updateStatus: o.updateStatus,
                    imageLoadComplete: o.imageLoadComplete,
                    parseAjax: o.parseAjax,
                    ajaxContentAdded: o.beforeOpen
                },
                items: {
                    src: o.rel,
                    type: 'inline'
                },
                closeOnBgClick: o.closeOnBg
            });
        } else {
            alert('bzPopupContent: Không tìm thấy nội dung!');
            return false;
        }
    }
}