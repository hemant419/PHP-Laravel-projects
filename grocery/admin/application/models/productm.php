<?php
	class productm extends CI_Model{
		
	public function getdata()
	{
		
		
		
		
		
		$this->db->from('product_master');
		$this->db->join('categery_master','product_master.categery_id=categery_master.categery_id');
		$this->db->join('sub_categery_master','product_master.s_id=sub_categery_master.s_id');
	//	$this->db->join('brand','product_master.brand_id=brand.brand_id');
		return $this->db->get()->result(); 
	//	 echo "<pre>";
	//	 print_r($return);
	//	 die();
	}	
	
	public function insertdata()
	{

	
				echo $cnt=count($_FILES['image']['name']); //count images

		$cname=$this->input->post('categery');
		$csname=$this->input->post('subcategery');
		$name=$this->input->post('brand');
		$pname=$this->input->post('pname');
		$price=$this->input->post('price');
		$disco=$this->input->post('dics');
		$perc=$this->input->post('per');
		$disc=$this->input->post('dis');
		$stock=$this->input->post('stock');
		//$file=$this->input->post('file');
		
			$insert=array(
								"categery_id"=>$cname,
								"s_id"=>$csname,
								"brand_id"=>$name,
								"product_name"=>$pname,
								"product_price"=>$price,
								"product_discount"=>$disco,
								"product_peateched"=>$perc,
								"product_description"=>$disc,
								"stock"=>$stock,
							//	"image"=>$data['upload_data']['file_name']
							);
							$this->db->insert('product_master',$insert);
		
			for($i=0;$i<$cnt;$i++)//for loop
			{	
				$config['upload_path'] = './images/';  //configuration file
				$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|WEBP';
				$config['encrypt_name'] =true;
				$this->load->library('upload', $config);//load library
				$_FILES['myimg']['name']=$_FILES['image']['name'][$i];//image name with for loop 
				$_FILES['myimg']['tmp_name']=$_FILES['image']['tmp_name'][$i];
				$_FILES['myimg']['error']=$_FILES['image']['error'][$i];
				$_FILES['myimg']['size']=$_FILES['image']['size'][$i];
				$_FILES['myimg']['type']= $_FILES['image']['type'][$i];
			
				if ( ! $this->upload->do_upload('myimg'))
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
					die();	
				}
				else
				{
					$data = array(
						'upload_data' => $this->upload->data()
								);
					
					$this->db->limit(1);
					$this->db->order_by('product_id','desc');
					$productid=$this->db->get('product_master')->row();
					$newpid=$productid->product_id;
					
					$addrow=array(
									"product_id"=>$newpid,
									"image"=>$data['upload_data']['file_name'],
								);
								$this->db->insert('productimage',$addrow);		
				}
			}
		
	}
	public function deletedata($id)
	{
		$this->db->where('Product_id',$id);
		$ftc=$this->db->get('product_master')->row();
 		$data=$ftc->image;
		$dir = "./images/";
		$dirHandle = opendir($dir);
		while ($file = readdir($dirHandle)) 
		{

			if($file==$data)
			{
				unlink($dir.'/'.$file);
			}
		}
        $this->db->where('Product_id',$id); 
		$this->db->delete('product_master');    	
	}
	public function getdataedit($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('Product_master')->row();
	}
	public function updatedata()
	{
		$id=$this->input->post('pid');
		$cname=$this->input->post('categery');
		$csname=$this->input->post('subcategery');
		$brandid=$this->input->post('brandid');
		$pname=$this->input->post('pname');
		$price=$this->input->post('price');
		$disco=$this->input->post('dics');
		$perc=$this->input->post('per');
		$disc=$this->input->post('dis');
		$stock=$this->input->post('stock');
		$config['upload_path']='./images/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='3000';
		$config['max_width']='1500';
		$config['max_height']='900';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		
		$this->db->where('Product_id',$id);
		$ftc=$this->db->get('product_master')->row();
 		$data=$ftc->image;
		$dir = "./images/";
		$dirHandle = opendir($dir);
		while ($file = readdir($dirHandle)) 
		{

			if($file==$data)
			{
				unlink($dir.'/'.$file);
			}
		}
		if(!$this->upload->do_upload('file'))
		{
			$file['errors']=$this->upload->display_errors();
			print_r($file['errors']);
			die();
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$update=array(
								"categery_id"=>$cname,
								"s_id"=>$csname,
								"brand_id"=>$brandid,
								"product_name"=>$pname,
								"product_price"=>$price,
								"product_discount"=>$disco,
								"product_peateched "=>$perc,
								"product_description"=>$disc,
								"stock"=>$stock,
								"image"=>$data['upload_data']['file_name']
							);
							$this->db->where('product_id',$id);
							$this->db->update('product_master',$update);
		}
	}
	public function statas($id)
	{
		$this->db->where('product_id',$id);
		$row=$this->db->get('product_master')->row();
		$current=$row->status;
		
		if($current=="Active")
		{
			$change="Deactive";
			$id=$this->uri->segment(3);
			$update=array("status"=>$change);
			//print_r($update);
			//die();
			$this->db->where('product_id',$id);
			$this->db->update('product_master',$update);
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("status"=>$change);
			//print_r($update);
			//die();
			$this->db->where('product_id',$id);
			$this->db->update('product_master',$update);
		}
	}			
}
?>