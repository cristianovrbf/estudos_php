<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #18243c;
            color: #ccc;
            
            height: 100vh;
            
            font-weight: 900;
            font-family: 'Courier New', Courier, monospace;
            font-size: 22pt;

            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php
        require_once "Livro.php";
        require_once "Pessoa.php";
        
        $leitor = new Pessoa("Essinho", 23, "Masculino");
        $hp = new Livro("Harry Potter: Cálice de fogo", "J K Rowling", 549, $leitor, 25);
        $hp->abrir();
        $leitor->fazerAniversario();
        $leitor->fazerAniversario();
        $hp->abrir();
        $hp->detalhes();
        $hp->voltarPag();
        $hp->abrir();
        $hp->folhear(50);
    ?>
</body>
</html>