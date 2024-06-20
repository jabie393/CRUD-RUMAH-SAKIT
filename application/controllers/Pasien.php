<?php
class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['pasien'] = $this->Pasien_model->get_all_pasien();
        $this->load->view('templates/header', $data);
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer', $data);

    }

    public function view($id) {
        $data['pasien'] = $this->Pasien_model->get_pasien_by_id($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pasien/view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $this->Pasien_model->insert_pasien(array(
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'alamat' => $this->input->post('alamat'),
                'penyakit' => $this->input->post('penyakit')
            ));
            redirect('pasien');
        } else {
            $this->load->view('pasien/create');
        }
    }

    public function edit($id) {
        $data['pasien'] = $this->Pasien_model->get_pasien_by_id($id);

        if ($this->input->post()) {
            $this->Pasien_model->update_pasien($id, array(
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'alamat' => $this->input->post('alamat'),
                'penyakit' => $this->input->post('penyakit')
            ));
            redirect('pasien');
        } else {
            $this->load->view('pasien/edit', $data);
        }
    }

    public function delete($id) {
        $this->Pasien_model->delete_pasien($id);
        redirect('pasien');
    }
}
?>
