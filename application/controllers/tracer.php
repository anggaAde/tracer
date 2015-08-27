<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tracer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	function index()
	{
		$this->form_validation->set_rules('nama','nama','trim|required|xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('angkatan','angkatan','required');
		$this->form_validation->set_rules('prodi','prodi','required');
		$this->form_validation->set_rules('lulus','lulus','required');
		$this->form_validation->set_rules('alamat','alamat','trim|required|xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('telp','telp','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('kantor','kantor','trim|xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('alamatkantor','alamatkantor','trim|xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('kantor2','kantor2','trim|xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('alamatkantor2','alamatkantor2','trim|xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('bekerja','bekerja','required');

		$this->form_validation->set_error_delimiters('<form id="error_message">','</form>');
		$this->form_validation->set_message('required','harap mengisi kolom %s');

		if($this->form_validation->run()==false)
		{
			$this->load->view('form1');
		}
		else
		{
			//echo 'AAAaaaaaaRGH....!';
			$form_data = array
			(
				'nama' => set_value('nama'),
				'gender' => set_value('gender'),
				'angkatan' => set_value('angkatan'),
				'prodi' => set_value('prodi'),
				'lulus' => set_value('lulus'),
				'alamat' => set_value('alamat'),
				'telp' => set_value('telp'),
				'email' => set_value('email'),
				'kantor' => set_value('kantor'),
				'alamatkantor' => set_value('alamatkantor'),
				'kantor2' => set_value('kantor2'),
				'alamatkantor2' => set_value('alamatkantor2'),
				'bekerja' => set_value('bekerja')
			);
			if($form_data['bekerja']==1)
			{
				$this->db->insert('dataalumni',$form_data);
				//$sesi = array('nama'=>'1','angkatan'=>'2','prodi'=>'3');
				$sesi = array('nama'=>$form_data['nama'],'angkatan'=>$form_data['angkatan'],'prodi'=>$form_data['prodi']);
				$this->session->set_userdata($sesi);
				$this->load->view('form2');
			}
			if($form_data['bekerja']==2)
			{
				$this->db->insert('dataalumni',$form_data);
				//$sesi = array('nama'=>'1','angkatan'=>'2','prodi'=>'3');
				$sesi = array('nama'=>$form_data['nama'],'angkatan'=>$form_data['angkatan'],'prodi'=>$form_data['prodi']);
				$this->session->set_userdata($sesi);
				$this->load->view('form4');
			}
		}
	}
	function insform2()
	{
		$nama = $this->session->userdata('nama');
		$angkatan = $this->session->userdata('angkatan');
		$prodi = $this->session->userdata('prodi');

		$this->form_validation->set_rules('jabatan','jabatan');
		$this->form_validation->set_rules('opsijabatan','opsijabatan');
		$this->form_validation->set_rules('bidang','bidang');
		$this->form_validation->set_rules('opsibidang','opsibidang');
		$this->form_validation->set_rules('wirausaha','wirausaha');
		$this->form_validation->set_rules('opsiwirausaha1','opsiwirausaha1');
		$this->form_validation->set_rules('opsiwirausaha','opsiwirausaha');
		$this->form_validation->set_rules('gaji','gaji');
		$this->form_validation->set_rules('opsigaji','opsigaji');
		$this->form_validation->set_rules('status','status');
		$this->form_validation->set_rules('opsistatus','opsistatus');
		$this->form_validation->set_rules('opsistatus2','opsistatus2');
		$this->form_validation->set_rules('opsistatus3','opsistatus3');
		$this->form_validation->set_rules('opsistatus4','opsistatus4');
		$this->form_validation->set_rules('proses','proses');
		$this->form_validation->set_rules('opsiproses','opsiproses');
		$this->form_validation->set_rules('sesuai','sesuai');
		$this->form_validation->set_rules('relevan','relevan');
		$this->form_validation->set_rules('tunggu','tunggu');

		/*$this->form_validation->set_rules('jabatan','jabatan','callback_alpha_dash_space');
		$this->form_validation->set_rules('opsijabatan','opsijabatan','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('bidang','bidang','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('opsibidang','opsibidang','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('wirausaha','wirausaha','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('opsiwirausaha1','opsiwirausaha1','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('gaji','gaji','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('opsigaji','opsigaji','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('status','status','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('opsistatus','opsistatus','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('opsistatus2','opsistatus2','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('opsistatus3','opsistatus3','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('opsistatus4','opsistatus4','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('proses','proses','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('opsiproses','opsiproses','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('sesuai','sesuai','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('relevan','relevan','xss_clean|callback_alpha_dash_space');
		$this->form_validation->set_rules('tunggu','tunggu','xss_clean|callback_alpha_dash_space');*/

		if($this->form_validation->run()==false)
		{
			$this->load->view('form2');
		}
		else
		{
			//echo 'AAAaaaaaaRGH....!';

			if($this->input->post('jabatan')=='9')
			{
				$jabatan = $this->input->post('opsijabatan');
			}
			else if($this->input->post('jabatan')!='9')
			{
				$jabatan = $this->input->post('jabatan');
			}

			if($this->input->post('bidang')=='21')
			{
				$bidang = $this->input->post('opsibidang');
			}
			if($this->input->post('bidang')!='21')
			{
				$bidang = $this->input->post('bidang');
			}

			if($this->input->post('opsiwirausaha1')=='21')
			{
				$opsiwirausaha1=$this->input->post('opsiwirausaha');
			}
			if($this->input->post('opsiwirausaha1')!='21')
			{
				$opsiwirausaha1=$this->input->post('opsiwirausaha1');
			}

			if($this->input->post('gaji')=='7')
			{
				$gaji = $this->input->post('opsigaji');
			}
			if($this->input->post('gaji')!='7')
			{
				$gaji = $this->input->post('gaji');
			}

			if($this->input->post('status')=='10')
			{
				$status = $this->input->post('opsistatus');
				$status2 = $this->input->post('opsistatus2');
			}
			if($this->input->post('status')!='10')
			{
				$status = $this->input->post('status');
			}

			if($this->input->post('proses')=='6')
			{
				$proses = $this->input->post('opsiproses');
			}
			if($this->input->post('proses')!='6')
			{
				$proses = $this->input->post('proses');
			}

			$form2_data = array
			(
				'jabatan' => $jabatan,
				'bidang' => $bidang,
				'wirausaha' => set_value('wirausaha'),
				'opsiwirausaha1' => set_value('opsiwirausaha1'),
				'gaji' => $gaji,
				'status' => $status,
				'status2' => set_value('opsistatus2'),
				'status3' => set_value('opsistatus3'),
				'status4' => set_value('opsistatus4'),
				'proses' => $proses,
				'sesuai' => set_value('sesuai'),
				'relevan' => set_value('relevan'),
				'tunggu' => set_value('tunggu')
			);

				$this->db->where('nama',$nama);
				$this->db->where('angkatan',$angkatan);
				$this->db->where('prodi',$prodi);
				$this->db->update('dataalumni',$form2_data);
				$this->load->view('form5');
		}
	}
	function insform3()
	{
		$this->load->view('formsuccess');
		echo $this->session->userdata('nama');
	}
	function alpha_dash_space($str)
	{
	    return ( ! preg_match("/^([-a-zA-Z0-9_'. ])+$/i", $str)) ? FALSE : TRUE;
	} 
}