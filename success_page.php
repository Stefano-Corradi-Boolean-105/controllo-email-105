<?php
session_start();
// prendo l'indirizzo email dalla sessione
if($_SESSION['email_address']){
  $email = $_SESSION['email_address'];
}else{
  // reindirizzo alla pagina di registrazione
  header('Location: ./index.php');
}

require_once __DIR__ . '/partials/head.php';
?>

<body>

<?php require_once __DIR__ . '/partials/header.php'; ?>

<main class="container my-5">
  <h2>Il tuo indirizzo email è stato inserito correttamente</h2>
  <p>Email inserita: <strong><?php echo $email ?></strong></p>

  <a href="./index.php" class="btn btn-warning my-5">Torna alla home</a>

  
</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
  
</body>
</html>