<?php 
if (isset($_GET['sucesso'])) {
     // verifica se há o paramento 'sucesso' na URL (ex: login.php?sucesso=1)
     // se exister, mostra uma mensagem de sucesso
     echo "<p style='color: green, '>conta criada com sucesso! faça login.<p>";

}
if (isset($_GET['erro'])) {
     // se o erro for
     echo "<p style='color: red;'>usuário ou senha inválidos<p>";
}