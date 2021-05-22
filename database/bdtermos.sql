-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Maio-2021 às 18:31
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtermos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtermo`
--

CREATE TABLE `tbtermo` (
  `idTermo` int(11) NOT NULL,
  `nomeTermo` varchar(150) NOT NULL,
  `descTermo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbtermo`
--

INSERT INTO `tbtermo` (`idTermo`, `nomeTermo`, `descTermo`) VALUES
(1, 'Algorithm', 'Uma série de instruções ou passos de procedimentos para a solução de um problema específico.'),
(2, 'Caption ', 'Legenda, título, cabeçalho.'),
(3, 'Alt Key', 'Tecla Alt (tecla especial em um teclado de PC usada para ativar funções especiais).'),
(4, 'Flowchart', 'Gráfico, diagrama que mostra informação como uma série de linhas ou blocos.'),
(5, 'Amplifier ', 'Amplificador.'),
(6, 'Close file', 'Fechar um arquivo.'),
(7, 'Analog / Digital Converter', 'Conversor analógico / digital.'),
(8, 'Data control', 'Controle de dados, gereciamento de dados.'),
(9, 'Auto activate', 'Ativar automaticamente.'),
(10, 'Backup', '(no MS –DOS) Comando para salvar os dados de um disco rígido em disquetes.'),
(11, 'BOS (Basic Operating System', 'Sistema Operacional Básico.'),
(12, 'Bottom', 'Fundo de alguma coisa inferior.'),
(13, 'Bug', 'Erro, falha em programa de computador.'),
(14, 'Byte', 'Byte, grupo de bits ou dígitos binários (geralmente oito que ocomputador opera como uma unidade simples).'),
(15, 'Caps Lock', '(trava das maiúsculas) Tecla que permite que todos oscaracteres sejam digitados em maiúsculas.'),
(16, 'Compiler', 'Compilar, converter um programa de linguagem de alto nível em um programa em código de máquina que pode ser executado diretamente.'),
(17, 'Data Field', 'Campo de dados, parte de uma situação, instrução decomputador que contém a posição do dado.'),
(18, 'DOS (Disk Operating System)', 'Sistema Operacional em disco.'),
(19, 'Directory', 'Diretório ou lista; Método de organização de arquivos armazenados em disco.'),
(20, 'Display', 'Exibir, mostrar informação.'),
(21, 'Extract file', 'Extrair arquivo.'),
(22, 'Edge', 'Borda / Margem.'),
(23, 'Failure', 'Falha, avaria, pane; Qualquer problema grave causado por defeito no hardware ou software.'),
(24, 'File set', 'Conjunto de arquivos.'),
(25, 'Flowchart ', 'Fluxograma.'),
(26, 'Hardware', 'Unidades físicas, componentes, circuitos integrados e discos e mecanismos que compõem um computador ou seus periféricos.'),
(27, 'Hide Edges', 'Esconder, ocultar bordas.'),
(28, 'Integer', 'Número inteiro (sem componentes fracionários).'),
(29, 'Ink', 'Tinta de caneta, de impressora.'),
(30, 'USB', 'Circuito paralelo universal em série. É um tipo de conexão para ligar e usar (Plug and Play) que permite a conexão de periféricos sem a\r\nnecessidade de desligar o computador.'),
(31, 'Tab', 'Tabular, organizar textos em colunas.'),
(32, 'Screen', 'Proteger alguma coisa com uma tela.'),
(33, 'Scroll', 'Rolar a tela.'),
(34, 'Server', 'Servidor.'),
(35, 'Set up', 'Preparar equipamento para operação.'),
(36, 'Shift', 'Mudar, deslocar, mudança.'),
(37, 'Short cut', 'Atalho.'),
(38, 'RAM', '(Randon Access Memory) Memória de acesso aleatório.'),
(39, 'Reset', 'Restaurar, inicializar.'),
(40, 'Ruler', 'Régua.'),
(41, 'ROM', '(Read Only Memory) Memória somente para leitura.'),
(42, 'Password', 'Senha.'),
(43, 'Lock', 'Travar / bloquear.'),
(44, 'Load', 'Carregar.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbtermo`
--
ALTER TABLE `tbtermo`
  ADD PRIMARY KEY (`idTermo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbtermo`
--
ALTER TABLE `tbtermo`
  MODIFY `idTermo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
