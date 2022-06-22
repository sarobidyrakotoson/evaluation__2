<?php


class Utilisateur extends CI_Model {

    public function login($email,$mdp) {
        $request = " SELECT * from administrateur where email = '%s' and mdp = '%s' ";
        $request = sprintf($request, $email,$mdp);
        $query = $this->db->query($request);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        if(count($utilisateur)==0) return null;
        return $utilisateur[0];
    }

}

?>