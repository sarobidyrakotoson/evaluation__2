<?php


class Produit extends CI_Model {

    public function categorie() {
        $request = "SELECT * from categorie";
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur;
    }

    public function produit() {
        $request = "SELECT p.id as id,p.designation as nom,p.prix as prix,p.descri as descri,p.id_categorie as id_cate,p.quantite as quantite,u.unite as unite,ph.nom as photo,ph.extension as ext from produit as p join photo as ph on p.id_photo = ph.id join unite as u on p.id_unite=u.id order by p.id desc";
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur;
    }
    public  function insertPhoto($nom,$date){
        $temp = explode('.',$nom);
        $image = $temp[0];
        $ext = end($temp);
        $req = "insert into photo values(null,'%s','%s','%s')";
        $req = sprintf($req,$image ,$ext,$date);
        $this->db->query($req);
    }

    public  function insertProduit($desi , $prix,$descri,$photo,$cate,$qt,$idunite){
        $req = "insert into produit values(null,'%s','%s','%s','%s','%s','%s','%s')";
        $req = sprintf($req,$desi,$prix,$descri,$photo,$cate,$qt,$idunite);
        $this->db->query($req);
    } 
    
    public function insertStock($prod,$qte,$date){
        $req = "insert into stock values(null,'%s','%s','%s')";
        $req = sprintf($req,$prod,$qte,$date);
        $this->db->query($req);
    }

    
    public function getId($date){
        $request = " SELECT * from photo where last_updated  = '%s'";
        $request = sprintf($request, $date);
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur[0]['id'];
    }

    public function verifier($id){

    }
    
    public function insertPortefeuille($id,$date){
        $req = "insert into portefeuille values(null,'%s','%s')";
        $req = sprintf($req,$id,$date);
        $this->db->query($req);
    }

    public function insertEntree($id,$montant,$date){
        $req = "insert into entree values(null,'%s','%s','%s',0)";
        $req = sprintf($req,$id,$montant,$date);
        $this->db->query($req);
    }

    public function getIdPortefeuille($id){
        $request = " SELECT * from portefeuille where id_client = '%s'";
        $request = sprintf($request, $id);
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur[0]['id'];
    }

    public function getPortefeuille($id){
        $request = "SELECT sum(e.valeur) as entree,sum(p.valeur),sum(e.valeur)-sum(p.valeur) as valeur from entree as e left join paiement as p on e.id_portefeuille = p.id_portefeuille where e.valide = 1 and e.id_portefeuille in (select id from portefeuille where id_client = '%s') group by e.id_portefeuille";
        $request = sprintf($request, $id);
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        if($utilisateur[0]['valeur'] == null || 0 || "")  return $utilisateur[0]['entree'];
       else  return $utilisateur[0]['valeur'];
    }
    
    public function getNonValide(){
        $request = "SELECT * from validation";
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur;
    }
    public function valide($id) {
        $req = "update entree set valide = 1 where id = '%s'";
        $req = sprintf($req, $id);
        $this->db->query($req);
    }
    
    public function insertVente($date,$utilisateur,$contact,$adress){
        $req = "insert into vente values(null,'%s','%s','%s','%s')";
        $req = sprintf($req,$date,$utilisateur,$contact,$adress);
        $this->db->query($req);
    }

    public function insertDetail($id_vente,$id_produit,$qte,$prix){
        $req = "insert into vente_detail values(null,'%s','%s','%s','%s')";
        $req = sprintf($req,$id_vente,$id_produit,$qte,$prix);
        $this->db->query($req);
    }

    public function insertPaiement($portef,$vente,$valeur,$date){
        $req = "insert into paiement values(null,'%s','%s','%s','%s')";
        $req = sprintf($req,$portef,$vente,$valeur,$date);
        $this->db->query($req);
    }

    public function getIdVente($id,$date){
        $request = " SELECT * from vente where id_utilisateur = '%s' and date_vente = '%s'";
        $request = sprintf($request, $id,$date);
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur[0]['id'];
    }
    //DATE_ADD('%s' , INTERVAL 3 MONTH))";

    public function unite(){
        $request = "SELECT * from unite";
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur;
    }

    public function recette(){
        $request = "SELECT * from recette";
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur;
    }

    public function insertRecette($nom){
        $req = "insert into recette values(null,'%s')";
        $req = sprintf($req,$nom);
        $this->db->query($req);
    }

    public function insertIngredient($idrecette,$idproduit,$prc){
        $req = "insert into ingredient values(null,'%s','%s','%s')";
        $req = sprintf($req,$idrecette,$idproduit,$prc);
        $this->db->query($req);
    }
}

?>