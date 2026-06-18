# Trabalho-LP

Projeto backend da biblioteca



ORDEM DO BACKEND - SISTEMA BIBLIOTECA

1. Banco e conexao
   [x] DAL/biblioteca.sql
   [x] DAL/conexao.php

2. MODEL
   [x] MODEL/autor.php
   [x] MODEL/categoria.php
   [x] MODEL/leitor.php
   [x] MODEL/livro.php
   [x] MODEL/emprestimo.php
   [x] MODEL/usuario.php

3. DAL - proximo passo
   [ ] DAL/autor.php
       Metodos: Select(), SelectById($id), Insert($autor), Update($autor), Delete($id)

   [ ] DAL/categoria.php
       Metodos: Select(), SelectById($id), Insert($categoria), Update($categoria), Delete($id)

   [ ] DAL/leitor.php
       Metodos: Select(), SelectById($id), Insert($leitor), Update($leitor), Delete($id)

   [ ] DAL/livro.php
       Metodos: Select(), SelectById($id), Insert($livro), Update($livro), Delete($id)

   [ ] DAL/usuario.php
       Metodo principal: SelectByLogin($login)

   [ ] DAL/emprestimo.php
       Metodos: Select(), SelectById($id), Insert($emprestimo), Delete($id), Devolver($id)

4. Operacoes backend das telas
   [ ] VIEW/autor/opinsautor.php
   [ ] VIEW/autor/opedtautor.php
   [ ] VIEW/autor/opremautor.php

   [ ] VIEW/categoria/opinscategoria.php
   [ ] VIEW/categoria/opedtcategoria.php
   [ ] VIEW/categoria/opremcategoria.php

   [ ] VIEW/leitor/opinsleitor.php
   [ ] VIEW/leitor/opedtleitor.php
   [ ] VIEW/leitor/opremleitor.php

   [ ] VIEW/livro/opinslivro.php
   [ ] VIEW/livro/opedtlivro.php
   [ ] VIEW/livro/opremlivro.php

   [ ] VIEW/emprestimo/opinsemprestimo.php
       Deve diminuir livro.quantidade_disponivel.

   [ ] VIEW/emprestimo/opdevolucao.php
       Deve aumentar livro.quantidade_disponivel e marcar emprestimo como devolvido.

5. HTML seco para testar backend
   [ ] VIEW/autor/frminsautor.php, frmedtautor.php, lstAutor.php
   [ ] VIEW/categoria/frminscategoria.php, frmedtcategoria.php, lstCategoria.php
   [ ] VIEW/leitor/frminsleitor.php, frmedtleitor.php, lstLeitor.php
   [ ] VIEW/livro/frminslivro.php, frmedtlivro.php, lstLivro.php
   [ ] VIEW/emprestimo/frminsemprestimo.php, lstEmprestimo.php

6. Login e sessao
   [ ] VIEW/index.php
   [ ] VIEW/login.php
   [ ] VIEW/logout.php
   [ ] VIEW/menu.php
   [ ] VIEW/home.php

7. Requisitos para lembrar
   [ ] 4 CRUDs funcionando: autor, categoria, leitor, livro
   [ ] Movimentacao de dados: emprestimo/devolucao atualizando quantidade_disponivel
   [ ] Validacao em 3 formularios de inserir
   [ ] Login/senha
   [ ] GET/POST entre paginas
   [ ] GitHub usado durante o desenvolvimento
   [ ] CSS framework e visual podem ficar com o grupo
