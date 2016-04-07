<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message
{
    private function set_message($that, $message, $status=1)
    {
//        success -> 1
//        error -> 0
        $that->session->set_flashdata(array(
            'message' => $message,
            'status' => $status
        ));
    }

    public function success($that, $message)
    {
        $this->set_message($that, $message, 1);
    }

    public function error($that, $message)
    {
        $this->set_message($that, $message, 0);
    }

}
