<?php
// acc�s � la base de donn�es sur Mysql

mysql_connect ("mysql51-130.perso", "slrchallbdd", "challenge14") or die ("Connection impossible" .mysql_error());
mysql_select_db ("slrchallbdd") or die ("Connection � la base de donn�e impossible" .mysql_error());
