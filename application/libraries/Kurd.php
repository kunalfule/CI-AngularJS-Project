<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Name:  Kurd Library
 *
 * Author: Kunal Fule
 * 		  fulekunal311092gmail.com
 *         @kunalfule
 *
 * Location: http://github.com/kunalfule/CodeIgniter-Kurd-Library
 *
 * Created:  1.12.2017
 *
 * Description:  This library is made to reduced the of code Model curd functionality.   
 *
 * Requirements: PHP5 or above
 *
 */
class Kurd {
     
  
    //insert product data into respective table
    public function insertData($tableName, $p_data){
         return $q = $this->db->insert_batch($tableName, $p_data);
    }
    
    //one method to update everything
    public function updateData($where, $update_para, $tablename){
        return $q = $this->db->where($where)
                             ->update($tablename, $update_para);
    }
    
    //Delete data
    public function deleteData($tablename, $where){
        return $q = $this->db->where($where)
                             ->delete($tablename);
    }
    
    //get Details info from table
    public function getDetail($tablename, $data){
        $q = $this->db->select("*")
                      ->from($tablename)
                      ->where($data)
                      ->get();
        return $q->result_array();              
    }
}