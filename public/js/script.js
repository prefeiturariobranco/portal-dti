/* Script usado em perguntass frequentes */
$(document).on('click', 'button[data-toggle="collapse"]', function (e) {
    var $this = $(this);

    if ($this.find('i').hasClass('fa-plus')) {
        $this.find('i').removeClass('fa-plus').addClass('fa-minus');
    } else {
        $this.find('i').removeClass('fa-minus').addClass('fa-plus');
    }
});
