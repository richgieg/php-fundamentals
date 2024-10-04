<?php

class DB {
    function execute($query) {
        $db = new SQLite3('./data/data.db');
        $result = $db->query($query);

        if ($result) {
            $all = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                array_push($all, $row);
            }
            return $all;
        }
    }
}
