<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Cart extends CI_Controller

{



    function __construct()

    {

        parent::__construct();

        $this->load->model('User_model');

        $this->load->model('Tour_model');

        $this->load->model('Bill_model');

        $this->load->model('Billinfo_model');

    }



    public function index()

    {



        if (isset($_SESSION['isLogin']))

            $data['user'] = $this->User_model->get_user($_SESSION['lgIdUser']);

        $idTour = $_GET['id'];

        $data['tour'] = $this->Tour_model->get_tour($idTour);

        if (isset($_POST['btnCart'])) {

            $to = $this->input->post('email');

            $subject = 'Cám ơn ' . $this->input->post('name') . ' đã đặt tour ' . $data['tour']['Name'];

            $message = 
           "Họ tên : " . $this->input->post('name'). "
Email : " . $this->input->post('email') . "
Số điện thoại : " . $this->input->post('phone') . "
Địa chỉ : " . $this->input->post('address') . "
Số người lớn : " . $this->input->post('amountAdult') . "
Số trẻ em : " . $this->input->post('amountChildren') . "
Phương thức thanh toán : " . $this->input->post('method') . "%
Tour : " . $this->input->post('tour') . "
Tổng tiền : " . $this->input->post('total') . "
Đã thanh toán : " . $this->input->post('pay') . '
Cám ơn bạn đã quan tâm và ủng hộ Tourist Half Way. Chúc bạn và gia đình có một chuyến đi vui vẻ! Chúng tôi rất hân hạnh được phục vụ!';

            $pay = 
           "Họ tên : " . $this->input->post('name'). "
Email : " . $this->input->post('email') . "
Số điện thoại : " . $this->input->post('phone') . "
Địa chỉ : " . $this->input->post('address') . "
Số người lớn : " . $this->input->post('amountAdult') . "
Số trẻ em : " . $this->input->post('amountChildren') . "
Phương thức thanh toán : " . $this->input->post('method') . "%
Tour : " . $this->input->post('tour') . "
Tổng tiền : " . $this->input->post('total') . "
Đã thanh toán : " . $this->input->post('pay');

            if ($to != '') {

                $this->session->set_flashdata('send_cart_success', 'Bạn đã đặt vé thành công. Chúc bạn có những chuyến đi thú vị cùng Tourist Half Way!!!');

                $mailheader = "From: touristhalfway@datpt.tech";
                $mailheader .= "Reply-To: ". $this->input->post('email')."";
                $mailheader .= "Content-type: text/html; charset=iso-8859-1";

                $mailheader2 = "From: touristhalfway@datpt.tech";
                $mailheader2 .= "Content-type: text/html; charset=iso-8859-1";

                mail($to, $subject, $message,$mailheader);

                mail('touristhalfway@gmail.com', 'Đơn của khách hàng ' . $this->input->post('name'), $pay,$mailheader2);

            }

            $bill = array(

                'OrderDate' => date('Y/m/d'),

                'Status' => $this->input->post('method'),

                'IdUser' => $data['user']['IdUser'] ?? NULL,

                'IdTour' => $idTour,

                'CustomerName' => $this->input->post('name'),

                'CustomerIdentityCard' => $this->input->post('IdentityCard'),

                'CustomerBirthday' => $data['user']['Birthday'] ?? NULL,

                'CustomerAddress' => $this->input->post('address'),

                'CustomerPhone' => $this->input->post('phone'),

                'CustomerEmail' => $this->input->post('email'),

                'NoAdult' => $this->input->post('amountAdult'),

                'NoChildren' => $this->input->post('amountChildren'),

                'TotalPrice' => implode('', explode(',', $this->input->post('pay'))),

                'Note' => $this->input->post('Note') ?? '',

            );

            $bill_id = $this->Bill_model->add_bill($bill);

            $billinfo = array(

                'IdBill' => $bill_id,

                'NoAdult' => $this->input->post('amountAdult'),

                'NoChildren' => $this->input->post('amountChildren'),

                'TotalPrice' => implode('', explode(',', $this->input->post('pay'))),

                'Note' => $this->input->post('Note') ?? '',

            );

            $billinfo_id = $this->Billinfo_model->add_billinfo($billinfo);

            $data['_view'] = 'cart';

            $data['title'] = 'Thanh toán';

            $this->load->view('layouts/home_main', $data);

        }

         else {

            $data['_view'] = 'cart';

            $data['title'] = 'Thanh toán';

            $this->load->view('layouts/home_main', $data);

        }

    }

}

