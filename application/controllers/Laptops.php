<?php
class Laptops extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Laptop_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
    }

    public function index() {
        $config['base_url'] = base_url('laptops/index');
        $config['total_rows'] = $this->Laptop_model->record_count();
        $config['per_page'] = 5;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['laptops'] = $this->Laptop_model->get_laptops($config['per_page'], $page);
        $data['links'] = $this->pagination->create_links();

        $this->load->view('templates/header');
        $this->load->view('laptops/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id) {
        $data['laptop'] = $this->Laptop_model->get_laptop_by_id($id);
        if (empty($data['laptop'])) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('laptops/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('brand', 'Brand', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('laptops/create');
            $this->load->view('templates/footer');
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['file_name'] = $_FILES['image']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            } else {
                $image = '';
            }

            $data = array(
                'brand' => $this->input->post('brand'),
                'model' => $this->input->post('model'),
                'price' => $this->input->post('price'),
                'image' => $image
            );

            $this->Laptop_model->add_laptop($data);
            redirect('laptops');
        }
    }

    public function edit($id) {
        $data['laptop'] = $this->Laptop_model->get_laptop_by_id($id);
        if (empty($data['laptop'])) {
            show_404();
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('brand', 'Brand', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('laptops/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'brand' => $this->input->post('brand'),
                'model' => $this->input->post('model'),
                'price' => $this->input->post('price')
            );

            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 2048;
                $config['file_name'] = $_FILES['image']['name'];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $uploadData = $this->upload->data();
                    $data['image'] = $uploadData['file_name'];
                }
            }

            $this->Laptop_model->update_laptop($id, $data);
            redirect('laptops');
        }
    }

    public function delete($id) {
        $this->Laptop_model->delete_laptop($id);
        redirect('laptops');
    }
}
