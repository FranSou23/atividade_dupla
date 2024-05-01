<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serenatto - Cardápio</title>
</head>
<body>
    <main>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo-serenatto.png" class="logo" alt="logo-serenatto">
            </div>
        </section>

        <h2>Cardápio Digital</h2>
            <div class="container-cafe-manha-titulo">
            <?php
            include "conexao.php";
            $sql = "select * from produtos";
            $resultado = mysqli_query($conexao, $sql);
 
            while($umProduto = mysqli_fetch_assoc($resultado)):            
        ?>
           
           
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/cafe-cremoso.jpg">
                    </div>
                    <p><?= $umProduto['Nome'];?></p>
                    <p><?= $umProduto['Descricao'];?></p>
                    <p><?= $umProduto['Preco'];?></p>
                </div>
           
        <?php
        endwhile;
        ?>
                
        </div> 
            
        


        <section class="container-almoco">
            <div class="container-almoco-titulo">
            <?php
            include "conexao.php";
            $sql = "select * from produtos";
            $resultado = mysqli_query($conexao, $sql);
 
            while($umProduto = mysqli_fetch_assoc($resultado)):            
        ?>
           
           
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/bife.jpg">
                    </div>
                    <p><?= $umProduto['Nome'];?></p>
                    <p><?= $umProduto['Descricao'];?></p>
                    <p><?= $umProduto['Preco'];?></p>
                </div>
           
        <?php
        endwhile;
        ?>
                
            </div>
            


        </section>
    </main>
</body>
</html>