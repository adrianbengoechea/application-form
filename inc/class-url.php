<?php
    class URL {
        // global $_GET;
        public $current_full_path;
        public $current_array_path;
        // public $current_last_path;

        function __construct() {
            $this->current_full_path = isset($_GET['path']) ? $_GET['path'] : false;
            $this->current_array_path = ( $this->current_full_path ) ? array_filter(explode('/', $this->current_full_path)) : false;
            // $this->$current_last_path = end($this->$current_path);
        }

        function current_path () {
            return $this->current_full_path;
        }

        function current_path_array () {
            return $this->current_array_path;
        }

    }
?>