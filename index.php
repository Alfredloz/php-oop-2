
<?php 
include __DIR__ . '/classes/user.php';
// include __DIR__ . '/classes/category.php';
include __DIR__ . '/classes/article.php';
// include __DIR__ . '/classes/tag.php';

// array users

$users=[
    new User('Gino', 'Paoli', 'gino@paoli.it', '12.2.1950', '2.5.2017', '2.6.2018', 10, 100),
    new User('Giulio', 'Cesare', 'ciao@proma.it', '12.6.1970', '2.8.2015', '22.10.2018', 40, 60),
    new User('Barbara', 'Straisand', 'babura@strsnd.it', '12.12.1959', '28.10.2020', '2.1.2021', 100, 1115),    
];
// /array users
// array articoli

$barbaraArticles =[
  new Article('cucina molecolare', '12.2.2018', 100, 40, 40),
  new Article('cucina vegana', '12.12.2019', 1500, 1034, 150),
  new Article('cucina giapponese', '1.2.2020', 654, 500, 400)
];

// /array articoli
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-blog</title>

    <style>
    .user_content{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .user_box{
        height: 20rem;
        width: auto;
        padding: 0.5rem;
        border: 1px solid black;
        margin: 2rem;
    }
    h1{
        text-align: center;
    }
    .article_title{
        padding: 1rem;
        text-align: center;
    }
    .article_box{
        padding: 0.5rem;
        margin: 1rem;
        border: 1px solid black;
    }
    </style>
</head>
<body>
        <h1>Utenti</h1>   
    <div class="user_content">    
            <?php 
            foreach ($users as $user) {?>
                <div class="user_box">
                    <h2>Nome: <?php echo $user->nome; ?></h2>
                    <h2>Cognome: <?php echo $user->cognome; ?></h2>
                    <p>email: <?php echo $user->email; ?></p>
                    <p>Data di nascita: <?php echo $user->nascita; ?></p>
                    <p>Data iscrizione al blog: <?php echo $user->data_iscrizione; ?></p>
                    <p>Data Ultimo articolo: <?php echo $user->data_ultimo_articolo; ?></p>
                    <p>Numero articoli: <?php echo $user->numero_articoli; ?></p>
                    <p>Numero totale dei commenti enl blog: <?php echo $user->numero_commenti; ?></p>
                    <h2 class="article_title">Articoli scritti</h2>
                    <?php 
                    
                    if ($user->nome === 'Barbara') {
                        foreach ($barbaraArticles as  $article) {?>
                           <div class="article_box">
                           <h3>Nome articolo: <?php echo $article->titolo ?></h3>
                            <p>Data di pubblicazione: <?php echo $article->data_di_pubblicazione ?></p>
                            <p>Visualizzaioni: <?php echo $article->visualizzazioni ?></p>
                            <p>Numero Condivisioni: <?php echo $article->numero_di_condivisioni ?></p>
                            <p>Numero dei commenti: <?php echo $article->numero_commenti ?></p>
                           </div>
                            <?php  }
                        } else{
                            echo 'nesuno articolo scritto';
                        }
                    
                        ?>
                </div>
             <?php }
            ?>
    </div>
</body>
</html>