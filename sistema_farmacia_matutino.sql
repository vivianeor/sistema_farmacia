-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 19-Out-2020 às 13:48
-- Versão do servidor: 5.7.12
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_farmacia_matutino`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `codcategoria` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`codcategoria`, `categoria`) VALUES
(1, '0Anti-biotico5'),
(3, 'Anti-inflamatorio'),
(4, 'Anti-termico'),
(5, 'Analgesico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `codcidade` int(11) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`codcidade`, `cidade`, `uf`) VALUES
(1, 'Sao Bernardo do Campo', 'SP'),
(2, 'Santo Andre', 'SP'),
(3, 'Diadema', 'SP'),
(4, 'Maua', 'SP'),
(5, 'Sao Caetano do Sul', 'SP'),
(6, 'Santos1', 'SP'),
(7, 'Guarulhos', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE `entrada` (
  `codentrada` int(11) NOT NULL,
  `transportadora_codtransportadora` int(11) NOT NULL,
  `dataped` date NOT NULL,
  `dataentr` date NOT NULL,
  `total` float NOT NULL,
  `frete` float NOT NULL,
  `numnf` int(11) NOT NULL,
  `imposto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entrada`
--

INSERT INTO `entrada` (`codentrada`, `transportadora_codtransportadora`, `dataped`, `dataentr`, `total`, `frete`, `numnf`, `imposto`) VALUES
(1, 1, '2020-01-20', '2020-02-26', 250, 10, 15488451, 27),
(2, 2, '2020-06-21', '2020-07-01', 547.99, 32, 1478854, 37),
(3, 4, '2020-06-21', '2020-08-26', 390, 22, 25478136, 42);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `codfornecedor` int(11) NOT NULL,
  `cidade_codcidade` int(11) NOT NULL,
  `fornecedor` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `num` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` char(9) NOT NULL,
  `contato` varchar(45) NOT NULL,
  `cnpj` char(18) NOT NULL,
  `insc` varchar(45) NOT NULL,
  `tel` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`codfornecedor`, `cidade_codcidade`, `fornecedor`, `endereco`, `num`, `bairro`, `cep`, `contato`, `cnpj`, `insc`, `tel`) VALUES
