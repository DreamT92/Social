/* Delimitatore cambiato in ; */
/* Connessione a 127.0.0.1 tramite MariaDB or MySQL (TCP/IP), nome utente root, usando la password: No… */
SELECT CONNECTION_ID();
SHOW VARIABLES;
/* Set di caratteri: utf8mb4 */
SHOW /*!50002 GLOBAL */ STATUS;
SELECT NOW();
/* Connesso. ID thread: 9 */
/* Reading function definitions from C:\Program Files\HeidiSQL\functions-mariadb.ini */
SHOW TABLES FROM `information_schema`;
SHOW DATABASES;
SHOW OPEN TABLES FROM social WHERE `in_use`!=0;
USE `social`;
/* Collegamento alla sessione “localhost” */
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='social';
SHOW TABLE STATUS FROM `social`;
SHOW FUNCTION STATUS WHERE `Db`='social';
SHOW PROCEDURE STATUS WHERE `Db`='social';
SHOW TRIGGERS FROM `social`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='social';
/* Ridimensionamento dei controlli ai DPI dello schermo: 125% */
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='social' AND TABLE_NAME='user' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `user` FROM `social`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='social'   AND TABLE_NAME='user'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='social'   AND TABLE_NAME='user'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SHOW ENGINES;
SHOW COLLATION;
SHOW CREATE TABLE `social`.`user`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='social' AND TABLE_NAME='user';
/* Delimitatore cambiato in ; */
/* Connessione a 127.0.0.1 tramite MariaDB or MySQL (TCP/IP), nome utente root, usando la password: No… */
SELECT CONNECTION_ID();
SHOW VARIABLES;
/* Set di caratteri: utf8mb4 */
SHOW /*!50002 GLOBAL */ STATUS;
SELECT NOW();
/* Connesso. ID thread: 9 */
/* Reading function definitions from C:\Program Files\HeidiSQL\functions-mariadb.ini */
SHOW TABLES FROM `information_schema`;
SHOW DATABASES;
SHOW OPEN TABLES FROM social WHERE `in_use`!=0;
USE `social`;
/* Collegamento alla sessione “localhost” */
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='social';
SHOW TABLE STATUS FROM `social`;
SHOW FUNCTION STATUS WHERE `Db`='social';
SHOW PROCEDURE STATUS WHERE `Db`='social';
SHOW TRIGGERS FROM `social`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='social';
/* Ridimensionamento dei controlli ai DPI dello schermo: 125% */
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='social' AND TABLE_NAME='user' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `user` FROM `social`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='social'   AND TABLE_NAME='user'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='social'   AND TABLE_NAME='user'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SHOW ENGINES;
SHOW COLLATION;
SHOW CREATE TABLE `social`.`user`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='social' AND TABLE_NAME='user';
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='social' AND TABLE_NAME='post' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `post` FROM `social`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='social'   AND TABLE_NAME='post'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='social'   AND TABLE_NAME='post'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SHOW CREATE TABLE `social`.`post`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='social' AND TABLE_NAME='post';