<?php
class Menu_lib
{
	public function send_mail($recever)
	{
		//echo $recever;
		   $config=array(
				'protocol'=>'smtp',
				'smtp_host'=>'ssl://smtp.gmail.com',
				'smtp_port'=>587,
				'smtp_user'=>'satishpatil9913@gmail.com',// here ur emailid  
				'smtp_pass'=>'9913853504', // your pass
				'mailtype'=>'html',
				'charset'=>'iso-8859-1',
				'wordwrap'=>TRUE
				);
		$CI=& get_instance();		
		$CI->load->library('email',$config);
		$CI->email->set_newline("\r\n");
		$CI->email->from("satishpatil9913@gmail.com");      // write down here your email id
		$CI->email->to($recever);
		$CI->email->subject('hello');
		$CI->email->message('Your Cupon Code Is');
		if($CI->email->send())
		{
			echo "send";
		}
		
	}
	}

?>