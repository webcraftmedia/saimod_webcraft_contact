<?php
namespace SQL;
class DATA_SAIMOD_WEBCRAFT_CONTACT extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   (new \PSAI('/saimod_webcraft_contact/sql/mysql/system_api.sql'))->SERVERPATH(),
                        (new \PSAI('/saimod_webcraft_contact/sql/mysql/system_page.sql'))->SERVERPATH());
    }    
}