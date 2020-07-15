<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Feedback extends CI_Controller

{



	function __construct()

	{

		parent::__construct();
	}



	public function index()

	{



		if (isset($_POST['btnFeedback'])) {

			$to = $this->input->post('email');

			$subject = 'Cám ơn ' . $this->input->post('name') . ' đã góp ý';

			$message = 'Cám ơn những lời góp ý chân thành của bạn. Chúng mình sẽ cố gắng hoàn thiện các vấn đề bạn quan tâm. Mong bạn vẫn tiếp tục ủng hộ Tourist Half Way nhé!!! Chúc bạn có một ngày vui vẻ!!!';

			$feed =
				'Họ và tên : ' . $this->input->post('name')  . '
Số điện thoại : ' .  $this->input->post('phone') . '
Email : ' .  $this->input->post('email') . '
Góp ý : ' .  $this->input->post('message');

			if ($to != '') {

				$this->session->set_flashdata('send_feedback_success', 'Cám ơn những phản hồi của bạn. Hẹn gặp lại bạn lần sau !!!');

				mail($to, $subject, $message);

				mail('touristhalfway@gmail.com', 'Phản hồi của khách hàng ' . $this->input->post('name') . ' ' . $this->input->post('email'), $feed);

				$data['_view'] = 'feedback';

				$data['title'] = 'Góp ý';

				$this->load->view('layouts/home_main', $data);
			}
		} else {

			$data['_view'] = 'feedback';

			$data['title'] = 'Góp ý';

			$this->load->view('layouts/home_main', $data);
		}
	}
}
