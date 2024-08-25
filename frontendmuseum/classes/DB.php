<?php
// Databases in PHP: 1) custom providers, 2) PDO
// Sqlite

class DB {
    function  executeOne($query) {
        $db = new SQLite3('./data/data.db');
        $result = $db->query($query);

        if ($result) {
            $all = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
               array_push($all, $row);
            };
            return $all;
        }
    }
}