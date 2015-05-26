<?php
if(!defined('_PS_VERSION_'))
    exit;

class ModuleTest extends Module{

    public function __construct() {
        $this->name = 'moduletest';
        $this->author = 'Anthony';
        $this->version = '1';
        $this->tab = 'front_office_features';
        $this->ps_versions_compliancy = ['min' => '1.6', 'max' => _PS_VERSION_];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = 'Module pour ECF';
        $this->description = 'Module pour Erwan';
        $this->confirmUninstall = $this->l('Etes-vous certain de vouloir désinstaller le module?');
    }

    public function install() {
        if(!parent::install()) return false;

        //Définition d'un hook par défault
        return $this->registerHook('displayLeftColumnProduct');
    }
    
    public function hookDisplayLeftColumnProduct(){
        return $this->display(__FILE__, 'moduletest.tpl');
    }

    public function hookDisplayLeftColumn(){
        return $this->display(__FILE__, 'moduletest.tpl');
    }

    public function hookDisplayRightColumn() {
        return $this->hookDisplayLeftColumn();
    }
}