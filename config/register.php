<h2> criar conta </h2>
<!-- título da página exíbido para o úsuario -->
 
<form action="process_register.php" method="POST" >
<!-- ínicio do formulário. Os serão enviados para 'process_register.php' via metodo POST-->
 
Nome: <Input type="text" name="nome" required><br><br>
<!-- Campo para o usuario digitar seu nome. Obrigatório (required) -->

email <Input type="email" name="email" required ><br><br>
<!-- Campo para usuario digitar seu email. O navegador valida o formato de email. Obrigatório -->

senha <Input type="password" name="senha" required><br><br>
<!-- Botão que envia os dados do formulario ao clicar -->
 </form>
 <!-- fim do formulario -->

 <p>já tem conta? <a href="login.php">Entrar</a></p>
<!-- ser vocé já tem conta pode clicar aqui para entrar no sistema -->
 


