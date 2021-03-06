<?php 
require_once "connexion.php";

class ModelTypeBien {
    public static function creationTypeBien($libelle){
        $idcon = connexion();
        $requete = $idcon -> prepare("INSERT INTO type_bien VALUES (null, :libelle)");
        $requete -> execute([":libelle"=>$libelle]);
    }
    public static function listeTypeBien(){
        $idcon = connexion();
        $requete = $idcon -> prepare("SELECT * FROM type_bien");
        $requete->execute();
        return $requete->fetchAll();
    }
    public static function modifTypeBien($id, $libelle){
        $idcon = connexion();
        $requete = $idcon -> prepare("UPDATE type_bien SET libelle = :libelle WHERE id = :id");
        $requete -> execute([":id"=>$id, ":libelle"=>$libelle]);
    }
    public static function getTypeBienById($id){
        $idcon = connexion();
        $requete = $idcon -> prepare("SELECT * FROM type_bien WHERE id = :id");
        $requete -> execute([":id" => $id]);
        $user = $requete->fetch();
        return $user;
    }
    public static function supprTypeBien($id){
        $idcon = connexion();
        $requete = $idcon -> prepare("DELETE FROM type_bien WHERE id = :id");
        $requete -> execute([":id" => $id]);
    }
}
?>