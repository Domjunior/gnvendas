# gnvendas

Para inicializar o projeto o primeiro passo é baixar todos esses arquivos dentro de uma pasta chamada www.
Essa pasta  se encontra dentro da pasta wamp64 que é proveniente da instalação do Wampserver. Caminho de referência: C:/wamp64/www/"os arquivos presentes esse diretório".

Feito isso,torna-se necessário a alteração do arquivo "conexão.php" nas linhas 4 e 5, respectivamente, $username e $password, para seus dados do mysql.
Após isso deve-se criar uma banco de dados com o nome "gnvendas" n.esse usuário
Criado o banco de dados, deve-se criar duas tabelas dentro desse banco "gnvendas":
Primeira tabela com o nome "produtos" e com duas colunas, a primeira com o nome (nome) e a segunda (valor).
Segunda tabela com o nome "compras" e com duas colunas, a primeira com o nome (idboleto) e a segunda (linkboleto).

Iniacialize o wampserver.

Feito os passos anteriores, agora basta abrir os arquivos php via localhost para poder visualizaras páginas do projeto.
Abrir primeiro a página inicio.php (http://localhost/boleto/boleto/inicio.php)
