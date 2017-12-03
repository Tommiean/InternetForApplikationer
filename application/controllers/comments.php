<?php
class comments extends CI_Controller{
    public function create(){
        $page = $this->input->post('page');
        $this->form_validation->set_rules('body', 'Comment', 'required');
        $data['comments'] = $this->Comment_model->get_comments();
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }else{
            $this->Comment_model->create_comment($page);
            $this->session->set_flashdata('comment_posted', 'Your comment has been posted!');
            redirect($page);
        }
    }
    public function delete($id){
        $page = $this->input->post('page');
        $this->Comment_model->delete_comment($id);
        $this->session->set_flashdata('comment_deleted', 'Your comment has been deleted!');
        redirect($page);
    }
}