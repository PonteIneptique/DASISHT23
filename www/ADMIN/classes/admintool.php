<?php
class AdminTool extends Tool {
    private static function DB() {
        global $DB;
        return $DB;
    }
    
    static function listAll(){
        $result = array();
        $query = "SELECT t.tool_uid, t.shortname, d.description, d.title, d.homepage, d.available_from, d.registered, u.name AS user_name FROM tool t
                      INNER JOIN description d ON t.tool_uid = d.tool_uid
                      INNER JOIN user u ON d.user_uid = u.user_uid";
       $req = self::DB()->prepare($query);
       $req->execute();
       $tools = $req->fetchAll(PDO::FETCH_ASSOC);
       
       foreach ($tools as $tool) {
           $result[$tool['shortname']] = $tool;
       }
       
       return $result;
    }
    
    static function getTool($shortname){
        
    }
}
?>