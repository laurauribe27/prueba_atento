CREATE DATABASE prueba_atento;
CREATE TABLE `people` (
  `identification` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `profession` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `people` (`identification`, `name`, `age`, `email`, `number`, `profession`) VALUES
(488599652, 'gfhgh', 6, 'fdgf@gmail.com', '25869354620', 'estu'),
(1004667070, 'Laura Camila Uribe Alzate', 22, 'uribelaura2700@gmail.com', '3177360250', 'estudia'),
(1004667075, 'Pepito perez', 25, 'urib00@gmail.com', '317736', 'estudiante'),
(1096243465, 'Jean Carlo ', 25, 'ollidrog@gmail.com', '3118130227', 'empleado');

ALTER TABLE `people`
  ADD PRIMARY KEY (`identification`);
