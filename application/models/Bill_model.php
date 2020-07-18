<?php

 
class Bill_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get bill by IdBill
     */
    function get_bill($IdBill)
    {
        return $this->db->get_where('bill',array('IdBill'=>$IdBill))->row_array();
    }
        
    /*
     * Get all bill
     */
    function get_all_bill()
    {
        $this->db->order_by('IdBill', 'asc');
        return $this->db->get('bill')->result_array();
    }
        
    /*
     * function to add new bill
     */
    function add_bill($params)
    {
        $this->db->insert('bill',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update bill
     */
    function update_bill($IdBill,$params)
    {
        $this->db->where('IdBill',$IdBill);
        return $this->db->update('bill',$params);
    }
    
    /*
     * function to delete bill
     */
    function delete_bill($IdBill)
    {
        return $this->db->delete('bill',array('IdBill'=>$IdBill));
    }
}
