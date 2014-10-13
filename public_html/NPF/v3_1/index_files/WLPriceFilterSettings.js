/*
    HSR Price filter customization
*/
var WLPriceFilterOptions = {
    width: 180, // canvas width in pixels
    height: 40, // canvas height in pixels
    axisHeight: 6, // axis height in pixels
    axisBottomMargin: 20, // axis bottom margin in pixels
    axisColor: "#CCC", // axis color
    axisRangeColor: "#999", // axis range color
    handleWidth: 10, // handle width
    handleHeight: 10, // handle height
    handlePosition: "middle", // handle position: "top", "bottom", "middle" (default)
    handleBgColor: "#333", // handle background color
    handleBorderColor: "#FFF", // handle stroke color
    handleBgColorOver: "#F60", // handle background color (hover mode)
    handleBorderColorOver: "#FFF", // handle stroke color (hover mode)
    scalePointSize: 5, // scale point height in pixels
    scalePointColor: "#999", // scale point color
    scaleTextFont: "10px Arial, Helvetica, Sans-Serif", // scale font
    scaleTextFontColor: "#666" // scale font color
}

$(document).ready(function() {
$(".wording.mBottom20")
.after("<div class=\"virtu-card\">    <div class=\"card-ico\"></div>    <div class=\"card-text\">Вы&nbsp;можете получить карту Банка Русский Стандарт онлайн и&nbsp;воспользоваться скидкой&nbsp;10% на&nbsp;бронирование отелей прямо сейчас. Оформите виртуальную карту&nbsp;&mdash; реквизиты карты для оплаты заказа придут в&nbsp;СМС-сообщении.</div>    <div class=\"card-link\">        <a target=\"blank\" class=\"checkout\" href=\"https://anketa.rsb.ru/applications/virtual_card/application_vpc_1/?utm_source=rsb.oktogo.ru&utm_medium=hotels&utm_campaign=card\"></a>    </div></div>");
});