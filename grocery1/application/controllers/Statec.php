<?php
class Statec extends CI_Controller 
{
	
	
	public function __construct()
	{
		parent ::__construct();	
		$this->load->model('Statem');
	}
	
	public function index()
	{
		$file['data1']=$this->Statem->showcountry();
		
			
		$file['data']=$this->Statem->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('State/Showstate',$file);
	}
	
	  public function CheckAll()
	  {
			$file['data']=$this->Statem->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('State/Showstate',$file);
  
		  }
	
	public function status($id)
	{
		
		$this->Statem->status($id);
		redirect('Statec');
	}
	    
	
	   public function insert()
	   {
		$this->Statem->insert();
		redirect('Statec');
		   
	   }
		   
		   
	   public function del($id)
	   {
			$this->Statem->del($id);
			redirect('Statec');
		}


   public function edit($id)
   {
	 	$this->load->view('template/header');
		$this->load->view('template/sidebaar');
	
	   $file['data']=$this->Statem->edit($id);
	   	$this->load->view('State/Editstate',$file);

	   
	   
	   }
	   
	      public function update($id)
	   {
			$this->Statem->update($id);
			redirect('Statec');
		}

   public function deleteall()
   {
		$this->Statem->deleteall();
		redirect('Statec');
		 	
	   
	   }	
	
}
