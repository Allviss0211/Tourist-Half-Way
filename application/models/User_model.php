<?php
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by IdUser
     */
    function get_user($IdUser)
    {
        return $this->db->get_where('user',array('IdUser'=>$IdUser))->row_array();
    }
        
    function login($username, $password){
        return $this->db->get_where('user',array('Username'=>$username,'Password'=>$password))->row_array();
    }

    function check_user($username){
        return $this->db->get_where('user',array('Username'=>$username))->result_array();
    }

    /*
     * Get all user
     */
    function get_all_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('decentralization', 'user.IdDecentralization = decentralization.IdDecentralization');
        $this->db->order_by('IdUser', 'asc');
        return $this->db->get()->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($IdUser,$params)
    {
        $this->db->where('IdUser',$IdUser);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($IdUser)
    {
        return $this->db->delete('user',array('IdUser'=>$IdUser));
    }
}
