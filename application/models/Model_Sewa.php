<?php
class Model_Sewa extends CI_Model
{

  public $durasi, $hargaperhari, $totalharga;

  public function kali($jml = null, $hrg = null)
  {
    $this->durasi = $jml;
    $this->hargaperhari = $hrg;
    $this->totalharga = $this->hargaperhari * $this->durasi;
    return $this->totalharga;
  }
	public function getAllPost(){
		// $post =[];
		// foreach ($_POST as $p) {
		// 	$post[] = $p;
		// }
		return $this->input->post();
	}
}
