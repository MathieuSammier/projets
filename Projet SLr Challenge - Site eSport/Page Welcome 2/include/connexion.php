<?php
// accès à la base de données sur Mysql

mysql_connect ("mysql51-130.perso", "slrchallbdd", "chall14slr") or die ("Connection impossible" .mysql_error());
mysql_select_db ("slrchallbdd") or die ("Connection à la base de donnée impossible" .mysql_error());
