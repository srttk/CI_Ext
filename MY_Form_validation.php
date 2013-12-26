<?php
class MY_Form_validation extends CI_Form_validation {

     public function __construct($rules = array()) {
         parent::__construct($rules);
     }

     public function is_money($input) {
         return (bool) preg_match('/^[0-9]+(\.[0-9]{0,2})?$/', $input);
     }
 }
