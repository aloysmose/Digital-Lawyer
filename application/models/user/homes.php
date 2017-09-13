<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class homes extends CI_Model
{
	public function getallq()
    {
            $this->db->select();
            $this->db->from('quetions');
            $this->db->where('status !=',0);
            $this->db->order_by("q_id","desc");
            $result = $this->db->get();
            return $result->result_array();
    }
    public function getallqbycatid($catid)
    {
            $this->db->select();
            $this->db->from('quetions');
	    $this->db->where('status !=',0);
            $this->db->where('category_id',$catid);
            $this->db->order_by("q_id","desc");
            $result = $this->db->get();
            return $result->result_array();
    }
	public function getansbyqid($qid)
    {
            $this->db->select();
            $this->db->from('answers');
            $this->db->where('q_id',$qid);
	    $this->db->where('status !=',0);
            $result = $this->db->get();
            return $result->result_array();
    }
	public function getalllawyers()
    {
            $this->db->select();
            $this->db->from('lawyers');
			$this->db->where('status !=',0);
			 $this->db->order_by("lawyer_id","desc");
            $result = $this->db->get();
            return $result->result_array();
    }
    public function addq($qdata)
	{
		
		$this->db->insert('quetions',$qdata);
        
	}
	public function addlawyer($qdata)
	{
		
		$this->db->insert('lawyers',$qdata);
        
	}
	 public function addfeedback($contactdata)
	{
		
		$this->db->insert('contact',$contactdata);
        
	}
	  public function addans($ansdata)
	{
		
		$this->db->insert('answers',$ansdata);
        
	}
	 public function getqbyid($qid)
	{
		
		  $this->db->select();
            $this->db->from('quetions');
            $this->db->where('q_id',$qid);
			$this->db->where('status !=',0);
            $result = $this->db->get();
            return $result->result_array();
        
	}
	public function getsimilarq($q_desc)
	{
		$this->db->select('*');
		$this->db->from('quetions');
		$this->db->like('q_desc',$q_desc);
		return $this->db->get()->result_array();
		
	}
	public function getsimilarlaw($law_desc)
	{
		$this->db->select('*');
		$this->db->from('lows');
		$this->db->like('law_name',$law_desc);
		return $this->db->get()->result_array();
		
	}
	public function getalllawcat()
	{
			$this->db->select();
            $this->db->from('low_category');
			$this->db->where('status !=',0);
            $result = $this->db->get();
            return $result->result_array();
		
	}

	 public function getalllawsbylawcatid($caat_id)
	{
		
		  $this->db->select();
            $this->db->from('lows');
            $this->db->where('category_id',$caat_id);
			$this->db->where('status !=',0);
            $result = $this->db->get();
            return $result->result_array();
        
	}
		public function insertemailtosub($data)
	{
			
		$this->db->insert('subscribers',$data);
		
	}
	 public function getlowbyid($low_id)
	{
		
		    $this->db->select();
            $this->db->from('lows');
            $this->db->where('law_id',$low_id);
			$this->db->where('status !=',0);
            $result = $this->db->get();
            return $result->result_array();
        
	}
}
?>