<?php
    namespace Html\x;
    class Table {
        public $title = "table class";
    }
    class Row {
        public $title = "rows class";
    }
    $table = new Table();
    echo $table->title;
    echo "</br>";
    $row = new Row();
    echo $row->title;
    $table = new x\Table();
    echo $table->title;
    echo "</br>";
    $row = new x\Row();
    echo $row->title;
?>


<!-- https://www.php.net/manual/en/language.namespaces.php -->

