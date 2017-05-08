<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('insert_model');

    }


    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function add()
    {


        $this->form_validation->set_rules('pname', 'pname', 'required');
        $this->form_validation->set_rules('rnum', 'rnum', 'required');
        $this->form_validation->set_rules('qty', 'qty', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');

        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('welcome_message');

        }

        else
        {


            $data2 = array(
                'pname' => $this->input->post('pname'),
                'description' => $this->input->post('description'),
                'qty' => $this->input->post('qty'),
                'price' => $this->input->post('price'),
                'date' => date('Y/m/d'),
                'rnum' => $this->input->post('rnum'),
            );
            $this->insert_model->form_insert($data2);
            $this->session->set_flashdata('msg','Data Inserted Successfully');
            $this->session->flashdata('msg');
            redirect("Welcome/index");


        }

    }

    public function view()
    {

        $data["fetch_data"] = $this->insert_model->fetch_data();
        $this->load->view("pview", $data);
    }

    public function one_edit($id)
    {
        if ($id > 0)
        {
        $data["fetch_data"] = $this->insert_model->fetch_pdata($id);
        $this->load->view("pdedit", ['data' => $data]);
        }
        else
        {
            $this->load->view('welcome_message');
        }

    }

    public function update()
    {
        $id = $this->input->post('pid');
        $data3 = array(
//
            'pname' => $this->input->post('pname'),
            'description' => $this->input->post('description'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'rnum' => $this->input->post('rnum'),
        );
        $this->insert_model->form_update($data3, $id);
        $this->session->set_flashdata('msg','Data Updated Successfully');
        $this->session->flashdata('msg');
        redirect("Welcome/view");


    }

    public function addsale()
    {

        if ($this->input->post())
        {

            $i = 0;
            $data = array();

            foreach($this->input->post() as $d){

                $data[] = array(
                               'proname' => $this->input->post('pname[]')[$i],
                                'quantity' => $this->input->post('qty[]')[$i],
                            );

                $i++;

            }
//            echo $i;
            echo '<pre>';
                print_r( $data);
            echo '</pre>';

        }


        $this->load->view('addsale');
    }


    public function suggest()
    {
        $json = [];

        $this->load->database();
        $data = array();

        if(!empty($this->input->get("q"))){
            $this->db->like('pname', $this->input->get("q"));
            $query = $this->db->select('pid,pname as text')
                ->limit(10)
                ->get("product");

            while($row = mysqli_fetch_assoc($query))
            {
                $data [] = $row ["pname"];
            }

        }


        echo json_encode($data);
    }



}
