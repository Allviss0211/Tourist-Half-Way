<?php
 
class Tourdescription_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tourdescription by IdDesciption
     */
    function get_tourdescription($IdDesciption)
    {
        return $this->db->get_where('tourdescription',array('IdDesciption'=>$IdDesciption))->row_array();
    }
    /*
     * Get tourdescription by IdTour
     */
    function get_tourdescription_by_IdTour($IdTour)
    {
        $this->db->select('IdDesciption, tour.Name, Timeline, Description, Image, tourdescription.Note');
        $this->db->from('tourdescription');
        $this->db->join('tour', 'tour.IdTour = tourdescription.IdTour');
        $this->db->where('tour.IdTour', $IdTour);
        $this->db->order_by('tour.Name', 'asc');
        return $this->db->get()->result_array();
    }    
    /*
     * Get all tourdescription
     */
    function get_all_tourdescription()
    {
        $this->db->select('IdDesciption, tour.Name, Timeline, Description, Image, tourdescription.Note');
        $this->db->from('tourdescription');
        $this->db->join('tour', 'tour.IdTour = tourdescription.IdTour');
        $this->db->order_by('tour.Name', 'asc');
        return $this->db->get()->result_array();
    }
        
    /*
     * function to add new tourdescription
     */
    function add_tourdescription($params)
    {
        $this->db->insert('tourdescription',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tourdescription
     */
    function update_tourdescription($IdDesciption,$params)
    {
        $this->db->where('IdDesciption',$IdDesciption);
        return $this->db->update('tourdescription',$params);
    }
    
    /*
     * function to delete tourdescription
     */
    function delete_tourdescription($IdDesciption)
    {
        return $this->db->delete('tourdescription',array('IdDesciption'=>$IdDesciption));
    }
}
