<?php 
class productModel extends CI_Model
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('productModel');
		$this->load->model('Brandmodel');
		$this->load->model('categoryModel');
		$this->load->model('subcategoryModel');
	}
	public function selectProduct()
	{
		 $this->db->from('cetegory');
		 $this->db->join('subcategory','cetegory.cat_id=subcategory.cat_id');
		 $this->db->join('product','subcategory.subcat_id=product.subcat_id');
		 $this->db->join('brand','brand.brand_id=product.brand_id');
		 return $this->db->get()->result();
	}
	
	public function deleteProduct($id)
	{
		$path="./product/";

		$this->db->where('prd_id',$id);
		$imageData=$this->db->get('product')->row();
		$image1=$imageData->prd_img1;
		$image2=$imageData->prd_img2;
		$image3=$imageData->prd_img3;
			
		unlink($path.$image1);	unlink($path.$image2);unlink($path.$image3);
		$this->db->where('prd_id',$id);
		$this->db->delete('product');
	
		redirect('productcontrol');
	}
	public function statusupdate($id)
	{
		$this->db->where('prd_id',$id);
		$row=$this->db->get('product')->row();
		$currstatus=$row->prd_status;
		
		if($currstatus=="Active")
		{
			$statusupdate="Deactive";
			$prd_id=$this->uri->segment(3);
			$update=array('prd_status'=>$statusupdate);
			
			
			$this->db->where('prd_id',$prd_id);
			$this->db->update('product',$update);
			//die();
			redirect('productcontrol');
		}
		else
		{
			$statusupdate="Active";
			$prd_id=$this->uri->segment(3);
			$update=array('prd_status'=>$statusupdate);
			$this->db->where('prd_id',$prd_id);
			$this->db->update('product',$update);
			redirect('productcontrol');
		}
	}
	public function selectSubcat($id)
	{
		$this->db->where('cat_id',$id);
		$data=$this->db->get('subcategory')->result();

		$this->db->where('cat_id',$id);
		$catdata=$this->db->get('cetegory')->row();
		//echo $catdata->cat_name;
		if($catdata->cat_name=="Mens" || $catdata->cat_name=="Woomen" || $catdata->cat_name=="Baby & Kids")
		{
			echo "1"; 
		}
		?>		
		<option value=""> Select Sub category</option>
		<?php		
		foreach($data as $row)
		{	
		?>	
            <option value="<?php echo $row->subcat_id ?>"><?php echo $row->subcat_name ?></option>
        <?php
		}
	}
	public function selectBrand($id)
	{
		$this->db->where('subcat_id',$id);
		$Brand=$this->db->get('brand')->result();
		
		$this->db->where('subcat_id',$id);
		$prdType=$this->db->get('product_type')->result();
		echo 

?>		<option value=""> Select Brand</option>
<?php		
		foreach($Brand as $dataBrand){?>
                         <option value="<?php echo $dataBrand->brand_id; ?>">
						 	<?php echo $dataBrand->brand_name; ?>
						</option>
                    <?php } 
		
	}
	
	public function insertProduct()
	{
		$prdName=$this->input->post('prdName');$brandId=$this->input->post('brandId');
		$subcatId=$this->input->post('subcatId');$catId=$this->input->post('catId');
		$prdPrice=$this->input->post('prdPrice');$prdStock=$this->input->post('prdStock');
		$color1=$this->input->post('color1');$color2=$this->input->post('color2');
		$color=$color1."-".$color2;
		$size=$this->input->post('size');$prdDesc=$this->input->post('prdDesc');
		$prdFeature=$this->input->post('prdFeature');$prdStartDate=$this->input->post('prdStartDate');
		$prdEndDate=$this->input->post('prdEndDate');
		$discount=$this->input->post('discount');
		$prdtype=$this->input->post('prdtype');
		
		$path="product/";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
		//Error Message Variable
		$file['imgErr1']="";$file['imgErr2']="";$file['imgErr3']="";
		//All Model Function 
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$file['maincategory']=$this->categoryModel->selectCategory();
			$file['subcategory']=$this->subcategoryModel->selectSubcategory();
			$file['Brand']=$this->Brandmodel->selectBrand();
			
		if(!$this->upload->do_upload('prdimgA'))
		{
			$file['imgErr1']=$this->upload->display_errors();
			
			$file['page']="product/addProduct";
			$this->load->view('Template/content',$file);
		}
		$dataA=array('upload_data'=>$this->upload->data() );
		if(!$this->upload->do_upload('prdimgB'))
		{
			$file['imgErr2']=$this->upload->display_errors();
			
			$file['page']="product/addProduct";
			$this->load->view('Template/content',$file);
		}	
		$dataB=array('upload_data'=>$this->upload->data() );
		if(!$this->upload->do_upload('prdimgC'))
		{
			$file['imgErr3']=$this->upload->display_errors();
			
			$file['page']="product/addProduct";
			$this->load->view('Template/content',$file);
		}
		$dataC=array('upload_data'=>$this->upload->data() );
		$current=date('Y-m-d');	$status="";
			
			if($prdStartDate!=$current){
				$status="Deactive";
				}
			else
				{$status="Active";
				}
		$insert=array(
						"cat_id"=>$catId,"subcat_id"=>$subcatId,"brand_id"=>$brandId,
						"ptype_id"=>$prdtype,"prd_name"=>$prdName,
						"prd_price"=>$prdPrice,"prd_discount"=>$discount,
						"prd_stock"=>$prdStock,"prd_color"=>$color,"prd_size"=>$size,
						"prd_description"=>$prdDesc,"prd_feature"=>$prdFeature,
						"prd_img1"=>$dataA['upload_data']['file_name'],
						"prd_img2"=>$dataB['upload_data']['file_name'],
						"prd_img3"=>$dataC['upload_data']['file_name'],
						"prd_startdate"=>$prdStartDate,"prd_enddate"=>$prdEndDate,
						"prd_status"=>$status
						);
			
			$this->db->insert('product',$insert);
			redirect('productcontrol');		
	}
	public function editProduct($id)
	{
		$this->db->where('prd_id',$id);
		return $this->db->get('product')->row();
	}
	
	public function selectSubcatedit($id)
	{
		$this->db->where('cat_id',$id);
		$data=$this->db->get('subcategory')->result();
		//print_r($data);
		if(count($data)>0)
		{
				foreach($data as $dataSub)
				{
?>					 <option value="<?php echo $dataSub->subcat_id; ?>">
						<?php echo $dataSub->subcat_name; ?>
					</option>
<?php       	}
		}else
		{
?>					<option value="">No Record Found	 </option>
<?php 		}
	}
	public function updateProduct($id)
	{
		
		$prdName=$this->input->post('prdName');$brandId=$this->input->post('brandId');
		$subcatId=$this->input->post('subcatId');$catId=$this->input->post('catId');
		$prdPrice=$this->input->post('prdPrice');$prdStock=$this->input->post('prdStock');
		$color1=$this->input->post('color1');$color2=$this->input->post('color2');
		$color=$color1."-".$color2;
		$size=$this->input->post('size');$prdDesc=$this->input->post('prdDesc');
		$prdFeature=$this->input->post('prdFeature');$prdStartDate=$this->input->post('prdStartDate');
		$prdEndDate=$this->input->post('prdEndDate');$discount=$this->input->post('discount');
				$prdtype=$this->input->post('prdtype');//Error Message Variable
			$file['imgErr1']="";$file['imgErr2']="";$file['imgErr3']="";
		//image
			$path="./product/";
			$config['upload_path']=$path;
			$config['max_size']='1500';
			$config['allowed_types']='gif|jpg|png|jpeg';
			$config['encrypt_name']=true;
			$this->load->library('upload',$config);	
		//all Neccesary Model Are loaded For error solution
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$file['maincategory']=$this->categoryModel->selectCategory();
			$file['subcategory']=$this->subcategoryModel->selectSubcategory();
			$file['Brand']=$this->Brandmodel->selectBrand();
			
			$this->db->where('prd_id',$id);
			$imageData=$this->db->get('product')->row();
			$image1=$imageData->prd_img1;
			$image2=$imageData->prd_img2;
			$image3=$imageData->prd_img3;
			//$path="product/";
			$dir=opendir($path);
			
			if(!empty($_FILES['prdimg1']['name']))
			{
				if(!$this->upload->do_upload('prdimg1'))
				{
					$file['imgErr1']=$this->upload->display_errors();
					//print_r($file['imgErr1']);
					$file['page']="product/editProduct";
					$this->load->view('Template/content',$file);
				}
				else
				{
					$data1=array('upload_data'=>$this->upload->data() );
					unlink($path.$image1);
					$update1=array("prd_img1"=>$data1['upload_data']['file_name']);	
					$this->db->where('prd_id',$id);
					$this->db->update('product',$update1);
				}
			}
			if(!empty($_FILES['prdimg2']['name']))
			{
				if(!$this->upload->do_upload('prdimg2'))
				{
					$file['imgErr2']=$this->upload->display_errors();
					//print_r($file['imgErr1']);
					$file['page']="product/editProduct";
					$this->load->view('Template/content',$file);
				}
				else
				{
					$data2=array('upload_data'=>$this->upload->data() );
					unlink($path.$image2);
					$update2=array("prd_img2"=>$data2['upload_data']['file_name']);	
					$this->db->where('prd_id',$id);
					$this->db->update('product',$update2);
				}	
			}
			if(!empty($_FILES['prdimg3']['name']))
			{
				if(!$this->upload->do_upload('prdimg3'))
				{
					$file['imgErr3']=$this->upload->display_errors();
					$file['page']="product/editProduct";
					//print_r($file['imgErr1']);
					$this->load->view('Template/content',$file);
				}
				else
				{
					$data3=array('upload_data'=>$this->upload->data() );
							unlink($path.$image3);
					$update3=array("prd_img3"=>$data3['upload_data']['file_name']);	
					$this->db->where('prd_id',$id);
					$this->db->update('product',$update3);
				}	
			}
			$current=date('Y-m-d');	$status="";
			
			if($prdStartDate!=$current){
				$status="Deactive";
				}
			else
				{$status="Active";
				}
			$update=array(
						"cat_id"=>$catId,"subcat_id"=>$subcatId,"brand_id"=>$brandId,
						"ptype_id"=>$prdtype,"prd_name"=>$prdName,"prd_name"=>$prdName,
						"prd_price"=>$prdPrice,"prd_discount"=>$discount,
						"prd_stock"=>$prdStock,"prd_color"=>$color,"prd_size"=>$size,
						"prd_description"=>$prdDesc,"prd_feature"=>$prdFeature,
						"prd_startdate"=>$prdStartDate,"prd_enddate"=>$prdEndDate,"prd_status"=>$status
						);
			$this->db->where('prd_id',$id);	
			$this->db->update('product',$update);
			redirect('productcontrol');
	}
}
?>