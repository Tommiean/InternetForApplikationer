<?php
class Comment_model extends CI_Model{
    public function __construct(){
        $this->load->Database();
    }
    public function showComments(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('comments');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    public function addComment(){
        $comment = htmlspecialchars($this->input->post('body'));
        $data = array(
            'username' => $this->session->userdata('username'),
            'comment' => $comment,
            'page'=>$this->input->post('page'),
        );
        $this->db->insert('comments', $data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    function delete_comment(){
        $id = $this->input->get('id');
        $comment_query = $this->db->query("SELECT * FROM comments WHERE id = '$id'");
        if($comment_query->row(0)->username == $this->session->userdata('username')){
            $this->db->query("DELETE FROM comments WHERE id = '$id'");
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
    }
}
