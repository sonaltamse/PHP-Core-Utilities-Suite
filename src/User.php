<?php
class User {
    public $first_name, $last_name;

    public function getFullName() {
        return trim($this->first_name . ' ' . $this->last_name);
    }   
}
