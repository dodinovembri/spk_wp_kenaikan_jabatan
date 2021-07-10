<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ResultModel', 'EmployeeModel']);
    }

	public function index()
	{
        $data['reports'] = $this->ResultModel->getWithJoin()->result();
        
        $this->load->view('templates/header');
        $this->load->view('report/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        // 
    }

    public function store()
    {
        // 
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['report'] = $this->ResultModel->getWithJoinById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('report/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $result_id = $this->ResultModel->getById($id)->row();
        $employee = $this->EmployeeModel->getById($result_id->employee_id)->row();        
        $new_position = $this->input->post('new_position');
        $status = $this->input->post('status');
        $status = $status == 4 ? $status : "1";
        
        $result_data = array(
            'status' => $status
        );

        $employee_data = array(
            'new_position' => $new_position,
            'updated_at'      => date("Y-m-d H-i-s"),
            'updated_by'      => $this->session->userdata('id')
        );

        // $old_position = array(
        //     'employee_id' => $employee->id,
        //     'position' => $employee->position,
        //     'created_at'      => date("Y-m-d H-i-s"),
        //     'created_by'      => $this->session->userdata('id')
        // );

        $this->ResultModel->update($result_data, $id);        
        $this->EmployeeModel->update($employee_data, $employee->id);        
        // $this->PositionHistoryModel->insert($old_position);

        $this->session->set_flashdata('success', "Data User berhasil diupdate!");
        return redirect(base_url('report'));
    }

    public function destroy($id)
    {
        $this->ResultModel->destroy($id);
        $this->session->set_flashdata('success', "Data Kriteria berhasil dihapus!");
        return redirect(base_url('report'));
    }

    public function pdf_export()
    {
        $reports = $this->ResultModel->getWithJoin()->result();
        // var_dump($reports);
        // die;

        $name = $this->session->userdata('name');

        $tanggal = date('d-m-Y');
 
        $pdf = new \TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(115, 0, "PT. SEMEN BATU RAJA (PERSERO) Tbk", 0, 1, 'L');
        $html = '<span style="text-align:center;"><br>KUTIPAN SURAT KEPUTUSAN <br>KENAIKAN PANGKAT/ GOLONGAN NORMAL <br>DIREKSI PT. SEMEN BATU RAJA (PERSERO) Tbk <br> KARYAWAN DAN KARYAWATI <br> DIREKSI</span>';

        $pdf->SetFont('', 'B', 10);
        $pdf->writeHTML($html, true, 0, true, true);        
        // $pdf->SetAutoPageBreak(true, 0);
 
        // Add Header
        $pdf->Ln(10);
        $pdf->SetFont('', 'B', 8);
        $pdf->Cell(10, 8, "No", 1, 0, 'C');
        $pdf->Cell(25, 8, "Tanggal Promosi", 1, 0, 'C');
        $pdf->Cell(50, 8, "Nama Pegawai", 1, 0, 'C');
        $pdf->Cell(50, 8, "Divisi", 1, 0, 'C');
        $pdf->Cell(15, 8, "Ranking", 1, 0, 'C');
        $pdf->Cell(20, 8, "Status", 1, 0, 'C');
        $pdf->Cell(25, 8, "Posisi Baru", 1, 1, 'C');
        $pdf->SetFont('', '', 8);

        foreach($reports as $k => $order) {
            $this->addRow($pdf, $k+1, $order);
        }

        $tanggal = date('d-m-Y');
        $html2 = '<span style="text-align:right;"><br><br>Ditetapkan di: Palembang <br>Pada Tanggal: '.$tanggal.' <br>An. Direksi <br>PT. SEMEN BATU RAJA (PERSERO) Tbk <br> ttd/cap <br><br> <b>'.$name.'</b> <br> Direktur Umum & SDM</span>';
        $pdf->writeHTML($html2, true, 0, true, true);     

        $pdf->Output('Laporan Order - '.$tanggal.'.pdf'); 
    }
 
    private function addRow($pdf, $no, $order) {
        $pdf->Cell(10, 8, $no, 1, 0, 'C');
        $pdf->Cell(25, 8, date('d-m-Y', strtotime($order->date_of_promotion)), 1, 0, 'C');
        $pdf->Cell(50, 8, $order->name, 1, 0, 'L');
        $pdf->Cell(50, 8, $order->division_name, 1, 0, 'L');
        $pdf->Cell(15, 8, $order->ranking, 1, 0, 'C');
        $pdf->Cell(20, 8, check_report_status($order->status), 1, 0, 'C');
        $pdf->Cell(25, 8, check_position($order->new_position), 1, 1, 'L');
    }
}