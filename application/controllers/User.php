<?php





class User extends CI_Controller

{

    function __construct()

    {

        parent::__construct();

        $this->load->model('User_model');

        $this->load->model('Decentralization_model');
    }



    /*

     * Listing of user

     */

    function index()

    {

        if (isset($_SESSION['isLogin'])) {

            if ($_SESSION['lgRole'] == 1) {

                $data['user'] = $this->User_model->get_all_user();



                $data['_view'] = 'user/index';

                $this->load->view('layouts/main', $data);
            } else

                redirect("home");
        } else {

            redirect("user/login");
        }
    }



    /*

     * Adding a new user

     */

    function add()

    {

        if (isset($_SESSION['isLogin'])) {

            if ($_SESSION['lgRole'] == 1) {

                if (isset($_POST) && count($_POST) > 0) {

                    $params = array(

                        'Username' => $this->input->post('Username'),

                        'Password' => md5($this->input->post('Password')),

                        'IdDecentralization' => $this->input->post('IdDecentralization'),

                        'Fullname' => $this->input->post('Fullname'),

                        'IdentityCard' => $this->input->post('IdentityCard'),

                        'Birthday' => $this->input->post('Birthday'),

                        'Phone' => $this->input->post('Phone'),

                        'Email' => $this->input->post('Email'),

                        'Address' => $this->input->post('Address'),

                        'Note' => $this->input->post('Note'),

                    );



                    $user_id = $this->User_model->add_user($params);

                    redirect('user/index');
                } else {

                    $data['decentralization'] = $this->Decentralization_model->get_all_decentralization();

                    $data['_view'] = 'user/add';

                    $this->load->view('layouts/main', $data);
                }
            } else

                redirect("home");
        } else {

            redirect("user/login");
        }
    }



    /*

     * Editing a user

     */

    function edit_user($IdUser)

    {

        if (isset($_SESSION['isLogin'])) {

            if ($_SESSION['lgRole'] == 1) {

                // check if the user exists before trying to edit it

                $data['user'] = $this->User_model->get_user($IdUser);



                if (isset($data['user']['IdUser'])) {

                    if (isset($_POST) && count($_POST) > 0) {

                        $params = array(

                            'Username' => $this->input->post('Username'),

                            'Password' => md5($this->input->post('Password')),

                            'Fullname' => $this->input->post('Fullname'),

                            'IdentityCard' => $this->input->post('IdentityCard'),

                            'Birthday' => $this->input->post('Birthday'),

                            'Phone' => $this->input->post('Phone'),

                            'Email' => $this->input->post('Email'),

                            'Address' => $this->input->post('Address'),

                            'Note' => $this->input->post('Note'),

                        );



                        $this->User_model->update_user($IdUser, $params);

                        redirect("user/edit_user/$IdUser");
                    } else {

                        $data['decentralization'] = $this->Decentralization_model->get_all_decentralization();

                        $data['_view'] = 'user/edit_user';

                        $data['title'] = $data['user']['Fullname'];

                        $this->load->view('layouts/home_main', $data);
                    }
                } else

                    show_error('The user you are trying to edit does not exist.');
            } else

                redirect("home");
        } else {

            redirect("user/login");
        }
    }



    function edit($IdUser)

    {

        if (isset($_SESSION['isLogin'])) {

            if ($_SESSION['lgRole'] == 1) {

                // check if the user exists before trying to edit it

                $data['user'] = $this->User_model->get_user($IdUser);



                if (isset($data['user']['IdUser'])) {

                    if (isset($_POST) && count($_POST) > 0) {

                        $params = array(

                            'Username' => $this->input->post('Username'),

                            'Password' => md5($this->input->post('Password')),

                            'IdDecentralization' => $this->input->post('IdDecentralization'),

                            'Fullname' => $this->input->post('Fullname'),

                            'IdentityCard' => $this->input->post('IdentityCard'),

                            'Birthday' => $this->input->post('Birthday'),

                            'Phone' => $this->input->post('Phone'),

                            'Email' => $this->input->post('Email'),

                            'Address' => $this->input->post('Address'),

                            'Note' => $this->input->post('Note'),

                        );



                        $this->User_model->update_user($IdUser, $params);

                        redirect('user/index');
                    } else {

                        $data['decentralization'] = $this->Decentralization_model->get_all_decentralization();

                        $data['_view'] = 'user/edit';

                        $this->load->view('layouts/main', $data);
                    }
                } else

                    show_error('The user you are trying to edit does not exist.');
            } else

                redirect("home");
        } else {

            redirect("user/login");
        }
    }



