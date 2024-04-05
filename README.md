# Gerenciador de Álbuns

Este projeto demonstra a criação de um CRUD (Create, Read, Update, Delete) de álbuns musicais utilizando o framework Laravel.

### Funcionalidades

    ! Criação, visualização, edição e exclusão de álbuns.
    ! Upload de capa do álbum.
    ! Validação de formulários.


## O Código

#### PHP

    ! Controllers:
        - AlbumController: gerencia as ações do álbum (index, create, store, edit, update, destroy).
        - Rotas: definem como as URLs mapeam para as ações do controlador.

    ! Models:
        - Album: representa um álbum com atributos (nome, gravadora, ano, gênero, faixas, duração, imagem).

    ! Migrations:
        - create_albuns_table: cria a tabela do banco de dados para armazenar os dados do álbum.

    ! Views:
        - create.blade.php: formulário para criar um novo álbum.
        - edit.blade.php: formulário para editar um álbum.
        - list.blade.php: formulário para listar um álbum.

## Insights Adicionais

    ! Compreensão do framework: explorar os recursos do Laravel para um desenvolvimento eficiente.

    ! Interações com o banco de dados: entender as interações com o banco de dados para persistência de dados.

    ! Considerações de front-end: explorar a integração com frameworks ou bibliotecas de front-end para a experiência do usuário.

Observação: Este projeto serve como base para um CRUD de álbuns musicais.

## 1. PHP

    ! Verificação da Versão: Certifique-se de ter o PHP 7.2 ou superior instalado em seu computador. Você pode verificar a versão do PHP executando o comando no terminal.

        php -v

## 2. Composer

    ! Execute o comando no terminal para verificar se o Composer está instalado corretamente.

        composer --version 

## 3. MySQL

    ! Acesse o MySQL Workbench ou o terminal e configure o banco de dados e o usuário para o seu projeto.

## 4. Configurando o Ambiente de Desenvolvimento

    ! Configuração do arquivo .env:

    Abra o arquivo .env no projeto e configure as variáveis de ambiente para o seu banco de dados MySQL.
    
    Insira o nome do banco de dados, usuário, senha e porta do MySQL.

    ! Instalação das dependências:
        Execute o comando no terminal para instalar as dependências do projeto.

        composer install 

## 5. Executando o Projeto

    ! Início do servidor de desenvolvimento:
        Execute o comando no terminal para iniciar o servidor de desenvolvimento do Laravel.

        php artisan serve

    O servidor estará disponível na porta 8000 por padrão.

    ! Acessando o projeto:
        Abra o navegador e acesse a URL http://localhost:8000 para visualizar o projeto em execução.
