-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 12/01/2016 às 07:52
-- Versão do servidor: 5.5.46-0ubuntu0.14.04.2
-- Versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `maps`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ativo` int(11) NOT NULL DEFAULT '1',
  `nome` varchar(63) NOT NULL,
  `idpolo` int(11) NOT NULL,
  `numalunos` int(22) NOT NULL,
  `nivelgrad` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Fazendo dump de dados para tabela `curso`
--

INSERT INTO `curso` (`id`, `ativo`, `nome`, `idpolo`, `numalunos`, `nivelgrad`) VALUES
(1, 1, 'Letras – Espanhol/Licenciaturas', 70, 422, 2),
(2, 1, 'Licenciatura em Geografia', 69, 151, 1),
(3, 1, 'Educ.Física Infantil e Anos Iniciais', 68, 222, 2),
(4, 1, 'Pedagogia', 71, 123, 1),
(5, 1, 'Licenciatura em Fisica', 67, 30, 1),
(6, 1, 'Letras - Espanhol/Literatura', 67, 40, 1),
(7, 1, 'Licenciatura em Geografia', 67, 23, 1),
(8, 1, 'Educ. Física Infantil e Anos Iniciais', 67, 15, 2),
(9, 1, 'Ensino de Filosofia no Ensino Médio', 67, 16, 2),
(10, 1, 'Ensino de Matemática no Ensino Médio', 67, 14, 2),
(11, 0, 'Ensino de Sociologia no Ensino Médio', 67, 11, 2),
(12, 1, 'Gestão de Organização Pública em Saúde', 67, 16, 2),
(13, 1, 'Gestão Pública', 67, 11, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `poloinfo`
--

CREATE TABLE IF NOT EXISTS `poloinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpolo` int(11) NOT NULL,
  `contato` varchar(90) NOT NULL,
  `email` varchar(60) NOT NULL,
  `coordenacao` varchar(40) NOT NULL,
  `coordemail` varchar(60) NOT NULL,
  `img` varchar(90) NOT NULL,
  `endereco` varchar(600) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Fazendo dump de dados para tabela `poloinfo`
--

INSERT INTO `poloinfo` (`id`, `idpolo`, `contato`, `email`, `coordenacao`, `coordemail`, `img`, `endereco`) VALUES
(1, 67, '(55) 3220 8007', 'polouabufsm@nte.ufsm.br', 'Cordenador Santa Maria', 'coordenacao@cead.ufsm.br', '', 'Av. Roraima, n. 1000 Núcleo de Tecnologia Educacional Prédio 14, sala 106 Camobi CEP 97105-900  '),
(2, 68, '(55) 3434-2342, (52) 3442-2244', 'massa@gmail.com', 'eita que coisa ', 'massa@gmail.com', '', 'Rua John Doe Massasss'),
(3, 69, '(55) 2323-2333', 'asdas@gmail.com', 'CoordSD', 'asdas@gmail.com', '', 'Rua doida de curitibz'),
(4, 70, '432432', 'asdas@gmail.com', 'asdsad', 'asdas@gmail.com', '', 'dasda'),
(5, 71, '(55) 4234-2424 ', 'ggg@gmail.com', 'asdadsd', 'ggg@gmail.com', '', 'Rua Batata z'),
(6, 73, '(55) 3433-2343', 'magicai@gmail.com', 'asdas', 'magicai@gmail.com', '', 'Rua do Condado'),
(7, 74, '99 8888-4444', 'godzilla@mail.jp', 'Mijanomuro Sensei', 'mmurokai@tokyo.jp', '', 'Sujiro kifuja, R809 C200'),
(8, 75, '', '', '', '', '', ''),
(9, 76, '', '', '', '', '', ''),
(10, 77, '', '', '', '', '', ''),
(11, 78, '', '', '', '', '', ''),
(12, 79, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `polos`
--

CREATE TABLE IF NOT EXISTS `polos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(77) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `address` varchar(400) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Fazendo dump de dados para tabela `polos`
--

INSERT INTO `polos` (`id`, `name`, `latitude`, `longitude`, `address`, `ativo`) VALUES
(67, 'Santa Maria, RS, Brasil', -29.6873, -53.8154, 'Santa Maria, RS, Brasil', 1),
(68, 'Caxias do Sul - RS, Brasil', -29.1634, -51.1797, 'Caxias do Sul - RS, Brasil', 1),
(69, 'Curitiba, PR, Brasil', -25.4244, -49.2654, 'Curitiba, PR, Brasil', 0),
(70, 'Hortolândia - SP, Brasil', -22.8533, -47.2147, 'Hortolândia - SP, Brasil', 0),
(71, 'Muriaé, MG, Brasil', -21.1306, -42.3696, 'Muriaé, MG, Brasil', 1),
(73, 'Itajaí - SC, Brasil', -26.9106, -48.671, 'Itajaí - SC, Brasil', 0),
(74, 'Tokyo, Japão', 35.6895, 139.692, 'Tokyo, Japão', 0),
(75, 'Batatais - SP, Brasil', -20.8933, -47.5926, 'Batatais - SP, Brasil', 1),
(76, 'Gramado - RS, Brasil', -29.3746, -50.8764, 'Gramado - RS, Brasil', 1),
(77, 'São Paulo - SP, Brasil', -23.5505, -46.6333, 'São Paulo - SP, Brasil', 1),
(78, 'Agudo, RS, Brazil', -29.6262, -53.2396, 'Agudo, RS, Brazil', 1),
(79, 'Agudo, RS, Brasil', -29.6262, -53.2396, 'Agudo, RS, Brasil', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
