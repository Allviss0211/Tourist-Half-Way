<?php


class Bill extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bill_model');
    }

    /*
     * Listing of bill
     */
    function index()
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                $data['bill'] = $this->Bill_model->get_all_bill();
                $data['_view'] = 'bill/index';
                $this->load->view('layouts/main', $data);
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }


    /*
     * Adding a new bill
     */
    function add()
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                if (isset($_POST) && count($_POST) > 0) {
                    $params = array(
                        'OrderDate' => $this->input->post('OrderDate'),
                        'Status' => $this->input->post('Status'),
                        'IdUser' => $this->input->post('IdUser'),
                        'CustomerName' => $this->input->post('CustomerName'),
                        'CustomerIdentityCard' => $this->input->post('CustomerIdentityCard'),
                        'CustomerBirthday' => $this->input->post('CustomerBirthday'),
                        'CustomerAddress' => $this->input->post('CustomerAddress'),
                        'CustomerPhone' => $this->input->post('CustomerPhone'),
                        'CustomerEmail' => $this->input->post('CustomerEmail'),
                        'Note' => $this->input->post('Note'),
                    );

                    $bill_id = $this->Bill_model->add_bill($params);
                    redirect('bill/index');
                } else {
                    $data['_view'] = 'bill/add';
                    $this->load->view('layouts/main', $data);
                }
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    /*
     * Editing a bill
     */
    function edit($IdBill)
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                // check if the bill exists before trying to edit it
                $data['bill'] = $this->Bill_model->get_bill($IdBill);

                if (isset($data['bill']['IdBill'])) {
                    if (isset($_POST) && count($_POST) > 0) {
                        $params = array(
                            'OrderDate' => $this->input->post('OrderDate'),
                            'Status' => $this->input->post('Status'),
                            'IdUser' => $this->input->post('IdUser'),
                            'CustomerName' => $this->input->post('CustomerName'),
                            'CustomerIdentityCard' => $this->input->post('CustomerIdentityCard'),
                            'CustomerBirthday' => $this->input->post('CustomerBirthday'),
                            'CustomerAddress' => $this->input->post('CustomerAddress'),
                            'CustomerPhone' => $this->input->post('CustomerPhone'),
                            'CustomerEmail' => $this->input->post('CustomerEmail'),
                            'Note' => $this->input->post('Note'),
                        );

                        $this->Bill_model->update_bill($IdBill, $params);
                        redirect('bill/index');
                    } else {
                        $data['_view'] = 'bill/edit';
                        $this->load->view('layouts/main', $data);
                    }
                } else
                    show_error('The bill you are trying to edit does not exist.');
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    /*
     * Deleting bill
     */
    function remove($IdBill)
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                $bill = $this->Bill_model->get_bill($IdBill);

                // check if the bill exists before trying to delete it
                if (isset($bill['IdBill'])) {
                    $this->Bill_model->delete_bill($IdBill);
                    redirect('bill/index');
                } else
                    show_error('The bill you are trying to delete does not exist.');
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    function statistic_bill_by_year()
    {
        $data = $this->Bill_model->statistic_bill_by_year();
        echo json_encode($data);
    }
}
