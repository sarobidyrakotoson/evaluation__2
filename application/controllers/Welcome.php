<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Produit');
		$data['produit'] = $this->Produit->produit();
		$this->load->helper('assets');
		$this->load->view('index',$data);
		
	}

	public function about()
	{
		$this->load->helper('assets');
		$this->load->view('about');
		
	}

	public function contact()
	{
		$this->load->helper('assets');
		$this->load->view('contact');
		
	}

	public function acheter()
	{
		$this->load->model('Produit');
		$data['produit'] = $this->Produit->produit();
		$data['categorie'] = $this->Produit->categorie();
		$this->load->helper('assets');
		$this->load->view('shop',$data);
		
	}

	public function acheter_un()
	{
		$this->load->helper('assets');
		$this->load->view('shop-single');
		
	}

	public function panier()
	{
		$this->load->helper('assets');
		$this->load->view('panier');
		
	}

	public function login()
	{
		$this->load->helper('assets');
		$this->load->view('login');
		
	}

	public function se_connecter()
	{
		$this->load->model('Utilisateur');
		$this->load->model('Produit');
		$email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
		$utilisateur = $this->Utilisateur->login($email, $mdp);
		if($utilisateur != null){
			$this->session->set_userdata('utilisateur', $utilisateur);
			$data['categorie'] = $this->Produit->categorie();
			$data['produit'] = $this->Produit->produit();
			$this->load->helper('assets');
			$this->load->view('ajout',$data);
		}
		else {
			$data['texte'] = "compte invalide";
			$this->load->helper('assets');
			$this->load->view('login.php', $data);
		}
		
	}

	public function ajout()
	{
		$config = array(
            'upload_path' => "./assets/img",
            'allowed_types' => "pdf|docs|gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "10048000"    //, Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
		date_default_timezone_set("Asia/Kuwait");
		$datetime = date('Y-m-d H:i:s');
        $this->load->library('upload', $config);
		$this->load->model('Produit');
		$desi = $this->input->post('desi'); $prix= $this->input->post('prix');$descri= $this->input->post('desc');
		$cate= $this->input->post('cate');
        //$data['sansphoto'] = $this->Produit->produitSansphoto();
        if ($this->upload->do_upload()) {
            $upload_data = $this->upload->data();
            // echo "nom du fichier = " . $upload_data['file_name'];
            $data['nomfichier'] = $upload_data['file_name'];
                $data['error'] = "Le fichier : ".$data['nomfichier']." a été bien telechargé";
				$this->Produit->insertPhoto($data['nomfichier'],$datetime);
				$photo = $this->Produit->getId($datetime);
				$this->Produit->insertProduit($desi , $prix,$descri,$photo,$cate);
        } else {
            $data['error'] = $this->upload->display_errors();
        }
		$data['categorie'] = $this->Produit->categorie();
		$data['produit'] = $this->Produit->produit();
		$this->load->helper('assets');
		$this->load->view('ajout',$data);
		
	}

}
