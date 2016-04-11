<?php
class MY_Form_validation extends CI_Form_validation {

    public function __construct($rules = array())
    {
        parent::__construct($rules);

        $this->_error_prefix = '<div class="error" style="color: red;">';
        $this->_error_suffix = '</div>';
    }

    public function map_url($url) {
        if (preg_match('/^https:\/\/www.google.com\/fusiontables\/embedviz\/?\?q=.*$/', $url ) )
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}