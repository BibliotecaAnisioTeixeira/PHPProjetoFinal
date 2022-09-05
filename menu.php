
<ul class="nav-list">
    
  <li><a href="#inicio">Inicio</a></li>
  <li><a href="#sobre">Sobre</a></li>
  <li><a href="#livros">Livros</a></li>
    <li><a href="#contato">Contato</a></li>
<?php 

//Menu só aparece para os administradores.
if($_SESSION['acesso']=="admin"){
    echo "<li class='dropdown'><a href='javascript:void(0)' class='dropbtn'>Administração</a>";
	echo "<div class='dropdown-content'><a href='upload.php'>Upload de livros</a><a href='enviararquivos.php'>Enviar arquivos</a><a href='usuarioscontrolar.php?pag=1'>Controlar Usuários</a><a href='livroscontrolar.php?pag=1'>Controlar Livros</a><a href='generocontrolar.php?pag=1'>Controle de gêneros</a><a href='usuariosrelatorio.php?pag=1'>Relatório de Usuários</a><a href='criarelatorio.html'>Gerar Relatório</a></div></li>";
}  
?>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Usuário: <?php echo $logado;?></a>
    <div class="dropdown-content">
      <a href="deslogar.php">Deslogar</a>
    </div>
  </li>
</ul>