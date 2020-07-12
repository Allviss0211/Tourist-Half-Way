<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Billinfo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Billinfo_model');
    } 

    /*
     * Listing of billinfo
     */
    function index()
    {
        $data['billinfo'] = $this->Billinfo_model->get_all_billinfo();
        
        $data['_view'] = 'billinfo/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new billinfo
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'IdBill' => $this->input->post('IdBill'),
				'NoAdult' => $this->input->post('NoAdult'),
				'NoChildren' => $this->input->post('NoChildren'),
				'TotalPrice' => $this->input->post('TotalPrice'),
				'Note' => $this->input->post('Note'),
            );
            
            $billinfo_id = $this->Billinfo_model->add_billinfo($params);
            redirect('billinfo/index');
        }
        else
        {            
            $data['_view'] = 'billinfo/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a billinfo
     */
    function edit($IdBillInfo)
    {   
        // check if the billinfo exists before trying to edit it
        $data['billinfo'] = $this->Billinfo_model->get_billinfo($IdBillInfo);
        
        if(isset($data['billinfo']['IdBillInfo']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'IdBill' => $this->input->post('IdBill'),
					'NoAdult' => $this->input->post('NoAdult'),
					'NoChildren' => $this->input->post('NoChildren'),
					'TotalPrice' => $this->input->post('TotalPrice'),
					'Note' => $this->input->post('Note'),
                );

                $this->Billinfo_model->update_billinfo($IdBillInfo,$params);            
                redirect('billinfo/index');
            }
            else
            {
                $data['_view'] = 'billinfo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The billinfo you are trying to edit does not exist.');
    } 

    /*
     * Deleting billinfo
     */
    function remove($IdBillInfo)
    {
        $billinfo = $this->Billinfo_model->get_billinfo($IdBillInfo);

        // check if the billinfo exists before trying to delete it
        if(isset($billinfo['IdBillInfo']))
        {
            $this->Billinfo_model->delete_billinfo($IdBillInfo);
            redirect('billinfo/index');
        }
        else
            show_error('The billinfo you are trying to delete does not exist.');
    }
    
}