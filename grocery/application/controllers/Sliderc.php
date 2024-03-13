<?php
class Sliderc extends CI_Controller 
{
	
	
	public function __construct()
	{
		parent ::__construct();	
		$this->load->model('Sliderm');
	}
	
	public function index()
	{
		$file['data']=$this->Sliderm->getdata();					
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Slider/Slider',$file);
	}
	
	  public function CheckAll()
	  {
			$file['data']=$this->Sliderm->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Slider/Slider',$file);
  
		  }
	
	public function status($id)
	{
		
		$this->Sliderm->status($id);
		redirect('Sliderc');
	}
	    public function add()
		{
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Slider/Slider');

		}
	
	
	   public function insert()
	   {
		$this->Sliderm->insert();
		redirect('Sliderc');
		   
	   }
		   
		   
	   public function del($id)
	   {
			$this->Sliderm->del($id);
			redirect('Sliderc');
		}


   public function edit($id)
   {
	 	$file['data']=$this->Sliderm->edit($id);
	  
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
	
	   
	   $this->load->view('Slider/Editslider',$file);

	   
	   
	   }
	   
	      public function update($id)
	   {
			$this->Sliderm->update($id);
			redirect('Sliderc');
		}

   public function deleteall()
   {
		$this->Sliderm->deleteall();
		redirect('Sliderc');
		 	
	   
	   }	
	
}
