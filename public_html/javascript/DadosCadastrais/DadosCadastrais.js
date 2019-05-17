$(document).ready(() => {
    $('#butAnt2').on('click', e => {
        window.location.href="/Estilo/Index";
    })
    $('#butProx2').on('click', e => {
        var boolForm = true;
        const nomeCompleto = $('#nomeCompleto').val() == '' ? false : true;
        if(!nomeCompleto) { alert('Favor preencher o nome'); boolForm = false;}
        const dataNasc = $('#dataNasc').val() == '' ? false : true;
        if(!dataNasc) { alert('Favor preencher a data de nascimento'); boolForm = false;}
        const cpf = $('#cpf').val() == '' ? false : true;
        if(!cpf) { alert('Favor preencher o CPF'); boolForm = false;}
        const endereco = $('#endereco').val() == '' ? false : true;
        if(!endereco) { alert('Favor preencher o endereço'); boolForm = false;}
        const cidade = $('#cidade').val() == '' ? false : true;
        if(!cidade) { alert('Favor preencher a cidade'); boolForm = false;}
        const telefone = $('#telefone').val() == '' ? false : true;
        if(!telefone) { alert('Favor preencher ao menos 1 telefone no campo telefone'); boolForm = false;}
        if (boolForm) {
            $('#formDadosCadastrais').submit();
        }
    })
    $('#cpf').on('keyup', e => {
        formatar('#cpf', '###.###.###-##', e.currentTarget.value);
    });
    $('#cep').on('keyup', e=> {
        formatar('#cep', '#####-###', e.currentTarget.value);
    });
    $('#cep').on('change', e=> {
        const cep = e.currentTarget.value;
        $.post('/javascript/DadosCadastrais/ajaxVerCep.php', {cep}, response => {
            const array = response.split(',');
            if(array[2]){
                $('#bairro').val(array[2]);
                $('#endereco').val(array[3]);
            }
            if(array[1]){
                $('#cidade').val(array[0]);
                //$('#UF').val(array[1]); //UF ainda não está no formulário
            }
        })
    });
})