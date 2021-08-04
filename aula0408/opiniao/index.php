<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinião do Cliente</title>
</head>
<body>
    <h1>Opinião do Cliente</h1>
    <h2>Deixe sua opinião</h2>
    <form action="recebe.php" method="post">
        <label for="inputOpiniao"><strong>O que você achou da Loja ?</strong> </label>
        <p>
            <input type="radio" name="inputOpiniao" id="inputOpiniao" value="Muito Bom">Muito Bom 
            <input type="radio" name="inputOpiniao" id="inputOpiniao" value="Bom">Bom 
            <input type="radio" name="inputOpiniao" id="inputOpiniao" value="Regular">Regular
            <input type="radio" name="inputOpiniao" id="inputOpiniao" value="Ruim">Ruim  
        </p>
        <label for="inputProduto">Qual streaming você utiliza mais ?</label>
        <select name="inputProduto">
            <option value="Netflix">Netflix</option>
            <option value="Prime Video">Prime Vídeo</option>
            <option value="Disney">Disney</option>
            <option value="Globoplay">Globoplay</option>
            <option value="Directv Go">Directv Go</option>   
        </select>
        <p></p>
        <label for="inputComentario">Digite seus comentários abaixo: </label> 
        <p>
            <textarea name="inputComentario" id="inputComentario" rows="5" cols="50"></textarea>
        </p>
        <p>
            <input type="submit" value="Enviar" name="btnEnviar">
        </p>
    </form>
</body>
</html>