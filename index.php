<?php

// posso includere codice/variabili/funzioni php
require_once __DIR__ . '/data/vars.php';
require_once __DIR__ . '/data/functions.php';

// 1. se ho inviato il form controllare se l'indirizzo email è sitatticamente valido
// 2. se SI -> reindirizzo alla pagina di ringrazimento passando in sessione la mail inserita
// 3. se NO rimanere nella stessa pagina e stampare un messaggio di errore

$error_msg = '';
if(isset($_POST['email'])){

  if(checkEmail($_POST['email'])){
    //2.
    // per poter leggere o scrivere dati in sessione devo prima aprirla
    session_start();
    // metto in sessione l'idirizzo email inserito
    $_SESSION['email_address'] = $_POST['email'];
    
    // reindirizzo alla pagina di ringraziamento
    header('Location: ./success_page.php');
  }else{
    // 3. 
    $error_msg = 'Indirizzo email non valido';
  }
}

// o anche semplice codice HTML
require_once __DIR__ . '/partials/head.php';
?>

<body>

<?php require_once __DIR__ . '/partials/header.php'; ?>

<main class="container my-5">
  <h2>Inserisci il tuo indirizzo email <?php echo $user['name'] ?></h2>
  <form action="index.php" method="POST">
    <div class="row">
      <div class="col-4">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <p class="text-danger"><?php echo $error_msg ?></p>
      </div>
    </div>
    <button class="btn btn-primary my-3 ">Invia</button>

  </form>
</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
  
</body>
</html>