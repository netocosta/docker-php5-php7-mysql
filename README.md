# Docker - Servidor PHP5, PHP7 e Mysql

<br />
<b>Requisitos</b><br />
<br />
Internet ;-)<br />
Docker<br />
<br />
<b>Porque usar?</b><br />
Esses containers, inicialmente, foram montador para mostrar como converter as funcoes mysql*() do PHP5 para as funções mysqli*() do PHP7. Porém seu uso pode ter infinitos objetivos.<br />
<br />
<b>Alerta</b><br />
Não utilizem estes containers em produção, estão configurados apenas para testes rápidos.<br />
<br />
<b>Como instalar.</b><br />
<br />
1. Clone este repositório do git no seu computador.<br />
   git clone https://github.com/netocosta/docker-php5-php7-mysql<br />
<br />
2. Descompacte o arquivo "mysql_data.zip".<br />
   unzip mysql_data.zip<br />
<br />
3. Levante os conteiners, o docker-compose irá baixar as imagens.<br />
   docker-compose up -d<br />
<br />
<b>O que temos</b><br />
<br />
O servidor PHP5 está configurado para rodar na porta 8085.<br />
O servidor PHP7 está configurado para rodar na porta 8087.<br />
O servidor MySQL está configurado para rodar na porta padrão 3306.<br />
<br />
<b>Como acessar.</b><br />
<br />
Acesse pelo navegador: http://localhost:port/<br />
Onde, a porta são as informadas anteriormente: 8085 para o php5, e 8087 para o php7.<br />
<br />
<b>Arvore de arquivos</b><br />
.<br />
│ docker-compose.yml -> Arquivo do docker-compose<br />
│ mysql_data.zip -> Dados do MySQL<br />
│ README.md -> README do GIT<br />
|<br />
| php5 -> Diretório do host do php5.<br />
├── index.php -> Arquivo index para teste.<br />
│<br />
│ php7 -> Diretório do host do php7.<br />
├── index.php -> Arquivo index para teste.<br />
<br />
<b>Volumes do Docker</b><br />
<br />
O docker-compose está configurado para que os arquivos principais sejam "hospedados" no seu computador. Ou seja, se a qualquer momento você quiser remover os containers, suas alterações no banco de dados e nos arquivos do php5 e php7, ainda estarão disponíveis.<br />
<br />
./mysql_data/ -> suas alteracoes no banco<br />
./php5/ -> suas alteracoes nos arquivos do php5<br />
./php7/ -> suas alterações nos arquivos do php7<br />
<br />
A qualquer momento, basta efetuar o passos 2 e 3 do "Como Instalar" e tudo estará funcionando da mesma maneira.<br />
<br />
<b>Bom uso!</b><br />
<br />
Neto Costa - netocjp@gmail.com
