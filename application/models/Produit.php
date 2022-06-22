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
        $request = "SELECT p.designation as nom,p.prix as prix,p.descri as descri,p.id_categorie as id_cate,ph.nom as photo,ph.extension as ext from produit as p join photo as ph on p.id_photo = ph.id order by p.id desc";
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
    
    public function getOne($utilisateur,$vehicule){
        $request = " SELECT * from trajet where utilisateur_id = '%s' and vehicule_id = '%s' order by last_updated desc";
        $request = sprintf($request, $utilisateur,$vehicule);
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur[0]['id'];
    }

    public  function insertEcheance($vehicule , $date,$type){
        $req = "insert into Echeance values(null,'%s','%s','%s',DATE_ADD('%s' , INTERVAL 3 MONTH))";
        $req = sprintf($req,$vehicule ,$date,$type,$date);
        $this->db->query($req);
    }

    public function type_echeance(){
        $request = "SELECT * from type_echeance";
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur;
    }
    public  function insertPointage($vehicule , $date,$olona){
        $req = "insert into Pointage values(null,'%s','%s','%s')";
        $req = sprintf($req,$vehicule ,$date,$olona);
        $this->db->query($req);
    }

    public function getOneByTrajet($id){
        $request = " SELECT * from trajet where id = %s";
        $request = sprintf($request, $id);
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur[0];
    }

}

?>