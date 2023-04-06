
<?php
include_once 'autoload.php';
class Repository
{
    protected $bdd;

    public function __construct(protected $tableName) {
        $this->bdd = ConnexionDB::getInstance();
    }
    /**
     * @return  all users
     */
    public function findAll() {
        $request = "select * from $this->tableName";
        $reponse = $this->bdd->prepare($request);
        $reponse->execute([]);
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }
    /**
     * @return  user By Id
     * @var $id
     */
    public function findById($id) {
        $request = "select * from $this->tableName where id = ?";
        $reponse = $this->bdd->prepare($request);
        $reponse->execute([$id]);
        return $reponse->fetch(PDO::FETCH_OBJ);
    }
//    params = ['id' => val , ....]
    public function create($params) {
        var_dump($params);
        $values = array_values($params);
        $keys = array_keys($params);
//        ['username', 'password', 'role'] =>  username, password, role
        $keysString = implode(",", $keys);
//        ['?', '?', '?'] => '?', '?', '?'
        $params = array_fill(0, count($values), '?');
        $paramsString = implode(",", $params);
        $req = "INSERT INTO `user` (`id`, $keysString) VALUES (NULL, $paramsString);";
        echo $req;
        $response = $this->bdd->prepare($req);
        $response->execute($values);
    }

    public function delete($id) {
        $req = " DELETE FROM $this->tableName WHERE id = ? ";
        $response = $this->bdd->prepare($req);
        $response->execute([$id]);
    }

    public function update($id, ...$params) {
        $req = " UPDATE `user` SET username = ? and password = ? and role = ?  WHERE `user`.`id` = ?; ";
        $response = $this->bdd->prepare($req);
        $response->execute([...$params, $id]);
    }

}