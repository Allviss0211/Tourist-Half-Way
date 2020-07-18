<?php

 
class Decentralization_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get decentralization by IdDecentralization
     */
    function get_decentralization($IdDecentralization)
    {
        return $this->db->get_where('decentralization',array('IdDecentralization'=>$IdDecentralization))->row_array();
    }
        
    /*
     * Get all decentralization
     */
    function get_all_decentralization()
    {
        $this->db->order_by('IdDecentralization', 'asc');
        return $this->db->get('decentralization')->result_array();
    }
        
    /*
     * function to add new decentralization
     */
    function add_decentralization($params)
    {
        $this->db->insert('decentralization',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update decentralization
     */
    function update_decentralization($IdDecentralization,$params)
    {
        $this->db->where('IdDecentralization',$IdDecentralization);
        return $this->db->update('decentralization',$params);
    }
    
    /*
     * function to delete decentralization
     */
    function delete_decentralization($IdDecentralization)
    {
        return $this->db->delete('decentralization',array('IdDecentralization'=>$IdDecentralization));
    }
}
