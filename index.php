<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='form-aluno'>
        <h2>Cadastro de Aluno</h2>
        <form action="aluno.php" method="post">
            <label>Nome</label>
            <input class="input-text" name='nome' type="text">
            <label>Curso</label>
            <select class="select" name="curso" required>
                <option value="">Selecione...</option>
                <option value="A">Administração</option>
                <option value="B">Desenho da Construção Civil</option>
                <option value="C">Energias Renováveis</option>
                <option value="D">Informática</option>
            </select>
            <label>Necessita de transporte escolar?</label><br>
            <input name="transporte_escolar" value="sim" type="radio"> SIM
            <input name="transporte_escolar" value="nao" type="radio"> NÃO<br>
            <label>Esportes que pratica</label><br>
            <input name="esportes[]" value="futsal" type="checkbox">
            Futsal
            <input name="esportes[]" value="volei" type="checkbox">
            Vôlei
            <input name="esportes[]" value="basquete" type="checkbox">
            Basquete<br>
            <button name="cadastrar" type="submit">Cadastrar Aluno</button>
        </form>
    </div>  
</body>
</html>