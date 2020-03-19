<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {

    public function index()
    {
		$this->load->view('index');
		
        
    }
     
    function register()
    {
		$data['eror']=false;
		$data['register']=false;
        //cek apakah ada tombol btnKirim
        if($this->input->post('btnKirim')){
            $paket = $this->input->post();
            //memanggil library form vallidation
			$this->load->library('form_validation');
            //buat aturan terhadap form input
			$config = array(
						   array(
								 'field'   => 'no_id', //nama elemen form
								 'label'   => 'No Identitas', //keterangan form
								 'rules'   => 'required|min_length[7]|integer' //harus di isi,minimal 10 angka,integer
							  ),
						   array(
								 'field'   => 'nama',
								 'label'   => 'Nama lengkap',
								 'rules'   => 'required'
							  ),
						   array(
								 'field'   => 'alamat',
								 'label'   => 'Alamat lengkap',
								 'rules'   => 'required|min_length[10]'
							  ),   
						   array(
								 'field'   => 'email',
								 'label'   => 'Email',
								 'rules'   => 'required|trim|valid_email'
							  )
                        );
			//cek jika form validationnya tidak menemukan kesalahan
			$this->form_validation->set_rules($config); 
            if($this->form_validation->run()!==false){
				$this->load->model('webmodel');
				$data['register']=$this->webmodel->proses_register($paket);
			}
			else{
				$data['eror']=true;
			}
        }
        $this->load->view('register',$data);
    }    
}