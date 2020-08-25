$(document).ready(function () {
    //tempo de duração do slide
    $('.carousel').carousel({
        interval: 7000
    });

    $('#myCarousel').on('slid.bs.carousel', function () {
        //Receber o valor do atributo data-slide-to quando estiver ativo
        var numeroSlide = $('#valor-car.active').data('slide-to');
        //Ocultar a descrição do slide anterior
        $('.conteudo').hide();
        //Apresentar o conteúdo do slide atual
        $('.imagem' + numeroSlide).show();
    });
});