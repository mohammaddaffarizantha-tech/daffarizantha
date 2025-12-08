<?php

class Validator {
    public $errors = [];

    public function checkTextLength($field, $value, $min, $max) {
        if (strlen($value) < $min || strlen($value) > $max) {
            $this->errors[$field] = "$field length must be between $min and $max characters";
        }
    }

    public function checkEmail($field, $email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "Invalid $field format";
        }
    }

    public function fails() {
        return !empty($this->errors);
    }

    public function getErrors() {
        return $this->errors;
    }
}