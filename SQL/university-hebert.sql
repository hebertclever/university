-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/08/2023 às 21:53
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
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(100) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `courses`
--

INSERT INTO `courses` (`CourseID`, `CourseName`, `StartDate`, `EndDate`, `CategoryID`) VALUES
(1, 'Introdução à Programação', '2023-09-01', '2023-12-15', NULL),
(2, 'Desenvolvimento Web', '2023-09-01', '2023-12-15', NULL),
(3, 'Banco de Dados', '2023-09-01', '2023-12-15', NULL),
(4, 'Estruturas de Dados', '2023-01-10', '2023-05-15', NULL),
(5, 'Algoritmos Avançados', '2023-01-10', '2023-05-15', NULL),
(6, 'Redes de Computadores', '2023-01-10', '2023-05-15', NULL),
(7, 'Segurança da Informação', '2023-09-01', '2023-12-15', NULL),
(8, 'Engenharia de Software', '2023-01-10', '2023-05-15', NULL),
(9, 'Machine Learning', '2023-09-01', '2023-12-15', NULL),
(10, 'Inteligência Artificial', '2023-09-01', '2023-12-15', NULL),
(11, 'Design Gráfico', '2023-09-01', '2023-12-15', NULL),
(12, 'UI/UX Design', '2023-09-01', '2023-12-15', NULL),
(13, 'Animação Digital', '2023-01-10', '2023-05-15', NULL),
(14, 'Web Design', '2023-01-10', '2023-05-15', NULL),
(15, 'Design de Produto', '2023-09-01', '2023-12-15', NULL),
(16, 'Gestão de Produto', '2023-09-01', '2023-12-15', NULL),
(17, 'Desenvolvimento de Produto', '2023-09-01', '2023-12-15', NULL),
(18, 'Design Thinking para Produtos', '2023-01-10', '2023-05-15', NULL),
(19, 'Prototipagem de Produto', '2023-01-10', '2023-05-15', NULL),
(20, 'Introdução ao Marketing de Produto', '2023-09-01', '2023-12-15', NULL),
(21, 'Marketing Digital', '2023-09-01', '2023-12-15', NULL),
(22, 'SEO e SEM para Negócios', '2023-09-01', '2023-12-15', NULL),
(23, 'Gestão de Mídias Sociais', '2023-01-10', '2023-05-15', NULL),
(24, 'Estratégias de Marketing de Conteúdo', '2023-01-10', '2023-05-15', NULL),
(25, 'Branding e Gestão de Marca', '2023-09-01', '2023-12-15', NULL);

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
  `UserID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `RoleID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Password`, `Email`, `RoleID`) VALUES
(16, 'AliceAdmin', 'pass1', 'alice@email.com', 1),
(17, 'BobAdmin', 'pass2', 'bob@email.com', 1),
(18, 'CindyAdmin', 'pass3', 'cindy@email.com', 1),
(19, 'DaveAdmin', 'pass4', 'dave@email.com', 1),
(20, 'EvaAdmin', 'pass5', 'eva@email.com', 1),
(21, 'TomTeacher', 'pass6', 'tom@email.com', 2),
(22, 'SaraTeacher', 'pass7', 'sara@email.com', 2),
(23, 'PaulTeacher', 'pass8', 'paul@email.com', 2),
(24, 'QuinnTeacher', 'pass9', 'quinn@email.com', 2),
(25, 'RachelTeacher', 'pass10', 'rachel@email.com', 2),
(26, 'SamTeacher', 'pass11', 'sam@email.com', 2),
(27, 'TinaTeacher', 'pass12', 'tina@email.com', 2),
(28, 'UrsulaTeacher', 'pass13', 'ursula@email.com', 2),
(29, 'VictorTeacher', 'pass14', 'victor@email.com', 2),
(30, 'WendyTeacher', 'pass15', 'wendy@email.com', 2),
(31, 'AliceAdmin', 'pass1', 'alice@email.com', 1),
(32, 'BobAdmin', 'pass2', 'bob@email.com', 1),
(33, 'CindyAdmin', 'pass3', 'cindy@email.com', 1),
(34, 'DaveAdmin', 'pass4', 'dave@email.com', 1),
(35, 'EvaAdmin', 'pass5', 'eva@email.com', 1),
(36, 'TomTeacher', 'pass6', 'tom@email.com', 2),
(37, 'SaraTeacher', 'pass7', 'sara@email.com', 2),
(38, 'PaulTeacher', 'pass8', 'paul@email.com', 2),
(39, 'QuinnTeacher', 'pass9', 'quinn@email.com', 2),
(40, 'RachelTeacher', 'pass10', 'rachel@email.com', 2),
(41, 'SamTeacher', 'pass11', 'sam@email.com', 2),
(42, 'TinaTeacher', 'pass12', 'tina@email.com', 2),
(43, 'UrsulaTeacher', 'pass13', 'ursula@email.com', 2),
(44, 'VictorTeacher', 'pass14', 'victor@email.com', 2),
(45, 'WendyTeacher', 'pass15', 'wendy@email.com', 2),
(46, 'AdamStudent', 'pass16', 'adam@email.com', 3),
(47, 'BettyStudent', 'pass17', 'betty@email.com', 3),
(48, 'CharlieStudent', 'pass18', 'charlie@email.com', 3),
(49, 'DianaStudent', 'pass19', 'diana@email.com', 3),
(50, 'EddieStudent', 'pass20', 'eddie@email.com', 3),
(51, 'FionaStudent', 'pass21', 'fiona@email.com', 3),
(52, 'GeorgeStudent', 'pass22', 'george@email.com', 3),
(53, 'HannahStudent', 'pass23', 'hannah@email.com', 3),
(54, 'IsaacStudent', 'pass24', 'isaac@email.com', 3),
(55, 'JennyStudent', 'pass25', 'jenny@email.com', 3),
(56, 'KevinStudent', 'pass26', 'kevin@email.com', 3),
(57, 'LindaStudent', 'pass27', 'linda@email.com', 3),
(58, 'MikeStudent', 'pass28', 'mike@email.com', 3),
(59, 'NancyStudent', 'pass29', 'nancy@email.com', 3),
(60, 'OscarStudent', 'pass30', 'oscar@email.com', 3),
(61, 'PaulaStudent', 'pass31', 'paula@email.com', 3),
(62, 'QuincyStudent', 'pass32', 'quincy@email.com', 3),
(63, 'RebeccaStudent', 'pass33', 'rebecca@email.com', 3),
(64, 'SteveStudent', 'pass34', 'steve@email.com', 3),
(65, 'TaraStudent', 'pass35', 'tara@email.com', 3),
(66, 'AliceAdmin', 'pass1', 'alice@email.com', 1),
(67, 'BobAdmin', 'pass2', 'bob@email.com', 1),
(68, 'CindyAdmin', 'pass3', 'cindy@email.com', 1),
(69, 'DaveAdmin', 'pass4', 'dave@email.com', 1),
(70, 'EvaAdmin', 'pass5', 'eva@email.com', 1),
(71, 'TomTeacher', 'pass6', 'tom@email.com', 2),
(72, 'SaraTeacher', 'pass7', 'sara@email.com', 2),
(73, 'PaulTeacher', 'pass8', 'paul@email.com', 2),
(74, 'QuinnTeacher', 'pass9', 'quinn@email.com', 2),
(75, 'RachelTeacher', 'pass10', 'rachel@email.com', 2),
(76, 'SamTeacher', 'pass11', 'sam@email.com', 2),
(77, 'TinaTeacher', 'pass12', 'tina@email.com', 2),
(78, 'UrsulaTeacher', 'pass13', 'ursula@email.com', 2),
(79, 'VictorTeacher', 'pass14', 'victor@email.com', 2),
(80, 'WendyTeacher', 'pass15', 'wendy@email.com', 2),
(81, 'StudentOne', 'pass16', 'studentOne@email.com', 3),
(82, 'StudentTwo', 'pass17', 'studentTwo@email.com', 3),
(83, 'StudentThree', 'pass18', 'studentThree@email.com', 3),
(84, 'StudentFour', 'pass19', 'studentFour@email.com', 3),
(85, 'StudentFive', 'pass20', 'studentFive@email.com', 3),
(86, 'StudentSix', 'pass21', 'studentSix@email.com', 3),
(87, 'StudentSeven', 'pass22', 'studentSeven@email.com', 3),
(88, 'StudentEight', 'pass23', 'studentEight@email.com', 3),
(89, 'StudentNine', 'pass24', 'studentNine@email.com', 3),
(90, 'StudentTen', 'pass25', 'studentTen@email.com', 3),
(91, 'StudentEleven', 'pass26', 'studentEleven@email.com', 3),
(92, 'StudentTwelve', 'pass27', 'studentTwelve@email.com', 3),
(93, 'StudentThirteen', 'pass28', 'studentThirteen@email.com', 3),
(94, 'StudentFourteen', 'pass29', 'studentFourteen@email.com', 3),
(95, 'StudentFifteen', 'pass30', 'studentFifteen@email.com', 3),
(96, 'StudentSixteen', 'pass31', 'studentSixteen@email.com', 3),
(97, 'StudentSeventeen', 'pass32', 'studentSeventeen@email.com', 3),
(98, 'StudentEighteen', 'pass33', 'studentEighteen@email.com', 3),
(99, 'StudentNineteen', 'pass34', 'studentNineteen@email.com', 3),
(100, 'StudentTwenty', 'pass35', 'studentTwenty@email.com', 3);

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
  ADD PRIMARY KEY (`CategoryID`);

--
-- Índices de tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `CategoryID` (`CategoryID`);

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
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `RoleID` (`RoleID`);

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
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD CONSTRAINT `adminlogs_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `users` (`UserID`);

--
-- Restrições para tabelas `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `students` (`StudentID`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`);

--
-- Restrições para tabelas `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `coursecategories` (`CategoryID`);

--
-- Restrições para tabelas `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`),
  ADD CONSTRAINT `course_student_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `students` (`StudentID`);

--
-- Restrições para tabelas `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `students` (`StudentID`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`);

--
-- Restrições para tabelas `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`);

--
-- Restrições para tabelas `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`SenderID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`ReceiverID`) REFERENCES `users` (`UserID`);

--
-- Restrições para tabelas `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`GeneratedBy`) REFERENCES `users` (`UserID`);

--
-- Restrições para tabelas `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `users` (`UserID`);

--
-- Restrições para tabelas `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`TeacherID`) REFERENCES `users` (`UserID`);

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
