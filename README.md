<h1 align="center"> Sistema de Gestão de Links </h1>


SGL (Sistema de Gestão de Links) - é um sistema de desenvolvido para fazer gerenciamento de links.
<h2> Funcionamento:  </h2>


 Permite que o administrador faz gestão de utilizadores do sistema, os utilizadores (administrador/utilizador normal) do sistema podem registar fontes para recolher possíveis links e guardar no sistema. É permitido ao utilizador fazer registo de links automático partir de um web crawler existente no SGL.


Permite que o fiscal do terminal faça registo dos veículos na fila com uma determinada rota, uma vez com o veículo registado na fila, qualquer utilizador pode acompanhar a vez de um veículo online, verificar qual o tempo médio de espera. Os fiscais que ficam nas estradas, conseguem verificar se um determinado veículo saiu ou não da fila, caso não tenha saído da fila pode ser levantada punições ao veículo. Qualquer pessoa pode entrar no site consultar, o veículo que esteja a sair, todos os veículos na fila e verificar qual o tempo médio de espera de um determinado veículo, em caso de preferência por um determinado motorista pode verificar quando é que vai sair para fazer a sua viagem.

<h2> Desenvolvimento:  </h2>


  Para o desenvolvimento do SGL foi utilizado a linguagem PHP com o framework lavarel atuando na backend, e para o frontend foi utilizado o template AdminLTE3, para sistema de Gestão de Base de Dados foi utilizado a base de dados MySQL.
 
<h2> Funcionalidades: </h2>
 
<li>Permite um administrador fazer a gestão de utilizadores;</li>

<li>Permite um utilizador normal ou administrador fazer a gestão de fontes;</li>

<li>Permite um utilizador normal ou administrador fazer a gestão de links;</li>
    
 <h2>Apresentação do sistema </h2>
 <h3>Página para gestão de Fontes</h3>
 <img width="943" alt="gestao de fontes" src="https://user-images.githubusercontent.com/107926038/212053519-583dbe7c-af13-414b-9c0f-8906c5915976.PNG">
 <h3>Página para gestão de Links</h3>
<img width="942" alt="gestao de link" src="https://user-images.githubusercontent.com/107926038/212053532-e12c5fc6-b08b-4eda-afe5-2dd05bd96da7.PNG">
<h3>Página para gestão de Utilizadoress</h3>
<img width="948" alt="gestao de utilizadores" src="https://user-images.githubusercontent.com/107926038/212053562-4f1a4a0f-2c32-4e18-86da-f45f24f212ec.PNG">
 <h2>Acesso ao SGL</h2>
 <p> Para acessar ao SGL, voce pode, acessar o link <a href="https://managementlink.net/public/login">https://managementlink.net/public/login</a> ou  baixar e executar, seguindo os passos seguintes: </p>
  <h3> Baixar e executar o SGL </h3>
    <ul>
        <li>1. Executa o comando <b> git clone https://github.com/LiquorMad/sgl.git</b> para baixar o SGL;</li>
        <li>2. Na raiz do projeto baixado, execute o camando <b>composer update</b>;</li>
        <li>Opção 1: </li>
            <ul>
                <li>3. Na raiz do projecto baixo o ficehiro com o nome  <b>sqlScript.sql</b>  e faz a importação no seu servidor de base de dados </li>
            </ul>
        <li>Opção 2: </li>
            <ul>
                <li>3. Execute as <b>migrations</b> e <b>seeders</b> com os seguintes comandos sequencialmente:  </li>
                    <ul>
                        <li><b>php artisan migrate:fresh</b></li>
                        <li><b>php artisan db:seed --class=UserSeeder</b></li>
                        <li><b>php artisan db:seed --class=FontesSeeder</b></li>
                    </ul>
            </ul>
        <li>4. Execute o comando <b>php artisan serve<b/> para rodar a aplicação </li>
    </ul>
	<h3>Cridênciais:</h3>
		  <b>Utilizador normal:</b><br>
			    <b>Email:</b> admin@gmail.com<br>
			    <b>Password:</b> password<br>
		  <b>Utilizador normal:</b><br>
			    <b>Email:</b> normal@gmail.com<br>
			   <b>Password:</b> password<br> 
