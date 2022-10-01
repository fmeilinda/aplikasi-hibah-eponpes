<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assatidz extends CI_Controller
{

    private $folder = "assatidz/";
    private $foldertemplate = "template/";

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('M_user', 'M_assatidz'));
        belum_login();
        //array berhubungan dengan database, array di sini untuk meload lebih dari satu model
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = array(
            'data' => $this->M_assatidz->GetAll()->result_array(),
            'judul' => 'Data assatidz',
        ); //u can use library array
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Tambah Data',
            'user' => $this->M_user->GetAll(),
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
    }

    public function save()
    {
        $data = array( //fungsi array disini adalah untuk mengumpulkan data
            'nik_assatidz' => $this->input->post('nik_assatidz'),
            'nama_assatidz' => $this->input->post('nama_assatidz'),
            'jk_assatidz' => $this->input->post('jk_assatidz'),
            'tempat_lahir_assatidz' => $this->input->post('tempat_lahir_assatidz'),
            'tgl_lahir_assatidz' => $this->input->post('tgl_lahir_assatidz'),
            'mulai_kerja' => $this->input->post('mulai_kerja'),
            'telp_assatidz' => $this->input->post('telp_assatidz'),
            // 'jabatan' => $this->input->post('jabatan'),
            'gol_assatidz' => $this->input->post('gol_assatidz'),
            'pendidikan' => $this->input->post('pendidikan'),
            'id_user' => $this->fungsi->user_login()->id_user,
        );
        if ($this->M_assatidz->cek_id($this->input->post('id_assatidz'))->num_rows() > 0) {
            $this->session->set_flashdata('error', "ID <b>$data[id_assatidz]</b> sudah dipakai assatidz lain, silahkan ganti dengan yang berbeda");
            redirect('assatidz/tambah', 'refresh');
        } else {
            $this->M_assatidz->save($data);
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('assatidz', 'refresh');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_assatidz->GetById($id), //menampilkan data assatidz dari model berdasarkan id
            'judul' => 'Edit Data',
            'user' => $this->M_user->GetAll(),
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
    }

    public function detail()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_assatidz->GetById($id), //menampilkan data assatidz dari model berdasarkan id
            'judul' => 'Detail Data',
            'user' => $this->M_user->GetAll(),
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
    }

    public function update()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'nik_assatidz' => $this->input->post('nik_assatidz'),
            'nama_assatidz' => $this->input->post('nama_assatidz'),
            'jk_assatidz' => $this->input->post('jk_assatidz'),
            'tempat_lahir_assatidz' => $this->input->post('tempat_lahir_assatidz'),
            'tgl_lahir_assatidz' => $this->input->post('tgl_lahir_assatidz'),
            'mulai_kerja' => $this->input->post('mulai_kerja'),
            'telp_assatidz' => $this->input->post('telp_assatidz'),
            // 'jabatan' => $this->input->post('jabatan'),
            'gol_assatidz' => $this->input->post('gol_assatidz'),
            'pendidikan' => $this->input->post('pendidikan'),
            'id_user' => $this->fungsi->user_login()->id_user,
        );
        $this->M_assatidz->update($id, $data);
        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('assatidz', 'refresh');
    }

    public function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->M_assatidz->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('assatidz', 'refresh');
    }
}
