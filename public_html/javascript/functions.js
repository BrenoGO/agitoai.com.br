//sendo chamado no config/head.php
$(document).ready(() => {
    funcTypeDate();
    $('#tipo_pessoa').on('change', e => {
        const tipo_pessoa = e.currentTarget.value;
        PFouPJ(tipo_pessoa);
    });
    $('[type="date"]').on('keyup', e=> {
        formatar(`#${e.currentTarget.id}`,'##/##/####', e.currentTarget.value);
    });
});
const funcTypeDate = () => {
    if ( $('[type="date"]').prop('type') != 'date' ) {
        $('input[type=date]').each(function(){eachTypeDate(this)});
    };
}
const eachTypeDate = (element) => {
    /* Create a hidden clone, which will contain the actual value */
    var clone = $(element).clone();
    clone.insertAfter(element);
    clone.hide();

    /* Rename the original field, used to contain the display value */
    $(element).attr('id', $(element).attr('id') + '-display');
    $(element).attr('name', $(element).attr('name') + '-display');

    /* Create the datepicker with the desired display format and alt field */
    $(element).datepicker({ dateFormat: "dd/mm/yy", altField: "#" + clone.attr("id"), altFormat: "yy-mm-dd" });
    $(element).attr('placeholder', 'dd/mm/aaaa')
    /* Finally, parse the value and change it to the display format */
    if ($(element).attr('value')) {
        var date = $.datepicker.parseDate("yy-mm-dd", $(element).attr('value'));
        $(element).attr('value', $.datepicker.formatDate("dd/mm/yy", date));
    }
}
const PFouPJ = tipo_pessoa => {
    if(tipo_pessoa === 'PF') {
        $('#textNomeRazaosocial').html('Nome Completo: ');
        $('#textCPFouCNPJ').html('CPF: ');
        $('#textRGouIE').html('RG: ');
        $('#divNomefantasia').hide();
    } else {
        $('#textNomeRazaosocial').html('Razão Social: ');
        $('#textCPFouCNPJ').html('CNPJ: ');
        $('#textRGouIE').html('IE: ');
        $('#divNomefantasia').show();
    }
}
const pointThousants = number => {
    //a formula abaixo vai dar certo apenas se número com 2 dígitos!!
    let length = number.length;
    let count = 0;
    for(i=4;i<length;i++){
        if((i-3)%3===0){
            init = number.substr(0,length-i)
            fim = number.substring(length-i,length+count)
            number=`${init}.${fim}`;
            count +=1;
        }
    }
    return(number);
};
function formatar(element, mascara, text){
    const i = text.length;
    const padrao = '#';
    const test = mascara.substring(i)
    if (test.substring(0,1) != padrao){
        $(element).val(text+test.substring(0,1));
    }
}