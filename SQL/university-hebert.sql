-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/09/2023 às 20:18
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `university-hebert`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adminlogs`
--

CREATE TABLE `adminlogs` (
  `LogID` int(11) NOT NULL,
  `AdminID` int(11) DEFAULT NULL,
  `Action` varchar(100) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `attendance`
--

CREATE TABLE `attendance` (
  `StudentID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `coursecategories`
--

CREATE TABLE `coursecategories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `coursecategories`
--

INSERT INTO `coursecategories` (`category_id`, `category_name`, `description`) VALUES
(1, 'frontend', 'Courses related to frontend development, including HTML, CSS, JavaScript and more.'),
(2, 'backend', 'Courses focused on server-side development, databases, and backend frameworks.'),
(3, 'ux_ui_designer', 'Courses about user experience and user interface design principles.'),
(4, 'data_scientist', 'Courses that delve into data analysis, machine learning, and statistical methods.'),
(5, 'marketing', 'Courses on marketing strategies, digital marketing, and market research.'),
(6, 'product_managment', 'Courses covering product management, planning, and strategy.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `duration` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `start_date`, `end_date`, `category_id`, `duration`) VALUES
(1, 'Introdução à Programação', '2023-09-01', '2023-12-15', NULL, 0),
(2, 'Desenvolvimento Web', '2023-09-01', '2023-12-15', NULL, 0),
(3, 'Banco de Dados', '2023-09-01', '2023-12-15', NULL, 0),
(4, 'Estruturas de Dados', '2023-01-10', '2023-05-15', NULL, 0),
(5, 'Algoritmos Avançados', '2023-01-10', '2023-05-15', NULL, 0),
(6, 'Redes de Computadores', '2023-01-10', '2023-05-15', NULL, 0),
(7, 'Segurança da Informação', '2023-09-01', '2023-12-15', NULL, 0),
(8, 'Engenharia de Software', '2023-01-10', '2023-05-15', NULL, 0),
(9, 'Machine Learning', '2023-09-01', '2023-12-15', NULL, 0),
(10, 'Inteligência Artificial', '2023-09-01', '2023-12-15', NULL, 0),
(11, 'Design Gráfico', '2023-09-01', '2023-12-15', NULL, 0),
(12, 'UI/UX Design', '2023-09-01', '2023-12-15', NULL, 0),
(13, 'Animação Digital', '2023-01-10', '2023-05-15', NULL, 0),
(14, 'Web Design', '2023-01-10', '2023-05-15', NULL, 0),
(15, 'Design de Produto', '2023-09-01', '2023-12-15', NULL, 0),
(16, 'Gestão de Produto', '2023-09-01', '2023-12-15', NULL, 0),
(17, 'Desenvolvimento de Produto', '2023-09-01', '2023-12-15', NULL, 0),
(18, 'Design Thinking para Produtos', '2023-01-10', '2023-05-15', NULL, 0),
(19, 'Prototipagem de Produto', '2023-01-10', '2023-05-15', NULL, 0),
(20, 'Introdução ao Marketing de Produto', '2023-09-01', '2023-12-15', NULL, 0),
(21, 'Marketing Digital', '2023-09-01', '2023-12-15', NULL, 0),
(22, 'SEO e SEM para Negócios', '2023-09-01', '2023-12-15', NULL, 0),
(23, 'Gestão de Mídias Sociais', '2023-01-10', '2023-05-15', NULL, 0),
(24, 'Estratégias de Marketing de Conteúdo', '2023-01-10', '2023-05-15', NULL, 0),
(25, 'Branding e Gestão de Marca', '2023-09-01', '2023-12-15', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `course_student`
--

CREATE TABLE `course_student` (
  `CourseID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `course_teacher`
--
-- Erro ao ler a estrutura para a tabela university-hebert.course_teacher: #1932 - Table &#039;university-hebert.course_teacher&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela university-hebert.course_teacher: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `university-hebert`.`course_teacher`&#039; na linha 1

-- --------------------------------------------------------

--
-- Estrutura para tabela `grades`
--

