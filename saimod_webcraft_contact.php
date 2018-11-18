<?php
class saimod_webcraft_contact extends \SYSTEM\SAI\sai_module {
    public static function sai_mod_saimod_webcraft_contact(){
        $vars = array('project' => \SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_PROJECT));
        return \SYSTEM\PAGE\replace::replaceFile((new PSAI('saimod_webcraft_contact/tpl/saimod_webcraft_contact.tpl'))->SERVERPATH(),$vars);
    }
    
    public static function menu(){
        return new \SYSTEM\SAI\sai_module_menu( 10, \SYSTEM\SAI\sai_module_menu::POISITION_RIGHT, \SYSTEM\SAI\sai_module_menu::DIVIDER_RIGHT,
                        \SYSTEM\PAGE\replace::replaceFile((new PSAI('saimod_webcraft_contact/tpl/menu.tpl'))->SERVERPATH()));}
    public static function right_public(){return false;}    
    public static function right_right(){return true;}
    public static function js(){
        return array(   \LIB\lib_jqbootstrapvalidation::js(),
                        new PSAI('saimod_webcraft_contact/js/saimod_webcraft_contact.js'));}
    public static function css(){return array();}   
}