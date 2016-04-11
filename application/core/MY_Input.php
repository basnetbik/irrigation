<?php
class MY_Input extends CI_Input {
    function get($index = NULL, $xss_clean = FALSE, $default_value = NULL)
    {
        // Check if a field has been provided
        if ($index === NULL AND ! empty($_GET))
        {
            $get = array();

            // Loop through the full _GET array and return it
            foreach (array_keys($_GET) as $key)
            {
                $post[$key] = $this->_fetch_from_array($_GET, $key, $xss_clean);
            }

            return $get;
        }

        $ret_val = $this->_fetch_from_array($_GET, $index, $xss_clean);
        if(!$ret_val)
            $ret_val = $default_value;

        return $ret_val;
    }

    function post($index = NULL, $xss_clean = FALSE, $default_value = NULL)
    {
        // Check if a field has been provided
        if ($index === NULL AND ! empty($_POST))
        {
            $post = array();

            // Loop through the full _GET array and return it
            foreach (array_keys($_POST) as $key)
            {
                $post[$key] = $this->_fetch_from_array($_POST, $key, $xss_clean);
            }

            return $post;
        }

        $ret_val = $this->_fetch_from_array($_POST, $index, $xss_clean);
        if(!$ret_val)
            $ret_val = $default_value;

        return $ret_val;
    }
}