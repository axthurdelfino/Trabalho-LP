# 📚 Sistema Biblioteca

Sistema de gerenciamento de biblioteca desenvolvido em **PHP**, utilizando uma arquitetura baseada em **MVC + DAL (Data Access Layer)** para a disciplina de **Linguagem de Programação (LP)**.

## 👥 Integrantes

* Arthur Delfino
* Felipe Torres
* Rafael Maschio
* Kaique Cruz

---

## 📖 Sobre o Projeto

O Sistema Biblioteca tem como objetivo realizar o gerenciamento de:

* Livros
* Autores
* Categorias
* Leitores
* Empréstimos

O sistema permite o controle completo do acervo da biblioteca, incluindo a realização e devolução de empréstimos, além do controle automático da quantidade de exemplares disponíveis.

---

## ✨ Funcionalidades

### 📚 Livros

* Cadastrar livro;
* Editar livro;
* Excluir livro;
* Listar livros;
* Visualizar detalhes do livro.

### ✍️ Autores

* Cadastrar autor;
* Editar autor;
* Excluir autor;
* Listar autores;
* Visualizar detalhes do autor.

### 🏷️ Categorias

* Cadastrar categoria;
* Editar categoria;
* Excluir categoria;
* Listar categorias;
* Visualizar detalhes da categoria.

### 👤 Leitores

* Cadastrar leitor;
* Editar leitor;
* Excluir leitor;
* Listar leitores;
* Visualizar detalhes do leitor.

### 🔄 Empréstimos

* Realizar empréstimos;
* Registrar devoluções;
* Consultar empréstimos;
* Visualizar detalhes de um empréstimo;
* Atualização automática do estoque de livros.

---

## 🏗️ Arquitetura do Projeto

O projeto segue uma organização inspirada no padrão **MVC**.

```text
MODEL/
│
├── Classes que representam as entidades do sistema
│   (Livro, Autor, Leitor, Categoria, Empréstimo)

DAL/
│
├── Responsável pelo acesso ao banco de dados
│   (SELECT, INSERT, UPDATE e DELETE)

VIEW/
│
├── Interface do usuário
├── Formulários
├── Listagens
├── Páginas de detalhes
└── Arquivos responsáveis pelo fluxo das operações
```

Fluxo básico:

```text
Usuário
   ↓
VIEW
   ↓
Controller (op*.php)
   ↓
MODEL
   ↓
DAL
   ↓
Banco de Dados
```

---

## 🗄️ Banco de Dados

O sistema utiliza um banco de dados relacional contendo as seguintes entidades:

* Autor
* Categoria
* Livro
* Leitor
* Empréstimo

Relacionamentos principais:

```text
Autor ───< Livro >─── Categoria
                 │
                 │
            Empréstimo
                 │
                 │
               Leitor
```

---

## 🔒 Regras de Negócio

* Não é permitido realizar empréstimos de livros sem exemplares disponíveis;
* O estoque é atualizado automaticamente ao realizar um empréstimo;
* O estoque é restaurado após a devolução;
* O sistema utiliza transações para garantir a integridade dos dados;
* As entradas do usuário passam por validações antes de serem persistidas.

---

## 🛠️ Tecnologias Utilizadas

* PHP
* HTML5
* CSS3
* JavaScript
* MySQL
* PDO

---

## 🚀 Como Executar

1. Clone o repositório:

```bash
git clone https://github.com/axthurdelfino/Trabalho-LP.git
```

2. Coloque o projeto dentro do diretório do servidor local:

* XAMPP → `htdocs`
* WAMP → `www`

3. Crie o banco de dados MySQL.

4. Importe o script SQL do projeto.

5. Configure as credenciais de conexão com o banco.

6. Inicie o servidor e acesse:

```text
http://localhost/bibliotecasv
```

---

## 📷 Funcionalidades Implementadas

* ✅ CRUD de Autores
* ✅ CRUD de Categorias
* ✅ CRUD de Livros
* ✅ CRUD de Leitores
* ✅ CRUD de Empréstimos
* ✅ Controle de estoque
* ✅ Sistema de autenticação
* ✅ Validações de formulários
* ✅ Páginas de detalhes

---

## 📄 Licença

Projeto desenvolvido exclusivamente para fins acadêmicos na disciplina de Linguagem de Programação.
