<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Student extends BaseController
{
    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function listStudent()
    {
        // Sending data to view file
        $data = $this->db->table("tbl_students")->get()->getResult();
        // Calling view file
        return view('list-student', [
            "students" => $data
        ]);
    }

    function generatePDF(){

        $dompdf = new \Dompdf\Dompdf(); 

        $data = $this->db->table("tbl_students")->get()->getResult();
        // Sending data to view file
        $dompdf->loadHtml(view('pdf/template-students', ["students" => $data]));
        // setting paper to portrait, also we have landscape
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        // Download pdf
        $dompdf->stream(); 
        // to give pdf file name
        // $dompdf->stream("myfile");

        return redirect()->to(base_url('list-student'));
    }

    public function index()
    {
        
    }


}
