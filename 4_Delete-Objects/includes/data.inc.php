<?php
    class Data {
        private $data = "Content center";
        public function __construct() {
            echo "Start Content <br>";
        }
        public function setData($data) {
            $this->data = $data;
        }
        public function getData() {
            return $this->data;
        }
        public function __destruct() {
            echo "<br>End Content";
        }
    }
?>