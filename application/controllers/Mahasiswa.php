<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Mahasiswa"); //load model mahasiswa
        $this->load->model('M_Auth');
        $this->M_Auth->cek_login();
    }

    //method pertama yang akan di eksekusi
    public function index()
    {

        $data["title"] = "List Data Mahasiswa";
        //ambil fungsi getAll untuk menampilkan semua data mahasiswa
        $data["data_mahasiswa"] = $this->M_Mahasiswa->getAll();
        //load view header.php pada folder views/templates
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        //load view index.php pada folder views/mahasiswa
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }

    //method add digunakan untuk menampilkan form tambah data mahasiswa
    public function add()
    {
        $data["title"] = "Tambah Data Mahasiswa";
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('mahasiswa/add', $data);
        $this->load->view('layouts/footer');
    }

    public function add_proses()
    {
        $Mahasiswa = $this->M_Mahasiswa; //objek model
        $Mahasiswa->save();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        redirect("mahasiswa");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('mahasiswa');

        $Mahasiswa = $this->M_Mahasiswa;
        $data["title"] = "Edit Data Mahasiswa";
        $data["data_mahasiswa"] = $Mahasiswa->getById($id);
        if (!$data["data_mahasiswa"]) show_404();
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('mahasiswa/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function edit_proses()
    {
        $Mahasiswa = $this->M_Mahasiswa;
        $Mahasiswa->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa berhasil diperbarui.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        redirect("mahasiswa");
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->M_Mahasiswa->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mahasiswa berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
}
