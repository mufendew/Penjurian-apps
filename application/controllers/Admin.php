<?php 
include('docxtemplate.class.php');
class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->model('M_admin');
		
	}

	function index(){
 	    if($this->session->userdata('status') != "logged in"){
 			redirect(base_url('index.php/Wakwaw'));
 		}
		else{
		    $data['admin'] = $this->M_admin->tampil_data()->result();
		    $this->load->view('V_admin',$data);
		}

	}
	function jadiword($namatimm){
		$a = explode('%20', $namatimm);
		print_r($a);
		$namatim = implode(" ", $a);
		$data = $this->M_admin->get_data_docx($namatim)->result();
		$docx = new DOCXTemplate('assets/HASILFINAL.docx');

		$docx->set("NAMA",$namatim);
		$totall = 0;
		$i=1;
		foreach ($data as $key => $value) {

			//nama juri
			$docx->set("JR$i",$value->NAMA_JURI);

			//nilai
			$docx->set("A$i",$value->KEMATANGAN/10);
			$docx->set("B$i",$value->KEUNIKAN/20);
			$docx->set("C$i",$value->ORIGINALITAS/20);
			$docx->set("D$i",$value->PASAR/5);
			$docx->set("E$i",$value->PROSES/5);
			$docx->set("F$i",$value->PENAMPILAN/10);
			$docx->set("G$i",$value->PPT/5);
			$docx->set("H$i",$value->KOMUNIKASI/15);
			$docx->set("I$i",$value->MATERI/10);

			//bobot
			$docx->set("AA$i",$value->KEMATANGAN);
			$docx->set("BB$i",$value->KEUNIKAN);
			$docx->set("CC$i",$value->ORIGINALITAS);
			$docx->set("DD$i",$value->PASAR);
			$docx->set("EE$i",$value->PROSES);
			$docx->set("FF$i",$value->PENAMPILAN);
			$docx->set("GG$i",$value->PPT);
			$docx->set("HH$i",$value->KOMUNIKASI);
			$docx->set("II$i",$value->MATERI);

			//nilai total
			$docx->set("NBTOT$i",$value->TOTAL);
			$totall += $value->TOTAL;
			
			if($i==3) break;
			$i++;
		}
		$docx->set("TOTAL",$totall);
		$docx->set("RATA",$totall/3);

		$docx->downloadAs("$namatim.docx");

	}
}