    /*

     * Deleting user

     */

    function remove($IdUser)

    {

        if (isset($_SESSION['isLogin'])) {

            if ($_SESSION['lgRole'] == 1) {

                $user = $this->User_model->get_user($IdUser);



                // check if the user exists before trying to delete it

                if (isset($user['IdUser'])) {

                    $this->User_model->delete_user($IdUser);

                    redirect('user/index');
                } else

                    show_error('The user you are trying to delete does not exist.');
            } else

                redirect("home");
        } else {

            redirect("user/login");
        }
    }



    function login()

    {

        if (isset($_POST["btnLogin"])) {

            $userName = trim($_POST["txtUsername"]);

            $passWord = trim($_POST["txtPassword"]);

            if ($userName != "" && $passWord != "") {

                $row = $this->User_model->login($userName, md5($passWord));

                if ($row) {

                    $_SESSION["lgUserName"] = $userName;

                    $_SESSION["lgIdUser"] = $row["IdUser"];

                    $_SESSION["lgRole"] = $row["IdDecentralization"];

                    $_SESSION["lgFullname"] = $row["Fullname"];

                    $_SESSION["lgEmail"] = $row["Email"];

                    $_SESSION["lgPhone"] = $row["Phone"];

                    $_SESSION["isLogin"] = true;

                    redirect("home");
                } else {

                    $this->session->set_flashdata('error_login_message', 'Sai tài khoản hoặc mật khẩu');

                    //print_r( $this->session->flashdata('error_login_message'));

                    redirect('user/login');
                }
            } else if ($userName == "" && $passWord == "") {

                $this->session->set_flashdata('error_login_message', 'Đăng nhập thất bại');

                //print_r( $this->session->flashdata('error_login_message'));

                redirect('user/login');
            }
        } else if (isset($_POST["btnSignUp"])) {

            $params = array(

                'Username' => $this->input->post('txtUsernameSignup'),

                'Password' => md5($this->input->post('txtPasswordSignUp')),

                'IdDecentralization' => '2',

                'Fullname' => $this->input->post('txtFullname'),

                'IdentityCard' => $this->input->post('txtIdentityCard'),

                'Birthday' => $this->input->post('txtBirthday') == "" ? date('Y/m/d') : $this->input->post('txtBirthday'),

                'Phone' => $this->input->post('txtPhone'),

                'Email' => $this->input->post('txtEmail'),

                'Address' => $this->input->post('txtAddress'),

                'Note' => $this->input->post('txtNote'),

            );

            $params_null = false;

            foreach ($params as $obj) {

                $params_null = is_null($obj) ?  true : false;
            }

            $user_exist = $this->User_model->check_user($this->input->post('txtUsernameSignup'));

            if (!$user_exist) {

                $this->User_model->add_user($params);

                redirect('user/login');
            } else if ($params_null) {

                $this->session->set_flashdata('error_signup_message', 'Thông tin còn thiếu, vui lòng nhập đầy đủ thông tin');

                redirect('user/login');
            }
            else {

                $this->session->set_flashdata('error_signup_message', 'Người dùng đã tồn tại');

                // print_r( $this->session->flashdata('error_signup_message'));

                redirect('user/login');
            }
        }
        else
            $this->load->view("user/login");
    }



    function logout()

    {

        if (isset($_SESSION["lgUserName"])) {

            unset($_SESSION["lgUserName"]);

            unset($_SESSION["lgIdUser"]);

            unset($_SESSION["lgRole"]);

            unset($_SESSION["lgFullname"]);

            unset($_SESSION["isLogin"]);
        }

        redirect('home');
    }
}
