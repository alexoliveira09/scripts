<?php
/* @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar e Bootstrap 4,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 */
define('HOST', 'localhost');
define('USER', 'u279172505_teste_alex');
define('PASS', 'BDteste@#123');
define('DBNAME', 'u279172505_teste');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
