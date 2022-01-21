<?php
    echo('Testando PHP' . '<br>');

    // Validação para identificar se o botão foi clicado e disponibilizado na ação do GET

    if(isset($_GET['btnSalvar'])){

    // Recuperando dados via GET do formulário

    $nome = $_GET['txtNome'];
    $cidade = $_GET['sltCidade'];
    $sexo = $_GET['rdoSexo'];
    $obs = $_GET['txtObs'];

    // Foram criadas essas variáveis para resolver o problema de variável indefinida na exibição dos dados.
    $idiomaPortugues = null;
    $idiomaIngles = null;
    $idiomaEspanhol = null;


    // Tratamento para recuperar os checkbox que foram selecionados no formulário

        if(isset($_GET['chkPortugues']))
        {
            $idiomaPortugues = $_GET['chkPortugues'];
        }
    
        if(isset($_GET['chkIngles']))
        {
            $idiomaIngles = $_GET['chkIngles'];
        }
    
        if(isset($_GET['chkEspanhol']))
        {
            $idiomaEspanhol = $_GET['chkEspanhol'];
        }

    echo('<b>Nome:<b> ' . $nome . '<br>');
    echo('<b>Cidade:<b> ' . $cidade . '<br>');
    echo('<b>Sexo:<b> ' . $sexo . '<br>');
    echo('<b>Idiomas:<b> ' . $idiomaPortugues . ' ' . $idiomaIngles . ' ' . $idiomaEspanhol . '<br>');
    echo('<b>Obs:<b> ' . $obs . '<br>');


    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea{
            resize: none;
        }

    </style>
</head>
<body>
    <br>
    <form name="frmCadastro" method="GET" action="formularios.php">
       nome: <input type="text" name="txtNome" size="50" maxlength="50"><br>
       cidade: 
       <select name="sltCidade">
           <option value="" selected>selecione um item</option>
            <option value="jandira">Jandira</option>
            <option value="barueri">Barueri</option>
            <option value="itapevi">Itapevi</option>
            <option value="carapicuiba">Carapicuíba</option>
            <option value="osasco">Osasco</option>
       </select>
       <br>
       Sexo:
       <input type="radio" name="rdoSexo" value="F" checked> Feminino
       <input type="radio" name="rdoSexo" value="M"> Masculino
       <input type="radio" name="rdoSexo" value="O"> Outro
       <br>
       Idioma:
       <input type="checkbox" name="chkPortugues" value="Pt" checked> Português
       <input type="checkbox" name="chkIngles" value="En"> Inglês
       <input type="checkbox" name="chkEspanhol" value="Es"> Espanhol
       <br>
       Observação:
       <textarea name="txtObs" cols="10" rows="3"></textarea>
       <br>
       <input type="submit" name="btnSalvar" value="Salvar">
       <input type="reset" name="btnLimpar" value="Limpar">
    </form>
</body>
</html>