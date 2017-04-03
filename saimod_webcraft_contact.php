<?php
class saimod_webcraft_contact extends \SYSTEM\SAI\SaiModule {
    public static function sai_mod_saimod_webcraft_contact(){
        $vars = array('project' => \SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_PROJECT));
        return \SYSTEM\PAGE\replace::replaceFile((new PSAI('saimod_webcraft_contact/tpl/saimod_webcraft_contact.tpl'))->SERVERPATH(),$vars);
    }
    
    public static function html_li_menu(){return '<li><a href="#!contact"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Contact</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return true;}
    public static function js(){
        return array(   \LIB\lib_jqbootstrapvalidation::js(),
                        new PSAI('saimod_webcraft_contact/js/saimod_webcraft_contact.js'));}
    public static function css(){return array();}   
}