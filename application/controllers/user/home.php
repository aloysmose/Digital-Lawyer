<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Controller
{
   
    public function __construct()
    {
        header("content-type: text/html; charset=utf-8");
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
   
		$this->load->model('api/common');
	
		$this->load->helper('cookie');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('user_agent');
		$this->load->library('image_lib');
		$this->load->model('user/homes');
	
       
    }
    
    public function index()
    {
        $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        $data['title']="Digital Lawyer";
        $this->load->view('user/home',$data); 
    }


    public function legaladvices()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        $data['law_cat']=$this->homes->getalllawcat();
		
	
        for($i=0;$i<count($data['law_cat']);$i++)
        {
            $laws[$i]['lows']=$this->homes->getalllawsbylawcatid($data['law_cat'][$i]['category_id']);
			
             for($j=0;$j<count($laws[$i]['lows']);$j++)
             {
                     $data['law_cat'][$i]['lows']= $laws[$i]['lows'];
             }
        }
    
        $data['title']="Legal Advices | Digital Lawyer";
        $this->load->view('user/legaladice',$data); 
    }
    public function about()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        $data['title']="Abou us | Digital Lawyer";
        $this->load->view('user/about',$data); 
    }
    public function firefir()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        $data['title']="Add Complaint | Digital Lawyer";
        $this->load->view('user/fir',$data); 
    }
	public function rti()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        $data['title']="File RTI | Digital Lawyer";
        $this->load->view('user/rti',$data); 
    }

    public function acts()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        $data['title']="Online Acts | Digital Lawyer";
        $this->load->view('user/acts',$data); 
    }
    public function contactus()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        if( $this->input->server('REQUEST_METHOD') == 'POST')
        {
            $contactdata = $this->input->post();
//echo "<pre>";
//			print_r($contactdata);die;
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $data['errormsg'] = '';
                $this->load->view('user/home',$data);    
            }
            else
            {
                $this->homes->addfeedback($contactdata);
				$data['message'] = 'Your Message Submited.';
                $this->load->view('user/home',$data);    
				
            }
        }
      
    }
    public function qna()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        if( $this->input->server('REQUEST_METHOD') == 'POST')
        {
          
            $qdata = $this->input->post();
         
            $this->form_validation->set_rules('posted_by_name', 'Name', 'required');
            $this->form_validation->set_rules('posted_by_email', 'Email', 'required');
            $this->form_validation->set_rules('posted_by_phone', 'Mobile', 'required');
            $this->form_validation->set_rules('q_desc', 'Question', 'required');
       $this->form_validation->set_rules('category_id', 'Category', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $data['errormsg'] = '';
                $this->load->view('user/qna',$data);    
            }
            else
            {
              $qns=$this->homes->getallq();
            for($i=0;$i<count($qns);$i++)
            {
                $ans=$this->homes->getansbyqid($qns[$i]['q_id']);
                $qns[$i]['ans']=$ans[0]['ans_desc'];
                $qns[$i]['ans_name']=$ans[0]['answer_by_name'];
                $qns[$i]['ans_email']=$ans[0]['answer_by_email'];
                $qns[$i]['ans_phone']=$ans[0]['answer_by_phone'];
            }

            $data['qns']=$qns;
            $data['title'] = 'Question and Answers | Digital Lawyer';
                $this->homes->addq($qdata);
                $data['message'] = 'Your Question was added.';
                $this->load->view('user/qna',$data);   
            }
            
        }
        else
        {
            $qns=$this->homes->getallq();
            for($i=0;$i<count($qns);$i++)
            {
                $ans=$this->homes->getansbyqid($qns[$i]['q_id']);
                 for($j=0;$j<count($ans);$j++)
                 {
                    $qns[$i]['ans'][$j]=$ans[0]['ans_desc'];
                    $qns[$i]['ans_name'][$j]=$ans[0]['answer_by_name'];
                    $qns[$i]['ans_email'][$j]=$ans[0]['answer_by_email'];
                    $qns[$i]['ans_phone'][$j]=$ans[0]['answer_by_phone'];
                 }
                
            }
        //    echo "<pre>";
         //   print_r($qns);die;
            $data['qns']=$qns;
            $data['title'] = 'Question and Answers | Digital Lawyer';
            $this->load->view('user/qna',$data); 
        }
    }

    public function ansaq()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        if( $this->input->server('REQUEST_METHOD') == 'GET')
        {
          
            $qid = $this->input->get('q_id');
            $q=$this->homes->getqbyid($qid);
            $data['q_data']= $q;
       
            $data['title'] = 'Answer a Question | Digital Lawyer';
            $this->load->view('user/answer',$data); 
        }
        else   if( $this->input->server('REQUEST_METHOD') == 'POST')
        {
             $ansdata = $this->input->post();
            $this->form_validation->set_rules('answer_by_name', 'Name', 'required');
            $this->form_validation->set_rules('answer_by_email', 'Email', 'required');
            $this->form_validation->set_rules('answer_by_phone', 'Mobile', 'required');
            $this->form_validation->set_rules('ans_desc', 'Answer', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $data['errormsg'] = '';
                $this->load->view('user/ansaq?q_id='.$ansdata['q_id'],$data);    
            }
            else
            {
                   $this->homes->addans($ansdata);
                 redirect(site_url('user/home/qna'), 'refresh');
            }
               
        }
    }

    public function firedetail()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
           $data['title'] = 'FIR Details | Digital Lawyer';
            $this->load->view('user/firdetail',$data); 
    }
    public function search()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        if( $this->input->server('REQUEST_METHOD') == 'POST')
        {
          
            $q_desc = $this->input->post('search');
		
            $q_list=$this->homes->getsimilarq($q_desc);
            for($i=0;$i<count($q_list);$i++)
            {
                $ans=$this->homes->getansbyqid($q_list[$i]['q_id']);
                for($j=0;$j<count($ans);$j++)
                 {
                    $q_list[$i]['ans'][$j]=$ans[0]['ans_desc'];
                    $q_list[$i]['ans_name'][$j]=$ans[0]['answer_by_name'];
                    $q_list[$i]['ans_email'][$j]=$ans[0]['answer_by_email'];
                    $q_list[$i]['ans_phone'][$j]=$ans[0]['answer_by_phone'];
                 }
          
            }

           
            $data['q_list']=$q_list;
            $data['q_desc']= $q_desc;
            $data['title'] = $q_desc.' | Digital Lawyer';
            $this->load->view('user/searchr',$data); 
       
        }
		
		
    }
	public function signuplawyer()
	{
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
		if( $this->input->server('REQUEST_METHOD') == 'POST')
        {
          
            $postdata = $this->input->post();
			$this->form_validation->set_rules('lawyer_name', 'Lawyer Name', 'required');
            $this->form_validation->set_rules('lawyer_email', 'Lawyer Email', 'required');
            $this->form_validation->set_rules('lawyer_phone', 'Lawyer Phone number', 'required');
            $this->form_validation->set_rules('lawyer_info', 'Lawyer Info', 'required');
           	if ($this->form_validation->run() == FALSE)
            {
                $data['errormsg'] = '';
                $this->load->view('user/signuplawyer',$data);     
            }
            else
			{
				$this->homes->addlawyer($postdata);
			    $data['message'] = 'Successfully added into Lawyers List.';
$data['title'] = 'Enlist as Lawyer | Digital Lawyer';
                $this->load->view('user/signuplawyer',$data);  

			}
      

           
            
       
        }
		else
		{
			$data['title'] = 'Enlist as Lawyer | Digital Lawyer';
            $this->load->view('user/signuplawyer',$data); 
		}
	}
	
	public function hirealawyer()
	{

		if( $this->input->server('REQUEST_METHOD') == 'GET')
        {
			$lawyerdata=$this->homes->getalllawyers();
            $data['lawyers']=$lawyerdata;
           $data['title'] = 'Hire a Lawyer | Digital Lawyer';
           $this->load->view('user/lawyers',$data); 
            
       
        }
	}
	public function detailview()
	{
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
		if( $this->input->server('REQUEST_METHOD') == 'GET')
        {
		   $law_id = $this->input->get('law_id');
		   $lawdata=$this->homes->getlowbyid($law_id);
		  
           $data['lawyers']=$lawdata;
           $data['title'] = $lawdata[0]['law_name'].' | Digital Lawyer';
           $this->load->view('user/detailview',$data); 
            
       
        }
	}
	 public function searchlaw()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        if( $this->input->server('REQUEST_METHOD') == 'POST')
        {
          
            $searchdata = $this->input->post('searchlaw');
		   
            $law_list=$this->homes->getsimilarlaw($searchdata);
		
    

           
            $data['lows']=$law_list;
			$data['query']=$searchdata;
            $data['title'] =  $searchdata.' | Digital Lawyer';
            $this->load->view('user/searchlaw',$data); 
       
        }
		else
		{
			 redirect(site_url('user/home/legaladvices'), 'refresh');
		}
		
		
    }
	
	    public function getintouch()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        if( $this->input->server('REQUEST_METHOD') == 'POST')
        {
          
            $postdata = $this->input->post();
            $this->homes->insertemailtosub($postdata);
          
			 redirect(site_url(), 'refresh');
        }
		   
    }

 public function getqbycatid()
    {
 $lawcat=$this->homes->getalllawcat();
        $data['lawcat']= $lawcat;
        if( $this->input->server('REQUEST_METHOD') == 'GET')
        {
          
            $q_desc = $this->input->get('id');
		
            $q_list=$this->homes->getallqbycatid($q_desc);
for($i=0;$i<count($lawcat);$i++)
{
     if($lawcat[$i]['category_id']==$q_desc)
      {
              $data['q_desc']= $lawcat[$i]['category_name'];
               $data['title'] =  $lawcat[$i]['category_name'].' | Digital Lawyer';

      }
}

      
            for($i=0;$i<count($q_list);$i++)
            {
                $ans=$this->homes->getansbyqid($q_list[$i]['q_id']);
                for($j=0;$j<count($ans);$j++)
                 {
                    $q_list[$i]['ans'][$j]=$ans[0]['ans_desc'];
                    $q_list[$i]['ans_name'][$j]=$ans[0]['answer_by_name'];
                    $q_list[$i]['ans_email'][$j]=$ans[0]['answer_by_email'];
                    $q_list[$i]['ans_phone'][$j]=$ans[0]['answer_by_phone'];
                 }
          
            }

           
            $data['q_list']=$q_list;
      
        
            $this->load->view('user/filtercat',$data); 
       
        }
		
		
    }
	
}

?>