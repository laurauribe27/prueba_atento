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





✓ ¿En qué lugar se ejecuta el código PHP? el código PHP se ejecuta del lado del servidor.
✓ ¿Cómo pueden interactuar PHP y JavaScript? el js puede interactuar con php usandose como frontend por ejemplo con vue.js
✓ ¿Cuál es la principal diferencia entre require() y require_once()?  PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye de nuevo
✓ ¿Cómo es posible exportar data en un archivo de Excel? se puede genrar funciones para exportar directamente en un archivo compatible con excel o usando librerias
✓ ¿Que es una session? es donde se almacenan datos individuales con id unico
✓ ¿Cómo se puede propagar una session id? En una cookie (Por defecto), En una variable pasada por parámetro en la URL
✓ ¿Cómo podemos determinar si una variable tiene un valor asignado? validando si la variable fue creada fija con anterioridad leyendola
✓ ¿Es posible destruir una cookie? si, rduciendo el tiempo de caducidad
