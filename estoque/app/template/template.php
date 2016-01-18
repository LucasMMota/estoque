<?php

/**
 * Description of template
 *
 */
class template
{

    protected $title;
    protected $css = array();
    protected $js = array();
    protected $path_root;
    protected $settings;
    public $smarty;
    public $mail;

    public function __construct($objSmarty)
    {
        $this->smarty = $objSmarty;

        /* ativa path_root para https caso necessario */
        if ($_SERVER["SERVER_PORT"] == 443) {
            $this->path_root = 'https://' . $_SERVER['HTTP_HOST'];
        } else {
            $this->path_root = 'http://' . $_SERVER['HTTP_HOST'];
        }

        //css site
        $this->css[] = $this->path_root . '/files/css/bootstrap.css';
        $this->css[] = $this->path_root . '/files/css/bootstrap-responsive.css';

        $this->css[] = $this->path_root . '/files/css/style.css';
        /* javaScript site */
        $this->js[] = $this->path_root . '/files/js/jQuery/jquery.js';

        /* Notify */
        $this->js[] = $this->path_root . '/files/js/noty/jquery.noty.js';
        $this->js[] = $this->path_root . '/files/js/noty/themes/default.js';
        $this->js[] = $this->path_root . '/files/js/noty/layouts/center.js';
        $this->js[] = $this->path_root . '/files/js/util.js';
        $this->css[] = $this->path_root . '/files/css/ionicons.min.css';

    }

    public function setTitle($title = '')
    {
        $this->title = $title;
    }

    public
    function fetchCSS($css)
    {
        $this->css[] = $this->path_root . $css;
    }

    public
    function fetchJS($js)
    {
        $this->js[] = $js;
    }

    public
    function run()
    {
        $this->settings = new defaultSite($this->smarty);

        $this->smarty->assign('path_root', $this->path_root);
        $this->smarty->assign('title', $this->title);
        $this->smarty->assign('css', $this->css);
        $this->smarty->assign('js', $this->js);

        $this->settings->init();
    }

}

?>
