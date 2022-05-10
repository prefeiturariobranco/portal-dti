$('.questionCollapse').click(function () {
    let i = $(this).find('i')
    // console.log($(this).attr('aria-controls'))
    setTimeout(() => { }, 3000);
    if($('#' + $(this).attr('aria-controls')).hasClass('show')) {
        i.addClass('fa-plus')
        i.removeClass('fa-minus')
    }
    else if (!$('#' + $(this).attr('aria-controls')).hasClass('show')) {
        i.removeClass('fa-plus')
        i.addClass('fa-minus')
    }
})


$('.faq-list').on('shown.bs.collapse', function() {
    if($('#' + $(this).attr('aria-controls')).hasClass('show')) {
        i.addClass('fa-plus')
        i.removeClass('fa-minus')
    }
}).on('show.bs.collapse', function() {
    if (!$('#' + $(this).attr('aria-controls')).hasClass('show')) {
        i.removeClass('fa-plus')
        i.addClass('fa-minus')
    }
});
