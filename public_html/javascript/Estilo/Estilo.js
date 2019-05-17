$(document).ready(() => {
    $('#butAnt3').on('click', e => {
        window.location.href="/Home/index";
    });
    $('#butProx3').on('click', e => {
        $('#formEstilo').submit();
    });
    $('input[type="radio"][name="genero"]').on('click', e=>{
        const id = e.currentTarget.id;
        FouM(id);   
    });
})
const FouM = id => {
    if (id == 'genFem') {
        $('.justM').hide();
        $('.justF').show();
    } else {
        $('.justM').show();
        $('.justF').hide();
    }
};