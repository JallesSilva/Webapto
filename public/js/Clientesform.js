// --Exemplos de js - jquery Buscar primeira coluna da tabela--

// var filtro = document.getElementById('filtro-nome');
// var tabela = document.getElementById('lista');
// filtro.onkeyup = function() {
//     var nomeFiltro = filtro.value;
//     for (var i = 1; i < tabela.rows.length; i++) {
//         var conteudoCelula = tabela.rows[i].cells[0].innerText;
//         var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
//         tabela.rows[i].style.display = corresponde ? '' : 'none';
//     }
// };

$('#filtro-nome').keyup(function() {
    var nomeFiltro = $(this).val().toLowerCase();
    $('table tbody').find('td').each(function() {
        var conteudoCelula = $(this).find('td:first').text();
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
        $(this).css('display', corresponde ? '' : 'none');
    });
});