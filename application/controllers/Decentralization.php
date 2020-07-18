<?php


class Decentralization extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Decentralization_model');
    }

    /*
     * Listing of decentralization
     */
    function index()
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                $data['decentralization'] = $this->Decentralization_model->get_all_decentralization();

                $data['_view'] = 'decentralization/index';

                $this->load->view('layouts/main', $data);
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    /*
     * Adding a new decentralization
     */
    function add()
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                if (isset($_POST) && count($_POST) > 0) {
                    $params = array(
                        'Name' => $this->input->post('Name'),
                        'Note' => $this->input->post('Note'),
                    );

                    $decentralization_id = $this->Decentralization_model->add_decentralization($params);
                    redirect('decentralization/index');
                } else {
                    $data['_view'] = 'decentralization/add';
                    $this->load->view('layouts/main', $data);
                }
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    /*
     * Editing a decentralization
     */
    function edit($IdDecentralization)
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                // check if the decentralization exists before trying to edit it
                $data['decentralization'] = $this->Decentralization_model->get_decentralization($IdDecentralization);

                if (isset($data['decentralization']['IdDecentralization'])) {
                    if (isset($_POST) && count($_POST) > 0) {
                        $params = array(
                            'Name' => $this->input->post('Name'),
                            'Note' => $this->input->post('Note'),
                        );

                        $this->Decentralization_model->update_decentralization($IdDecentralization, $params);
                        redirect('decentralization/index');
                    } else {
                        $data['_view'] = 'decentralization/edit';
                        $this->load->view('layouts/main', $data);
                    }
                } else
                    show_error('The decentralization you are trying to edit does not exist.');
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    /*
     * Deleting decentralization
     */
    function remove($IdDecentralization)
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                $decentralization = $this->Decentralization_model->get_decentralization($IdDecentralization);

                // check if the decentralization exists before trying to delete it
                if (isset($decentralization['IdDecentralization'])) {
                    $this->Decentralization_model->delete_decentralization($IdDecentralization);
                    redirect('decentralization/index');
                } else
                    show_error('The decentralization you are trying to delete does not exist.');
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }
}
