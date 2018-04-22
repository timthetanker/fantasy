<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 17/04/2018
 * Time: 20:14
 */
class DB_Modules
{
    public function DBloginUser($email, $pword){
        $db = Db::getInstance();
        $sql = "SELECT userID FROM users WHERE email = :email and pword = :pword";
        $stmnt = $db->prepare($sql);
        $stmnt->bindValue(':email',$email);
        $stmnt->bindValue(':pword',$pword);
        $stmnt->execute();
        if($stmnt->rowCount() > 0){
            $users = $stmnt->fetchAll();
            foreach ($users as $user){
                $userID = $user['userID'];
            }
            if(isset($userID)){
                return $userID;
            }
        }
        return false;
    }

    public  function getUserInfoCall($userID){
        echo 'Entering call';
        $db = Db::getInstance();
        $sql = "SELECT * FROM users WHERE userID = :userID";
        $stmnt = $db->prepare($sql);
        $stmnt->bindValue(':userID', $userID);
        $stmnt->execute();
        if($stmnt->rowCount() > 0){
            $users = $stmnt->fetchAll();
            foreach ($users as $user){
                $user = array('userID' => $user['userID'], 'email' => $user['email'], 'firstname' => $user['firstname'], 'lastname' => $user['lastname'], 'balance' => $user['balance'], 'country' => $user['country'], 'join_date' => $user['join_date'] );
            }
        }
        if(isset($user)){
            return $user;
        }
        else{
            return false;
        }
    }
}//class