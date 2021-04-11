<?php

    class Book implements \JsonSerializable{
        // properties
        private $id;
        private $name;
        private $price;
        private $pages;
        // methods
        function get_id() {
            return $this->id;
        }
        function set_id($id) {
            $this->id = $id;
        }
        function get_name() {
            return $this->name;
        }
        function set_name($name) {
            $this->name = $name;
        }
        function get_price() {
            return $this->price;
        }
        function set_price($price) {
            $this->price = $price;
        }
        function get_pages() {
            return $this->pages;
        }
        function set_pages($pages) {
            $this->pages = $pages;
        }
        function __construct($id, $name, $price, $pages) {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->pages = $pages;
        }
        public function jsonSerialize() {
            return get_object_vars($this);
        }
    }
?>