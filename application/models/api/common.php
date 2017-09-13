<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Common extends CI_Model
{
	public $responsedata = array();
	public $bulkdata     = array();
	
	public function send_email($from, $from_name, $to,$subject,$message)
        {
           	
		$this->load->library('email');
		
		$config['protocol']    = $this->config->item('protocol');
		$config['smtp_host']    = $this->config->item('smtp_host');
		$config['smtp_port']    = $this->config->item('smtp_port');
		$config['smtp_user']    = $this->config->item('smtp_user');
		$config['smtp_pass']    = $this->config->item('smtp_pass');
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = $this->config->item('mailtype');  // or html
		$config['validation'] = TRUE; // bool whether to validate email or not
		
		
		$this->email->initialize($config);
		$this->email->from($from, $from_name);
		$this->email->to($to);
		
		$this->email->subject($subject);

		
		$this->email->message($message);
		$this->email->send();
	}
	
	
	public function randomcode($length = 4)
	{
		$cstrong = TRUE;
		$bytes = openssl_random_pseudo_bytes($length, $cstrong);
		$hex   = bin2hex($bytes);
		
		if(!$cstrong || $bytes == FALSE)
		{
			return $this->randomPassword($length);
		}
		else
		{
			return $hex;
		}
	}
	
	/**
	 * encode string
	 *
	 * @access 	public
	 * @param string string to encode
	 * @return string
	 */

	public function encode($str)
	{
		$this->load->library('encrypt');
		$encodedstr=$this->encrypt->encode($str);
		$encodedstr=urlencode($encodedstr);
		return $encodedstr;
	}


	public function decode($str)
	{
		$this->load->library('encrypt');
		$str=$this->encrypt->decode($str);
		
		return $str;
	}

	public function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}
	
}
?>