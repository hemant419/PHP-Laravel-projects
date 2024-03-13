<?php
class Areac extends CI_Controller 
{
	
	
	public function __construct()
	{
		parent ::__construct();	
		$this->load->model('Aream');
	}
	
	public function index()
	{
		
		$file['state']=$this->Aream->showstate();
		
		$file['city']=$this->Aream->showcity();
			
		$file['data']=$this->Aream->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Area/Area',$file);
	}
	
	  public function CheckAll()
	  {
			$file['data']=$this->Aream->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Area/Area',$file);
  
		  }
	
	public function status($id)
	{
		
		$this->Aream->status($id);
		redirect('Areac');
	}
	    
	
	   public function insert()
	   {
		$this->Aream->insert();
		redirect('Areac');
		   
	   }
		   
		   
	   public function del($id)
	   {
			$this->Aream->del($id);
			redirect('Areac');
		}


   public function edit($id)
   {
		$file['state']=$this->Aream->showstate();
		$file['city']=$this->Aream->showcity();
	   $file['data']=$this->Aream->edit($id);
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
	
	  	$this->load->view('Area/Editarea',$file);

	   
	   
	   }
	   
	      public function update($id)
	   {
			$this->Aream->update($id);
			redirect('Areac');
		}

   public function deleteall()
   {
		$this->Aream->deleteall();
		redirect('Areac');
		 	
	   
	   }	
	   public function getcity($id)
	   {
			$this->Aream->getcity($id);
		//	redirect('Areac');
		}

	
}
