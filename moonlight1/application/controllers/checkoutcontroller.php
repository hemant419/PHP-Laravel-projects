<?php
class checkoutcontroller extends CI_Controller
{
	function __construct() 
	{
        parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->db->where('user_id',$this->session->userdata('c_userid'));
		$file['mycart']=$this->db->get('addtocart')->result();
		$this->load->view('template/header');
		$this->load->view('checkout/checkout',$file);
		$this->load->view('template/footer');			
	}

	public function chkmethod()
	{
		$fname=$this->input->post("fname");
		$this->session->set_userdata("firstname",$fname);
		$this->session->set_userdata("lname",$this->input->post("lname"));
		$this->session->set_userdata("cemail",$this->input->post("email"));
		$this->session->set_userdata("cmobile",$this->input->post("mobileno"));
		$this->session->set_userdata("cpaddress",$this->input->post("paddress"));
		$this->session->set_userdata("csaddress",$this->input->post("saddress"));

			
		
		
		$this->db->where('user_id',$this->session->userdata('c_userid'));
		$file['mycart']=$this->db->get('addtocart')->result();
		$this->load->view('template/header');
		$this->load->view('checkout/shippingmethod',$file);
		$this->load->view('template/footer');			
	}

	public function payment()
	{
		
		$this->session->set_userdata("firstname",$this->input->post("fistname"));
		$this->session->set_userdata("lname",$this->input->post("lastname"));
		$this->session->set_userdata("cemail",$this->input->post("cemail"));
		$this->session->set_userdata("cmobile",$this->input->post("cmobile"));
		$this->session->set_userdata("cpaddress",$this->input->post("cpaddress"));
		$this->session->set_userdata("csaddress",$this->input->post("csaddress"));

		
		
		
		$dtype=$this->input->post('dtype');
		$this->session->set_userdata('dtype',$dtype);
		$this->db->where('user_id',$this->session->userdata('c_userid'));
		$file['mycart']=$this->db->get('addtocart')->result();
		$this->load->view('template/header');
		$this->load->view('checkout/paymentoption',$file);
		$this->load->view('template/footer');			
	}
	
	public function ordercomplete()
	{
		$this->load->model('checkoutmodel');
		$this->checkoutmodel->ordercomplete();	
		redirect('usercontroller/myorder');
	
	}
	
	public function captchaimg()
	{
		$codi=md5(rand(1000,9999));
		$code=substr($codi,0,5);
		$this->session->set_userdata('code',$code);
		$img=imagecreate(95, 55);
		$bg=imagecolorallocate($img,222,218,218);
		$fg=imagecolorallocate($img,0,0,0);
		$color=imagecolorallocate($img,202,21,21);
		imagefill($img,0,0,$bg);
		for($x=1;$x<30;$x++)
		{
			$x1=rand(1,100);
			$y1=rand(1,100);
			$x2=rand(1,100);
			$y2=rand(1,100);
			imageline($img,$x1,$y1,$x2,$y2,$color);	
		}
		imagestring($img,5,25,19,$code,$fg);
		imagepng($img);
	}

	public function capthca($captch)
	{
	//	echo $this->session->userdata('code');
			if($captch==$this->session->userdata('code'))
			{
				echo "1";
			}
			else
			{
				echo "0";	
			}
	}

	
}
?>