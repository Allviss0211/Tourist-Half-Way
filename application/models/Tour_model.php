<?php
 
class Tour_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tour by IdTour
     */
    function get_tour($IdTour)
    {
        return $this->db->get_where('tour',array('IdTour'=>(int)$IdTour))->row_array();
    }
        
    /*
     * Get tour by IdTourType
     */
    function get_tour_by_idtourtype($IdTourType)
    {
        return $this->db->get_where('tour',array('IdTourType'=>$IdTourType))->result_array();
    }

    /*
     * Get all tour
     */
    function get_all_tour()
    {
        $this->db->select('IdTour, tour.Name as NameTour, tourtype.Name as NameTourType, Schedule, Start, NoDay, NoNight, Vehicle, Hotel, NoTicket, Price,tour.Banner, tour.Note');
        $this->db->from('tour');
        $this->db->join('tourtype', 'tour.IdTourType = tourtype.IdTourType');
        $this->db->order_by('tourtype.IdTourType', 'asc');
        return $this->db->get()->result_array();
    }
        
    /*
     * function to add new tour
     */
    function add_tour($params)
    {
        $this->db->insert('tour',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tour
     */
    function update_tour($IdTour,$params)
    {
        $this->db->where('IdTour',$IdTour);
        return $this->db->update('tour',$params);
    }
    
    /*
     * function to delete tour
     */
    function delete_tour($IdTour)
    {
        return $this->db->delete('tour',array('IdTour'=>$IdTour));
    }

    function count_tour_by_tourtype()
    {
        $query = $this->db->query("SELECT COUNT(IF(IdTourType = 1,1,NULL)) as 'Trong nước', COUNT(IF(IdTourType = 2,1,NULL)) as 'Ngoài nước' FROM tour");  
        return $query->result_array();   
    }
}
