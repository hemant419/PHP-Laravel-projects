<?php
class Welcome extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_ragis');
		$this->load->model('user_M');
		$this->load->model('addtocartM');
		$this->load->model('categoryM');
	}

	public function index()
	{
		$file['Diabities']=$this->user_M->Diabities();
		$file['BabyMother']=$this->user_M->BabyMother();
		$file['PersonalCare']=$this->user_M->PersonalCare();
		$file['HealthAid']=$this->user_M->HealthAid();
		$file['Acne']=$this->user_M->Acne();
		$file['Adhd']=$this->user_M->Adhd();
		$file['AlcoholAddiction']=$this->user_M->AlcoholAddiction();
		$file['CancerOncology']=$this->user_M->CancerOncology();
		$file['BladderProstateDisorders']=$this->user_M->BladderProstateDisorders();
		$file['Depression']=$this->user_M->Depression();
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();

		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		$file['page']="dashbore/home";
		$this->load->view('template/content',$file);
	}	
	public function reviewdata($id)
	{

		$file['feeddata']=$this->user_M->feedbackdata();
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['viewdata']=$this->user_M->productview($id);
		$this->db->where('product_id',$id);
		
		$relatedp=$this->db->get('product_master')->row();
		
		$this->db->where('categery_id',$relatedp->categery_id);
		$file['product']=$this->db->get('product_master')->result();
	
		$file['page']="product_detail";
		$this->load->view('template/content',$file);
	}
	public function wishlistdata($id)
	{	
	
		$this->user_M->insertwish($id);
		redirect('Welcome/reviewdata/'.$id);
	}
	public function wishlist()
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['cart']=$this->user_M->cartproduct();
		$file['wishrow']=$this->user_M->wishdata();
		$file['page']="shoping/wishlist";
		$this->load->view('template/content',$file);
	}
	public function addtocart($id)
	{
		$qty=$this->input->post('qty');
		$this->user_M->insertcart($id);
		redirect('Welcome/');
	}
	public function viewcart()
	{
		
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="shoping/addtocart";
		$this->load->view('template/content',$file);
	}
	public function addtocartdata($id)
	{
		$this->addtocartM->ajaxaddtocart($id);
		$file['cart']=$this->user_M->cartproduct();
		$this->load->view('shoping/cartShow',$file);
	}
	public function addtowishlist($id)
	{
		$this->user_M->addtowishlist($id);
	}

	public function contact()
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="contact";
		$this->load->view('template/content',$file);
	}

	public function feedback()
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="feedback";
		$this->load->view('template/content',$file);
	}
	public function feedbackdata($id)
	{
		$this->user_M->feedbackinsert($id);
		redirect('welcome');
	} 
	
	public function invoice()
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="invoice";
		$this->load->view('template/content',$file);
	}
	
	
	public function fetchdata()
	{
	//		$this->db->where("subcategory_st","Active");
			$data=$this->db->get("sub_categery_master")->result();
			echo json_encode($data);
	}
	
	
	public function search()
	{
		
		$name= $this->input->post("search");
		$this->db->from("product_master");
		$this->db->join("categery_master","product_master.categery_id=categery_master.categery_id");	   $this->db->join("sub_categery_master","product_master.s_id=sub_categery_master.s_id");
	//	$this->db->join("brand","product_master.brand_id=brand.brand_id");
		$this->db->like("s_name",$name);
		$file['Searchproduct']=$this->db->get()->result();
		
		$this->db->from("sub_categery_master");
		$this->db->like("s_name",$name);
		$file['brand']=$this->db->get('brand')->result();
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		$this->db->order_by('product_id','desc');
		$file['product']=$this->db->get('product_master')->result();		
		$file['page']="listproducts";
		$this->load->view('template/content',$file);
	}


	public function listp($id)
	{
		
		$this->db->from("product_master");
		$this->db->join("categery_master","product_master.categery_id=categery_master.categery_id");	   $this->db->join("sub_categery_master","product_master.s_id=sub_categery_master.s_id");
	//	$this->db->join("brand","product_master.brand_id=brand.brand_id");
		$this->db->where("product_master.s_id",$id);
		$file['listproduct']=$this->db->get()->result();
		
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		$this->db->order_by('product_id','desc');
		$file['product']=$this->db->get('product_master')->result();		
		$file['page']="listproducts2";
		$this->load->view('template/content',$file);
	}


	public function priscription()
	{
		$file['error']="";$file['ono']="";$file["error22"]="";
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		$file['page']="prisription";
		$this->load->view('template/content',$file);
	}
	public function prisriupload()
	{
	
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		
		$name=$this->input->post("name");
		$lname=$this->input->post("lname");
		$email=$this->input->post("email");
		$contect=$this->input->post("contect");
		$address=$this->input->post("address");
		$orderno=rand(1,10000);
		
		$config['upload_path']='prisription';
		$config['allowed_types']='gif|jpg|png|jpeg';
		//$config['max_size']='1500';
		//$config['max_width']='1024';
		//$config['max_height']='768';
		$config['encrypt_name']=true;
		
		$file['error']="";
			$file['ono']="";$file["error22"]="";
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('file'))
		{
			$file['error']=$this->upload->display_errors();
			$file['page']="prisription";
			$this->load->view('template/content',$file);

		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$insert=array(
				"name"=>$name."".$lname,
				"email"=>$email,
				"contact"=>$contect,
				"shipping"=>$address,
				"orderno"=>$orderno,
				"prisriptionfile"=>$data['upload_data']['file_name']
				);
				$this->db->insert("prisription",$insert);
			$file['error']="Priscription Uploaded";
			$file['ono']="Order No is : ".$orderno;
			
			$file['page']="prisription";
			$this->load->view('template/content',$file);
		}
	}
	public function priscridata()
	{
		$file['error']="";$file['ono']="";$file["error22"]="";
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		$file['page']="prisription";
		$this->load->view('template/content',$file);
	}
	
	public function checkpriscription()
	{
		
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		
		$file['error']="";
		$file['ono']="";
		$file["error22"]="";
	
		$email=$this->input->post("email");
		$orderno=$this->input->post("orderno");
		
		$this->db->where("email",$email);
		$this->db->where("orderno",$orderno);
		$file['priscridata']=$this->db->get("prisription")->row();
		if(count($file['priscridata']) !=0)
		{
			redirect("Welcome/priscriptionValid/".$orderno);
		}
		else{
			$file["error22"]="Record not Found ...!";
			$file['page']="prisription";
			$this->load->view('template/content',$file);
		
		}
	}
	public function priscriptionValid($oderno)
	{
		$this->db->where("orderno",$oderno);
		$file["trackOf"]=$this->db->get("prisription")->row();
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		$file['page']="user/trackprisc";
		$this->load->view('template/content',$file);
	}
}
?>