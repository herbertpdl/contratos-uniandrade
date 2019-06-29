$(function(){
    $("#btn_consulta").click(function(){
        var cep = $('#cep').val();
        if (cep == '') {
            alert('Informe o CEP antes de continuar');
            $('#cep').focus();
            return false;
        }
        $('#btn_consulta').html ('Aguarde...');
        $.post('/Formulario/consultaCep/'+cep,
        {
            cep : cep
        }, 
        function(data){
            $('#endereco').val(data.logradouro);
            $('#bairro').val(data.bairro);
            $('#cidade').val(data.localidade);
            $('#estado').val(data.uf);
            $('#btn_consulta').html('Consultar');
        }, 'json');
    });
});