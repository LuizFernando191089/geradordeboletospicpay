# Gerador de Boletos PicPay
<h2>Configurações do Projeto (Versão 01)</h2>
<ul>
<ol>PHP7.4</ol>
<ol>Mysql</ol>
<ol>Bootstrap 4.5</ol>
<ol>Jquery v3.5.1</ol>
<ol>Font Awesome 4.7.0</ol>
</ul>
<h3>Instalação Banco de Dados</h3>
<h4>Dentro da pasta Banco_de_dados tem um dump do banco, que e citado abaixo.</h4>
<code>

CREATE TABLE `beneficiario` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


</code>

<p>Nesta versão o banco tem apenas uma coluna, ela e a que  vai guarda o nome dos beneficiário.</p>

<p>Mas você pode usar a API, com beneficiário fixo e só seguir os passo abaixo.</p>

<h5>Passo 01</h5>
Vá até a pagina <b>index.php</b>,remova código abaixo:
<br>
<br>
<code>
 <img src="https://uploaddeimagens.com.br/images/002/905/683/full/01.png" widht='150px'>
</code>
<h5>Passo 02</h5>
<br>
Vá até a pagina <b>beneficiario.php</b>,renomei código abaixo:
<br>
<br>
<code>$beneficiario = $_POST['beneficiario'];</code>
<br>
para:
<br>
<code>$beneficiario = "Seu_usuario_aqui";</code>
