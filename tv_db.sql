-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jan-2022 às 13:11
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tv_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL,
  `data` varchar(30) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `album`
--

INSERT INTO `album` (`id`, `titulo`, `descricao`, `data`, `tipo`) VALUES
(2, 'ÁLBUM UNIPIAGET LIGA LÍDER CUP LG 2019', 'ÁLBUM UNIPIAGET LIGA LÍDER CUP LG 2019', '2019-11-19', 1),
(3, 'ÁLBUM ALMOÇO NATAL UNIPIAGET 2019', 'ÁLBUM ALMOÇO NATAL UNIPIAGET 2019', '2019-12-23', 1),
(4, 'ÁLBUM E. S. CESALTINA RAMOS', 'ÁLBUM E. S. CESALTINA RAMOS', '2020-03-19', 1),
(5, 'ÁLBUM LICEU DOMINGOS RAMOS', 'ÁLBUM LICEU DOMINGOS RAMOS', '2020-03-19', 1),
(6, 'ÁLBUM E. TÉCNICA ASSOMADA ', 'ÁLBUM E. TÉCNICA ASSOMADA ', '2020-03-19', 1),
(7, 'ÁLBUM CRIANÇA EMPREENDEDORA', 'ÁLBUM CRIANÇA EMPREENDEDORA', '2018-03-10', 1),
(8, 'ÁLBUM MIRA FLORES', 'ÁLBUM MIRA FLORES', '2018-03-08', 1),
(9, 'ÁLBUM DOAÇÃO DE SANGUE', 'ÁLBUM DOAÇÃO DE SANGUE', '2019-11-12', 1),
(10, 'ÁLBUM EXPOSIÇÃO CHÃ', 'ÁLBUM EXPOSIÇÃO CHÃ', '2019-12-17', 1),
(11, 'ÁLBUM A. C. EUGÉNIO LIMA', 'ÁLBUM A. C. EUGÉNIO LIMA', '2019-12-10', 1),
(12, 'ÁLBUM CALOIROS 2019/2020', 'ÁLBUM CALOIROS 2019/2020', '2019-10-09', 1),
(13, 'ÁLBUM INAUGURAÇÃO CLÍNICA DE FISIOTERAPIA ', 'ÁLBUM INAUGURAÇÃO CLÍNICA DE FISIOTERAPIA', '2019-12-13', 1),
(14, 'ÁLBUM INCLUSÃO PARA MAIS DIREITO', 'ÁLBUM INCLUSÃO PARA MAIS DIREITO', '2019-11-08', 1),
(15, 'ÁLBUM PÓLO DO MINDELO', 'ÁLBUM PÓLO DO MINDELO', '2019-10-16', 1),
(16, 'ÁLBUM E. S. SALINEIRO', 'ÁLBUM E. S. SALINEIRO', '2020-03-04', 1),
(17, 'ÁLBUM - E. S. ABÍLIO DUARTE E CONSTANTINO SEMEDO', 'ÁLBUM - E. S. ABÍLIO DUARTE E CONSTANTINO SEMEDO', '2020-01-29', 1),
(18, 'ÁLBUM VISITA SECRETÁRIO DO ESTADO', 'ÁLBUM VISITA SECRETÁRIO DO ESTADO', '2019-12-11', 1),
(19, 'ÁLBUM VISITA ASSESSORIA DO ESTADO', 'ÁLBUM VISITA ASSESSORIA DO ESTADO', '2019-12-09', 1),
(20, 'ÁLBUM CONVIDADOS NA RÁDIO', 'ÁLBUM CONVIDADOS NA RÁDIO', '2019-03-06', 1),
(21, 'ÁLBUM RÁDIO', 'ÁLBUM RÁDIO', '2020-05-05', 1),
(22, 'ÁLBUM EVENTOS', 'ÁLBUM EVENTOS', '2020-05-17', 1),
(23, 'Making Off ', 'Spot UniPiaget Licenciatura ', '2020-08-04', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avancado`
--

CREATE TABLE `avancado` (
  `id` int(11) NOT NULL,
  `rubricasVerLancamentosAntigos` int(11) DEFAULT 1,
  `cartazLimiteDeSlide` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avancado`
--

INSERT INTO `avancado` (`id`, `rubricasVerLancamentosAntigos`, `cartazLimiteDeSlide`) VALUES
(1, 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `layer1` varchar(255) DEFAULT NULL,
  `marginLeft1` int(11) DEFAULT 0,
  `marginTop1` int(11) DEFAULT 0,
  `layer2` varchar(255) DEFAULT NULL,
  `marginLeft2` int(11) DEFAULT 0,
  `marginTop2` int(11) DEFAULT 0,
  `layer3` varchar(255) DEFAULT NULL,
  `marginLeft3` int(11) DEFAULT 0,
  `marginTop3` int(11) DEFAULT 0,
  `transicao` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `imagem`, `layer1`, `marginLeft1`, `marginTop1`, `layer2`, `marginLeft2`, `marginTop2`, `layer3`, `marginLeft3`, `marginTop3`, `transicao`, `link`) VALUES
(7, 'Slide4', 'images/slider/banner6631.jpg', '', 0, 0, '', 0, 0, '', 0, 0, 'horizontal', 'http://www.unipiaget.cv/file/evento8680.pdf'),
(12, 'Slide7', 'images/slider/83415202_2992210364132268_1086519038172987392_n.jpg', '', 0, 0, '', 0, 0, '', 0, 0, 'horizontal', '#'),
(14, 'Slide9', 'images/slider/CartelaInfoPiaget.jpg', 'Informações', 0, -15, 'Segunda a Sexta', 0, -15, '12h e 18h', -2, -15, 'horizontal', '#'),
(16, 'Slide11', 'images/slider/Famosos-na-UniPiaget-banner.jpg', 'Convidado Especial', -25, -18, 'Sexta-feira 10h 16h 19h e 10mn', -25, -19, 'a cada', -25, -19, 'horizontal', 'https://youtu.be/1msrNigOUZQ'),
(17, 'Slide12', 'images/slider/cartelaentrevista.jpg', 'entrevistas', 55, 0, 'Sexta-feira ', 65, 0, '11h 17h 20h e 10mn', 70, -2, 'vertical', 'https://youtu.be/tTEls9uL4r0'),
(19, 'Lembra Tempo', 'images/slider/Lembra-Tempo-banner.jpg', 'Músicas Antigus', 25, -18, 'DJ Chephe, Lara & Gilson ', 13, -19, 'Tudo Terça', 94, -14, 'vertical', ''),
(20, 'Conversa Aberta', 'images/slider/CartelaConversaAberta.jpg', '', NULL, NULL, 'As Segundas-feiras ', 39, 19, '10h, 16h, 19h & 10mn', 29, 19, 'vertical', 'https://www.youtube.com/watch?v=bDukoj8bKhk&list=PLJYwimXGFTN841vlLvC3Bcd07IZn4CisF'),
(21, 'Unipiaget', 'images/slider/4963832322684722031727584187051217576263680_o.jpg', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 'horizontal', ''),
(22, 'In Live', 'images/slider/In-Live-banner.jpg', 'concertos ao vivo', 28, 0, 'Tudo Quarta-Fera', 27, 0, '9h, 18h & 10mn', 97, 0, 'horizontal', ''),
(23, 'Inform e Gestão', 'images/slider/banner1306.jpg', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', 'http://www.unipiaget.edu.cv/index.php?r=site/formacao_detalhes&id=34'),
(24, 'Navegando', 'images/slider/CartelaNavegando.jpg', 'Informações dos Cursos', 0, -10, '10h, 16h, 19h & 10mn', 10, -10, 'as terças-feiras', NULL, -10, 'horizontal', 'https://www.youtube.com/playlist?list=PLJYwimXGFTN8csgAAflny68PnEsyi9lE4'),
(25, 'Wbetv', 'images/slider/banner10636.gif', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 'vertical', ''),
(26, 'Familia Piaget', 'images/slider/rubrica-piaget-banner.jpg', '', NULL, NULL, 'Segunda-Fera', 41, 15, '11h, 17h, 20h & 10mn', 81, 21, 'vertical', 'https://www.youtube.com/playlist?list=PLJYwimXGFTN8FMBjRR1OBVbsrf00IFK5M'),
(27, 'Arquitectura', 'images/slider/banner20062.jpg', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 'horizontal', 'https://www.youtube.com/watch?v=1x4XvvAMcks'),
(28, 'Na Encruzilhada da Vida', 'images/slider/Na-Encruzilhada-da-Vida-banner.jpg', 'Semanalmente', -19, NULL, 'as quintas-feiras ', -8, NULL, '10h, 16h, 19h & 10mn', -19, NULL, 'vertical', ''),
(29, 'Ciências da comunicação ', 'images/slider/banner7084.jpg', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 'horizontal', 'http://www.unipiaget.edu.cv/index.php?r=site/formacao_detalhes&id=7'),
(30, 'Nós Morna', 'images/slider/Nos-Morna-banner.jpg', 'Nós Tradiçon', -25, NULL, 'ku DJ Chephe', -20, 3, 'tudo Segunda-fera - 9h, 18h & 10mn', -15, NULL, 'vertical', ''),
(31, 'Reinicio das atividades', 'images/slider/banner8285.jpg', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 'horizontal', 'http://www.unipiaget.edu.cv/file/evento3476.pdf'),
(32, 'Zouk Time', 'images/slider/Zouk-Time-banner.jpg', 'obi e dança', -20, -20, 'tudo sexta fera', 20, -20, '9h & 18h', 18, -20, 'vertical', ''),
(33, 'GFP', 'images/slider/BannerGFP.jpg.jpeg', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', 'http://www.unipiaget.edu.cv/file/evento11988.pdf?fbclid=IwAR3dtY3cI_HZC7hwNOoMwtcgPWjGz3FQZ8Dsomt-aX5HRKZaWKecaTJDSRs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartaz`
--

CREATE TABLE `cartaz` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cartaz`
--

INSERT INTO `cartaz` (`id`, `imagem`) VALUES
(1, 'cartazes/cartaz.jpg'),
(8, 'cartazes/jsfishfdiusdhfadupiuhas.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contacto`
--

INSERT INTO `contacto` (`id`, `tipo`, `texto`) VALUES
(2, 'telefone', '+238 2609000'),
(3, 'endereco', 'Cabo Verde - Santiago - Praia - Palmarejo Grande '),
(4, 'email', 'info@cv.unipiaget.org');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrevistas`
--

CREATE TABLE `entrevistas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `entrevistas`
--

INSERT INTO `entrevistas` (`id`, `titulo`, `link`, `data`) VALUES
(3, 'Entrevista com: Ingrid Silva, estudante programa de mobilidade internacional', 'tTEls9uL4r0', '2020-05-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipa`
--

CREATE TABLE `equipa` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT '#',
  `instagram` varchar(255) DEFAULT '#',
  `email` varchar(255) DEFAULT '#',
  `ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipa`
--

INSERT INTO `equipa` (`id`, `imagem`, `nome`, `nickname`, `funcao`, `descricao`, `facebook`, `instagram`, `email`, `ordem`) VALUES
(6, 'equipa1296222223.jpg', 'Evandro Mendonça', 'DJ Chephe', 'Técnico de Som', '', '', '', '', 9),
(10, 'images/liveradio/equipa546831531.jpg', 'Edinho Silva', 'Edinho', 'Coordenador da WebTv', '', '', '', 'esilva@cv.unipiaget.org', 2),
(11, 'images/liveradio/equipa458609058.jpg', 'Hélcio Ferreira', 'Hélcio', 'Programador', '', 'https://web.facebook.com/helcio.ferreira.182/timeline?lst=100009681675043%3A100005479568188%3A1588806285', 'https://www.instagram.com/helciodenny/?hl=pt', 'helciotj10@gmail.com', 12),
(12, 'equipa652277152.jpg', 'Ery Célia Ortet', 'Ery', ' Apresentadora - Aluna de Ciências da Comunicação (Jornalismo) ', '', '', '', '', 1),
(13, 'equipa627546018.jpg', 'Tiana Silva', 'Thianna', 'Apresentadora - Aluna de Ciências da Comunicação (Jornalismo)', '', '', '', '', 4),
(15, 'images/liveradio/equipa332449208.jpg', 'Sophia Cardoso', 'Sophia', 'Apresentadora - Aluna de Ciências da Comunicação (Jornalismo)', '', 'https://www.facebook.com/gilvania.cardoso.589', 'https://www.instagram.com/sofss_cardoso/', 'sophiacardoso819@gmail.com', 3),
(16, 'equipa37034549.jpg', 'Filipe Tavares', 'Philip', 'Técnico - Aluno de Engenharia de Sistemas e Informática', '', 'https://www.facebook.com/filipe.tavares.7509836', 'https://www.instagram.com/13j.filipe13/', '13j.filipe13@gmail.com', 7),
(17, 'equipa1887310185.jpg', 'Rosana Semedo', 'Rosana', 'Apresentadora - Aluna de Ciências da Comunicação (Jornalismo)', '', 'https://www.facebook.com/rosana.semedopb', 'https://www.instagram.com/rosanah_noemy/', 'semedorosana407@gmail.com', 8),
(20, 'images/liveradio/equipa2046209200.jpg', 'HÉLICA VASCONCELOS', 'Hélica', 'Apresentadora - Aluna de Ciências da Comunicação (Jornalismo)', '', '', '', '', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotografia`
--

CREATE TABLE `fotografia` (
  `id` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotografia`
--

INSERT INTO `fotografia` (`id`, `id_album`, `img`) VALUES
(4, 2, 'images/img1564726324.jpg'),
(5, 2, 'images/img255519641.jpg'),
(6, 2, 'images/img835988309.jpg'),
(7, 2, 'images/img1813275369.jpg'),
(8, 2, 'images/img1177160181.jpg'),
(9, 2, 'images/img2072481683.jpg'),
(10, 2, 'images/img1870038020.jpg'),
(11, 2, 'images/img890296500.jpg'),
(12, 2, 'images/img1708852.jpg'),
(13, 2, 'images/img1420118841.jpg'),
(14, 2, 'images/img969600449.jpg'),
(15, 2, 'images/img1413151321.jpg'),
(16, 2, 'images/img1889308912.jpg'),
(17, 2, 'images/img1470003881.jpg'),
(18, 2, 'images/img85389639.jpg'),
(19, 2, 'images/img1909027420.jpg'),
(20, 3, 'images/img1480204975.jpg'),
(21, 3, 'images/img2034787861.jpg'),
(22, 3, 'images/img1170480508.jpg'),
(23, 3, 'images/img318826898.jpg'),
(24, 3, 'images/img1372386039.jpg'),
(25, 3, 'images/img1890577239.jpg'),
(26, 3, 'images/img938050683.jpg'),
(27, 3, 'images/img101238363.jpg'),
(28, 3, 'images/img464930874.jpg'),
(29, 3, 'images/img1369194950.jpg'),
(30, 3, 'images/img1675295851.jpg'),
(31, 3, 'images/img2020265798.jpg'),
(32, 3, 'images/img420666327.jpg'),
(33, 3, 'images/img1736410015.jpg'),
(34, 3, 'images/img1554367433.jpg'),
(35, 3, 'images/img40557376.jpg'),
(36, 3, 'images/img1066484167.jpg'),
(37, 3, 'images/img403661354.jpg'),
(38, 3, 'images/img1954106403.jpg'),
(39, 3, 'images/img1819743279.jpg'),
(40, 3, 'images/img1401035191.jpg'),
(41, 3, 'images/img1775828308.jpg'),
(42, 3, 'images/img1190606710.jpg'),
(43, 3, 'images/img973281249.jpg'),
(44, 3, 'images/img572676332.jpg'),
(45, 3, 'images/img981854385.jpg'),
(46, 3, 'images/img1460829512.jpg'),
(47, 3, 'images/img1266249306.jpg'),
(48, 3, 'images/img1058084115.jpg'),
(49, 3, 'images/img1350746097.jpg'),
(50, 3, 'images/img1089802093.jpg'),
(51, 3, 'images/img846126166.jpg'),
(52, 3, 'images/img1275725032.jpg'),
(53, 3, 'images/img1998245547.jpg'),
(54, 3, 'images/img862496905.jpg'),
(55, 3, 'images/img2066751151.jpg'),
(56, 3, 'images/img2127974840.jpg'),
(57, 3, 'images/img526648260.jpg'),
(58, 3, 'images/img104060487.jpg'),
(59, 3, 'images/img837096166.jpg'),
(60, 3, 'images/img1860300005.jpg'),
(61, 3, 'images/img1309479939.jpg'),
(62, 3, 'images/img1152396238.jpg'),
(63, 3, 'images/img1403259296.jpg'),
(64, 3, 'images/img629382337.jpg'),
(65, 3, 'images/img1599324559.jpg'),
(66, 3, 'images/img1418433147.jpg'),
(67, 3, 'images/img563197416.jpg'),
(68, 3, 'images/img902935188.jpg'),
(69, 3, 'images/img1990086574.jpg'),
(70, 3, 'images/img142078059.jpg'),
(71, 2, 'images/img76444793.jpg'),
(73, 2, 'images/img745866676.jpg'),
(75, 2, 'images/img572246705.jpg'),
(76, 2, 'images/img1954262003.jpg'),
(77, 2, 'images/img63933486.jpg'),
(79, 2, 'images/img1346358822.jpg'),
(80, 4, 'images/img126627927.jpg'),
(81, 4, 'images/img1427168500.jpg'),
(82, 4, 'images/img847441603.jpg'),
(83, 4, 'images/img1117619222.jpg'),
(84, 4, 'images/img1899324212.jpg'),
(85, 4, 'images/img539556828.jpg'),
(86, 4, 'images/img1916514639.jpg'),
(87, 4, 'images/img1291312431.jpg'),
(88, 4, 'images/img1630614938.jpg'),
(89, 4, 'images/img1471535426.jpg'),
(90, 4, 'images/img197595061.jpg'),
(91, 4, 'images/img1220165951.jpg'),
(92, 4, 'images/img677814838.jpg'),
(93, 4, 'images/img419411055.jpg'),
(94, 4, 'images/img1249216720.jpg'),
(95, 4, 'images/img923218587.jpg'),
(96, 4, 'images/img70046990.jpg'),
(97, 4, 'images/img1696655477.jpg'),
(98, 4, 'images/img1915308030.jpg'),
(99, 4, 'images/img1997997829.jpg'),
(100, 5, 'images/img118667329.jpg'),
(101, 5, 'images/img1013111716.jpg'),
(102, 5, 'images/img1046390706.jpg'),
(103, 5, 'images/img1758114706.jpg'),
(104, 5, 'images/img330402609.jpg'),
(105, 5, 'images/img486434026.jpg'),
(106, 5, 'images/img1931126543.jpg'),
(107, 5, 'images/img1717934836.jpg'),
(108, 5, 'images/img1981173942.jpg'),
(109, 5, 'images/img982700360.jpg'),
(110, 5, 'images/img988334128.jpg'),
(111, 5, 'images/img1161613177.jpg'),
(112, 5, 'images/img1584860958.jpg'),
(113, 5, 'images/img511561683.jpg'),
(114, 5, 'images/img1936949705.jpg'),
(115, 5, 'images/img69342889.jpg'),
(116, 5, 'images/img709805192.jpg'),
(117, 5, 'images/img288780694.jpg'),
(118, 5, 'images/img398266646.jpg'),
(119, 5, 'images/img945942895.jpg'),
(120, 6, 'images/img940343638.jpg'),
(121, 6, 'images/img1432019802.jpg'),
(122, 6, 'images/img1173691491.jpg'),
(123, 6, 'images/img1675103080.jpg'),
(124, 6, 'images/img1821129391.jpg'),
(125, 6, 'images/img2107755753.jpg'),
(126, 6, 'images/img20841732.jpg'),
(127, 6, 'images/img2116676960.jpg'),
(128, 6, 'images/img1715593843.jpg'),
(129, 6, 'images/img1061529712.jpg'),
(130, 6, 'images/img650801453.jpg'),
(131, 6, 'images/img819224036.jpg'),
(132, 6, 'images/img246453937.jpg'),
(133, 6, 'images/img1942308460.jpg'),
(134, 6, 'images/img1360810714.jpg'),
(135, 6, 'images/img1317392790.jpg'),
(136, 6, 'images/img1303048593.jpg'),
(137, 6, 'images/img1518131630.jpg'),
(138, 6, 'images/img1920967938.jpg'),
(139, 6, 'images/img1146303147.jpg'),
(140, 7, 'images/img312986784.jpg'),
(141, 7, 'images/img1184102215.jpg'),
(142, 7, 'images/img2015731098.jpg'),
(143, 7, 'images/img501105260.jpg'),
(144, 7, 'images/img961403940.jpg'),
(145, 7, 'images/img360092480.jpg'),
(146, 7, 'images/img768090058.jpg'),
(147, 7, 'images/img1512284919.jpg'),
(148, 7, 'images/img1621618374.jpg'),
(149, 8, 'images/img665748455.jpg'),
(150, 8, 'images/img699143392.jpg'),
(151, 8, 'images/img1831739125.jpg'),
(152, 8, 'images/img846957334.jpg'),
(153, 8, 'images/img1030664873.jpg'),
(154, 8, 'images/img1981170540.jpg'),
(155, 8, 'images/img541991009.jpg'),
(156, 8, 'images/img1587854095.jpg'),
(157, 8, 'images/img261063599.jpg'),
(158, 8, 'images/img1793935479.jpg'),
(159, 8, 'images/img635952037.jpg'),
(160, 8, 'images/img1417488531.jpg'),
(161, 8, 'images/img1310512629.jpg'),
(162, 8, 'images/img560348725.jpg'),
(163, 8, 'images/img599790682.jpg'),
(164, 8, 'images/img1284601389.jpg'),
(165, 8, 'images/img1366966212.jpg'),
(166, 8, 'images/img683847494.jpg'),
(167, 8, 'images/img1024846477.jpg'),
(168, 8, 'images/img310482595.jpg'),
(169, 9, 'images/img825444744.jpg'),
(170, 9, 'images/img1452768659.jpg'),
(171, 9, 'images/img1122804895.jpg'),
(172, 9, 'images/img588813442.jpg'),
(173, 9, 'images/img537652582.jpg'),
(174, 9, 'images/img58245247.jpg'),
(175, 10, 'images/img1434354130.jpg'),
(176, 10, 'images/img495713171.jpg'),
(177, 10, 'images/img1997614508.jpg'),
(178, 10, 'images/img706878286.jpg'),
(179, 10, 'images/img409166553.jpg'),
(180, 10, 'images/img1041958611.jpg'),
(181, 10, 'images/img2112764547.jpg'),
(182, 10, 'images/img1138608931.jpg'),
(183, 11, 'images/img1073512036.jpg'),
(184, 11, 'images/img50950850.jpg'),
(185, 11, 'images/img255362166.jpg'),
(186, 11, 'images/img1636897582.jpg'),
(187, 11, 'images/img1106364785.jpg'),
(188, 11, 'images/img1985303498.jpg'),
(189, 11, 'images/img163113095.jpg'),
(190, 11, 'images/img1046529861.jpg'),
(191, 11, 'images/img595482608.jpg'),
(192, 12, 'images/img1472243026.jpg'),
(193, 12, 'images/img778640111.jpg'),
(194, 12, 'images/img1521266721.jpg'),
(195, 12, 'images/img1905597008.jpg'),
(196, 12, 'images/img1636975479.jpg'),
(197, 12, 'images/img1010370120.jpg'),
(198, 12, 'images/img451250035.jpg'),
(199, 12, 'images/img259314258.jpg'),
(200, 12, 'images/img1780941087.jpg'),
(201, 12, 'images/img2055426488.jpg'),
(202, 12, 'images/img1393541188.jpg'),
(203, 12, 'images/img195158511.jpg'),
(204, 12, 'images/img1759514320.jpg'),
(205, 12, 'images/img83709537.jpg'),
(206, 12, 'images/img15853414.jpg'),
(207, 12, 'images/img1983223579.jpg'),
(208, 12, 'images/img1041235194.jpg'),
(209, 12, 'images/img1501257014.jpg'),
(210, 12, 'images/img1290071370.jpg'),
(211, 12, 'images/img799633989.jpg'),
(212, 13, 'images/img661139538.jpg'),
(213, 13, 'images/img2091025365.jpg'),
(214, 13, 'images/img1943469960.jpg'),
(215, 13, 'images/img807462276.jpg'),
(216, 13, 'images/img228615760.jpg'),
(217, 13, 'images/img732761014.jpg'),
(218, 13, 'images/img2103185464.jpg'),
(219, 13, 'images/img677756859.jpg'),
(220, 13, 'images/img1798400297.jpg'),
(221, 13, 'images/img2044350557.jpg'),
(222, 13, 'images/img1452873740.jpg'),
(223, 13, 'images/img1153315724.jpg'),
(224, 13, 'images/img1096604857.jpg'),
(225, 13, 'images/img2042715698.jpg'),
(226, 13, 'images/img692298415.jpg'),
(227, 13, 'images/img1720630471.jpg'),
(228, 13, 'images/img1487114600.jpg'),
(229, 13, 'images/img1668486142.jpg'),
(230, 13, 'images/img744843366.jpg'),
(231, 13, 'images/img464248122.jpg'),
(232, 14, 'images/img1706295305.jpg'),
(233, 14, 'images/img613211739.jpg'),
(234, 14, 'images/img1306282781.jpg'),
(235, 14, 'images/img732164025.jpg'),
(236, 14, 'images/img496585187.jpg'),
(237, 14, 'images/img988865748.jpg'),
(238, 14, 'images/img1565770346.jpg'),
(239, 14, 'images/img1429569634.jpg'),
(240, 14, 'images/img1037792980.jpg'),
(241, 14, 'images/img3690374.jpg'),
(242, 14, 'images/img1653324605.jpg'),
(243, 14, 'images/img2020325943.jpg'),
(244, 14, 'images/img671975015.jpg'),
(245, 15, 'images/img530001835.jpg'),
(246, 15, 'images/img151066444.jpg'),
(247, 15, 'images/img501166727.jpg'),
(248, 15, 'images/img1922758863.jpg'),
(249, 15, 'images/img914227433.jpg'),
(250, 15, 'images/img567421807.jpg'),
(251, 15, 'images/img174139258.jpg'),
(252, 15, 'images/img926392044.jpg'),
(253, 15, 'images/img726920443.jpg'),
(254, 16, 'images/img1979704354.jpg'),
(255, 16, 'images/img1582302853.jpg'),
(256, 16, 'images/img1217426261.jpg'),
(257, 16, 'images/img743983086.jpg'),
(258, 16, 'images/img277932792.jpg'),
(259, 16, 'images/img918671781.jpg'),
(260, 16, 'images/img737570892.jpg'),
(261, 16, 'images/img248186971.jpg'),
(262, 16, 'images/img356539716.jpg'),
(263, 16, 'images/img1181118580.jpg'),
(264, 16, 'images/img1811734245.jpg'),
(265, 16, 'images/img1359645992.jpg'),
(266, 16, 'images/img2135572743.jpg'),
(267, 16, 'images/img1311512657.jpg'),
(268, 16, 'images/img1455650099.jpg'),
(269, 16, 'images/img1415556645.jpg'),
(270, 16, 'images/img504735107.jpg'),
(271, 16, 'images/img566543593.jpg'),
(272, 16, 'images/img1590521738.jpg'),
(273, 16, 'images/img35093807.jpg'),
(274, 17, 'images/img1548576048.jpg'),
(275, 17, 'images/img70765637.jpg'),
(276, 17, 'images/img1034950899.jpg'),
(277, 17, 'images/img2095215508.jpg'),
(278, 17, 'images/img149741467.jpg'),
(279, 17, 'images/img1779875551.jpg'),
(280, 17, 'images/img1335080788.jpg'),
(281, 17, 'images/img183131991.jpg'),
(282, 17, 'images/img62754810.jpg'),
(283, 17, 'images/img712520050.jpg'),
(284, 17, 'images/img1996504746.jpg'),
(285, 17, 'images/img1242669962.jpg'),
(286, 17, 'images/img2142732567.jpg'),
(287, 17, 'images/img824687613.jpg'),
(288, 17, 'images/img1097390268.jpg'),
(289, 17, 'images/img1583042605.jpg'),
(291, 18, 'images/img138910427.jpg'),
(292, 18, 'images/img1489383389.jpg'),
(293, 18, 'images/img1174353976.jpg'),
(294, 18, 'images/img2079359805.jpg'),
(295, 18, 'images/img566308721.jpg'),
(296, 18, 'images/img2065112912.jpg'),
(297, 18, 'images/img1629565227.jpg'),
(298, 18, 'images/img1567796855.jpg'),
(299, 18, 'images/img1810831808.jpg'),
(300, 18, 'images/img1844436517.jpg'),
(301, 18, 'images/img1058214073.jpg'),
(302, 18, 'images/img910766706.jpg'),
(303, 18, 'images/img43560278.jpg'),
(308, 19, 'images/img1212353523.jpg'),
(310, 19, 'images/img1265548839.jpg'),
(311, 19, 'images/img632371210.jpg'),
(312, 19, 'images/img1420167710.jpg'),
(313, 19, 'images/img1695861173.jpg'),
(314, 19, 'images/img665611606.jpg'),
(315, 19, 'images/img234750071.jpg'),
(316, 19, 'images/img220923480.jpg'),
(317, 19, 'images/img1390907210.jpg'),
(318, 19, 'images/img1339353586.jpg'),
(319, 19, 'images/img1880947704.jpg'),
(320, 19, 'images/img1780488135.jpg'),
(321, 19, 'images/img664708170.jpg'),
(322, 19, 'images/img1244257163.jpg'),
(323, 19, 'images/img386774140.jpg'),
(324, 20, 'images/img968310494.jpg'),
(325, 20, 'images/img1647849749.jpg'),
(326, 20, 'images/img744191695.jpg'),
(327, 20, 'images/img302806033.jpg'),
(328, 20, 'images/img63574916.jpg'),
(329, 20, 'images/img1327811728.jpg'),
(330, 20, 'images/img778792327.jpg'),
(331, 20, 'images/img294051662.jpg'),
(332, 20, 'images/img1584999974.jpg'),
(333, 20, 'images/img2011799216.jpg'),
(334, 20, 'images/img1470798493.jpg'),
(335, 20, 'images/img760939160.jpg'),
(336, 20, 'images/img2057851341.jpg'),
(337, 20, 'images/img660645351.jpg'),
(338, 20, 'images/img140372799.jpg'),
(339, 20, 'images/img1662108429.jpg'),
(340, 20, 'images/img763844055.jpg'),
(341, 20, 'images/img544565484.jpg'),
(342, 20, 'images/img1333344953.jpg'),
(343, 20, 'images/img2134280145.jpg'),
(344, 21, 'images/img1292878980.jpg'),
(345, 21, 'images/img1171466421.jpg'),
(347, 21, 'images/img1684117280.jpg'),
(348, 21, 'images/img765276993.jpg'),
(349, 21, 'images/img1031521433.jpg'),
(350, 21, 'images/img1908495790.jpg'),
(351, 21, 'images/img949231288.jpg'),
(352, 21, 'images/img832612442.jpg'),
(355, 21, 'images/img426545404.jpg'),
(356, 21, 'images/img140462922.jpg'),
(357, 21, 'images/img1883807660.jpg'),
(359, 21, 'images/img1101751401.jpg'),
(360, 21, 'images/img1691562742.jpg'),
(361, 21, 'images/img812657125.jpg'),
(362, 21, 'images/img192614472.jpg'),
(363, 21, 'images/img899874975.jpg'),
(364, 21, 'images/img1565106026.jpg'),
(365, 22, 'images/img347362234.jpg'),
(366, 22, 'images/img1763229003.jpg'),
(367, 22, 'images/img1246190751.jpg'),
(368, 22, 'images/img234259633.jpg'),
(369, 22, 'images/img1762353919.jpeg'),
(370, 23, 'images/img1275214370.mp4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `indexitem`
--

CREATE TABLE `indexitem` (
  `id` int(11) NOT NULL,
  `indexItemTitulo` varchar(255) DEFAULT NULL,
  `indexItemConteudo` text NOT NULL,
  `indexItemOrdem` int(11) DEFAULT NULL,
  `indexItemEstado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `indexitem`
--

INSERT INTO `indexitem` (`id`, `indexItemTitulo`, `indexItemConteudo`, `indexItemOrdem`, `indexItemEstado`) VALUES
(1, 'Propostas Top 6', '<div class=\"col-sm-4\">\n                                  <h2>Propostas Top 6</h2>\n                                  <div id=\"content-player\">\n                                    <div class=\"scrollpane\">\n                                     <div class=\"jp-jplayer\"></div>\n                                      <div class=\"jp-audio\" role=\"application\" aria-label=\"media player\">\n                                        <div class=\"jp-type-playlist\">\n                                          <div class=\"jp-playlist\">\n                                            <ul> \n                                                <?php\n                                                    foreach ($propostas as $Proposta) {\n                                                        echo \'<li>\n                                                                <div class=\"jpl-details\"> \n                                                                    <a href=\"?r=site/top&id=\'.$Proposta->youtube.\'\">\n                                                                        <span class=\"number\">\'.$numeropro++.\'</span> \n                                                                        <span class=\"jpl-cover\">\n                                                                            <img src=\"\'.$Proposta->imagem.\'\" alt=\"\" class=\"mCS_img_loaded\">\n                                                                        </span>\n                                                                        <span class=\"jpl-info\"> \n                                                                            <span class=\"jpl-title\">\'.$Proposta->musica.\'</span> \n                                                                            <span class=\"jpl-artist\">\'.$Proposta->cantor.\'</span>\n                                                                        </span>\n                                                                    </a>\n                                                                        <span class=\"jpl-controls\">\n                                                                            <i onclick=\"myFunction(this,\'.$Proposta->id.\')\" class=\"fa fa-heart\"></i>\n                                                                        </span>\n                                                                </div>  \n                                                            </li>\';\n                                                    } ?>\n                                            </ul>\n                                          </div>\n                                        </div>\n                                       </div>\n                                    </div>\n                                  </div>\n                                </div>', 1, 1),
(2, 'Live', '<div class=\"col-sm-8\">\r\n            <h2>Live Stream</h2>\r\n            <iframe id=\"iframe-id\" src=\"http://portalacademico.homelinux.org:49156/WebRTCApp/play.html?name=295123202863936211913407\" allowfullscreen style=\"border:none;width:100%;height:410px;\" __idm_id__=\"316403713\"> </iframe></div>\r\n        </div>', 2, 1),
(3, 'FAMOSOS NA UNIPIAGET', '<div class=\"col-sm-8\">\r\n          <h2>FAMOSOS NA UNIPIAGET</h2>\r\n          <div class=\"equal-height\">\r\n            <div class=\"video-responsive\">\r\n              <iframe width=\"390\" height=\"315\" src=\"http://www.youtube.com/embed/<?= $famosos->link ?>\" frameborder=\"0\" allowfullscreen></iframe>\r\n            </div>\r\n          </div>\r\n        </div>', 3, 1),
(4, 'Top 6', '<div class=\"col-sm-4\">\n          <h2>Top 6</h2>\n          <div id=\"content-player\">\n            <div class=\"scrollpane\">\n             <div class=\"jp-jplayer\"></div>\n              <div class=\"jp-audio\" role=\"application\" aria-label=\"media player\">\n                <div class=\"jp-type-playlist\">\n                  <div class=\"jp-playlist\">\n                    <ul>\n                        <?php \n                            foreach ($tops as $top) {\n                                echo \'<li>\n                                        <div class=\"jpl-details\"> \n                                            <a href=\"?r=site/top&id=\'.$top->youtube.\'\">\n                                                <span class=\"number\">\'.$numerotop++.\'</span> \n                                                <span class=\"jpl-cover\">\n                                                    <img src=\"\'.$top->imagem.\'\" alt=\"\" class=\"mCS_img_loaded\">\n                                                </span>\n                                                <span class=\"jpl-info\"> \n                                                    <span class=\"jpl-title\">\'.$top->musica.\'</span> \n                                                    <span class=\"jpl-artist\">\'.$top->cantor.\'</span>\n                                                </span>\n                                            </a>\n                                               <span class=\"jpl-controls\">\n                                                    <a href=\"?r=site/top&id=\'.$top->youtube.\'\" target=\"_blank\" class=\"jpl-play jp-playlist-item\" tabindex=\"0\"><span class=\"listen\">LISTEN</span></a>\n                                                </span>\n                                        </div>  \n                                    </li>\';\n                            }\n                        ?> \n                    </ul>\n                  </div>\n                </div>\n               </div>\n            </div>\n          </div>\n        </div>', 4, 1),
(5, 'PROMO VIDEO', '<div class=\"col-sm-6\">\n          <h2>PROMO VIDEO</h2>\n          <div class=\"equal-height\">\n            <div class=\"video-responsive\">\n              <iframe width=\"390\" height=\"315\" src=\"http://www.youtube.com/embed/<?= $promo->link ?>\" frameborder=\"0\" allowfullscreen></iframe>\n            </div>\n          </div>\n        </div>', 5, 1),
(6, 'PUBLICIDADE', '<div class=\"col-sm-6\">\n          <h2>PUBLICIDADE</h2>\n          <div class=\"equal-height\">\n            <div class=\"video-responsive\">\n              <iframe width=\"390\" height=\"315\" src=\"http://www.youtube.com/embed/<?= $publicidade->link ?>\" frameborder=\"0\" allowfullscreen></iframe>\n            </div>\n          </div>\n        </div> ', 6, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1583149522),
('m130524_201442_init', 1583149528),
('m190124_110200_add_verification_token_column_to_user_table', 1583149529),
('m200325_120535_criar_tabela_noticias', 1585138295),
('m200417_034048_banner', 1589544260),
('m200417_051354_top', 1587649256),
('m200425_010750_youtube', 1587777043),
('m200425_012809_publicidade', 1587778628),
('m200425_015021_equipa', 1587780532),
('m200425_022441_programacao', 1587781904),
('m200430_142353_rubricas', 1589555439),
('m200506_170847_entrevistas', 1588785060),
('m200514_172616_popup', 1589477754),
('m200514_172718_cartaz', 1589477754),
('m200515_162748_avancado', 1591658457),
('m200516_212144_contacto', 1589664210),
('m200608_102712_indexItem', 1591883960);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tipo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `conteudo`, `imagem`, `link`, `data`, `tipo`) VALUES
(1, 'Navegando ', 'Navegando...\r\nUm curso,\r\nUm programa,\r\nUm histórico curricular...Um espaço para conheçeres melhor os cursos oferecidos na UniPiaget e assim conheçer detalhadamente as escolhas de cada estudante, que farão dele um técnico superior de qualidade.', 'images/liveradio/CartelaNavegando.jpg', '', ' 17/03/2020', 1),
(2, 'Info Piaget ', 'Um espaço nobre de informações sobre a Universidade Jean Piaget de Cabo Verde. \r\nDiariamente trazemos notícias e atualizações sobre os eventos e atividades realizadas nessa instituição de ensino superior.\r\nE no final de cada mês, o Info Piaget faz o resume das principais notícias de cada edição.', 'images/liveradio/CartelaInfoPiaget.jpg', 'https://www.youtube.com/watch?v=qvrl_r_-L7g&list=PLJYwimXGFTN_3UD4LAj-pXyFmmYOoRZAg&index=3', '18/03/2020', 1),
(5, 'Rúbrica Familia Piaget ', 'A rúbrica mais emocionante da PiagetTV, conta, quinzenalmente, a história e o percurso de um colaborador da Universidade Jean Piaget de Cabo Verde. \r\n\r\nTodos os membros que fazem da família UniPiaget, ser a melhor opção entrarão na rúbrica da #FamíliaPiaget.', 'images/liveradio/rubrica-piaget-banner.jpg', 'https://www.youtube.com/playlist?list=PLJYwimXGFTN8FMBjRR1OBVbsrf00IFK5M', '2020-05-07', 1),
(7, 'Melhor da Tarde', 'O Talk Show Melhor da Tarde, com emissão mensal, traz convidados ilustres, entrevistas animadas e vários quadros cheios de desafios.\r\nAqui há sempre muita música boa e participação de vários artistas nacionais, porque no programa Melhor da Tarde o entretenimento e a animação é uma garantia!\r\n', 'images/liveradio/MelhordaTarde150x270-01.jpg', '', '2021-05-05', 1),
(8, 'REFERÊNCIA DA MELHOR OPÇÃO', '“Referência da Melhor Opção” é o mais novo programa da Piaget TV para mostrar os profissionais que a universidade Jean Piaget de Cabo Verde tem formado e que já estão inseridos na vida laboral, sendo referências no mercado de trabalho, nas suas áreas de atuação.\r\n\r\nMensalmente, durante uma conversa bem descontraída este programa vai lhe mostrar a trajetória dos antigos estudantes da UniPiaget.', 'images/liveradio/LOGOREFERENCIADAMELHOROPÇAO.jpg', '', '', 1),
(9, 'Famosos na UNIPiaget', 'Todos os artistas famosos de Cabo Verde passam pelo Famosos na UniPiaget, o seu quadro de entrevistas e entretenimento com artistas do mundo musical e personalidades conhecidas no país e não só.\r\n\r\nRealizado quinzenalmente aqui na PiagetTV,  cada edição desse programa conta com uma conversa super animada, recheada de conteúdos e acompanhada de bons trimbres musicais para a comunidade académica.\r\n', 'images/liveradio/Famosos-na-UniPiaget-banner.jpg', '', '', 1),
(13, 'Spot Publicitário', 'Solicite o seu orçamento através do email: piagetserviços@cv.unipiaget.org ', 'images/liveradio/thumbnail_LogoPiaget-15.png', '', '', 2),
(14, 'Publireportagem', 'Solicite o seu orçamento através do email: piagetserviços@cv.unipiaget.org ', 'images/liveradio/thumbnail_LogoPiaget-15.png', '', '', 2),
(15, 'Entrevistas ', 'Solicite o seu orçamento através do email: piagetserviços@cv.unipiaget.org ', 'images/liveradio/thumbnail_LogoPiaget-15.png', '', '', 2),
(16, 'Live Streaming ', 'Solicite o seu orçamento através do email: piagetserviços@cv.unipiaget.org ', 'images/liveradio/thumbnail_LogoPiaget-15.png', '', '', 2),
(17, 'Cobertura de Eventos ', 'Solicite o seu orçamento através do email: piagetserviços@cv.unipiaget.org ', 'images/liveradio/thumbnail_LogoPiaget-15.png', '', '', 2),
(18, 'Entrevistas ', 'O quadro de entrevistas é realizado sempre á volta de temas pertinentes sobre a comunidade académica da UniPiaget.\r\n\r\nFeita exclusivamente pelos estudantes do curso de Ciências da Comunicação, o quadro de entrevistas aqui na PiagetTV traz minutos de conversas que valem a pena serem apreciadas.', 'images/liveradio/Entrevistas150x270-01.jpg', '', '', 1),
(20, 'Publireportagem', 'Aqui poderás ver todas as publireportagens feitas pela equipa de produção da PiagetTV.\r\n\r\nSerão abordados temáticas e projectos voltados á vida académica, trabalhos realizados pelos estudantes atuais e vida laboral dos que passaram pela UniPiaget.', 'images/liveradio/Reportagem15x270-01.jpg', '', '', 1),
(21, 'Conversa Aberta', '', 'images/liveradio/lOGO-PNGFull_Prancheta1.png', '', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `popup`
--

INSERT INTO `popup` (`id`, `titulo`, `imagem`, `link`, `estado`) VALUES
(1, 'LICENCIATURA EM ENFERMAGEM', 'cartazes/173932795_4190229037663722_6616344372814615644_n.jpg', 'https://www.facebook.com/UniPiagetCV/photos/a.670378796315448/4190229034330389', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programacao`
--

CREATE TABLE `programacao` (
  `id` int(11) NOT NULL,
  `semana` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `artista` varchar(255) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `programacao`
--

INSERT INTO `programacao` (`id`, `semana`, `hora`, `imagem`, `titulo`, `artista`, `texto`, `link`) VALUES
(1, 'Segunda', '11:10', 'images/covers/rubrica-piaget-banner(1).jpg', 'FAMÍLIA PIAGET', 'Tiana Silva', '', ''),
(14, 'Terca', '11:10', 'images/covers/MelhordaTarde150x150-01.jpg', 'Melhor da tarde', 'Ery Célia Ortet', '', ''),
(15, 'Quarta', '10:10', 'images/covers/LOGOREFERENCIADAMELHOROPÇAO.jpg', 'Referência da Melhor Opção', 'Tiana Silva', '', ''),
(16, 'Quinta', '18:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(17, 'Sexta', '13:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(86, 'Sabado', '00:00', 'images/covers/unnamed.png', 'Em Construção', '', '', ''),
(87, 'Domingo', '00:00', 'images/covers/unnamed.png', 'Em Construção', '', '', ''),
(88, 'Segunda', '10:10', 'images/covers/lOGO-PNGFull_Prancheta1(1).png', 'CONVERSA ABERTA', 'Ery Célia Ortet', '', ''),
(89, 'Segunda', '16:10', 'images/covers/lOGO-PNGFull_Prancheta1(1).png', 'CONVERSA ABERTA', 'Ery Célia Ortet', '', ''),
(90, 'Segunda', '17:10', 'images/covers/rubrica-piaget-banner (1).jpg', 'FAMÍLIA PIAGET', 'Tiana Silva', '', ''),
(91, 'Segunda', '19:10', 'images/covers/lOGO-PNGFull_Prancheta1(1).png', 'CONVERSA ABERTA', 'Ery Célia Ortet', '', ''),
(92, 'Segunda', '20:10', 'images/covers/rubrica-piaget-banner (1).jpg', 'FAMÍLIA PIAGET', 'Tiana Silva', '', ''),
(93, 'Segunda', '13:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(94, 'Segunda', '18:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(95, 'Terca', '10:10', 'images/covers/CartelaNavegando.jpg', 'NAVEGANDO', 'Hélica Vasconcelos', '', ''),
(96, 'Terca', '16:10', 'images/covers/CartelaNavegando.jpg', 'NAVEGANDO', 'Hélica Vasconcelos', '', ''),
(97, 'Terca', '17:10', 'images/covers/MelhordaTarde150x150-01.jpg', 'Melhor da tarde', 'Ery Célia Ortet', '', ''),
(98, 'Terca', '19:10', 'images/covers/CartelaNavegando.jpg', 'NAVEGANDO', 'Hélica Vasconcelos', '', ''),
(99, 'Terca', '20:10', 'images/covers/MelhordaTarde150x150-01.jpg', 'Melhor da tarde', 'Ery Célia Ortet', '', ''),
(100, 'Terca', '13:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(101, 'Terca', '18:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(102, 'Quarta', '16:10', 'images/covers/LOGOREFERENCIADAMELHOROPÇAO.jpg', 'Referência da Melhor Opção', 'Tiana Silva', '', ''),
(103, 'Quarta', '19:10', 'images/covers/LOGOREFERENCIADAMELHOROPÇAO.jpg', 'Referência da Melhor Opção', 'Tiana Silva', '', ''),
(104, 'Quarta', '13:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(105, 'Quarta', '18:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(106, 'Quinta', '10:10', 'images/covers/Entrevistas150x150-01.jpg', 'ENTREVISTA', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(107, 'Quinta', '16:10', 'images/covers/Entrevistas150x150-01.jpg', 'ENTREVISTA', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(108, 'Quinta', '19:10', 'images/covers/Entrevistas150x150-01.jpg', 'ENTERVISTA', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(109, 'Quinta', '13:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', ''),
(110, 'Sexta', '10:10', 'images/covers/Logo-Famosos-na-UniPiaget.jpg', 'FAMOSOS NA UNIPIAGET', 'Tiana Silva', '', ''),
(111, 'Sexta', '16:10', 'images/covers/Logo-Famosos-na-UniPiaget.jpg', 'FAMOSOS NA UNIPIAGET', 'Tiana Silva', '', ''),
(112, 'Sexta', '19:10', 'images/covers/Logo-Famosos-na-UniPiaget.jpg', 'FAMOSOS NA UNIPIAGET', 'Tiana Silva', '', ''),
(114, 'Sexta', '18:10', 'images/covers/Info150x150-01.jpg', 'INFO PIAGET', 'Aluna de Ciências da Comunicação (Jornalismo)', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicidade`
--

CREATE TABLE `publicidade` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `ordem` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicidade`
--

INSERT INTO `publicidade` (`id`, `imagem`, `link`, `ordem`) VALUES
(2, 'images/liveradio/PubliciteAqui.jpg', '', 1),
(5, 'images/liveradio/Banner-COVID-SITE-CVM.png', '', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rubricas`
--

CREATE TABLE `rubricas` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `texto` text DEFAULT NULL,
  `horario` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `posicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `rubricas`
--

INSERT INTO `rubricas` (`id`, `tipo`, `titulo`, `youtube`, `data`, `texto`, `horario`, `estado`, `posicao`) VALUES
(1, 'Sucesso do dia', 'Lançamento de uma música nova – 2ª a 6ª Feira', 'HGf9ItYD7rI', '14-05-2020', '<h1><yt-formatted-string></yt-formatted-string></h1><p><yt-formatted-string>Érica Boaventura feat. Yasmine \"Escolho-te a ti\"</yt-formatted-string></p><ul><li><em>Produzido: T. DOUMERGUE &amp; BADOXA &amp; TÓ SEMEDO </em></li><li><em>Todos os instrumentos: T. DOUMERGUE &amp; BADOXA &amp; TÓ SEMEDO </em></li><li><em>Vocais principais e de fundo: ÉRICA BOAVENTURA &amp; YASMINE</em></li><li><em>Gravado: É-KARGA MUSIC STUDIOS</em></li><li><em>Mixagem e Masterização: T. DOUMERGUE @ TD STUDIO , PARIS</em> </li></ul><p>ouvindo a rádio terás mais informações\r\n</p>', '(8:00, 10:00, 12:00, 14:00, 16:00, e 19:00)', 0, 1),
(2, 'Nós kultura', 'Apresentação de uma música Tradicional – 2ª a 6ª Feira', 'daLoyBaLbEM', '14-05-2020', '<p>BELA MENDES – Ciclone</p><ul><li><em>Composição: Daniel Lobo</em></li><li><em>Ciclone: faixa nº 9</em></li><li><em>Álbum: Nha Divução com Faixas: 11</em></li><li><em>Produção: Daniel Lobo</em></li><li><em>link é de uma das musicas interpretado por Bela Mendes</em></li></ul><p>ouvindo a rádio terás mais informações</p>', '(8:40, 10:40, 12:40, 14:40, 16:40, e 19:40)', 0, 2),
(3, 'Bons Momentos', 'Músicas que marcaram uma época – 2ª a 6ª Feira', 'ygVOdYKHVbQ', '15-05-2020', 'KLB - Estou em suas mãos<br><br><ul><li><em>Faixa: 2</em></li><li><em>Artista: <span class=\"LrzXr kno-fv\" style=\"background-color: initial; font-family: Muli, Helvetica, Arial, sans-serif;\">KLB</span></em></li><li><em>Álbum: <span class=\"LrzXr kno-fv\" style=\"background-color: initial; font-family: Muli, Helvetica, Arial, sans-serif;\">KLB</span></em></li><li><em>Data de lançamento: </em><span class=\"LrzXr kno-fv\" style=\"background-color: initial; font-family: Muli, Helvetica, Arial, sans-serif;\"><em>2000</em></span></li></ul><span class=\"LrzXr kno-fv\" style=\"background-color: initial; font-family: Muli, Helvetica, Arial, sans-serif;\"><em></em></span><p>ouvindo a rádio terás mais informações<br></p>', '(9:00, 11:00, 13:00, 15:00, 17:00, e 19:00)', 0, 3),
(4, 'Mantras', 'Momentos de Meditação de 2ª a 6ª Feira', 'mv8EYHSUzVQ', '07-05-2020', '', '(9:00, 13:00, e 20:40)', 1, 4),
(7, 'Nós kultura', 'Apresentação de uma música Tradicional – 2ª a 6ª Feira', 'BcdmK-Ms_xs', '15-05-2020', '<p>Bulimundo - Pombinha Mansa</p><ul><li>Faixa: 4</li><li>Álbum: Batuku – 8 faixas</li><li>Lançamento: 1980</li></ul><p><span></span></p><p>ouvindo a rádio terás mais informações<br></p>', '(8:40, 10:40, 12:40, 14:40, 16:40, e 19:40)', 0, 2),
(8, 'Sucesso do dia', 'Lançamento de uma música nova – 2ª a 6ª Feira', 'XrhYZvkYgqQ', '08-06-2020', '<p><yt-formatted-string>Elly Paris - Juram</yt-formatted-string></p><p><yt-formatted-string></yt-formatted-string></p><ul><li><yt-formatted-string><em>Directed by: MM Lines </em></yt-formatted-string></li><li><yt-formatted-string><em>Productions Beat by: D.Blind (Nana Almeida) </em></yt-formatted-string></li><li><yt-formatted-string><em>Mixed &amp; Mastered by: HellBox Studio </em></yt-formatted-string></li><li><yt-formatted-string><em>ArtWork: Kessy Rocha</em></yt-formatted-string></li></ul><p>ouvindo a rádio terás mais informações<br><yt-formatted-string></yt-formatted-string></p>', '(8:20, 10:20, 12:20, 14:20, 16:20, e 19:20)', 0, 1),
(9, 'Sucesso do dia', 'Lançamento de uma Música Nova – 2ª a 6ª Feira', 'yfpJfbPaNLQ', '10-06-2020', '<h1><yt-formatted-string></yt-formatted-string></h1><strong><yt-formatted-string>Dynamo - Traiçã</yt-formatted-string>o</strong><p><br></p><ul><li><yt-formatted-string>Letra e voz: Dynamo </yt-formatted-string></li><li><yt-formatted-string>Produtor Executivo: BeatDrop Music </yt-formatted-string></li><li><yt-formatted-string>Director do Video : Dynamo </yt-formatted-string></li><li>Edição do Video: Black Rose </li><li><yt-formatted-string>Produção Musical: Kr Hitz </yt-formatted-string></li><li><yt-formatted-string>Mix/Master: Carlos Juvandes </yt-formatted-string></li><li><yt-formatted-string>Album: Independent </yt-formatted-string></li><li><yt-formatted-string>Faixa: 4</yt-formatted-string></li></ul><p><yt-formatted-string><br></yt-formatted-string></p><p>ouvindo a rádio terás mais informações</p>', '(8:20, 10:20, 12:20, 14:20, 16:20, e 19:20)', 0, 1),
(10, 'Bons Momentos', 'Músicas que marcaram uma época – 2ª a 6ª Feira', 'NxGa7vjhbWI', '09-06-2020', '<p>FAGNER E ROBERTA MIRANDA - CABECINHA NO OMBRO</p><blockquote>Composição: Paulo Borges<br>Cabecinha no Ombro teve a sua primeira interpretação pelo Alcides Gerardi nos anos 60<br>Esta versão foi gravada logo no inicio dos anos 90 e foi tema da novela pedra sobre pedra.</blockquote><p>ouvindo a rádio terás mais informações<br></p>', '(9:00, 11:00, 13:00, 15:00, 17:00, e 19:00)', 0, 3),
(11, 'Nós kultura', 'Lançamento de uma Música Tradicional – 2ª a 6ª Feira', 'BcdmK-Ms_xs', '09-06-2020', '<blockquote></blockquote><p><strong></strong><strong>Bulimundo - Pombinha Mansa</strong></p><blockquote>Faixa: 4<br>Álbum: Batuku – 8 faixas<br>Lancamento: 1980</blockquote><p>ouvindo a rádio terás mais informações<br></p>', '8:40, 10:40, 12:40, 14:40, 16:40, e 19:40)', 0, 2),
(12, 'Nós kultura', 'Lançamento de uma Música Tradicional – 2ª a 6ª Feira', 'efuIZoBkLqk', '10-06-2020', '<p>CEUZANY – FERA NA SUCUPIRA</p><ul><li><em>Composição: Romeu di Lurdes</em></li><li><em>Arranjos e Produção Musical: Hernâni Almeida</em></li></ul><p>ouvindo a rádio terás mais informações</p>', '	8:40, 10:40, 12:40, 14:40, 16:40, e 19:40)', 0, 2),
(13, 'Bons Momentos', 'Músicas que marcaram uma época – 2ª a 6ª Feira', 'qs1bbJFLLN8', '09-06-2020', '<p>Los Del Río - Macarena</p><ul><li>Artista: Los Del Río\r\n</li><li>Álbum: A mí me gusta\r\n</li><li>Data de lançamento: 1993\r\n</li><li>Gênero: Flamenco e música tradicional espanhola</li></ul><p>ouvindo a rádio terás mais informações</p><p><span class=\"LrzXr kno-fv\" style=\"background-color: initial;\"></span>\r\n</p>', '	(9:00, 11:00, 13:00, 15:00, 17:00, e 19:00)', 0, 3),
(14, 'Sucesso do dia', 'Lançamento de uma Música Nova – 2ª a 6ª Feira', 'lvgvOoTdVYM', '10-06-2020', '<p><strong>Black G So mi ki sabe ft Dj Rafii</strong><br></p><p><strong></strong></p><blockquote>Produção: Dj Rafii <br>Vocais principais: Black G <br>Vocais Secundárias: Black G &amp; Filhas <br>Mixagem e Master: Vaz <br><br></blockquote><p><span></span><span></span>ouvindo a rádio terás mais informações</p><p><span></span></p>', '(8:20, 10:20, 12:20, 14:20, 16:20, e 19:20)', 1, 1),
(15, 'Nós kultura', 'Lançamento de uma Música Tradicional – 2ª a 6ª Feira', '7dW_dgNDZbQ', '10-06-2020', '<p>BETINA LOPES – FANTASIA DI NHA SONHU</p><blockquote><em>Composição: Manuel de Novas<br>Arranjos: Paulino Vieira<br>Álbum: Mensagem – 7 faixas - formato Vinil LP<br></em>Lançamento: Finais de anos 80 <br></blockquote><p>Obs: link da música no perfil é um das músicas interpretada pela artista</p><p>ouvindo a rádio terás mais informações<br></p>', '(8:40, 10:40, 12:40, 14:40, 16:40, e 19:40)', 1, 2),
(16, 'Bons Momentos', '	Músicas que marcaram uma época – 2ª a 6ª Feira', 'tiddsgHBC8g', '10-06-2020', '<h1><yt-formatted-string></yt-formatted-string></h1><p><yt-formatted-string>Enrique Iglesias - Cosas del Amor</yt-formatted-string></p><blockquote>Artist - Enrique Iglesias <br>Album - Cosas del Amor <br>Song - Cosas del Amor<br><br></blockquote><p>ouvindo a rádio terás mais informações</p>', '(9:00, 11:00, 13:00, 15:00, 17:00, e 19:00)', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto`
--

CREATE TABLE `texto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`id`, `titulo`, `descricao`) VALUES
(1, 'Piaget TV', 'Piaget TV uma ferramenta digital que funciona como um canal de Tv convencional, porém, é exibida apenas na internet e tem sua programação produzida especialmente para este formato digital. Uma WebTV é transmitida através dos recursos de streaming de vídeo'),
(2, 'Piaget TV', 'Piaget TV é uma rádio digital que realiza sua transmissão via Internet utilizando a tecnologia (streaming) serviço de transmissão de áudio/som em tempo real. Através de um servidor, é possível emitir uma programação ao vivo ou gravada.'),
(3, 'Eventos', 'Fique por dentro de todos os eventos que vai decorrer na UniPiaget, através desse link: http://www.unipiaget.edu.cv/?r=site/evento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `top`
--

CREATE TABLE `top` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `musica` varchar(255) NOT NULL,
  `cantor` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `ordem` varchar(255) NOT NULL,
  `votos` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `top`
--

INSERT INTO `top` (`id`, `imagem`, `musica`, `cantor`, `youtube`, `ordem`, `votos`) VALUES
(1, 'images/covers/cover-1.jpg', 'A Serio', 'Léo Pereira Feat. Tony Fika', 'dhsPeHUcD1c', '1', 4),
(2, 'images/covers/69710659_2227752964021088_7110111830730604544_n.jpg', 'Skodji Ser Filiz', 'Dynamo feat. Loony Johnson ', 'JeUZmmq9DmU', '2', 3),
(3, 'images/covers/60886907_2448505825187639_1950859448188665856_n.jpg', 'Nu Reza', 'Willy Semedo', 'CvNUWAS5Zcw', '3', 4),
(4, 'images/covers/cover-4.jpg', 'Amar 24/24', 'Calema', 'JlX0KTAI8cU', '4', 4),
(5, 'images/covers/95174430_2602008586787378_7510330842015596544_o.jpg', 'Dja ka ta da', 'Neyna', '00JW_TNKAFs', '5', 3),
(6, 'images/covers/unnamed.jpg', 'ANJU DA GUARDA', 'GA DA LOMBA ft GRACE EVORA & KUUMBA', 'I1FGleytpjI', '6', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `foto` varchar(5000) DEFAULT NULL,
  `nome` varchar(500) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `data_inscrisao` date NOT NULL,
  `documento_indentificacao` varchar(100) DEFAULT NULL,
  `cinto` varchar(100) DEFAULT NULL,
  `telemovel` varchar(100) DEFAULT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10 COMMENT '0 - Desactivado, 10 - AdminAtivado',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `aturaMetros` float DEFAULT NULL,
  `pesoKilo` float DEFAULT NULL,
  `turma` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `crud_by` int(11) NOT NULL,
  `sexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `foto`, `nome`, `data_nascimento`, `data_inscrisao`, `documento_indentificacao`, `cinto`, `telemovel`, `facebook`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `aturaMetros`, `pesoKilo`, `turma`, `tipo`, `crud_by`, `sexo`) VALUES
(1, 'uploads/face.jpg', 'Helcio Denny Lopes Ferreira', '1996-08-01', '2019-11-05', 'J019960801', 'branco', '9774581', 'https://www.facebook.com/helcio.ferreira.182', 'admin', 'Hh4BN7dw8ukfWoiyrK0cFY49Q2YSS-o6', '$2y$13$zSvyUH4RbaN0WdHIrywX8ObHKEP3Q3dQj3oqYC6V1NXST/ACA.SE6', NULL, 'helciotj10@gmail.com', 10, 1570465699, 1570465699, '9A9U8ywIXRJTE7NvM2-AKF-KUb7gWhjy_1570465699', 1.76, 60, 'A', '', 8, 'Masculino'),
(5, 'uploads/61855940_10214088186814572_8878532724726431744_n.jpg', 'Jorge Martins', '2019-11-05', '2019-11-05', '', 'Verde', '', '', 'jorgetkd', 'bpPFl6swnIBiPwChY7OnKnaOHDyzQptF', '$2y$13$NwV1ySXW62157ggsL0u6teY6mUHiDm1.oN7ktdk7Zo569XjL7PZH6', NULL, 'jorge@gmail.com', 10, 0, 0, NULL, NULL, NULL, '', '', 0, 'Masculino'),
(6, 'uploads/56358468_1023894174664769_7321660118477570048_n.jpg', 'Noreany Dias', '2019-11-05', '2019-11-05', '', '', '', '', 'noreanytkd', 'TUUYuLDuBl9Z-AYoq2w1dGGKWlbP1x-_', '$2y$13$KgDInAOZcgKarm9BWrPUdOPeoSv.496jYF1dW9OwgR1CfP/rw86T.', NULL, 'noreany@gmail.com', 10, 0, 0, NULL, NULL, NULL, '', '', 1, 'Femenino'),
(7, 'uploads/25158061_10204259191915334_5528641146513152967_n.jpg', 'Mauro Montrond', '2019-11-05', '2019-11-05', '', 'branco', '', '', 'maurotkd', 'E9_Az6Takt5jtT0TpwQyHpggRCmWnOsr', '$2y$13$9mr6mnzBwNalmRDYszMjnuW8pCswULnAqkJPPF22TatutZhI.Ku7W', NULL, 'mauro@gmail.com', 10, 0, 0, NULL, NULL, NULL, '', '', 1, 'Masculino'),
(8, NULL, 'unipiaget', '2020-02-05', '2020-02-05', '', '', ']', '', 'unipiaget', 'mRNTVfqkm3xjgsAUa1CnBcEJKQIViNP9', '$2y$13$tyBQRa4Z5jomfdxN/xY1OOuupnrbWVt55uysKOtyedZudb/SpFABO', NULL, 'helciotj10', 10, 0, 0, NULL, NULL, NULL, '', 'Aluno', 1, 'Masculino'),
(11, NULL, 'unipiaget', '2020-02-10', '2020-02-10', '', '', '', '', 'unipiagetiduids', '_zKWP1vF1URUdeQfgmba6Ih93bsSvEXE', '$2y$13$IQ0wxxIyAf/77D.Um5vzquaOpNeBBKTkK.sDsn52mirG9XkwHCt2.', NULL, 'helciotj10@gmail.coms', 10, 0, 0, NULL, NULL, NULL, '', '', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `efeito` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `programa_id` int(11) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `youtube`
--

INSERT INTO `youtube` (`id`, `foto`, `efeito`, `link`, `tipo`, `programa_id`, `ordem`) VALUES
(44, '', 'FAMOSOS NA UNIPIAGET', 'https://www.youtube.com/watch?v=hja9L_2z1HM&list=PLJYwimXGFTN9emzE6_0UTTG1dmBRqSUQd&index=16', NULL, NULL, 1),
(45, '', 'MELHOR DA TARDE', 'https://www.youtube.com/watch?v=BjlOrN6p1nc&list=PLJYwimXGFTN_thCRDlkd5leyVgaWlPBHY&index=4', NULL, NULL, 2),
(46, '', 'FAMILIA PIAGET', 'https://www.youtube.com/watch?v=wCOmK5M5l9E&list=PLJYwimXGFTN8FMBjRR1OBVbsrf00IFK5M&index=10', NULL, NULL, 3),
(47, '', 'INFO PIAGET', 'https://www.youtube.com/watch?v=uWV9MRSxN9g&list=PLJYwimXGFTN_3UD4LAj-pXyFmmYOoRZAg&index=1', NULL, NULL, 4),
(50, '', 'Referência da Melhor Opção', 'https://www.youtube.com/watch?v=-H7SIKtuq5c&list=PLJYwimXGFTN8a0dJq2NSe_pwWurNIxIBE&index=3', NULL, NULL, NULL),
(51, '', 'Conversa Aberta', 'https://www.youtube.com/watch?v=Dk9O6AKYVx4&list=PLJYwimXGFTN841vlLvC3Bcd07IZn4CisF&index=6', NULL, NULL, NULL),
(53, '', 'Reportagem 20 anos do Campus da Praia', 'https://www.youtube.com/watch?v=ED_WyPIZr2M&list=PLJYwimXGFTN-rfa-ruVWoHWMQIlJ9kdHf&index=16', NULL, NULL, NULL),
(54, '', 'NAVEGANDO', 'https://www.youtube.com/watch?v=UfeTLMFin6E&list=PLJYwimXGFTN8csgAAflny68PnEsyi9lE4&index=2', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avancado`
--
ALTER TABLE `avancado`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cartaz`
--
ALTER TABLE `cartaz`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipa`
--
ALTER TABLE `equipa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotografia`
--
ALTER TABLE `fotografia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_album` (`id_album`);

--
-- Índices para tabela `indexitem`
--
ALTER TABLE `indexitem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `programacao`
--
ALTER TABLE `programacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `publicidade`
--
ALTER TABLE `publicidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `rubricas`
--
ALTER TABLE `rubricas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ordem` (`ordem`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Índices para tabela `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `avancado`
--
ALTER TABLE `avancado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `cartaz`
--
ALTER TABLE `cartaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `entrevistas`
--
ALTER TABLE `entrevistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `equipa`
--
ALTER TABLE `equipa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `fotografia`
--
ALTER TABLE `fotografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;

--
-- AUTO_INCREMENT de tabela `indexitem`
--
ALTER TABLE `indexitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `programacao`
--
ALTER TABLE `programacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de tabela `publicidade`
--
ALTER TABLE `publicidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `rubricas`
--
ALTER TABLE `rubricas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `texto`
--
ALTER TABLE `texto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `top`
--
ALTER TABLE `top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `fotografia`
--
ALTER TABLE `fotografia`
  ADD CONSTRAINT `fotografia_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
