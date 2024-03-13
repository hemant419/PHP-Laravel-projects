<?php
class Brandc extends CI_Controller 
{
	
	
	public function __construct()
	{
		parent ::__construct();	
		$this->load->model('Brandm');
	}
	
	public function index()
	{
		$file['data']=$this->Brandm->getdata();					
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Brand/Brand',$file);
	}
	
	  public function CheckAll()
	  {
			$file['data']=$this->Brandm->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Brand/Brand',$file);
  
		  }
	
	public function status($id)
	{
		
		$this->Brandm->bstatus($id);
		redirect('Brandc');
	}
	    public function add()
		{
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Brand/Brand');

		}
	
	
	   public function insert()
	   {
		$this->Brandm->insert();
		redirect('Brandc');
		   
	   }
		   
		   
	   public function del($id)
	   {
			$this->Brandm->del($id);
			redirect('Brandc');
		}


   public function edit($id)
   {
	 	$file['data']=$this->Brandm->edit($id);
	  
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
	
	   
	   	$this->load->view('Brand/Editbrand',$file);

	   
	   
	   }
	   
	      public function update($id)
	   {
			$this->Brandm->update($id);
			redirect('Brandc');
		}

   public function deleteall()
   {
		$this->Brandm->deleteall();
		redirect('Brandc');
		 	
	   
	   }	
	
}
