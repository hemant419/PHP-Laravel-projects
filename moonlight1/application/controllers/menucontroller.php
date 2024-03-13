<?php
class menucontroller extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('menumodel');	
	}
	
	public function getmenudata($id)
	{
		$file['menudata']=$this->menumodel->getmenudata($id);
		$file['branddata']=$this->menumodel->getbranddata($id);
		$file['getralatedcategory']=$this->menumodel->getralatedcategory($id);
		$this->load->view('template/header');
		$this->load->view('menu/showmenu',$file);
		$this->load->view('template/footer');
	}
	
	public function getsearchdata()
	{
		$searchname=$this->input->post('searchbox');
	
		$file['menudata']=$this->menumodel->searchmenudata($searchname);
		$file['branddata']=$this->menumodel->searchbranddata($searchname);
	//	$file['getralatedcategory']=$this->menumodel->searchralatedcategory($searchname);
		$this->load->view('template/header');
		$this->load->view('menu/showmenu',$file);
		$this->load->view('template/footer');
		
	}
	
		

	public function getbranddata($id)
	{
		$file['filter']=$this->menumodel->getbranddatadetail($id);
		$this->load->view('filter/pricefilter',$file);
	}

	public function getrelatedcat($sid)
	{
		$file['filter']=$this->menumodel->getrelatedcat($sid);
		$this->load->view('filter/pricefilter',$file);
	}

	public function productdetail($id)
	{
		$file['detail']=$this->menumodel->productdetail($id);
		$file['related']=$this->menumodel->relatedproduct($id);
		$file['reviwed']=$this->menumodel->reviwedproduct($id);
		$file['faq']=$this->menumodel->faqproduct($id);
		
		$this->load->view('template/header');
		$this->load->view('menu/menuproductdetail',$file);
		$this->load->view('template/footer');
	}

	public function filterprice($minp,$maxp,$subid)
	{
		$file['filter']=$this->menumodel->filterprice($minp,$maxp,$subid);
		$this->load->view('filter/pricefilter',$file);

	}
	
	public function sortfilter($limit,$subid)
	{
		$file['filter']=$this->menumodel->sortfilter($limit,$subid);
		$this->load->view('filter/pricefilter',$file);
	}
	
	public function sortrange($range,$subid)
	{
		$file['filter']=$this->menumodel->sortrange($range,$subid);
		$this->load->view('filter/pricefilter',$file);
	}
	
	public function chgcolor($color,$subid)
	{
		$file['filter']=$this->menumodel->chgcolor($color,$subid);
		$this->load->view('filter/pricefilter',$file);
	}
	
	public function chgsize($size,$subid)
	{
		$file['filter']=$this->menumodel->chgsize($size,$subid);
		$this->load->view('filter/pricefilter',$file);
	}
	
	public function rateproduct($cname,$cemail,$crate,$creview,$pid)
	{
		$this->menumodel->rate($cname,$cemail,$crate,$creview,$pid);
	}
	
	public function faq($pid,$faqq)
	{
		$this->menumodel->faq($pid,$faqq);
		
	}
	
	
	public function addtocart($pid,$uids,$qty,$size)
	{
		if($this->session->userdata('c_userid')!="")
		{
			$this->menumodel->addtocart($pid,$uids,$qty,$size);
		}
		else
		{
			echo "0";	
		}
			
	}
	


}
?>