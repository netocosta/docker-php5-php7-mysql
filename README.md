# Docker - Servidor PHP5, PHP7 e Mysql

### Requisitos

Internet ;-)
Docker

### Uso

Esses containers, inicialmente, foram montador para mostrar como converter as funcoes mysql*() do PHP5 para as funções mysqli*() do PHP7. Porém seu uso pode ter infinitos objetivos.

### Alerta

Não utilizem estes containers em produção, estão configurados apenas para testes rápidos.

### Como instalar.

1. Clone este repositório do git no seu computador.

   > git clone https://github.com/netocosta/docker-php5-php7-mysql

2. Descompacte o arquivo "mysql_data.zip".

   > unzip mysql_data.zip

3. Levante os conteiners, o docker-compose irá baixar as imagens.
   > docker-compose up -d
   
#### Ainda em dúvidas de como instalar? Assista o Vídeo!

[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/I8qMMCzo5VI/0.jpg)](https://www.youtube.com/watch?v=I8qMMCzo5VI)

### O que temos

O servidor PHP5 está configurado para rodar na porta 8085.
O servidor PHP7 está configurado para rodar na porta 8087.
O servidor MySQL está configurado para rodar na porta padrão 3306.

### Como acessar.

Acesse pelo navegador: http://localhost:port/
Onde, a porta são as informadas anteriormente: 8085 para o php5, e 8087 para o php7.

### Arquivo / Função

| Arquivo            | Função                            |
| ------------------ | --------------------------------- |
| docker-compose.yml | Arquivo do docker-compose         |
| mysql_data.zip     | Dados do MySQL compactado         |
| php5/index.php     | Arquivo index para teste do PHP5. |
| php7/index.php     | Arquivo index para teste do PHP7. |
| README.md          | README do git.                    |

### Volumes do Docker

O docker-compose está configurado para que os arquivos principais sejam "hospedados" no seu computador. Ou seja, se a qualquer momento você quiser remover os containers, suas alterações no banco de dados e nos arquivos do php5 e php7, ainda estarão disponíveis.

A qualquer momento, basta efetuar o passos 2 e 3 do "Como Instalar" e tudo estará funcionando da mesma maneira.

### Dúvidas?

> Neto Costa - netocjp@gmail.com

# Faça bom uso
