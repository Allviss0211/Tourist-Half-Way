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
        $this->db->select('IdBill, OrderDate, Status, tour.Name, NoChildren, NoAdult, TotalPrice, CustomerName, CustomerIdentityCard, CustomerBirthday, CustomerAddress, CustomerPhone, CustomerEmail, bill.Note');
        $this->db->from('bill');
        $this->db->join('tour', 'tour.IdTour = bill.IdTour');
        $this->db->order_by('OrderDate', 'asc');
        return $this->db->get()->result_array();
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

    function statistic_bill_by_year()
    {
        $query = $this->db->query("CALL statisticBillByYear()");
        return $query->result_array();
    }
}
