<?php
include_once 'autoload.php';
abstract class Repository
{
    protected PDO $db;

    public function __construct(protected $tableName) {
        $this->db = ConnexionDB::getInstance();
    }

    /**
     * Elle retourne la liste des éléments
     * @return tableRows
     */
    public function findAll($where) {
//        ["username" => "aymen", "password" => "test"]
        $request = "select * from $this->tableName";
        $reponse = $this->db->prepare($request);
        $reponse->execute([]);
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Retourne le user d'id $id
     * @param id $id
     * @return user
     */
    public function findById($id){
        $request = "select * from $this->tableName where id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
        return $reponse->fetch(PDO::FETCH_OBJ);
    }

    /**
     * @param $params : Liste des paramètres du user
     *
     */
    public function create($params) {
        $keys = array_keys($params);
//        ['username', 'password','role']
        $keyString = implode(",", $keys);
//        'username', 'password','role'
//        ['?', '?', '?']
        $paramselements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramselements);
        $request = "INSERT INTO $this->tableName (`id`, $keyString) VALUES (NULL, $paramString);";
        $reponse = $this->db->prepare($request);
        $reponse->execute(array_values($params));
        return $reponse->fetch(PDO::FETCH_OBJ);
    }

    /**
     * @param $id l'id du user à supprimer
     */
    public function delete($id) {
        $request = "delete from $this->tableName where id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
    }

    /**
     * @param $id: id du user à mettre à jour
     * @param $params : Liste des paramètres du user
     *
     */
    public function update($id, $params) {}

}