$("#form_cadastro").on('click',function()
{
	$.ajax(
	{

		type: 'POST',
		url:'clientes/atualizar',
		
		
		data:
		{
			chave_usuario:$("#id").val(),
			nome:$("#nome").val(),
			email:$("#email").val(),
			telefone:$("#telefone").val()
		},
		beforeSend:function()
		{
			$("#mensagem").html("Carregando...");					
		},
		success:function(data)
		{
			$("#mensagem").html(data);
		},
		error:function(data)
		{
			$("#mensagem").html("Não localizado...");
		}
	});	
});
	