(1, 3, 'GAM Fornecedor', 'Av Dom Joao', 70, 'Canhema', '087956064', '11978453265', '000987421215', '254', '1143385544'),
(2, 1, 'Distrimed', 'Av Maracai', 5454, 'Morumbi', '07781515', '11943358777', '0001548712', '257', '1194781214'),
(3, 3, 'Armazen Geral', 'Avenida Campo', 1577, 'Colina', '09771544', '11443358777', '000245787', '369', '1194878111'),
(4, 4, 'Armazen Luiz Ltda', 'Alameda Ulisses', 145, 'Jardim Moraes', '3365697', '114778784', '000249998', '105', '11948846321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itementrada`
--

CREATE TABLE `itementrada` (
  `coditementrada` int(11) NOT NULL,
  `produto_codproduto` int(11) NOT NULL,
  `entrada_codentrada` int(11) NOT NULL,
  `lote` varchar(45) NOT NULL,
  `qtde` int(11) NOT NULL,
  `valor` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itementrada`
--

INSERT INTO `itementrada` (`coditementrada`, `produto_codproduto`, `entrada_codentrada`, `lote`, `qtde`, `valor`) VALUES
(1, 1, 1, '15548', 50, 15.00),
(2, 1, 1, '15548', 30, 150.00),
(3, 3, 3, '48981', 70, 500.00),
(4, 4, 3, '3654', 110, 789.99),
(5, 2, 2, '3654', 75, 699.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemsaida`
--

CREATE TABLE `itemsaida` (
  `coditemsaida` int(11) NOT NULL,
  `saida_codsaida` int(11) NOT NULL,
  `produto_codproduto` int(11) NOT NULL,
  `lote` varchar(45) NOT NULL,
  `qtde` int(15) NOT NULL,
  `valor` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itemsaida`
--

INSERT INTO `itemsaida` (`coditemsaida`, `saida_codsaida`, `produto_codproduto`, `lote`, `qtde`, `valor`) VALUES
(1, 1, 1, '15548', 50, 150.00),
(2, 2, 2, '48981', 30, 500.00),
(3, 3, 2, '1243', 70, 789.99),
(4, 2, 3, '8745', 130, 545.55);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `codloja` int(11) NOT NULL,
  `cidade_codcidade` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `num` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `tel` char(14) NOT NULL,
  `insc` varchar(45) NOT NULL,
  `cnpj` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`codloja`, `cidade_codcidade`, `nome`, `endereco`, `num`, `bairro`, `tel`, `insc`, `cnpj`) VALUES
(1, 1, 'Lojas Amaro', 'Rua Municipal', 114, 'Matilde', '11987452365', '257', '000245787'),
(2, 1, 'Drogasil', 'Rua Marechal Deodoro', 1500, 'Centro', '119548481', '21213', '000144757'),
(3, 5, 'DrogaRaia', 'Rua Goiais', 41, 'Vila Barcelo', '11974858966', '3325', '0001548712'),
(4, 3, 'Drogaria Paulo M', 'Av Dom Pedro II', 1, 'Matilde', '11987452365', '369', '00005448411');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(11) NOT NULL,
  `categoria_codcategoria` int(11) NOT NULL,
  `fornecedor_codfornecedor` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `controlado` tinyint(1) NOT NULL,
  `qtdemin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codproduto`, `categoria_codcategoria`, `fornecedor_codfornecedor`, `descricao`, `peso`, `controlado`, `qtdemin`) VALUES
(1, 1, 1, 'Cimed', '80g', 1, 90),
(2, 3, 3, 'Eurofarma', '30g', 0, 150),
(3, 4, 3, 'Medley', '15g', 0, 50),
(4, 5, 1, 'Ache', '80g', 0, 90),
(5, 1, 4, 'EMS', '63g', 1, 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE `saida` (
  `codsaida` int(11) NOT NULL,
  `loja_codloja` int(11) NOT NULL,
  `transportadora_codtransportadora` int(11) NOT NULL,
  `total` double(6,2) NOT NULL,
  `frete` double(6,2) NOT NULL,
  `imposto` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `saida`
--

INSERT INTO `saida` (`codsaida`, `loja_codloja`, `transportadora_codtransportadora`, `total`, `frete`, `imposto`) VALUES
(1, 1, 1, 115.00, 10.00, 20.54),
(2, 1, 2, 359.99, 20.00, 14.49),
(3, 1, 3, 879.00, 35.00, 22.99),
(4, 3, 2, 800.00, 25.99, 48.55);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transportadora`
--

CREATE TABLE `transportadora` (
  `codtransportadora` int(11) NOT NULL,
  `cidade_codcidade` int(11) NOT NULL,
  `transportadora` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `num` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` char(9) NOT NULL,
  `cnpj` char(18) NOT NULL,
  `insc` varchar(45) NOT NULL,
  `contato` varchar(45) NOT NULL,
  `tel` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `transportadora`
--

INSERT INTO `transportadora` (`codtransportadora`, `cidade_codcidade`, `transportadora`, `endereco`, `num`, `bairro`, `cep`, `cnpj`, `insc`, `contato`, `tel`) VALUES
(1, 3, 'Transportadora ABC', 'Alameda Ulisses', 114, 'Vila Matilde', '094485121', '0001548712', '124', '11443358777', '1142186532'),
(2, 4, 'TransportJA', 'Rua Argentina', 14, 'Nova Morada', '09878451', '0009894221', '544', '1148777123', '1198451233'),
(3, 1, 'JWA Logistica', 'Rua Maracai', 78, 'Vila Machado', '09784544', '000478451215', '457', '11947841515', '1143389955'),
(4, 5, 'Artur Morato Transportes', 'Av Dom Pedro II', 1400, 'Morumbi', '09845600', '0009854545', '1125', '11974852365', '11944863311'),
(5, 7, 'Jose Transporte', 'Alameda Joao Silvino', 2001, 'Vila Machado', '0999563', '000245787', '369', '11947841515', '1143871547');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codcategoria`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`codcidade`);

--
-- Indexes for table `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`codentrada`),
  ADD KEY `transportadora_codtransportadora` (`transportadora_codtransportadora`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`codfornecedor`),
  ADD KEY `cidade_codcidade` (`cidade_codcidade`);

--
-- Indexes for table `itementrada`
--
ALTER TABLE `itementrada`
  ADD PRIMARY KEY (`coditementrada`),
  ADD KEY `produto_codproduto` (`produto_codproduto`),
  ADD KEY `entrada_codentrada` (`entrada_codentrada`);

--
-- Indexes for table `itemsaida`
--
ALTER TABLE `itemsaida`
  ADD PRIMARY KEY (`coditemsaida`),
  ADD KEY `saida_codsaida` (`saida_codsaida`),
  ADD KEY `produto_codproduto` (`produto_codproduto`);

--
-- Indexes for table `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`codloja`),
  ADD KEY `cidade_codcidade` (`cidade_codcidade`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`),
  ADD KEY `categoria_codcategoria` (`categoria_codcategoria`),
  ADD KEY `fornecedor_codfornecedor` (`fornecedor_codfornecedor`);

--
-- Indexes for table `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`codsaida`),
  ADD KEY `loja_codloja` (`loja_codloja`),
  ADD KEY `transportadora_codtransportadora` (`transportadora_codtransportadora`);

--
-- Indexes for table `transportadora`
--
ALTER TABLE `transportadora`
  ADD PRIMARY KEY (`codtransportadora`),
  ADD KEY `cidade_codcidade` (`cidade_codcidade`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`transportadora_codtransportadora`) REFERENCES `transportadora` (`codtransportadora`),
  ADD CONSTRAINT `entrada_ibfk_2` FOREIGN KEY (`transportadora_codtransportadora`) REFERENCES `transportadora` (`codtransportadora`);

--
-- Limitadores para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `fornecedor_ibfk_1` FOREIGN KEY (`cidade_codcidade`) REFERENCES `cidade` (`codcidade`),
  ADD CONSTRAINT `fornecedor_ibfk_2` FOREIGN KEY (`cidade_codcidade`) REFERENCES `cidade` (`codcidade`);

--
-- Limitadores para a tabela `itementrada`
--
ALTER TABLE `itementrada`
  ADD CONSTRAINT `itementrada_ibfk_1` FOREIGN KEY (`produto_codproduto`) REFERENCES `produto` (`codproduto`),
  ADD CONSTRAINT `itementrada_ibfk_2` FOREIGN KEY (`entrada_codentrada`) REFERENCES `entrada` (`codentrada`);

--
-- Limitadores para a tabela `itemsaida`
--
ALTER TABLE `itemsaida`
  ADD CONSTRAINT `itemsaida_ibfk_1` FOREIGN KEY (`saida_codsaida`) REFERENCES `saida` (`codsaida`),
  ADD CONSTRAINT `itemsaida_ibfk_2` FOREIGN KEY (`produto_codproduto`) REFERENCES `produto` (`codproduto`);

--
-- Limitadores para a tabela `loja`
--
ALTER TABLE `loja`
  ADD CONSTRAINT `loja_ibfk_1` FOREIGN KEY (`cidade_codcidade`) REFERENCES `cidade` (`codcidade`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`categoria_codcategoria`) REFERENCES `categoria` (`codcategoria`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`fornecedor_codfornecedor`) REFERENCES `fornecedor` (`codfornecedor`);

--
-- Limitadores para a tabela `saida`
--
ALTER TABLE `saida`
  ADD CONSTRAINT `saida_ibfk_1` FOREIGN KEY (`loja_codloja`) REFERENCES `loja` (`codloja`),
  ADD CONSTRAINT `saida_ibfk_2` FOREIGN KEY (`transportadora_codtransportadora`) REFERENCES `transportadora` (`codtransportadora`);

--
-- Limitadores para a tabela `transportadora`
--
ALTER TABLE `transportadora`
  ADD CONSTRAINT `transportadora_ibfk_1` FOREIGN KEY (`cidade_codcidade`) REFERENCES `cidade` (`codcidade`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
