<?php
class homecontroller extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('homemodel');
		$this->load->model('usermodel');			
	}
	
	public function index()
	{
		$file['menudata']=$this->homemodel->newarrival();	
		$file['megasaving']=$this->homemodel->megasaving();	
		$file['highprice']=$this->homemodel->highprice();	
		$file['topbrands']=$this->homemodel->topbrands();	
	
		$this->load->view('template/header');
		$this->load->view('template/content',$file);
		$this->load->view('template/footer');
	}
	
	public function searchdata()
	{
		//	$this->db->where("prd_name","Active");
			$data=$this->db->get("product")->result();
			echo json_encode($data);
	}
	
	public function searchdatacat($catseach)
	{
			$this->db->where('cat_id',$catseach);
			$data=$this->db->get("product")->result();
			echo json_encode($data);
	}
	
	public function user()
	{
		$file['userinfo']=$this->usermodel->userinformation();	

		$this->load->view('template/header');
		$this->load->view('user/userprofile',$file);
		$this->load->view('template/footer');
	}
	
	public function popup($id)
	{
		$this->db->where('prd_id',$id);
		$s=$this->db->get('product')->row();	
		$dic=$s->prd_price/$s->prd_discount; 
		$actualprice=$s->prd_price-$dic;
		$acprice=ceil($actualprice);
		
		echo $s->prd_name."-".$s->prd_price."-".$s->prd_discount."-".$s->prd_description."-".$s->prd_img1."-".$s->prd_img2."-".$s->prd_img3."-".$s->prd_img2."-".$acprice;
		
		
	}
	
}
