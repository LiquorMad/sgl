<h1 align="center"> Sistema de Gestão de Links </h1>


SGL (Sistema de Gestão de Links) - é um sistema de desenvolvido para fazer gerenciamento de links.
<h2> Funcionamento:  </h2>


  Permite que o administrador faz gestão de utilizadores do sistema, os utilizadores (administrador/utilizador normal) do sistema podem registar registar fontes para recolher possiveis links e guardar no sistema. É permitido ao utilizdor fazer registo de links automático apartir de um web crawler existente no SGL. 

  Permite que o fiscal do terminal faça registo dos veículos na fila com uma determinada rota, uma vez com o veículo registado na fila, qualquer utilizador pode acompanhar a vez de um veículo online, verificar qual o tempo médio de espera. Os fiscais que ficam nas estradas, conseguem verificar se um determinado veículo saiu ou não da fila, caso não tenha saído da fila pode ser levantada punições ao veículo. 
Qualquer pessoa pode entrar no site consultar, o veículo que esteja a sair, todos os veículos na fila e verificar qual o tempo médio de espera de um determinado veículo, em caso de preferência por um determinado motorista pode verificar quando é que vai sair para fazer a sua viagem.

<h2> Desenvolvimento:  </h2>


  Para o desenvolvimento do SGL foi utilizado a linguagem PHP com o framework lavarel atuando na backend, e para o frontend foi utilizado o template AdminLTE3, para sistema de Gestão de Base de Dados foi utilizado a base de dados MySQL.
 
 <h2> Funcionalidades: </h2>
 
    Permite um administrador fazer a gestão de utilizadores;
    
    Permite um utilizador normal ou administrador fazer a gestão de fontes;
    
    Permite um utilizador normal ou administrador fazer a gestão de links;    
 
  <h2> Baixar e executar o SGL </h2>
    <ul>
        <li>1. Executa o comando <b> git clone https://github.com/LiquorMad/sgl.git</b> para baixar o SGL;</li>
        <li>2. Na raiz do projeto baixado, execute o camando <b>composer</b>;</li>
        <li>3. Na raiz do projecto baixo o ficehiro com o nome  <b>sqlScript.sql</b>  e faz a importação no seu servidor de base de dados </li>
        <li>4. Execute o comando <b>php artisan serve<b/> para rodar a aplicação </li>
    </ul>
	<h2>Cridenciais:</h2>
		  <b>Utilizador normal:</b><br>
			    <b>Email:</b> admin@gmail.com<br>
			    <b>Password:</b> password<br>
		  <b>Utilizador normal:</b><br>
			    <b>Email:</b> normal.user@gmail.com<br>
			   <b>Password:</b> password<br>
  
