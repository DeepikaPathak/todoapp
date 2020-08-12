<?php
class Loginmodel extends CI_model{
	public function isvalidate($email,$password){
		$q = $this->db->where(['email'=>$email, 'password'=>$password])
		              ->get('users');
		if($q->num_rows())
		{
			return $q->row()->id;
		}
		else
		{
			return false;
		}
	}

	public function articleList($limit,$offset){
		
		$id = $this->session->userdata('id');
		$q = $this->db->select()
				->from('todos')
				->where(['user_id'=>$id])
				->limit($limit,$offset)
				->get();
		return $q->result();

	}

	public function num_rows(){
		$id = $this->session->userdata('id');
		$q = $this->db->select()
				->from('todos')
				->where(['user_id'=>$id])
				->get();


		return $q->num_rows();

	}
	public function find_des($todoid){
		$q = $this->db->select(['id','todo','description'])
						->where('id',$todoid)
						->get('todos');
		return $q->row();
	}

	public function add_todo($array){
		return $this->db->insert('todos',$array);

	}

	public function add_user($name,$email,$mobile,$dob,$pincode,$password){
		$array=['name'=>$name,'email'=>$email,'mobile'=>$mobile,'dob'=>$dob,'pincode'=>$pincode,'password'=>$password];
		
		return $this->db->insert('users',$array);
	}

	public function update_todo($id, $post)
	{
		return $this->db->where('id',$id)
					->update('todos',$post);
	}

	public function del_todo($id){
		return $this->db->delete('todos',['id'=>$id]);
	}
}


?>
