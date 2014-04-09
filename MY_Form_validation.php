<?php

/*
url:https://github.com/saratonite/CI_Ext/
Author:Sarath
*/
class MY_Form_validation extends CI_Form_validation {

     public function __construct($rules = array()) {
         parent::__construct($rules);
     }

     public function is_money($input) {
         return (bool) preg_match('/^[0-9]+(\.[0-9]{0,2})?$/', $input);
     }
     public function is_unique($str, $field) {
        $field_ar = explode('.', $field);
        $query = $this->CI->db->get_where($field_ar[0], array($field_ar[1] => $str), 1, 0);
        if ($query->num_rows() === 0) {
            return TRUE;
        }

        return FALSE;
    }
 }
