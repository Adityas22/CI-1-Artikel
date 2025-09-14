<?php

// IntelliSense akan tahu $this->input dan $this->Blog_model itu valid. 
// ga pakai tetap jalan cuma extension vscode mendeteksi belum deklarasi
/**
 * @property CI_Input $input
 * //config autoload
* @property CI_DB $db 
 * @property Blog_model $Blog_model 
 * //config autoload
* @property CI_Pagination $pagination 
 * @property CI_Upload $upload
 *  //conig autoload
 * @property CI_FormValidation form_validation
 * @property CI_Session session
 */

class Blog extends CI_Controller{

    public function __construct()
    {
         parent::__construct();
         $this->load->model('Blog_model');
         $this->load->library('session');

        //  pindah ke auload karena dipakai menerus db
        //  $this->load->database();

         //  comment karena udah ditambahin di config autoload
        //   $this->load->helper('url'); //diatur pada config config.php
        //  $this->load->helper('form'); //autoload.php
    }
    public function index ($page = 0)
    {
        // mengatur pagenation diatur id system pagenation baris 256 pada if 
        // $page = ($page === null) ? 0 : $page; // pastikan $page bukan nul

         // load library pagination
        $this->load->library('pagination');

        // akses db 
        // $query = $this->db->query("SELECT * FROM blog");
        // $data['blogs']= $query->result_array();

        $perPage = 3; // jumlah artikel per halaman
        $total = $this->Blog_model->countAllBlog();

        $data['blogs'] = $this->Blog_model->getBlogPaginated($perPage, $page);
        
        // link pagination manual
        $config['base_url'] = site_url('blog/index');
        $config['total_rows'] = $total;
        $config['per_page'] = $perPage;
        $this->pagination->initialize($config);


        $data['pagination'] = $this->pagination->create_links();

        // akses db dari CI
        // $query = $this->Blog_model->getBlog();
        // $data['blogs']= $query->result_array(); 

        $this->load->view('article', $data);
    }
    
    public function detail($id)
    {
        $data['blog'] = $this->Blog_model->getBlogID($id);
        if (!$data['blog']) {
            // Jika tidak ada data, tampilkan pesan atau redirect
            show_404();
        }
        $this->load->view('view', $data);

    }

    public function addForm()
    {
        if($this->input->post())
        {
            // $this->form_validation->set_rules('title', 'Judul', 'required');
            $this->form_validation->set_rules('title', 'Judul', 'required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('content', 'Konten', 'required|min_length[10]|max_length[200]');
            // $this->form_validation->set_rules('cover', 'cover', 'callback_file_check');

            if ($this->form_validation->run()===TRUE) {
                $data['title'] = $this->input->post('title');
                $data['content'] = $this->input->post('content'); 

                  // cek file cover dulu
                if (empty($_FILES['cover']['name'])) {
                    $this->session->set_flashdata("message", "Cover wajib diupload");
                    redirect('/blog/addForm'); // balik ke form
                }

                
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('cover'))
                {
                    echo $this->upload->display_errors();

                }
                else
                {
                    $data['cover'] =  $this->upload->data()['file_name'];
                }
                $id = $this->Blog_model->insertBlog( $data);
                if ($id) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil disimpan</div>');
                    redirect('/blog/index/');
                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning">Data gagal disimpan</div>');
                    redirect('/blog/addForm');
                }
                
            }
        }
        $this->load->view('form_add');
    }

    public function updateForm($id)
    {
  		$data['blog']=$this->Blog_model->getSingleBlog('id',$id);
		if($this->input->post())
		{
			$post['title']	=$this->input->post('title');
            $post['content']=$this->input->post('content');
            
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            
            $this->upload->do_upload('cover');

             if(!empty($this->upload->data('file_name')))
            {
                $post['cover'] =  $this->upload->data()['file_name'];
            }
            // else
            // {
            //     echo $this->upload->display_errors();
            // }
            
			$id	=$this->Blog_model->updateBlog($id,$post);
			if($id){
                $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil disimpan</div>');
                redirect('/blog/index/');
            }
			else{
               $this->session->set_flashdata('message', '<div class="alert alert-warning">Data gagal disimpan</div>');
               redirect('/blog/updateForm');
            }
		}
		$this->load->view('form_edit',$data);
    }

    public function delete($id)
    {
        // ambil page dari query string
        $page = $this->input->get('page') ?? 0; // default 0 kalau null
        $result	= $this->Blog_model->deleteBlog($id); 
		if($result)
		{
		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil dihapus</div>');
		}
		else
		{
		$this->session->set_flashdata('message', '<div class="alert alert-warning">Data gagal dihapus</div>');
		}

        redirect('/blog/index/');
    }

    public function search()
    {
        $filter = $this->input->get('find');
        $data['blogs'] = $this->Blog_model->searchBlog($filter);
        $data['pagination'] = '';
        $this->load->view('article', $data);
        
    }

    
    public function profile()
    {
       
        $this->load->view('aboutMe');
    }

    function login()
    {
        if($this->input->post())
        {
            $username	= $this->input->post('username');
            $password	= $this->input->post('password');
            if($username=='admin' && $password=='admin')
            {
                $_SESSION['username']='admin';
                $this->session->set_flashdata('message','<div class="alert alert-warning">Selamat Datang!</div>');
                redirect('/');
            }
            else
            {
                $this->session->set_flashdata('message','<div class="alert alert-success">Username atau Password Anda tidak valid!</div>');
                redirect('blog/login');
            }
        }
        $this->load->view('login'); 
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('blog/login');
    }
}
?>