<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Produit');
		$data['categorie'] = $this->Produit->categorie();
		$this->load->helper('assets');
		$this->load->view('index',$data);
		
	}

	public function ajout_page($data){
		$this->load->model('Produit');
			$data['categorie'] = $this->Produit->categorie();
			$data['produit'] = $this->Produit->produit();
			$data['nonval'] = $this->Produit->getNonValide();
			$data['unite'] = $this->Produit->unite();
			$data['recette'] = $this->Produit->recette();
			$this->load->helper('assets');
			$this->load->view('ajout',$data);
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
		$data['id'] = $this->input->post('id');
		$this->load->helper('assets');
		$this->load->view('shop',$data);
		
	}

	public function acheter_un()
	{
		$data['id']= $this->input->get('id');
		$data['nom']= $this->input->get('nom');
		$data['prix']= $this->input->get('prix');
		$data['descri']= $this->input->get('descri');
		$data['photo']= $this->input->get('photo');
		$data['ext'] = $this->input->get('ext');
		$this->load->model('Produit');
		$data['produit'] = $this->Produit->produit();
		$this->load->helper('assets');
		$this->load->view('shop-single',$data);
		
	}

	public function stocker(){
		$qte = $this->input->post('qte');
		$prod = $this->input->post('prod');
		$this->load->model('Produit');
		date_default_timezone_set("Asia/Kuwait");
		$datetime = date('Y-m-d H:i:s');
		$this->Produit->insertStock($prod,$qte,$datetime);
		$this->ajout_page(null);
	}

	public function valider(){
		$id = $this->input->post('id');
		$this->load->model('Produit');
		$this->Produit->valide($id);
		$data['categorie'] = $this->Produit->categorie();
			$data['produit'] = $this->Produit->produit();
			$data['nonval'] = $this->Produit->getNonValide();
			$this->load->helper('assets');
			$this->load->view('ajout',$data);
	}

	public function acheter_ceci()
	{
		$qt = $this->input->post('product-quanity');
		$id = $this->input->post('id');
		$submit = $this->input->post('submit');
		if( $submit == 'buy' ){
			$this->load->helper('assets');
		$this->load->view('login');
		}
		else{

		}
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

	public function recharger(){
		$this->load->model('Utilisateur');
		$this->load->model('Produit');
		$montant = $this->input->post('nb');
        $date = $this->input->post('date');
		$utilisateur = $this->session->userdata('utilisateur');
		$id = $this->Produit->getIdPortefeuille($utilisateur['id']);
		$data['portef'] = $this->Produit->getPortefeuille($utilisateur['id']);
		$this->Produit->insertEntree($id,$montant,$date);
		$this->load->helper('assets');
			$this->load->view('checkout',$data);
	}

	public function sign_out(){
		$this->session->unset_userdata('utilisateur');
        $this->load->model('Produit');
		$data['categorie'] = $this->Produit->categorie();
		$this->load->helper('assets');
		$this->load->view('index',$data);
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
			if($utilisateur['idAdmin']==1){
				$this->ajout_page(null);
			}
			else{
				$data['portef'] = $this->Produit->getPortefeuille($utilisateur['id']);
				$this->load->helper('assets');
			$this->load->view('checkout',$data);
			}
		}
		else {
			$data['texte'] = "compte invalide";
			$this->load->helper('assets');
			$this->load->view('login.php', $data);
		}
		
	}

	public function recette(){
		$this->load->model('Produit');
		$nom = $this->input->post('nom');
		$this->Produit->insertRecette($nom);
		$this->ajout_page(null);
	}

	public function ingredient(){
		$this->load->model('Produit');
		$recette = $this->input->post('recette');
		$prod = $this->input->post('prod');
		$prc = $this->input->post('prc');
		$this->Produit->insertIngredient($recette,$prod,$prc);
		$this->ajout_page(null);
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
		$cate= $this->input->post('cate');$qt = $this->input->post('quantite');$unite = $this->input->post('unite');
        //$data['sansphoto'] = $this->Produit->produitSansphoto();
        if ($this->upload->do_upload()) {
            $upload_data = $this->upload->data();
            // echo "nom du fichier = " . $upload_data['file_name'];
            $data['nomfichier'] = $upload_data['file_name'];
                $data['error'] = "Le fichier : ".$data['nomfichier']." a été bien telechargé";
				$this->Produit->insertPhoto($data['nomfichier'],$datetime);
				$photo = $this->Produit->getId($datetime);
				$this->Produit->insertProduit($desi , $prix,$descri,$photo,$cate,$qt,$unite);
        } else {
            $data['error'] = $this->upload->display_errors();
        }
		$this->ajout_page($data);
		
	}
	public function modifier(){
		$val = array();
		$a = json_decode( $_COOKIE['tab'], true );
		for($i= 0;$i<count($a);$i++){
			$val[$i] = $this->input->post('val'.$i);
		}
		for($i= 0;$i<count($a);$i++){
			$a[$i]['qte'] = $val[$i];
		}

		echo "<script>var tab =".json_encode($a)."; 
		localStorage.clear();
localStorage.setItem('pannier',JSON.stringify(tab));
document.location.reload(true);
</script>";
		$this->load->helper('assets');
		$this->load->view('panier');
	}

	public function achat(){
		$this->load->model('Produit');
		$contact = $this->input->post('contact');
		$address = $this->input->post('address');
		$val = array();
		$a = json_decode( $_COOKIE['tab'], true );
			for($i= 0;$i<count($a);$i++){
				$val[$i] = $this->input->post('val'.$i);
			}
			$somme = 0;
			for($i= 0;$i<count($a);$i++){
				$a[$i]['qte'] = $val[$i];
				$somme += ($a[$i]['qte']*$a[$i]['pu']);
			}
		$submit = $this->input->post('submit');
		if( $submit == 'modifier' ){
			echo "<script>var tab =".json_encode($a)."; 
			localStorage.clear();
			localStorage.setItem('pannier',JSON.stringify(tab));
			document.location.reload(true);
			</script>";
			$data['portef'] = $this->Produit->getPortefeuille($utilisateur['id']);
			$this->load->helper('assets');
			$this->load->view('checkout',$data);
		}
		else{
			date_default_timezone_set("Asia/Kuwait");
			$datetime = date('Y-m-d H:i:s');
			$utilisateur = $this->session->userdata('utilisateur');
			$this->Produit->insertVente($datetime,$utilisateur['id'],$contact,$address);
			$idvente = $this->Produit->getIdVente($utilisateur['id'],$datetime);
			for($i = 0;$i<count($a);$i++){
				$this->Produit->insertDetail($idvente,$a[$i]['idProduit'],$a[$i]['qte'],$a[$i]['pu']);
			}
			$data['portef'] = $this->Produit->getPortefeuille($utilisateur['id']);
			$this->Produit->insertPaiement($data['portef'],$idvente,$somme,$datetime);
			$data['nom'] = $utilisateur['nom'];
			$data['date'] = $datetime;
			$this->load->helper('url');
			$html=$this->load->view('pdf',$data, true);
			$pdfFilename = "facture.pdf";
			$this->load->library('m_pdf');
			$this->m_pdf->pdf->WriteHTML($html);
			$this->m_pdf->pdf->Output($pdfFilename, "D");
			$this->load->helper('assets');
			$this->load->view('checkout',$data);
		}
	}

}
?>