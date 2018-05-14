<?php

class Common_model extends CI_Model {
  
    
        
    public function saveTableDataByArray($tableName,$params) {
        $this->db->insert($tableName,$params);
        return $this->db->insert_id();
    }
    public function getTableDataByArray($tableName,$params) {
        
        return $this->db->get_where($tableName,$params)->result_array();
    }
    
    public function getTableDataByArrayRow($tableName,$params) {
        
        return $this->db->get_where($tableName,$params)->row_array();
    }
    public function updateFromArray($table,$params=array(),$condition=array()) {
        $this->db->update($table, $params, $condition);
    }
    
    
    
}