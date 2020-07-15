<?php

 
class Tourtype_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tourtype by IdTourType
     */
    function get_tourtype($IdTourType)
    {
        return $this->db->get_where('tourtype',array('IdTourType'=>$IdTourType))->row_array();
    }
        
    /*
     * Get all tourtype
     */
    function get_all_tourtype()
    {
        $this->db->order_by('IdTourType', 'asc');
        return $this->db->get('tourtype')->result_array();
    }
        
    /*
     * function to add new tourtype
     */
    function add_tourtype($params)
    {
        $this->db->insert('tourtype',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tourtype
     */
    function update_tourtype($IdTourType,$params)
    {
        $this->db->where('IdTourType',$IdTourType);
        return $this->db->update('tourtype',$params);
    }
    
    /*
     * function to delete tourtype
     */
    function delete_tourtype($IdTourType)
    {
        return $this->db->delete('tourtype',array('IdTourType'=>$IdTourType));
    }
}
