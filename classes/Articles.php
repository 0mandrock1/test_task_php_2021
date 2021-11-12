<?php
require_once(__DIR__.'/../vendor/' . 'autoload.php');
require_once(__DIR__.'/DB.php');

class Articles
{
    public $tableName = 'articles';

    /**
     * Return all values from table
     *
     * @return array
     */
    public function get_all() :array {
        $db = DB::db_connect();
        $query = "SELECT * FROM $this->tableName";
        $result = $db->query($query);
        $rows = [];
        while($row = $result->fetch_row()) {
            $rows[] = $row;
        }
        return $rows;
    }

    /**
     * Return last $count distinct values from table grouped by section id
     *
     * @param int $count distinct latest values
     *
     * @return array
     */
    public function get_last(int $count) :array {
        $db = DB::db_connect();
        $query = "SELECT * FROM $this->tableName
                     WHERE (section_id,created) IN
                     (
                       SELECT section_id, MAX(created)
                         FROM $this->tableName
                        GROUP BY section_id
                     )  ORDER BY `created` DESC LIMIT $count
                    ;";
        $result = $db->query($query);
        $rows = [];
        while($row = $result->fetch_row()) {
            $rows[] = $row;
        }
        return $rows;
    }
}