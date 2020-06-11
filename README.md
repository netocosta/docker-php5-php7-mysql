# Docker - Servidor PHP5, PHP7 e Mysql

<b>Requisitos</b>

Internet ;-)
Docker

<b>Porque usar?</b>
Esses containers, inicialmente, foram montador para mostrar como converter as funcoes mysql*\*() do PHP5 para as funções mysqli*\*() do PHP7. Porém seu uso pode ter infinitos objetivos.

<b>Alerta</b>
Não utilizem estes containers em produção, estão configurados apenas para testes rápidos.

<b>Como instalar.</b>

1. Clone este repositório do git no seu computador.
   git clone https://github.com/netocosta/docker-php5-php7-mysql

2. Descompacte o arquivo "mysql_data.zip".
   unzip mysql_data.zip

3. Execute o build do docker-compose.
   docker-compose build

4. Levante os conteiners.
   docker-compose up -d

<b>O que temos</b>

O servidor PHP5 está configurado para rodar na porta 8085.
O servidor PHP7 está configurado para rodar na porta 8087.
O servidor MySQL está configurado para rodar na porta padrão 3306.

<b>Arvore de arquivos</b>
.
│ docker-compose.yml -> Arquivo do docker-compose
│ mysql_data.zip -> Dados do MySQL
│ php5.dockerfile -> Dockerfile do PHP5
│ php7.dockerfile -> Dockerfile do PHP7
│ README.md -> README do GIT
│
├───php5 -> Diretório do host do php5.
│ index.php -> Arquivo index para teste.
│
└───php7 -> Diretório do host do php7.
index.php -> Arquivo index para teste.

<b>Volumes do Docker</b>

O docker-compose está configurado para que os arquivos principais sejam "hospedados" no seu computador. Ou seja, se a qualquer momento você quiser remover os containers, suas alterações no banco de dados e nos arquivos do php5 e php7, ainda estarão disponíveis.

./mysql_data/ -> suas alteracoes no banco
./php5/ -> suas alteracoes nos arquivos do php5
./php7/ -> suas alterações nos arquivos do php7

A qualquer momento, basta efetuar o passos 2, 3 e 4 do "Como Instalar" e tudo estará funcionando da mesma maneira.

<b>Bom uso!</b>

Neto Costa - netocjp@gmail.com
