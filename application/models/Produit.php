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
        $request = "SELECT p.id as id,p.designation as nom,p.prix as prix,p.descri as descri,p.id_categorie as id_cate,ph.nom as photo,ph.extension as ext from produit as p join photo as ph on p.id_photo = ph.id order by p.id desc";
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

    public  function insertProduit($desi , $prix,$descri,$photo,$cate){
        $req = "insert into produit values(null,'%s','%s','%s','%s','%s')";
        $req = sprintf($req,$desi , $prix,$descri,$photo,$cate);
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
    
    //DATE_ADD('%s' , INTERVAL 3 MONTH))";

}

?>