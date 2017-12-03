<?php
class Comment_model extends CI_Model{
    public function __construct(){
        $this->load->Database();
    }
    public function get_comments($slug = FALSE){
        if($slug === FALSE){
            $query = $this->db->get('comments');
            return $query->result_array();
        }
        $query = $this->db->get_where('comments', array('slug' => $slug));
        return $query->row_array();
    }
     public function create_comment($page){
        $comment = htmlspecialchars($this->input->post('body'));
        $data = array(
            'username' => $this->session->userdata('username'),
            'comment' => $comment,
            'page' => $page
        );
        return $this->db->insert('comments', $data);
    }
    public function delete_comment($id){
        $comment_query = $this->db->query("SELECT * FROM comments WHERE id = '$id'");
        if($comment_query->row(0)->username == $this->session->userdata('username')){
            $this->db->query("DELETE FROM comments WHERE id = '$id'");
            return true;
        }else{
            die('You cant delete other users comments!');
        }
    }
}
