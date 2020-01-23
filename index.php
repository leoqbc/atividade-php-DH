<?php
/**
 * Atividade em sala de aula
 * Conhecimentos abordados: 
 * Condicionais, Laços de repetição, Funções, Arquivos
 * 
 * Funções para estudar: scandir, is_dir, is_file, move_uploaded_file
 * 
 * Atividade em dupla
 * 
 * Programe o upload abaixo, para que quando for carregado uma nova imagem 
 * ela apareça na galeria.
 * 
 *  1. Faça o upload funcionar para salvar a imagem na pasta "/imgs"
 *  2. Crie uma função que retorna um array com a lista de imagens na pastas "imgs"
 *  3. Faça um loop que fará a exibição das imagens da galeria
 * 
 * Edite o arquivo upload.php
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria de imagens</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="titulo">Galeria de imagens</h1>
    <div class="form">
        <form action="">
            <div class="form-control">
                <label for="imagem">Carregar imagem</label>
                <input type="file" name="imagem">
            </div>
        </form>
    </div>
    <div class="galeria">
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQysR3IzGNFGAyecRlt3beOKYqTN7iSs5wL4FeZDBiUvvVPJBQSuQ&s" alt="" class="imagem">
        </div>
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQysR3IzGNFGAyecRlt3beOKYqTN7iSs5wL4FeZDBiUvvVPJBQSuQ&s" alt="" class="imagem">
        </div>
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQysR3IzGNFGAyecRlt3beOKYqTN7iSs5wL4FeZDBiUvvVPJBQSuQ&s" alt="" class="imagem">
        </div>
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQysR3IzGNFGAyecRlt3beOKYqTN7iSs5wL4FeZDBiUvvVPJBQSuQ&s" alt="" class="imagem">
        </div>
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQysR3IzGNFGAyecRlt3beOKYqTN7iSs5wL4FeZDBiUvvVPJBQSuQ&s" alt="" class="imagem">
        </div>
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQysR3IzGNFGAyecRlt3beOKYqTN7iSs5wL4FeZDBiUvvVPJBQSuQ&s" alt="" class="imagem">
        </div>
    </div>
</body>
</html>