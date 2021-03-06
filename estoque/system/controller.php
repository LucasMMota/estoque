<?php

class controller extends System {

  public $smarty;
  public $mail;
  public $template;
  public $path_root;

  protected function view($name, $vars = NULL) {
    if (is_array($vars) && count($vars) > 0) {
      extract($vars, EXTR_PREFIX_ALL, 'view');
    }
    return require_once(VIEWS . $name . '.php');
  }

  public function __construct() {
    parent::__construct();
    $this->path_root = HTTP_ROOT;
    
    /* Carregando Smarty */
    $this->smarty = new Smarty;
    $this->smarty->debugging = false;
    $this->smarty->force_compile = true;
    $this->smarty->caching = true;
    $this->smarty->template_dir = SMARTYDIR."/templates/";
    $this->smarty->compile_dir = SMARTYDIR."/templates_c/";
    $this->smarty->config_dir = SMARTYDIR."/configs/";
    $this->smarty->cache_dir = SMARTYDIR."/cache/";
    $this->smarty->assign('HTTP_ROOT', HTTP_ROOT);
    
    $this->smarty->assign('controller', $this->_controller);
    $this->smarty->assign('action', $this->_action);
    
    $this->template = new template($this->smarty);
    
  }

}

?>