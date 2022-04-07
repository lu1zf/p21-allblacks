# Teste All Blacks

## Requisitos

  ### PHP
 - PHP 7.3 ou superior
 - [intl](http://php.net/manual/en/intl.requirements.php)

 Extensões do PHP:
- json
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml

### Outros softwares
 - Composer
 - Git
 - MySql
## Resumo

Para este teste, utilizei o framework codeigniter 4. O teste consiste na criação de uma base de dados dos torcedores dos all blacks a partir de um arquivo de planilha .xlsx, possibilidade de atualizar informações dos torcedores, registrar novos torcedores, excluí-los e importar novos torcedores via arquivo XML.

## Setup

Para rodar o projeto na sua máquina, considerando que você tenha todos os requisitos instalados, faça o seguinte:

### clone o repositório
Abra um novo terminal na pasta em que você quer clonar o projeto, e então digite:
```
git clone https://github.com/lu1zf/p21-allblacks
```
Em seguida, entre na pasta clonada:
```
cd p21-allblacks
```

### instale as dependências
Agora que você está dentro da pasta, digite o seguinte comando para instalar as dependências:
```
composer install
```
### crie seu arquivo .env
Para que o projeto possa ser executado, você precisa criar um arquivo ```.env``` com as variáveis de ambiente da aplicação, você pode usar o arquivo ```env``` que se encontra na raiz do projeto. Caso escolha fazer isso pelo terminal, digite:
```
cp env .env
```
Dentro do arquivo .env recém criado, atualize os dados a seguir:
```
...
database.default.hostname = <SEU HOSTNAME AQUI>
database.default.database = <SUA DATABASE AQUI>
database.default.username = <SEU USERNAME AQUI>
database.default.password = <SEU PASSWORD AQUI>
database.default.DBDriver = MySQLi
...
```
### Migração do banco de dados
Para que as tabelas sejam criadas no banco de dados e os torcedores sejam importados do sistema, você deve rodar o seguinte comando no terminal:
```
php spark migrate
```
Concluída a execução desse comando, os torcedores devem estar presentes no banco de dados, na tabela ```fans```.

Por fim, para rodar a aplicação, digite no console:
```
php spark serve
```
Caso ocorra tudo certo, você poderá acessar a aplicação no endereço ```http://localhost:8080/```.

## Status do teste
- [x] Importação inicial de torcedores via .XLSX
- [x] Importação de torcedores via XML
- [x] Edição de dados de torcedor
- [x] Criar novo torcedor
- [x] Deletar torcedor
- [ ] Envio de e-mails para torcedores cadastrados