CREATE TABLE `grades` (
  `StudentID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `materials`
--

CREATE TABLE `materials` (
  `MaterialID` int(11) NOT NULL,
  `CourseID` int(11) DEFAULT NULL,
  `MaterialName` varchar(100) DEFAULT NULL,
  `MaterialType` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `messages`
--

CREATE TABLE `messages` (
  `MessageID` int(11) NOT NULL,
  `SenderID` int(11) DEFAULT NULL,
  `ReceiverID` int(11) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `reports`
--

CREATE TABLE `reports` (
  `ReportID` int(11) NOT NULL,
  `GeneratedBy` int(11) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ReportType` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `roles`
--

CREATE TABLE `roles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `roles`
--

INSERT INTO `roles` (`RoleID`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Estrutura para tabela `students`
--

CREATE TABLE `students` (
  `StudentID` int(11) NOT NULL,
  `GradeLevel` varchar(50) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `DNI` varchar(20) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `teachers`
--

CREATE TABLE `teachers` (
  `TeacherID` int(11) NOT NULL,
  `Qualifications` text DEFAULT NULL,
  `SubjectsTaught` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `roleId` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `roleId`, `name`, `address`, `birthday`, `photo`) VALUES
(108, 'mpaumier7', 'mC4)$h.Kb!*~4_{', 'mfurmagier7@census.gov', NULL, 'Mortie', NULL, NULL, NULL),
(109, 'mwoltering8', 'jM1.S`r<', 'mbolens8@usnews.com', NULL, 'Minta', NULL, NULL, NULL),
(110, 'rgresty9', 'yK9\"J/mH~m(PXMV', 'rkunrad9@moonfruit.com', NULL, 'Rube', NULL, NULL, NULL),
(111, 'gswindellsa', 'hL2@cCHx', 'gporcasa@chron.com', NULL, 'Giralda', NULL, NULL, NULL),
(112, 'rivashnikovb', 'cW2}LS3u{K', 'rladdsb@t.co', NULL, 'Ramona', NULL, NULL, NULL),
(115, 'agilsone', 'sA9~wPd237I', 'afancete@rediff.com', NULL, 'Ariella', NULL, NULL, NULL),
(116, 'ececcolif', 'qF5%Wbsu', 'eschubbertf@free.fr', NULL, 'Eliza', NULL, NULL, NULL),
(117, 'qabrehartg', 'cG5>(J~@k17', 'qraltong@infoseek.co.jp', NULL, 'Quincy', NULL, NULL, NULL),
(119, 'dbolwelli', 'sR9`r~tic}', 'dattlei@free.fr', NULL, 'Dorie', NULL, NULL, NULL),
(120, 'dyuranovevj', 'kS2\"A)P{vwC%9e', 'dtotterdillj@skyrock.com', NULL, 'Davina', NULL, NULL, NULL),
(122, 'eethridgel', 'yE7=Lz}{uAFyXB,a', 'estapforthl@tumblr.com', NULL, 'Ezequiel', NULL, NULL, NULL),
(124, 'lcroyser0', 'rV2`sQ/Fd#U,c}w', 'lspringle0@soup.io', NULL, 'Lana', NULL, NULL, NULL),
(125, 'wgeillier1', 'bB9#h(Xo#F', 'wormond1@theglobeandmail.com', NULL, 'Wini', NULL, NULL, NULL),
(126, 'tinch2', '$2y$10$hBZSrg68C2sMAU9auG.xLOQQ4kLnOFQslnJoJ0iapfZ', 'tphibb2@angelfire.com', NULL, 'Toby Silva', '', '0000-00-00', NULL),
(127, 'psewter3', 'eV4(hLRavCtm#!vL', 'pwaind3@npr.org', NULL, 'Phillie', NULL, NULL, NULL),
(128, 'afarn4', '$2y$10$24R0yUyEk6tYvE28G2hd0ux8wn/UiEn.zQloLw.Hl7r', 'adormer4@wired.com', NULL, 'Aguste', NULL, NULL, NULL),
(129, 'lelger5', 'oX2~r7_H)%t@', 'lmulvagh5@adobe.com', NULL, 'Liane', NULL, NULL, NULL),
(130, 'mbrunn6', 'sK0~bS{YY`M?UGL', 'mcolgan6@mit.edu', NULL, 'Mitchell', NULL, NULL, NULL),
(131, 'mpaumier7', 'mC4)$h.Kb!*~4_{', 'mfurmagier7@census.gov', NULL, 'Mortie', NULL, NULL, NULL),
(132, 'mwoltering8', 'jM1.S`r<', 'mbolens8@usnews.com', NULL, 'Minta', NULL, NULL, NULL),
(133, 'rgresty9', 'yK9\"J/mH~m(PXMV', 'rkunrad9@moonfruit.com', NULL, 'Rube', NULL, NULL, NULL),
(134, 'gswindellsa', 'hL2@cCHx', 'gporcasa@chron.com', NULL, 'Giralda', NULL, NULL, NULL),
(135, 'rivashnikovb', 'cW2}LS3u{K', 'rladdsb@t.co', NULL, 'Ramona', NULL, NULL, NULL),
(136, 'manderlc', 'uR4(84B8\'UQAI', 'mcroftsc@ow.ly', NULL, 'Mace', NULL, NULL, NULL),
(137, 'ebuyersd', '$2y$10$xAtO2YsPrfV6j6wX38fL4.39tjg6UtSH3DV1yLQ1LvW', 'epaszakd@skype.com', NULL, 'Ellie', NULL, NULL, NULL),
(138, 'agilsone', 'sA9~wPd237I', 'afancete@rediff.com', NULL, 'Ariella', NULL, NULL, NULL),
(139, 'ececcolif', 'qF5%Wbsu', 'eschubbertf@free.fr', NULL, 'Eliza', NULL, NULL, NULL),
(140, 'qabrehartg', 'cG5>(J~@k17', 'qraltong@infoseek.co.jp', NULL, 'Quincy', NULL, NULL, NULL),
(141, 'gbrownsworthh', 'sQ9#xbvY', 'ghunsworthh@biblegateway.com', NULL, 'Georgy', NULL, NULL, NULL),
(142, 'dbolwelli', 'sR9`r~tic}', 'dattlei@free.fr', NULL, 'Dorie', NULL, NULL, NULL),
(143, 'dyuranovevj', 'kS2\"A)P{vwC%9e', 'dtotterdillj@skyrock.com', NULL, 'Davina', NULL, NULL, NULL),
(144, 'mdunbabink', 'qR1/94EsL,', 'mcopseyk@google.ca', NULL, 'Mimi', NULL, NULL, NULL),
(145, 'eethridgel', 'yE7=Lz}{uAFyXB,a', 'estapforthl@tumblr.com', NULL, 'Ezequiel', NULL, NULL, NULL),
(146, 'bkisbeem', 'qV8!jX4y`+wi', 'bcrowderm@mtv.com', NULL, 'Beatrix', NULL, NULL, NULL),
(147, 'lcroyser0', 'rV2`sQ/Fd#U,c}w', 'lspringle0@soup.io', NULL, 'Lana', NULL, NULL, NULL),
(148, 'wgeillier1', 'bB9#h(Xo#F', 'wormond1@theglobeandmail.com', NULL, 'Wini', NULL, NULL, NULL),
(149, 'tinch2', '$2y$10$hBZSrg68C2sMAU9auG.xLOQQ4kLnOFQslnJoJ0iapfZ', 'tphibb2@angelfire.com', NULL, 'Toby', NULL, NULL, NULL),
(150, 'psewter3', 'eV4(hLRavCtm#!vL', 'pwaind3@npr.org', NULL, 'Phillie', NULL, NULL, NULL),
(151, 'afarn4', '$2y$10$24R0yUyEk6tYvE28G2hd0ux8wn/UiEn.zQloLw.Hl7r', 'adormer4@wired.com', NULL, 'Aguste', NULL, NULL, NULL),
(152, 'lelger5', 'oX2~r7_H)%t@', 'lmulvagh5@adobe.com', NULL, 'Liane', NULL, NULL, NULL),
(153, 'mbrunn6', 'sK0~bS{YY`M?UGL', 'mcolgan6@mit.edu', NULL, 'Mitchell', NULL, NULL, NULL),
(154, 'mpaumier7', 'mC4)$h.Kb!*~4_{', 'mfurmagier7@census.gov', NULL, 'Mortie', NULL, NULL, NULL),
(155, 'mwoltering8', 'jM1.S`r<', 'mbolens8@usnews.com', NULL, 'Minta', NULL, NULL, NULL),
(156, 'rgresty9', 'yK9\"J/mH~m(PXMV', 'rkunrad9@moonfruit.com', NULL, 'Rube', NULL, NULL, NULL),
(157, 'gswindellsa', 'hL2@cCHx', 'gporcasa@chron.com', NULL, 'Giralda', NULL, NULL, NULL),
(158, 'rivashnikovb', 'cW2}LS3u{K', 'rladdsb@t.co', NULL, 'Ramona', NULL, NULL, NULL),
(159, 'manderlc', 'uR4(84B8\'UQAI', 'mcroftsc@ow.ly', NULL, 'Mace', NULL, NULL, NULL),
(160, 'ebuyersd', '$2y$10$xAtO2YsPrfV6j6wX38fL4.39tjg6UtSH3DV1yLQ1LvW', 'epaszakd@skype.com', NULL, 'Ellie', NULL, NULL, NULL),
(161, 'agilsone', 'sA9~wPd237I', 'afancete@rediff.com', NULL, 'Ariella', NULL, NULL, NULL),
(162, 'ececcolif', 'qF5%Wbsu', 'eschubbertf@free.fr', NULL, 'Eliza', NULL, NULL, NULL),
(163, 'qabrehartg', 'cG5>(J~@k17', 'qraltong@infoseek.co.jp', NULL, 'Quincy', NULL, NULL, NULL),
(164, 'gbrownsworthh', 'sQ9#xbvY', 'ghunsworthh@biblegateway.com', NULL, 'Georgy', NULL, NULL, NULL),
(165, 'dbolwelli', 'sR9`r~tic}', 'dattlei@free.fr', NULL, 'Dorie', NULL, NULL, NULL),
(166, 'dyuranovevj', 'kS2\"A)P{vwC%9e', 'dtotterdillj@skyrock.com', NULL, 'Davina', NULL, NULL, NULL),
(167, 'mdunbabink', 'qR1/94EsL,', 'mcopseyk@google.ca', NULL, 'Mimi', NULL, NULL, NULL),
(168, 'eethridgel', 'yE7=Lz}{uAFyXB,a', 'estapforthl@tumblr.com', NULL, 'Ezequiel', NULL, NULL, NULL),
(169, 'bkisbeem', 'qV8!jX4y`+wi', 'bcrowderm@mtv.com', NULL, 'Beatrix', NULL, NULL, NULL),
(170, 'lcroyser0', 'rV2`sQ/Fd#U,c}w', 'lspringle0@soup.io', NULL, 'Lana', NULL, NULL, NULL),
(171, 'wgeillier1', 'bB9#h(Xo#F', 'wormond1@theglobeandmail.com', NULL, 'Wini', NULL, NULL, NULL),
(172, 'tinch2', '$2y$10$hBZSrg68C2sMAU9auG.xLOQQ4kLnOFQslnJoJ0iapfZ', 'tphibb2@angelfire.com', NULL, 'Toby', NULL, NULL, NULL),
(173, 'psewter3', 'eV4(hLRavCtm#!vL', 'pwaind3@npr.org', NULL, 'Phillie', NULL, NULL, NULL),
(174, 'afarn4', '$2y$10$24R0yUyEk6tYvE28G2hd0ux8wn/UiEn.zQloLw.Hl7r', 'adormer4@wired.com', NULL, 'Aguste', NULL, NULL, NULL),
(175, 'lelger5', 'oX2~r7_H)%t@', 'lmulvagh5@adobe.com', NULL, 'Liane', NULL, NULL, NULL),
(176, 'mbrunn6', 'sK0~bS{YY`M?UGL', 'mcolgan6@mit.edu', NULL, 'Mitchell', NULL, NULL, NULL),
(177, 'mpaumier7', 'mC4)$h.Kb!*~4_{', 'mfurmagier7@census.gov', NULL, 'Mortie', NULL, NULL, NULL),
(178, 'adurbridge1b', 'wB3*$f+j\'cmJ|c', 'adagostino1b@youtu.be', NULL, 'Aridatha', NULL, NULL, NULL),
(179, 'dlinebarger1a', 'iT0|S6\Z0', 'dmattke1a@merriam-webster.com', NULL, 'Dorene', NULL, NULL, NULL),
(180, 'adurbridge1b', 'wB3*$f+j\'cmJ|c', 'adagostino1b@youtu.be', NULL, 'Aridatha', NULL, NULL, NULL),
(181, 'jdoe1c', 'jD1@abc', 'jane.doe1c@example.com', NULL, 'Jane', NULL, NULL, NULL),
(182, 'jsmith1d', '$2y$10$nRYdcIa7aq6glXdw.QDP1.NW.asvVx1qD60Vzym3R7Z', 'john.smith1d@example.com', NULL, 'John', NULL, NULL, NULL),
(183, 'ewatson1e', 'eW1@123', 'emily.watson1e@example.com', NULL, 'Emily', NULL, NULL, NULL),
(184, 'rjohnson1f', 'rJ1@456', 'robert.johnson1f@example.com', NULL, 'Robert', NULL, NULL, NULL),
(185, 'sconnor1g', 'sC1@789', 'sara.connor1g@example.com', NULL, 'Sara', NULL, NULL, NULL),
(186, 'mjordan1h', 'mJ1@000', 'michael.jordan1h@example.com', NULL, 'Michael', NULL, NULL, NULL),
(187, 'lsmith1i', 'lS1@111', 'lucas.smith1i@example.com', NULL, 'Lucas', NULL, NULL, NULL),
(188, 'sbrown1j', '$2y$10$00MEOOZqP7c.jSdXgR9h.OJtQYMbYPR2zydHe4/YBrl', 'sophia.brown1j@example.com', NULL, 'Sophia', NULL, NULL, NULL),
(189, 'gwilliams1k', 'gW1@333', 'grace.williams1k@example.com', NULL, 'Grace', NULL, NULL, NULL),
(190, 'ojones1l', 'oJ1@444', 'oliver.jones1l@example.com', NULL, 'Oliver', NULL, NULL, NULL),
(191, 'zthomas1m', 'zT1@555', 'zoe.thomas1m@example.com', NULL, 'Zoe', NULL, NULL, NULL),
(192, 'mmiller1n', 'mM1@666', 'mason.miller1n@example.com', NULL, 'Mason', NULL, NULL, NULL),
(193, 'agarcia1o', 'aG1@777', 'ava.garcia1o@example.com', NULL, 'Ava', NULL, NULL, NULL),
(194, 'lwilliamson1p', 'lW1@888', 'liam.williamson1p@example.com', NULL, 'Liam', NULL, NULL, NULL),
(195, 'nrobertson1q', 'nR1@999', 'noah.robertson1q@example.com', NULL, 'Noah', NULL, NULL, NULL),
(196, 'ejenkins1r', 'eJ1@aaa', 'ella.jenkins1r@example.com', NULL, 'Ella', NULL, NULL, NULL),
(197, 'jcooper1s', 'jC1@bbb', 'james.cooper1s@example.com', NULL, 'James', NULL, NULL, NULL),
(198, 'lwright1t', 'lW1@ccc', 'lily.wright1t@example.com', NULL, 'Lily', NULL, NULL, NULL),
(199, 'oharris1u', 'oH1@ddd', 'oscar.harris1u@example.com', NULL, 'Oscar', NULL, NULL, NULL),
(200, 'ithompson1v', 'iT1@eee', 'isabella.thompson1v@example.com', NULL, 'Isabella', NULL, NULL, NULL),
(201, 'jdoe1c', 'jD1@abc', 'jane.doe1c@example.com', 2, 'Jane', NULL, NULL, NULL),
(202, 'jsmith1d', '$2y$10$nRYdcIa7aq6glXdw.QDP1.NW.asvVx1qD60Vzym3R7Z', 'john.smith1d@example.com', 2, 'John', '', '0000-00-00', 'close-up-photo-portrait-of-successful-serious-and-2022-12-08-04-03-12-utc.jpg'),
(203, 'ewatson1e', 'eW1@123', 'emily.watson1e@example.com', 2, 'Emily', NULL, NULL, NULL),
(204, 'rjohnson1f', 'rJ1@456', 'robert.johnson1f@example.com', 2, 'Robert', NULL, NULL, NULL),
(205, 'sconnor1g', 'sC1@789', 'sara.connor1g@example.com', 2, 'Sara', NULL, NULL, NULL),
(206, 'mjordan1h', 'mJ1@000', 'michael.jordan1h@example.com', 2, 'Michael', NULL, NULL, NULL),
(207, 'lsmith1i', 'lS1@111', 'lucas.smith1i@example.com', 2, 'Lucas', NULL, NULL, NULL),
(208, 'sbrown1j', '$2y$10$00MEOOZqP7c.jSdXgR9h.OJtQYMbYPR2zydHe4/YBrl', 'sophia.brown1j@example.com', 1, 'Sophia Oliveira', 'Rua Europa', '1989-06-12', 'portrait-image-of-a-happy-beautiful-asian-woman-ma-2022-12-16-05-14-18-utc.jpg'),
(209, 'gwilliams1k', 'gW1@333', 'grace.williams1k@example.com', 1, 'Grace', NULL, NULL, NULL),
(210, 'ojones1l', 'oJ1@444', 'oliver.jones1l@example.com', 1, 'Oliver', NULL, NULL, NULL),
(212, 'mmiller1n', 'mM1@666', 'mason.oliveira@example.com', 3, 'Mason Oliveira', 'R. Bahia,189', '1998-06-12', 'portrait-photo-2022-11-17-09-21-58-utc.jpg'),
(213, 'agarcia1o', 'aG1@777', 'ava.garcia1o@example.com', 3, 'Ava Garcia', 'Rua Europa, 159', '2002-02-09', 'the-young-woman-post-in-the-city-for-photo-2021-12-09-05-59-19-utc.jpg'),
(214, 'lwilliamson1p', 'lW1@888', 'liam.williamson1p@example.com', 3, 'Liam', NULL, NULL, NULL),
(215, 'nrobertson1q', 'nR1@999', 'noah.robertson1q@example.com', 3, 'Noah', NULL, NULL, NULL),
(216, 'ejenkins1r', 'eJ1@aaa', 'ella.jenkins1r@example.com', 3, 'Ella', NULL, NULL, NULL),
(217, 'jcooper1s', 'jC1@bbb', 'eyplan10@gmail.com', 3, 'João de Oliveira', 'Rua sergipe, 189', '1959-05-12', 'close-up-photo-portrait-of-successful-serious-and-2022-12-08-04-03-12-utc.jpg'),
(220, 'ithompson1v', 'iT1@eee', 'isabella.thompson1v@example.com', 3, 'Isabella', NULL, NULL, NULL),
(221, 'sjackson1w', 'sJ1@fff', 'sophie.jackson1w@example.com', 3, 'Sophie', NULL, NULL, NULL),
(222, 'ecollins1x', 'eC1@ggg', 'ethan.collins1x@example.com', 3, 'Ethan', NULL, NULL, NULL),
(224, 'mhall1z', 'mH1@iii', 'mia.hall1z@example.com', 3, 'Mia', NULL, NULL, NULL),
(225, 'nwalker20', 'nW1@jjj', 'nathan.walker20@example.com', 3, 'Nathan', NULL, NULL, NULL),
(226, 'ecampbell21', 'eC1@kkk', 'emma.campbell21@example.com', 3, 'Emma', NULL, NULL, NULL),
(227, 'lroberts22', 'lR1@lll', 'logan.roberts22@example.com', 3, 'Logan', NULL, NULL, NULL),
(228, 'eedwards23', 'eE1@mmm', 'eva.edwards23@example.com', 3, 'Eva', NULL, NULL, NULL),
(229, 'lphillips24', 'lP1@nnn', 'lucy.phillips24@example.com', 3, 'Lucy', NULL, NULL, NULL),
(230, 'ascott25', 'aS1@ooo', 'maria-costa@example.com', 3, 'Maria Costa', 'R.Bahia,26', '1996-06-25', NULL),
(231, '', '$2y$10$uZDhcPlL2/739m.TIOIbKuGrg/YyOlu36Lsit5py6be', 'kely@io.com', NULL, 'Angela Maria do Carmo', NULL, NULL, NULL),
(232, '', '$2y$10$1PU33EP80.iTWfjYOp5Sb.X0BNSi6KWPwoSWhhXqF2c', 'angela@angela.com', NULL, 'Angela Maria do Carmo', NULL, NULL, NULL),
(233, '', '$2y$10$oGsyIzeeee4WaEacG2XcAe0lQF5xTPz5zJ/rbCEFJ5j', 'mason@io.com', NULL, 'Mason Oliveira', NULL, NULL, NULL),
(234, '', '$2y$10$xFyEyCciwuHpw0R57jYj6e0cQ8/Ww.EHu8hF2DuJYMq', 'roberto@roberto.com', NULL, 'Roberto Gomes', NULL, NULL, NULL),
(235, '', '$2y$10$kIOR6SA2/7PsnmDHKzx1p.n93Gszs9ltxk6WHxzbca/', 'talita@talita.com', NULL, NULL, NULL, NULL, NULL),
(236, '', '$2y$10$oxNTvyFDjxwb2GF9Oq5qM.MSGEXuO1u7etNK1az2aAV', NULL, NULL, NULL, NULL, NULL, NULL),
(237, '', '$2y$10$CxZiQ4SimXd8goE/rz2bu.j7p6PMBvuwz2KH2pr9Fr7', NULL, NULL, NULL, NULL, NULL, NULL),
(238, '', '$2y$10$p5GLu35xYXVqMK6x.UzETO/AWYWLiEX1AbGq3.luxcW', NULL, NULL, NULL, NULL, NULL, NULL),
(239, '', '$2y$10$Qrzt7h3YSraXXpJN2NRicukTpEW8ck.8oDqNi4QJg7X', NULL, NULL, NULL, NULL, NULL, NULL),
(240, '', '$2y$10$xzpybUh47hvjGwvGfC3pV.fUQQkp1rEeXCHzP0rBJ/V', NULL, NULL, NULL, NULL, NULL, NULL),
(241, '', '$2y$10$Q62JReegiNHRTW/6EsJhZeNRVTmAcddmfM6gr4BiNzY', NULL, NULL, NULL, NULL, NULL, NULL),
(242, '', '$2y$10$DlCvGTJJmfcRAF4ON3UmHeuyY7Nf0Y61S6MJr0n9DKp', NULL, NULL, NULL, NULL, NULL, NULL),
(243, '', '$2y$10$wF2iY8jNU0YHVRs1B4a4ouNBxLmHelDaRPhdBwI581v', NULL, NULL, NULL, NULL, NULL, NULL),
(244, '', '$2y$10$o6/OWAUG6KY18QrJ4bNPmutBPLEDMGLzNjFQfxD3CAY', NULL, NULL, NULL, NULL, NULL, NULL),
(245, '', '$2y$10$yKW5RHu8RbDjM93M47.iDe2fBsXKhE1hsokXRoq4sAh', NULL, NULL, NULL, NULL, NULL, NULL),
(246, '', '$2y$10$IPnsvVIpNu4qcmHTWFl52eEHIR2Fgo3m4FtnqmPI1yH', NULL, NULL, NULL, NULL, NULL, NULL),
(247, '', '$2y$10$ftKx.s/hCyiWRV2/7XSTr.YUDwqkWCkfEFY5xLGdeBo', 'robertofeitosa@io.com', 1, 'Roberto Feitosa', 'Rua Paraná, 189', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD PRIMARY KEY (`LogID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Índices de tabela `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`StudentID`,`CourseID`,`Date`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Índices de tabela `coursecategories`
--
ALTER TABLE `coursecategories`
  ADD PRIMARY KEY (`category_id`);

--
-- Índices de tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `CategoryID` (`category_id`);

--
-- Índices de tabela `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`CourseID`,`StudentID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Índices de tabela `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`StudentID`,`CourseID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Índices de tabela `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`MaterialID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Índices de tabela `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageID`),
  ADD KEY `SenderID` (`SenderID`),
  ADD KEY `ReceiverID` (`ReceiverID`);

--
-- Índices de tabela `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ReportID`),
  ADD KEY `GeneratedBy` (`GeneratedBy`);

--
-- Índices de tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`);

--
-- Índices de tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentID`);

--
-- Índices de tabela `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`TeacherID`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `RoleID` (`roleId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adminlogs`
--
ALTER TABLE `adminlogs`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `coursecategories`
--
ALTER TABLE `coursecategories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `materials`
--
ALTER TABLE `materials`
  MODIFY `MaterialID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reports`
--
ALTER TABLE `reports`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD CONSTRAINT `adminlogs_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `students` (`StudentID`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`course_id`);

--
-- Restrições para tabelas `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `coursecategories` (`category_id`);

--
-- Restrições para tabelas `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `course_student_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `students` (`StudentID`);

--
-- Restrições para tabelas `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `students` (`StudentID`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`course_id`);

--
-- Restrições para tabelas `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`course_id`);

--
-- Restrições para tabelas `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`SenderID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`ReceiverID`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`GeneratedBy`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`TeacherID`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
