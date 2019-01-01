<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('QuizC_model', 'quizC');
	}

	public function index()
	{
		$data['title'] = 'SHELONGS';
		$this->load->view('layout_home/header', $data);
		$this->load->view('home/index');
		$this->load->view('layout_home/footer');
	}

	public function home()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/home');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function specialpackage()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/specialpackage');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function bestietalk()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/bestietalk');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function bestie01()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/bestie01');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function bestie02()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/bestie02');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function bestie03()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/bestie03');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function bestie04()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/bestie04');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}


	public function bestpicks()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/bestpicks');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function howtobuy()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/howtobuy');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}
	public function howtosend()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/howtosend');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}
	public function questions()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/questions');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}
	public function returnproduct()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/returnproduct');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}
	public function aboutSHElongs()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/aboutSHElongs');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}
	public function Joinme()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/Joinme');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}
	public function condition()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/condition');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}
	public function policy()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/policy');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}
	public function makeuptrends()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/makeuptrends');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function howtopay()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/howtopay');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}

	public function contact()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/contact');
		$this->load->view('layout_home/footerhome');
		//$this->load->view('layout_home/footer');
	}


	/*public function start()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header' ,$data);
		$this->load->view('home/start');
		//$this->load->view('layout_home/footer');
	}*/
	
	public function quiz()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header' ,$data);
		$this->load->view('home/quiz');
		//$this->load->view('layout_home/footer');
	}

	public function login()
	{
		$data['title'] = 'SHELONGS';
		//$this->load->view('layout_home/header' ,$data);
		$this->load->view('home/login');
		//$this->load->view('layout_home/footer');
	}

	public function register()
	{
		$postdata = json_decode(file_get_contents("php://input"), true);
		$response = $this->quizC->save($postdata[0]);
		//echo json_encode($response);
		if($response){
			$sendmail = $this->quizC->sendemail($postdata[0]);
			if($sendmail){
				echo json_encode($sendmail);
			}else{
				echo json_encode($sendmail); //email not send
			}
		}else{
			$data = false;
			echo json_encode($data); //email duplicate
		}
	}

	public function add_quiz()
	{
		$quizdata = json_decode(file_get_contents("php://input"), true);
		$data = $this->quizC->save_quiz($quizdata[0]);
		echo json_encode($data);
	}

	public function registerFacebook()
	{
		$postdata = json_decode(file_get_contents("php://input"), true);
		$response = $this->quizC->regis_facebook($postdata[0]);
		if($response){
			$getdata = $this->quizC->getdata($postdata[0]);
			echo json_encode($getdata);
		}else{
			$getdata = $this->quizC->getdata($postdata[0]);
			echo json_encode($getdata);
		}
	}

	public function update_cs()
	{
		$data = json_decode(file_get_contents("php://input"), true);
		$response = $this->quizC->update_cs($data[0]);
		echo json_encode($response);
	}

	function confirmEmail($hashcode){
		$verify = $this->quizC->verifyEmail($hashcode);
        if($verify){
			redirect('home');
        }else{
			redirect('home');
        }
	}

}