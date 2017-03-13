<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }
  
  public function login_user_update($data) {
	  //$query = "SELECT * FROM log_users where 'log_users.user_id' = $data['usr_id']";
	  $data1 = array( 
        'log_users.user_id' => $data['usr_id']
		);
		$this->db->insert('log_users',$data1);
	   $this->db->select('*');
	   $this->db->where('user_id', $data1['log_users.user_id']);
	   $this->db->from('log_users');
	   $query = $this->db->get();
	   
	   $row = $query->result_array();
	   //echo"<pre>";
				//print_r($row);
				//die();
	   //foreach ($query->result_array('log_users') as $row)
{
   //echo $row['title'];
   //echo $row['name'];
   //echo $row['body'];
}
	   
	  
	   
	    
	  
	   if (isset($row)) {
		   
		   //print_r($row);die();
		  // $query->result_array['num__usr_logged_in']= $query->result_array['num__usr_logged_in']+ 2;
       //print_r($row['num__usr_logged_in'])	; 
	   //die();   
		  // $data1['log_users.num__usr_logged_in'] = $query->result_array['num__usr_logged_in'];
		   //echo"<pre>";
				//print_r($data1);
				//die();
		   
	       $this->db->set('log_users',$data1);
	   
	   
	 } else  {
		// $query->result_array['num__usr_logged_in']= $query->result_array['num__usr_logged_in']+ 1; 
		// $data1['log_users.num__usr_logged_in'] = $query->result_array['num__usr_logged_in'];
		 $this->db->insert('log_users',$data1);
	 }
  }
  
  
	  
	  
  
}

/*function does_code_match($data, $email) {
	
	
	
	[
	$query = $this->db->query("SELECT * FROM log_users;");
	  
	$data1 = array( 
        'log_users.user_id' => $data['usr_id']
		);
		 
		
		
	  $result =$this->db->get('log_users',$data1);
	  //echo "<pre>"; print_r($result); die();
	 
	 $no_of_rows = $result->num_rows ;
	 
	 
	 if ($result->num_rows >0) {
		 
		 $this->db->set('log_users',$data1);
	 } else  {
		 
		 $this->db->insert('log_users',$data1);
	 }
	
	]
	
    $query = "SELECT COUNT(*) AS `count` 
                    FROM `users` 
                    WHERE `usr_pwd_change_code` = ?
                    AND `usr_email` = ? ";

    $res = $this->db->query($query, array($data['code'], $email));

    foreach ($res->result() as $row) {
      $count = $row->count;
    }

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
  } */ 