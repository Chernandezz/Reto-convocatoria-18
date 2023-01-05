 <?php

    function conectarDB(): mysqli
    {
        $db = new mysqli('us-cdbr-east-06.cleardb.net', 'bc6f5ee1a3d859', 'cf1daabf', 'heroku_2539db26cc8b03f');

        if (!$db) {
            echo "Error no se pudo conectar";
            exit;
        }

        return $db;
    }

/*
mysql://bc6f5ee1a3d859:cf1daabf@us-cdbr-east-06.cleardb.net/heroku_2539db26cc8b03f?reconnect=true
Username: bc6f5ee1a3d859
Password: cf1daabf
Server: us-cdbr-east-06.cleardb.net
Port: 3306
Database Name: heroku_2539db26cc8b03f
*/
