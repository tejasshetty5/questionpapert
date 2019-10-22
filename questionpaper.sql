-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2018 at 09:56 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionpaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

DROP TABLE IF EXISTS `mcq`;
CREATE TABLE IF NOT EXISTS `mcq` (
  `mcq_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id` int(11) NOT NULL,
  `mcq_canswer` varchar(255) NOT NULL,
  `mcq_question` varchar(255) NOT NULL,
  PRIMARY KEY (`mcq_id`),
  UNIQUE KEY `mcq_question` (`mcq_question`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`mcq_id`, `sub_id`, `mcq_canswer`, `mcq_question`) VALUES
(6, 1, 'Hypertext Preprocessor', 'PHP stands for'),
(11, 1, '.php', 'PHP files have a default file extension of_______'),
(12, 1, '<? ?>', 'A PHP script should start with ___ and end with ___'),
(13, 1, '/* */', 'We can use ___ to comment a single line?'),
(19, 1, '3', ' What will be the output of the following php code?\r\n\r\n    <?php\r\n    $num  = \"1\";\r\n    $num1 = \"2\";\r\n    print $num+$num1;\r\n    ?>'),
(20, 1, 'session_pw', 'Which of the following is not a session function?'),
(21, 1, 'The file uploaded with success ', 'When uploading a file if the UPLOAD_ERR-OK contains value 0 it means'),
(22, 1, 's print f ( )', 'Which of the following function can assign the output to a string variable'),
(23, 1, 'Array', 'Which of the following data type is not seal or datetype supported by PHP'),
(24, 1, '$ alive is true', 'If a boolean variable $ alive= 5');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_answer`
--

DROP TABLE IF EXISTS `mcq_answer`;
CREATE TABLE IF NOT EXISTS `mcq_answer` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `mcq_id` int(11) NOT NULL,
  `ans_answer` varchar(255) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq_answer`
--

INSERT INTO `mcq_answer` (`ans_id`, `mcq_id`, `ans_answer`) VALUES
(5, 6, 'Hypertext Preprocessor'),
(6, 6, 'Personal Home Page'),
(7, 6, 'Hypertext Processor'),
(8, 6, 'Hypertext Processor'),
(9, 11, '.php'),
(10, 11, '.xml'),
(11, 11, '.html'),
(12, 11, '.html'),
(13, 12, '< ? ?>'),
(14, 12, '< ? php ?>'),
(15, 12, '< ?echo ?>'),
(16, 12, '< ?echo ?>'),
(17, 13, '/* */'),
(18, 13, '/?'),
(19, 13, '?'),
(20, 13, '?'),
(21, 19, '3'),
(22, 19, '1+2'),
(23, 19, 'error'),
(24, 19, 'error'),
(25, 20, 'session_pw'),
(26, 20, 'sssion_decode'),
(27, 20, 'session_id'),
(28, 20, 'session_id'),
(29, 21, 'The file uploaded with success '),
(30, 21, 'Uplaod is not successful, error occurred'),
(31, 21, 'File upload progress is 0% completed '),
(32, 21, 'File upload progress is 0% completed '),
(33, 22, 's print f ( )'),
(34, 22, 'print ( )'),
(35, 22, ' print f ( )'),
(36, 22, ' print f ( )'),
(37, 23, 'Array'),
(38, 23, 'Float'),
(39, 23, 'String'),
(40, 23, 'String'),
(41, 24, '$ alive is true'),
(42, 24, '$ alive is false'),
(43, 24, '$ alive is overflow'),
(44, 24, '$ alive is overflow');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_subject`
--

DROP TABLE IF EXISTS `mcq_subject`;
CREATE TABLE IF NOT EXISTS `mcq_subject` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(255) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq_subject`
--

INSERT INTO `mcq_subject` (`sub_id`, `sub_name`) VALUES
(1, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id` int(11) NOT NULL,
  `q_question` varchar(255) NOT NULL,
  `q_chapter` int(11) NOT NULL,
  `q_marks` int(11) NOT NULL,
  PRIMARY KEY (`q_id`),
  UNIQUE KEY `q_question` (`q_question`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `sub_id`, `q_question`, `q_chapter`, `q_marks`) VALUES
(1, 181, 'What is MIME type for JSON?', 1, 4),
(2, 181, 'What is role of HttpServlet?', 2, 4),
(3, 181, 'What is purpose of JList?', 2, 4),
(4, 181, 'How to make declaration in JSP?', 2, 4),
(5, 181, 'Describe three types of text controls in Swing?', 2, 4),
(6, 181, 'Differentiate between JList and JComboBox', 3, 4),
(7, 181, 'Write short note on Driver Manager class\r\n', 3, 4),
(8, 181, 'Explain various ways of creating ResultSet in JDBC', 3, 4),
(9, 181, 'State and explain advantages of JSP', 3, 4),
(10, 181, 'Write a program to create a login form(for entering username and password) . On click of \"OK\" button check the username and password is correct or not and report with proper messages.', 2, 8),
(11, 181, 'Write a JDBC program to accept s dept_id from user and displays total number of records in it. (Table: EMployee(Eid, dept_id, Ename, Address, Salary)', 3, 8),
(12, 181, 'State and explain advantages of JSP\r\n', 4, 4),
(13, 181, 'Explain any 5  methods of HttpServletRequest interface', 4, 4),
(14, 181, 'Explain Servlet Life Cycle in detail', 4, 4),
(15, 181, 'Write a JSP program to accept a number from the HTML form, and find its factorial using a recursive function', 5, 8),
(16, 181, 'Explain the role of interceptors in struts\r\n', 6, 4),
(17, 181, 'explain the role of interceptors in struts', 5, 4),
(18, 181, 'Write a servlet program to display the name of the servlet and its initialization parameters with its respective values', 4, 8),
(19, 181, 'Discuss the similarities and differences between JSON and XML', 7, 4),
(20, 181, 'Explain the getter and setter methods of JavaBeans class', 7, 4),
(21, 181, 'List and explain valid Json data types', 7, 4),
(22, 181, 'Design a javbean program to store and retrive different bankaccount details', 7, 8),
(23, 181, 'Explain the significance of struts.xml and web.xml file in struts 2 application', 8, 4),
(24, 181, 'Explain the request life cycle of struts 2', 7, 4),
(25, 181, 'Discuss the features of JFC', 4, 8),
(26, 181, 'Wrirte a JSP based application that serves the purpose of simple calculator', 5, 4),
(27, 181, 'Write a program in java which creates a list containing at least 3 theatres name. on the click of any theatre, the movie name from theatre should be displayed in a Text field', 5, 4),
(28, 181, 'Write java program to insert one record of information into the database table named (depttable), by accepting the details from the user using Prepared Statement', 6, 8),
(29, 180, 'Write python program to perform matrix multiplication. discuss the time complexity of algorithm used', 2, 8),
(30, 181, 'Write a python program to sort n names using QuickSort algorithm. discuss the time complexity of the algorithm used', 3, 8),
(31, 180, 'Write a python program to sort n numbers using Merge sort algorithm, discuss the time complexity of algorithm used', 5, 8),
(32, 180, 'Write a python program to insert an element into a binary tree\r\n', 3, 8),
(33, 180, 'Write a pyhton program for deleting an element from a binary tree', 4, 8),
(34, 180, 'What is an algorithm', 4, 4),
(35, 180, 'What do you mean by strictly binary tree?', 2, 4),
(36, 180, 'What is divide and conquer stratergy?', 3, 4),
(37, 180, 'Which are the shortest path algorithms?', 3, 4),
(38, 180, 'What is degree of a tree?', 3, 4),
(39, 180, 'State and explain the Asymptotic notations used in analysis of algorithm', 2, 4),
(40, 180, 'What is asymptotic analysis? how to calculate the time complexity explain with example', 3, 4),
(41, 180, 'What is AVL tree? how balancing is performed explain with exapmple', 3, 4),
(42, 180, 'Write a short note on threaded binary tree?\r\n', 3, 4),
(43, 180, 'Explain types of analysis', 4, 4),
(44, 180, 'What are properties of asymptotic notations', 4, 4),
(45, 180, 'Write an algorithm for searching an element in binary tree', 4, 4),
(46, 180, 'Write an algorithm for building expression tree and postfix expression', 4, 4),
(47, 180, 'Write an algorithm for finding maximum element in a binary tree', 5, 4),
(48, 180, 'Write an algorithm for finding the K smallest elements in sorted order', 5, 4),
(49, 180, 'Write an algorithm to find largest elements in an array', 5, 4),
(50, 180, 'Explain longest common subsequence', 6, 4),
(51, 180, 'Explain Bellman ford algorithm with help of an example', 5, 4),
(52, 180, 'Explain various algorithm design techniques', 5, 4),
(53, 180, 'What are graph traversal techniques explain any one', 6, 4),
(54, 180, 'Write an algorithm for topological sort', 5, 4),
(55, 180, 'Explain Huffman coding algorithm with the help of example', 7, 4),
(56, 180, 'What are the advantages and disadvantages of divide and conquer technique', 3, 4),
(57, 180, 'What is dynamic programming explain with example', 4, 4),
(58, 185, 'What is use of black colour property of web control?', 1, 4),
(59, 185, 'What is variable in C#?', 2, 4),
(60, 185, 'What is use of data provider model?', 3, 4),
(61, 185, 'List the type of function call in C#', 2, 4),
(62, 185, 'What are the controls included in list control category?', 2, 4),
(63, 185, 'Explain data types in C#', 2, 4),
(64, 185, 'What is recursion? Explain with example', 2, 4),
(65, 185, 'Explain data provider model in brief', 3, 4),
(66, 185, 'Write a note on SQl datareader', 2, 4),
(67, 185, 'Explain any four properties of TableControl class', 3, 4),
(68, 185, 'Write note on scope of variable', 3, 4),
(69, 185, 'Write working of while loop with example', 5, 4),
(70, 185, 'Explain the application state in detail', 4, 4),
(71, 185, 'Write a program to accept number from user and print factorial of it', 4, 4),
(72, 185, 'Write short note on multiview control', 5, 4),
(73, 185, 'What are the types of web control events? what happen if AutoPostBack is set to \"true\"?', 5, 4),
(74, 185, 'Write short note on :List controls', 4, 4),
(75, 185, 'Explain cookies in detail', 5, 8),
(76, 185, 'What is constant and explain types of constant in C#', 4, 8),
(77, 185, 'Explain working of for loop with examples', 4, 8),
(78, 185, 'Explain how to create a database connection in ADO.NET', 4, 8),
(79, 185, 'Explain working of else-if ladder with example', 4, 8),
(80, 185, 'Explain data binding in detail', 3, 8),
(81, 185, 'How to create tree view', 5, 4),
(82, 185, 'Explain siteMap PATH control in detail', 6, 4),
(83, 185, 'What is concept of master pages and content pages and how to connect them', 6, 4),
(84, 185, 'Explain gridview data controls of ADO.NET? write down steps of creating grid view\r\n', 6, 4),
(85, 185, 'Explain Direct Data Access in detail', 6, 4),
(86, 185, 'State the page lifecycle with diagram', 4, 4),
(87, 182, 'abc', 4, 8),
(88, 186, 'abc?', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(255) NOT NULL,
  `sub_sem` int(11) NOT NULL,
  `sub_course` varchar(255) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `sub_sem`, `sub_course`) VALUES
(54, 'Financial accounts', 1, 'BMS'),
(55, 'Business Law', 1, 'BMS'),
(56, 'Business Statistics', 1, 'BMS'),
(57, 'Business Communication', 1, 'BMS'),
(58, 'Foundation Course', 1, 'BMS'),
(59, 'Business Economics', 1, 'BMS'),
(60, 'Foundation of Human Skills', 1, 'BMS'),
(61, 'principles of marketing', 2, 'BMS'),
(62, 'industrial law', 2, 'BMS'),
(63, 'business mathematics', 2, 'BMS'),
(64, 'business communication 2', 2, 'BMS'),
(65, 'foundation course 2', 2, 'BMS'),
(66, 'business environment 2', 2, 'BMS'),
(67, 'principles of management ', 2, 'BMS'),
(68, 'advertising', 3, 'BMS'),
(69, 'information technology in business management 1', 3, 'BMS'),
(70, 'foundation course 3', 3, 'BMS'),
(71, 'business planning', 3, 'BMS'),
(72, 'accounting for managerial decisions', 3, 'BMS'),
(73, 'strategic management', 3, 'BMS'),
(74, 'Auditing', 4, 'BMS'),
(75, 'Information Technology in Business Management 2', 4, 'BMS'),
(76, 'Foundation Course 4', 4, 'BMS'),
(77, 'Business Economics 2', 4, 'BMS'),
(78, 'Business Research Methods', 4, 'BMS'),
(79, 'Production and Total Quality Management', 4, 'BMS'),
(80, 'Effective Communication Skills', 1, 'BMM'),
(81, 'Fundamentals of Mass Communication', 1, 'BMM'),
(82, 'Introduction to Computers', 1, 'BMM'),
(83, 'Landmark Events', 1, 'BMM'),
(84, 'Introduction to Economics', 1, 'BMM'),
(85, 'Introduction to Sociology', 1, 'BMM'),
(86, 'Effective Communication Skills 2', 2, 'BMM'),
(87, 'An Introduction to Literature', 2, 'BMM'),
(88, 'Introduction to Psychology', 2, 'BMM'),
(89, 'Political Concepts', 2, 'BMM'),
(90, 'Principles of Management', 2, 'BMM'),
(91, 'Principles of Marketing', 2, 'BMM'),
(92, 'Introduction to Media Studies', 2, 'BMM'),
(93, 'Introduction to Creative Writing', 3, 'BMM'),
(94, 'Understanding Cinema', 3, 'BMM'),
(95, 'Introduction to Public Relations', 3, 'BMM'),
(96, 'Introduction to Culture Studies', 3, 'BMM'),
(97, 'Advanced Computers', 3, 'BMM'),
(98, 'Introduction to Advertising', 4, 'BMM'),
(99, 'Introduction to Journalism', 4, 'BMM'),
(100, 'Radio and Television', 4, 'BMM'),
(101, 'Print Production and Photography', 4, 'BMM'),
(102, 'Organizational Behaviour', 4, 'BMM'),
(103, 'Mass Media Research', 4, 'BMM'),
(104, 'Accountancy and Financial Management 1', 1, 'BCOM'),
(105, 'Commerce 1', 1, 'BCOM'),
(106, 'Business Economics 1', 1, 'BCOM'),
(107, 'Business Communication 1', 1, 'BCOM'),
(108, 'Environmental Studies 1', 1, 'BCOM'),
(109, 'Foundation Course 1', 1, 'BCOM'),
(110, 'Mathematical and Statistical Techniques 1', 1, 'BCOM'),
(111, 'Accountancy and Financial Management 2', 2, 'BCOM'),
(112, 'Commerce 2', 2, 'BCOM'),
(113, 'Business Economics 2', 2, 'BCOM'),
(114, 'Business Communication 2', 2, 'BCOM'),
(115, 'Environmental Studies 2', 2, 'BCOM'),
(116, 'Foundation Course 2', 2, 'BCOM'),
(117, 'Mathematical and Statistical Techniques 2', 2, 'BCOM'),
(118, 'Accountancy and Financial Management 3', 3, 'BCOM'),
(119, 'Financial Accounting and Audition 5', 3, 'BCOM'),
(120, 'Commerce 3', 3, 'BCOM'),
(121, 'Business Economics 3', 3, 'BCOM'),
(122, 'Foundation Course 3', 3, 'BCOM'),
(123, 'Business Law 1', 3, 'BCOM'),
(124, 'Accountancy and Financial Management 4', 4, 'BCOM'),
(125, 'Financial Accounting and Auditing 6', 4, 'BCOM'),
(126, 'Commerce 4', 4, 'BCOM'),
(127, 'Business Economics', 4, 'BCOM'),
(128, 'Foundation Course 4', 4, 'BCOM'),
(129, 'Business Law 2', 4, 'BCOM'),
(130, 'Basic Chemistry 1', 1, 'BIOTECH'),
(131, 'Basic Chemistry 2', 1, 'BIOTECH'),
(132, 'Chemistry 1', 2, 'BIOTECH'),
(133, 'Chemistry 2', 2, 'BIOTECH'),
(134, 'Basic Life Science 1', 1, 'BIOTECH'),
(135, 'Basic Life Science 2', 1, 'BIOTECH'),
(136, 'Basic Life Science 1', 2, 'BIOTECH'),
(137, 'Basic Life Science 2', 2, 'BIOTECH'),
(138, 'Basic Biotechnology 1', 1, 'BIOTECH'),
(139, 'Basic Biotechnology 2', 1, 'BIOTECH'),
(140, 'Societal Awarness', 1, 'BIOTECH'),
(141, 'Practicals', 1, 'BIOTECH'),
(142, 'Biotechnology 1', 2, 'BIOTECH'),
(143, 'Biotechnology 2', 2, 'BIOTECH'),
(144, 'Globalization Ecology and Sustainable Development', 2, 'BIOTECH'),
(145, 'practicals', 2, 'BIOTECH'),
(146, 'Biophysics', 3, 'BIOTECH'),
(147, 'Applied Chemistry 1', 3, 'BIOTECH'),
(148, 'Immunology', 3, 'BIOTECH'),
(149, 'Cell biology and Cytogenetics', 3, 'BIOTECH'),
(150, 'Molecular Biology', 3, 'BIOTECH'),
(151, 'Bioprocess Technology', 3, 'BIOTECH'),
(152, 'Research Methodology', 3, 'BIOTECH'),
(153, 'Biochemistry', 4, 'BIOTECH'),
(154, 'Applied Chemistry 1', 4, 'BIOTECH'),
(155, 'Medical Microbiology', 4, 'BIOTECH'),
(156, 'Environmental Biotechnology', 4, 'BIOTECH'),
(157, 'Bioinformatics ', 4, 'BIOTECH'),
(158, 'Molecular Diagnostic', 4, 'BIOTECH'),
(159, 'Entrepreneurship', 4, 'BIOTECH'),
(160, 'Computer Organization and design', 1, 'CS'),
(161, 'Python 1', 1, 'CS'),
(162, 'Free and Open Source Software', 1, 'CS'),
(163, 'Databse System', 1, 'CS'),
(164, 'Discrete Mathematics', 1, 'CS'),
(165, 'Statistics', 1, 'CS'),
(166, 'Soft Skill Development', 1, 'CS'),
(167, 'Programming with C', 2, 'CS'),
(168, 'Python 2', 2, 'CS'),
(169, 'Linux', 2, 'CS'),
(170, 'Data Structures\r\n', 2, 'CS'),
(171, 'Calculus', 2, 'CS'),
(172, 'Statistical Methods and Testing of Hypothesis', 2, 'CS'),
(173, 'Green Technologies', 2, 'CS'),
(174, 'Theory of Computation', 3, 'CS'),
(175, 'Core JAVA', 3, 'CS'),
(176, 'Database Management System', 3, 'CS'),
(177, 'Combinatorics and Graph Theory', 3, 'CS'),
(178, 'Physical Computing and IOT Programming', 3, 'CS'),
(179, 'Web Programming', 3, 'CS'),
(180, 'Fundamentals of Algorithms', 4, 'CS'),
(181, 'Advanced JAVA', 4, 'CS'),
(182, 'Computer Networks', 4, 'CS'),
(183, 'Software Engineering', 4, 'CS'),
(184, 'Linear Algebra using Python', 4, 'CS'),
(185, 'NET Technologies', 4, 'CS'),
(186, 'Android Developer and Fundamentals', 4, 'CS'),
(187, 'Game Programming', 5, 'CS'),
(188, 'Web Services', 5, 'CS'),
(189, 'INS', 5, 'CS'),
(190, 'Linux Software Administration', 5, 'CS'),
(191, 'Artificial Intelligence', 5, 'CS'),
(192, 'abcc', 4, 'BCOM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `userid`, `Password`) VALUES
(1, 'admin', 'admin123'),
(2, 'tejas', '123456'),
(3, 'tcsc', 'tcscorg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
