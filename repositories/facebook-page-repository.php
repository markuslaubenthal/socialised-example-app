<?php
/**
 * Repository - Füllt das Model application-user
 */
require_once 'models/facebook-page.php';
class FacebookPageRepository {

    /**
     * Gibt alle Pages zurück
     *
     * @return Array Array von Usern
     */
    public static function findAll(){

      $connection = PDOConnection::getInstance();
      if(!$connection)
        return null;
      else {
        $stmt = $connection->prepare('
          SELECT  *
          FROM    user_page;
        ');
        $stmt->execute();
      }
      return null;
    }

    /**
     * Gibt einen bestimmten Eintrag zurück.
     *
     * @param int $id Id des gesuchten Eintrags
     * @return Array Array, dass einen Eintrag repräsentiert, bzw.
     *                  wenn dieser nicht vorhanden ist, null.
     */
    public static function find($id){
        $connection = PDOConnection::getInstance();
        if(!$connection)
          return null;

        $stmt = $connection->prepare('
          SELECT  *
          FROM    user_page
          WHERE   pages_id = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'ModelFacebookPage');

        if($user = $stmt->fetch())
          return $user;
        return null;
    }

    /**
    * creates Database Entry for User
    *
    */
    public static function create($data) {
        $connection = PDOConnection::getInstance();
        if(!$connection)
          return null;
        else {
          $stmt = $connection->prepare('
            INSERT INTO `user_page`  (`user_id`, `page_id`)
            VALUES                    (:user_id,   :pages_id)
          ');

          $stmt->bindParam(':user_id', $data['user_id']);
          $stmt->bindParam(':pages_id', $data['id']);

          if($stmt->execute() === true)
            return 200;
          else {
            return $stmt->errorInfo();
          }
        }
    }
}
?>
