<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Model
{
	
        public function checkauth($email,$password)
        {
            $this->db->select();
            $this->db->from('admin');
            $this->db->where('username',$email);
            $this->db->where('password',($password));
            
            $result = $this->db->get();
            
            return $result->result_array();
        }
	
	public function checkemail($email)
	{
		$this->db->select();
		$this->db->from('admin');
		$this->db->where('email',$email);
		
		$result=$this->db->get();
		return $result->result_array();
	}
	
	public function checkoldpass($oldpass,$admin_id)
	{
		$this->db->select();
		$this->db->from('admin');
		$this->db->where('password',$oldpass);
		$this->db->where('admin_id',$admin_id);
		
		$result=$this->db->get();
		return $result->result_array();
	}
	
	public function updateadmindata($updateadmindata,$admin_id)
	{
		$this->db->where('admin_id',$admin_id);
		$this->db->update('admin', $updateadmindata);
	}
	
	public function changepass($updateadmindata,$admin_id)
	{
		$this->db->where('admin_id',$admin_id);
		$this->db->update('admin', $updateadmindata);
	}
	
	public function checkvc($admin_id,$vc)
	{
		$this->db->select();
		$this->db->from('admin');
		$this->db->where('admin_id',$admin_id);
		$this->db->where('verification_code',$vc);
		
		$result = $this->db->get();
		
		return $result->result_array();
	}
	
	public function getbookdata($book_id)
	{
		$this->db->select();
		$this->db->from('book');
		$this->db->where('book_id',$book_id);
		
		$result = $this->db->get();
		
		return $result->result_array();
	}
	
	public function uploadfile($image_data)
	{
		$imageName = base_convert(str_replace(' ', '', microtime()) . rand(), 10, 36) .".jpg";
            
	    $filename = "upload/".$imageName;
            if (!file_exists($filename)) {
                    fopen($filename,'w');
            }
            chmod($filename,0777);
           
            file_put_contents($filename, $image_data);
            
        
            //file_put_contents("uploads/".$filename,$imageData);
            return $imageName;
	}
	
	public function uploadpdffile($image_data)
	{
	
	  
		$imageName = base_convert(str_replace(' ', '', microtime()) . rand(), 10, 36) .".pdf";
            
	    $filename = "uploadpdf/".$imageName;
            if (!file_exists($filename)) {
                    fopen($filename,'w');
            }
            chmod($filename,0777);
           
            file_put_contents($filename, $image_data);
            
            //file_put_contents("uploads/".$filename,$imageData);
		
            return $imageName;
	}
	
	public function updatebookdata($updatedata,$book_id)
	{
		$this->db->where('book_id',$book_id);
		$this->db->update('book', $updatedata);
		return $this->db->affected_rows();
	}
	
	public function updateuserdata($updatedata,$user_id)
	{
		$this->db->where('user_id',$user_id);
		$this->db->update('user', $updatedata);
		return $this->db->affected_rows();
	}
	
	public function updatecatdata($updatedata,$cat_id)
	{
		$this->db->where('category_id',$cat_id);
		$this->db->update('bookcategory', $updatedata);
		return $this->db->affected_rows();
	}
	
	public function adduserdata($updateuserdata)
	{
		$this->db->insert('user',$updateuserdata);
		
	}
	
		public function addbookcategory($updateuserdata)
	{
		$this->db->insert('bookcategory',$updateuserdata);
		
	}

	public function getuserdata($user_id)
	{
		$this->db->select();
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		
		$result = $this->db->get();
		
		return $result->result_array();
	}
	
	public function getuserdatabyemail($email)
	{
		$this->db->select();
		$this->db->from('user');
		$this->db->where('e-mail',$email);
		$result = $this->db->get();
		
		return $result->result_array();
	}
	
	
	public function loadbookhistory($user_id)
	{
		$this->db->select();
		$this->db->from('book history');
		$this->db->where('book_id',$user_id);
		
		$result = $this->db->get();
		
		return $result->result_array();
	}
	
	public function categorydb($category_id)
	{
		$this->db->select();
		$this->db->from('bookcategory');
		$this->db->where('category_id',$category_id);
		
		$result = $this->db->get();
		
		return $result->result_array();
	}

	public function checkcategory($categoryname)
	{
		$this->db->select();
		$this->db->from('bookcategory');
		$this->db->where('categoryname',$categoryname);
		
		$result = $this->db->get();
		
		return $result->result_array();
	
	}
	public function getcontactmail($con_id)
	{
		$this->db->select();
		$this->db->from('contactus');
		$this->db->where('contact_id',$con_id);
		
		$result = $this->db->get();
		
		return $result->result_array();
	}
	
	public function updatecontactmail($updatedata ,$con_id)
	{
		$this->db->where('contact_id',$con_id);
		$this->db->update('contactus', $updatedata);
		return $this->db->affected_rows();
	}

	public function deleteunneccessaryimages()
	{
		$this->db->select();
		$this->db->from('book');
		$result = $this->db->get();
		
		$result= $result->result_array();
		$k=0;
		for($i=0;$i<count($result);$i++)
		{
			if(isset($result[$i]['image1']) && $result[$i]['image1'] !='')
			{
				$dbimage[$k]=$result[$i]['image1'];
				$k++;
			}
			if(isset($result[$i]['image2']) && $result[$i]['image2'] !='')
			{
				$dbimage[$k]=$result[$i]['image2'];
				$k++;
			}if(isset($result[$i]['image3']) && $result[$i]['image3'] !='')
			{
				$dbimage[$k]=$result[$i]['image3'];
				$k++;
			}if(isset($result[$i]['image4']) && $result[$i]['image4'] !='')
			{
				$dbimage[$k]=$result[$i]['image4'];
				$k++;
			}
			
		}

		$dr='C:\xampp\htdocs\oldbook\upload';
		$i=0;
		if(is_dir($dr))
		{
			if($dh=opendir($dr))
			{
				while($file=readdir($dh))
				{
					$uploadedimages[$i]=$file;
					$i++;
				}
				closedir($dh);
			}
		}
	
		for($i=0;$i<count($dbimage);$i++)
		{
			if(isset($uploadedimages[$i]))
			{
				if(in_array($uploadedimages[$i],$dbimage)==false)
				{
					
							if(strpos($uploadedimages[$i],'.jpg')==true)
							{
								unlink($dr.'/'.$uploadedimages[$i]);
							}
				}
			}
			
			
		}
		
	}
}
?>