<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurPrivacyPolicy extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index(){
		$this->load->model('Contactinfo');
		$this->load->model('Footerinfo');
		$this->load->model('Privacypolicy');
		$data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
		$data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);
		$data['privacy_policy'] = html_entity_decode(json_decode(json_encode($this->Privacypolicy->get()), true));
		$this->load->view('common/common_header',$data);
		$this->load->view('Privacypolicy/index',$data);
		$this->load->view('common/common_footer',$data);
	}


}