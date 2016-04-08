<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message {
    private function set_message($that, $message, $status='success')
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
        $this->set_message($that, $message, 'success');
    }

    public function error($that, $message)
    {
        $this->set_message($that, $message, 'error');
    }

    public function warning($that, $message)
    {
        $this->set_message($that, $message, 'warning');
    }
}
