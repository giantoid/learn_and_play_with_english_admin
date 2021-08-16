<?php
class Template
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function layout($content, $data = NULL)
    {
        $data['header'] = $this->_ci->load->view('template/header', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
        $this->_ci->load->view('template/index', $data);
    }
}
