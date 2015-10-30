<?php
/**
 * Klasse für den Datenzugriff
 */
class ModelDefault {

    //Einträge eines Blogs als zweidimensionales Array
    private static $entries = array(
        array("title"=>"Eintrag 1", "content"=>"Ich bin der erste Eintrag."),
        array("title"=>"Eintrag 2", "content"=>"Ich bin der ewige Zweite!"),
        array("title"=>"Eintrag 3", "content"=>"Na dann bin ich die Nummer drei.")
    );

    /**
     * Gibt alle Einträge des Blogs zurück.
     *
     * @return Array Array von Blogeinträgen.
     */
    public static function findAll(){
        return self::$entries;
    }

    /**
     * Gibt einen bestimmten Eintrag zurück.
     *
     * @param int $id Id des gesuchten Eintrags
     * @return Array Array, dass einen Eintrag repräsentiert, bzw.
     *                  wenn dieser nicht vorhanden ist, null.
     */
    public static function getEntry($id){
        if(array_key_exists($id, $this->entries)){
            return self::$entries[$id];
        }else{
            return null;
        }
    }
}
?>
