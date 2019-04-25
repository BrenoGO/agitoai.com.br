$(document).ready(() => {
    $('#butProx1').on('click', () => {
        var testForm = true;
        const email = $('#seuemail').val();
        if (email == '' || !email.includes('@')) {
            alert('Favor inserir um e-mail válido')
            testForm = false;
        }
        if($('#isNew').val() == 'true') {
            if($('#senha').val() != $('#confirmaSenha').val()) {
                alert('Nova senha diferente da confirmação');
                testForm = false;
            }
        }
        if (testForm) {
            $('#homeForm').submit();
        }
    });
    $('#seuemail').on('change', e => {
        const email = e.currentTarget.value;
        $.post(
            '/javascript/Home/ajaxSeEmailCadast.php', 
            {
                email
            },
            result => {
                if(!result) {
                    $('#senhaH2').html('Cadastrar nova senha<span class="pointObrigatorio">*</span>');
                    $('#divConfirmaNovaSenha').show();
                    $('#isNew').val('true');
                } else {
                    $('#senhaH2').html('Senha<span class="pointObrigatorio">*</span>');
                    $('#divConfirmaNovaSenha').hide();
                    $('#isNew').val('false');
                }
            }
        )
    });
})
