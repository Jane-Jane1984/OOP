<?php

class User
{
    public $login;
    public $password;
    protected $mysql;

    public function __construct(mysqli $mysql, $login, $password)
    {
//        if(strlen($login) < 3 || strlen($login) > 10){
//            throw new Exception('Неправильный логин');
//        }
//        if(strlen($password) < 3 || strlen($password) > 10){
//            throw new Exception('Неправильный пароль');
//        }
        $this->mysql = $mysql;
        $this->login = $login;
        $this->password = $password;
    }
    /**
    *метод добавления пользователя
     */
    public function addUser(){
        $sql = "INSERT INTO `users` SET `login` = '".$this->login."', `password` = '".$this->password."'";
        return $this->mysql->query($sql);
    }

    /**
     * @param $id
     * @return bool|mysqli_result
     * метод удаления пользователя
     */
    public function delete($id){
        $sql = "DELETE FROM `users` WHERE `id` = " . intval($id);
        return $this->mysql->query($sql);
    }

    /**
     * редактирование
     * @param $id
     * @param array $arData
     * [login => 'Vasya', password => '12345']
     */
    public function update($id, $arData = [])  //метод редактирования
    {
        if(!empty($arData)){
            $sql = "UPDATE `users` SET ";
            $c = 0;
            foreach ($arData as $k => $val){
                $sql .= "`{$k}` = '{$val}'";
                $c++;
                if($c < count($arData)){
                    $sql .= ", ";
                }
            }
            $sql .= " WHERE `id` = " . intval($id);

            return $this->mysql->query($sql);
        }
    }

    /**
     * возвращает всех пользователей
     */
    public function getAll()
    {

    }

    /**
     * возвращает пользователя по $id
     */
    public function getById(){

    }
}

//try{
//    $user = new User('login', 2345678);
//    echo $user->addUser();
//
//}catch (Exception $ex){
//    echo $ex->getMessage();
//}


