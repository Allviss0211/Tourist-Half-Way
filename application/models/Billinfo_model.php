<?php

 
class Billinfo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get billinfo by IdBillInfo
     */
    function get_billinfo($IdBillInfo)
    {
        return $this->db->get_where('billinfo',array('IdBillInfo'=>$IdBillInfo))->row_array();
    }
        
    /*
     * Get all billinfo
     */
    function get_all_billinfo()
    {
        $this->db->order_by('IdBillInfo', 'asc');
        return $this->db->get('billinfo')->result_array();
    }
        
    /*
     * function to add new billinfo
     */
    function add_billinfo($params)
    {
        $this->db->insert('billinfo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update billinfo
     */
    function update_billinfo($IdBillInfo,$params)
    {
        $this->db->where('IdBillInfo',$IdBillInfo);
        return $this->db->update('billinfo',$params);
    }
    
    /*
     * function to delete billinfo
     */
    function delete_billinfo($IdBillInfo)
    {
        return $this->db->delete('billinfo',array('IdBillInfo'=>$IdBillInfo));
    }
}
