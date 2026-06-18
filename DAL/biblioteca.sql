CREATE DATABASE IF NOT EXISTS `biblioteca`
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE `biblioteca`;

DROP TABLE IF EXISTS `emprestimo`;
DROP TABLE IF EXISTS `livro`;
DROP TABLE IF EXISTS `leitor`;
DROP TABLE IF EXISTS `autor`;
DROP TABLE IF EXISTS `categoria`;
DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descricao` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `leitor` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cidade` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ano_publicacao` int(4) NOT NULL,
  `quantidade_total` int(11) NOT NULL,
  `quantidade_disponivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `emprestimo` (
  `id` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `id_leitor` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `data_prevista_devolucao` date NOT NULL,
  `data_devolucao` date DEFAULT NULL,
  `status` enum('emprestado','devolvido') NOT NULL DEFAULT 'emprestado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_usuario_login` (`login`);

ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `leitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_leitor_email` (`email`);

ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_livro_autor` (`id_autor`),
  ADD KEY `fk_livro_categoria` (`id_categoria`);

ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_emprestimo_livro` (`id_livro`),
  ADD KEY `fk_emprestimo_leitor` (`id_leitor`);

ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `leitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `livro`
  ADD CONSTRAINT `fk_livro_autor`
    FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id`)
    ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_livro_categoria`
    FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`)
    ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `emprestimo`
  ADD CONSTRAINT `fk_emprestimo_livro`
    FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id`)
    ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_emprestimo_leitor`
    FOREIGN KEY (`id_leitor`) REFERENCES `leitor` (`id`)
    ON DELETE RESTRICT ON UPDATE CASCADE;

INSERT INTO `usuario` (`id`, `login`, `senha`, `nome`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Administrador'),
(2, 'biblioteca', '202cb962ac59075b964b07152d234b70', 'Bibliotecario');

INSERT INTO `categoria` (`id`, `descricao`) VALUES
(1, 'Romance'),
(2, 'Tecnologia'),
(3, 'Historia'),
(4, 'Literatura Brasileira');

INSERT INTO `autor` (`id`, `nome`, `nacionalidade`) VALUES
(1, 'Machado de Assis', 'Brasileira'),
(2, 'Clarice Lispector', 'Brasileira'),
(3, 'Robert C. Martin', 'Estadunidense'),
(4, 'Yuval Noah Harari', 'Israelense');

INSERT INTO `leitor` (`id`, `nome`, `email`, `telefone`, `cidade`) VALUES
(1, 'Ana Silva', 'ana@email.com', '(18) 99999-1111', 'Assis'),
(2, 'Bruno Souza', 'bruno@email.com', '(18) 99999-2222', 'Candido Mota'),
(3, 'Carla Lima', 'carla@email.com', '(18) 99999-3333', 'Marilia');

INSERT INTO `livro` (`id`, `titulo`, `id_autor`, `id_categoria`, `ano_publicacao`, `quantidade_total`, `quantidade_disponivel`) VALUES
(1, 'Dom Casmurro', 1, 4, 1899, 3, 3),
(2, 'A Hora da Estrela', 2, 4, 1977, 2, 2),
(3, 'Codigo Limpo', 3, 2, 2008, 4, 4),
(4, 'Sapiens', 4, 3, 2011, 2, 2);
