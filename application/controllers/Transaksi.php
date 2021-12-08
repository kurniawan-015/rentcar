<?php
class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Sewa');
	}
    public function index()
    {
        $this->load->view('detail_agya');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nik', 'Nomor Induk KTP','required',
        [
        'required'	=> 'Nomor Induk KTP Harus Diisi',
				'numeric'		=> 'No Harus Berupa Angka'
        ]);
        $this->form_validation->set_rules('nama', 'Nama Lengkap','required|numeric',
        [
        'required'   => 'Nama Lengkap Harus Diisi',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap','required',
        [
        'required'   => 'Alamat Harus Diisi'
        ]);
        $this->form_validation->set_rules('tlpn', 'Nomor Telepon ','required',
        [
        'required'   => 'Nomor Telepon Harus Diisi'
        ]);
				$this->form_validation->set_rules('photodiri', 'Photo Diri ','required',
				[
				'required'   => 'Photo Diri Harus Diisi'
				]);
				$this->form_validation->set_rules('photoktip', 'Photo KTP ','required',
				[
				'required'   => 'Photo KTP Harus Diisi'
				]);
				$this->form_validation->set_rules('tanggalsewa', 'Tanggal Sewa ','required',
				[
				'required'   => 'Tanggal Sewa Harus Diisi'
				]);
				$this->form_validation->set_rules('tanggalkembali', 'Tanggal Kembali ','required',
				[
				'required'   => 'Tanggal Kembali Harus Diisi'
				]);
				if ($this->form_validation->run() != true) {
            $this->load->view('detail_agya');
        } else {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $tlpn = $this->input->post('tlpn');
				$photodiri = $this->input->post('photodiri');
				$photoktp = $this->input->post('photoktp');
				$tanggalsewa = $this->input->post('tanggalsewa');
				$tanggalkembali = $this->input->post('tanggalkembali');
        $totalharga = $this->sepatu->kali($hargaperhari,$durasi);
        $data = ['nik' => $nik,'nama' => $nama,'alamat' => $alamat,'tlpn' => $tlpn,'photodiri' => $photodiri,'photoktp' => $photoktp,'tanggalsewa' => $tanggalsewa,'tanggalkembali' => $tanggalkembali,'durasi' => $durasi,'hargaperhari' => $hargaperhari,'totalharga' => $totalharga];
        $this->load->view('view-data-transaksi', $data);
    }
        }
    }

?>
