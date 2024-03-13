<?php
class Cityc extends CI_Controller 
{
	
	
	public function __construct()
	{
		parent ::__construct();	
		$this->load->model('Citym');
	}
	
	public function index()
	{
		
		$file['data2']=$this->Citym->showstate();
			
		$file['data']=$this->Citym->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('City/City',$file);
	}
	
	  public function CheckAll()
	  {
			$file['data']=$this->Statem->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('City/City',$file);
  
		  }
	
	public function status($id)
	{
		
		$this->Citym->status($id);
		redirect('Cityc');
	}
	    
	
	   public function insert()
	   {
		$this->Citym->insert();
		redirect('Cityc');
		   
	   }
		   
		   
	   public function del($id)
	   {
			$this->Citym->del($id);
			redirect('Cityc');
		}


   public function edit($id)
   {
		$file['state']=$this->Citym->showstate();
	   $file['data']=$this->Citym->edit($id);
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
	
	  	$this->load->view('City/Editcity',$file);

	   
	   
	   }
	   
	      public function update($id)
	   {
			$this->Citym->update($id);
			redirect('Cityc');
		}

   public function deleteall()
   {
		$this->Citym->deleteall();
		redirect('Cityc');
		 	
	   
	   }	
	
}
