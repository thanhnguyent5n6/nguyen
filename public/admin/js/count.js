function countUp(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp(495);

function countUp2(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count2'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp2(947);

function countUp3(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count3'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp3(328);

function countUp4(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count4'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp4(10328);
$(document).ready(function(){
    $('.btn-add-new').click(function(){
        $('.hidden-add-car').css({"opacity":"1","visibility":"visible"});
    });
    $('.edit-product').click(function(){
        $('.hidden-add-car').css({"opacity":"1","visibility":"visible"});
    });
    $('.close-add-car').click(function(){
        $('.hidden-add-car').css({"opacity":"0","visibility":"hidden"});
    });
    $('.close-add-car-1').click(function(){
        $('.hidden-add-car').css({"opacity":"0","visibility":"hidden"});
    });
    $('.delete-product').click(function(){
        alert('Bạn có muốn xóa?');
    });
    $('.btn-show').click(function(){
        $(this).hide();
        $('.btn-none-show').show();
    });
    $('.btn-none-show').click(function(){
        $(this).hide();
        $('.btn-show').show();
    });
    $('.edit-car').click(function(){
        $('.box-show-car').css({"visibility":"visible","opacity":"1"});
    });
    $('.close-add-car').click(function(){
        $('.box-show-car').css({"visibility":"hidden","opacity":"0"});
    });
    $('.close-add-car-1').click(function(){
        $('.box-show-car').css({"visibility":"hidden","opacity":"0"});
    });
    $('.delete-car').click(function(){
        alert('Bạn có muốn xóa?');
    });
    $('.btn-khonghienthi').hide();
    $('.btn-hienthi').click(function(){
        var is_content_dom = $(this).parents('p').children('.btn-khonghienthi');
        if(is_content_dom.is(':hidden') == true)
        {
            $(this).hide();
            $(is_content_dom).show();

        }
    });
    $('.btn-khonghienthi').click(function(){
        var is_content_dom = $(this).parents('p').children('.btn-hienthi');
        if(is_content_dom.is(':hidden') == true)
        {
            $(this).hide();
            $(is_content_dom).show();

        }
    });
});