<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }

    public function list()
    {
        $data['title'] = 'List';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('List_model', 'list');

        $insert_data['datarps'] = $this->list->getList();
        $insert_data['db_add'] = $this->db->get('db_add')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/list', $insert_data);
        $this->load->view('templates/footer');
    }

    public function delete($id_data)
    {
        $this->load->model('List_model', 'list');

        // Memanggil metode deleteMateri dengan menyertakan $id_data sebagai argumen
        $this->list->deleteMatkul($id_data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Deleted Successfully!</div>');
        redirect('user/list');
    }

    public function listMateri()
    {
        $data['title'] = 'List Materi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('List_model', 'list');

        $insert_data['datarps'] = $this->list->getListMateri();
        $insert_data['db_materi'] = $this->db->get('db_materi')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/listMateri', $insert_data);
        $this->load->view('templates/footer');
    }

    public function deleteMateri($id_materi)
    {
        $this->load->model('List_model', 'list');

        // Memanggil metode deleteMateri dengan menyertakan $id_materi sebagai argumen
        $this->list->deleteMateri($id_materi);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Deleted Successfully!</div>');
        redirect('user/listMateri');
    }

    public function create()
    {
        $data['title'] = 'Create';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('List_model', 'list');

        $insert_data['datarps'] = $this->list->getCreate();
        $insert_data['db_add'] = $this->db->get('db_add')->result_array();

        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('dosen_pengampu', 'Dosen_pengampu', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama_matkul', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('bobot_sks', 'Bobot_sks', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/create', $insert_data);
            $this->load->view('templates/footer');
        } else {
            $insert_data = [
                'program_studi' => $this->input->post('program_studi'),
                'dosen_pengampu' => $this->input->post('dosen_pengampu'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'semester' => $this->input->post('semester'),
                'bobot_sks' => $this->input->post('bobot_sks'),
            ];
            $this->db->insert('db_add', $insert_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu Added!</div>');
            redirect('user/list');
        }
    }

    public function createMateri()
    {
        $data['title'] = 'Create Materi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('List_model', 'list');

        $insert_data['datarps'] = $this->list->getCreateMateri();
        $insert_data['db_materi'] = $this->db->get('db_materi')->result_array();

        $this->form_validation->set_rules('judul_materi', 'Judul_materi', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('metode', 'Metode', 'required');
        $this->form_validation->set_rules('bobot_penilaian', 'Bobot_penilaian', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/createMateri', $insert_data);
            $this->load->view('templates/footer');
        } else {
            $insert_data = [
                'judul_materi' => $this->input->post('judul_materi'),
                'indikator' => $this->input->post('indikator'),
                'metode' => $this->input->post('metode'),
                'bobot_penilaian' => $this->input->post('bobot_penilaian'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            $this->db->insert('db_materi', $insert_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu Added!</div>');
            redirect('user/listMateri');
        }
    }

    public function view()
    {
        $this->load->model('List_model', 'list');

        $insert_data['datarps'] = $this->list->getView();
        $insert_data['db_materi'] = $this->db->get('db_materi')->result_array();
        $this->load->view('user/view', $insert_data);
    }

    public function editMatkul($id_data)
    {
        $data['title'] = 'Edit Mata Kuliah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('List_model', 'list');
    
        $insert_data['datarps'] = $this->list->getEdit($id_data);
    
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        $this->form_validation->set_rules('dosen_pengampu', 'Dosen Pengampu', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('bobot_sks', 'Bobot SKS', 'required');
    
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editMatkul', $insert_data);
            $this->load->view('templates/footer');
        } else {
            $update_data = array(
                'program_studi' => $this->input->post('program_studi'),
                'dosen_pengampu' => $this->input->post('dosen_pengampu'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'semester' => $this->input->post('semester'),
                'bobot_sks' => $this->input->post('bobot_sks')
            );
    
            $this->db->where('id_data', $id_data);
            $this->db->update('db_add', $update_data);
    
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Updated Successfully!</div>');
            redirect('user/list');
        }
    }

    public function editMateri($id_materi)
    {
        $data['title'] = 'Edit Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('List_model', 'list');
    
        $insert_data['datarps'] = $this->list->getEditMateri($id_materi);
    
        $this->form_validation->set_rules('judul_materi', 'Judul_materi', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('metode', 'Metode', 'required');
        $this->form_validation->set_rules('bobot_penilaian', 'Bobot_penilaian', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editMateri', $insert_data);
            $this->load->view('templates/footer');
        } else {
            $update_materi = array(
                'judul_materi' => $this->input->post('judul_materi'),
                'indikator' => $this->input->post('indikator'),
                'metode' => $this->input->post('metode'),
                'bobot_penilaian' => $this->input->post('bobot_penilaian'),
                'deskripsi' => $this->input->post('deskripsi')
            );
    
            $this->db->where('id_materi', $id_materi);
            $this->db->update('db_materi', $update_materi);
    
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Updated Successfully!</div>');
            redirect('user/listMateri');
        }
    }

    public function tugas()
    {
        $data['title'] = 'Daftar Tugas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Tugas_model', 'tugas');

        $insert_data['tugas'] = $this->tugas->getTugas();
        $insert_data['db_tugas'] = $this->db->get('db_tugas')->result_array();

        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matkul', 'Matkul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tugas', $insert_data);
            $this->load->view('templates/footer');
        } else {
            $insert_data = [
                'kode' => $this->input->post('kode'),
                'matkul' => $this->input->post('matkul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'deadline' => $this->input->post('deadline'),
            ];
            $this->db->insert('db_tugas', $insert_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas telah ditambahkan!</div>');
            redirect('user/tugas');
        }
    }
    
    public function deleteTugas($id_tugas)
    {
        $this->load->model('Tugas_model', 'tugas');

        // Memanggil metode deletetugas dengan menyertakan $id_tugas sebagai argumen
        $this->tugas->deleteTugas($id_tugas);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Deleted Successfully!</div>');
        redirect('user/tugas');
    }

    public function mahasiswa()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Tugas_model', 'tugas');

        $insert_data['tugas'] = $this->tugas->getMahasiswa();
        $insert_data['db_mahasiswa'] = $this->db->get('db_mahasiswa')->result_array();

        $this->form_validation->set_rules('program', 'Program', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/mahasiswa', $insert_data);
            $this->load->view('templates/footer');
        } else {
            $insert_data = [
                'program' => $this->input->post('program'),
            ];
            $this->db->insert('db_mahasiswa', $insert_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu Added!</div>');
            redirect('user/mahasiswa');
        }
    }
    public function listMahasiswa()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Tugas_model', 'tugas');

        $insert_data['tugas'] = $this->tugas->getListMahasiswa();
        $insert_data['db_mahasiswa'] = $this->db->get('db_mahasiswa')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/listMahasiswa', $insert_data);
            $this->load->view('templates/footer');
        } else {
            $insert_data = [
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
            ];
            $this->db->insert('db_mahasiswa', $insert_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu Added!</div>');
            redirect('user/listMahasiswa');
        }
    }


}
