<?php
class Countryc extends CI_Controller 
{
	
	
	public function __construct()
	{
		parent ::__construct();	
		$this->load->model('Countrym');
	}
	
	public function index()
	{
		$file['data']=$this->Countrym->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Country/Showcountry',$file);
	}
	
	  public function CheckAll()
	  {
			$file['data']=$this->Countrym->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Country/Showcountry',$file);
  
		  }
	
	public function status($id)
	{
		
		$this->Countrym->status($id);
		redirect('Countryc');
	}
	    
	
	   public function insert()
	   {
		$this->Countrym->insert();
		redirect('Countryc');
		   
	   }
		   
		   
	   public function del($id)
	   {
			$this->Countrym->del($id);
			redirect('Countryc');
		}


   public function edit($id)
   {
	 	$this->load->view('template/header');
		$this->load->view('template/sidebaar');
	
	   $file['data']=$this->Countrym->edit($id);
	   	$this->load->view('Country/Editcountry',$file);

	   
	   
	   }
	   
	      public function update($id)
	   {
			$this->Countrym->update($id);
			redirect('Countryc');
		}

   public function deleteall()
   {
		$this->Categorym->deleteall();
		redirect('Countryc');
		 	
	   
	   }	
	
}
