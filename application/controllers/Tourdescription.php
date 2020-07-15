<?php

class Tourdescription extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tourdescription_model');
        $this->load->model('Tour_model');
        $this->load->helper(array('form', 'url'));
    }

    /*
     * Listing of tourdescription
     */
    function index()
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                $data['tourdescription'] = $this->Tourdescription_model->get_all_tourdescription();

                $data['tour'] = $this->Tour_model->get_all_tour();

                $data['tourdescription'] = $this->Tourdescription_model->get_all_tourdescription();

                // $data['tourdescription'] = $this->Tourdescription_model->get_tourdescription_by_IdTour($this->input->post("IdTour"));

                $data['_view'] = 'tourdescription/index';
                $this->load->view('layouts/main', $data);
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    function get_tourdescription_by_IdTour() 
    { 
 
        if (isset($_SESSION['isLogin'])) { 
 
            if ($_SESSION['lgRole'] == 1) { 
 
                $data['tour'] = $this->Tour_model->get_all_tour(); 
 
                $data['tourdescription'] = $this->Tourdescription_model->get_tourdescription_by_IdTour($this->input->post("IdTour")); 
 
                $this->load->view('tourdescription/index', $data); 
            } 
        } 
    }

    /*
     * Detail of tourdescription
     */
    function detail()
    {
        (int) $IdTour = $_GET['id'];
        $data['tourdescription'] = $this->Tourdescription_model->get_tourdescription_by_IdTour($IdTour);
        $data['tour'] = $this->Tour_model->get_tour("$IdTour");
        $data['tourbytype'] = $this->Tour_model->get_tour_by_idtourtype($data['tour']['IdTourType']);
        $data['_view'] = 'tourdescription/detail';
        $data['title'] = $data['tourdescription'][0]['Name'];
        $this->load->view('layouts/home_main', $data);
    }
    /*
     * Adding a new tourdescription
     */
    function add()
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                if (isset($_POST) && count($_POST) > 0) {
                    $params = array(
                        'Description' => $this->input->post('Description'),
                        'Timeline' => $this->input->post('Timeline'),
                        'Image' => $this->input->post('Image'),
                        'IdTour' => $this->input->post('IdTour'),
                        'Note' => $this->input->post('Note'),
                    );

                    $config['upload_path'] = './upload_img/';
                    $config['allowed_types'] = 'gif|jpg|png';

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('Image')) {
                        $error = array('upload_error' => $this->upload->display_errors());
                        $params['Image'] = "picture.png";
                    } else {
                        $success = array('upload_success' => $this->upload->data());
                        $params['Image'] = $success['upload_success']['client_name'];
                    }

                    $tourdescription_id = $this->Tourdescription_model->add_tourdescription($params);

                    redirect('tourdescription/index');
                } else {
                    $data['tour'] = $this->Tour_model->get_all_tour();
                    $data['_view'] = 'tourdescription/add';
                    $this->load->view('layouts/main', $data);
                }
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    /*
     * Editing a tourdescription
     */
    function edit($IdDesciption)
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                // check if the tourdescription exists before trying to edit it
                $data['tourdescription'] = $this->Tourdescription_model->get_tourdescription($IdDesciption);

                if (isset($data['tourdescription']['IdDesciption'])) {
                    if (isset($_POST) && count($_POST) > 0) {
                        $params = array(
                            'Description' => $this->input->post('Description'),
                            'Timeline' => $this->input->post('Timeline'),
                            'Image' => $this->input->post('Image'),
                            'IdTour' => $this->input->post('IdTour'),
                            'Note' => $this->input->post('Note'),
                        );

                        $config['upload_path'] = './upload_img/';
                        $config['allowed_types'] = 'gif|jpg|png';

                        $this->load->library('upload', $config);

                        if (!$this->upload->do_upload('Image')) {
                            $error = array('upload_error' => $this->upload->display_errors());
                            $params['Image'] = "picture.png";
                        } else {
                            $success = array('upload_success' => $this->upload->data());
                            $params['Image'] = $success['upload_success']['client_name'];
                        }

                        $this->Tourdescription_model->update_tourdescription($IdDesciption, $params);

                        redirect('tourdescription/index');
                    } else {
                        $data['tour'] = $this->Tour_model->get_all_tour();
                        $data['_view'] = 'tourdescription/edit';
                        $this->load->view('layouts/main', $data);
                    }
                } else
                    show_error('The tourdescription you are trying to edit does not exist.');
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    /*
     * Deleting tourdescription
     */
    function remove($IdDesciption)
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                $tourdescription = $this->Tourdescription_model->get_tourdescription($IdDesciption);

                // check if the tourdescription exists before trying to delete it
                if (isset($tourdescription['IdDesciption'])) {
                    $this->Tourdescription_model->delete_tourdescription($IdDesciption);
                    redirect('tourdescription/index');
                } else
                    show_error('The tourdescription you are trying to delete does not exist.');
            } else
                redirect("home");
        } else {
            redirect("user/login");
        }
    }

    /*
     * Upload Image
     */
    function upload_img()
    {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($this->input->post('Image'))) {
            $error = array('upload_error' => $this->upload->display_errors());
            echo "<pre>";
            print_r($error);
            echo "</pre>";
            return;
        } else {
            $success = array('upload_success' => $this->upload->data());
            echo "<pre>";
            print_r($success);
            echo "</pre>";
            return;
        }
    }
}
