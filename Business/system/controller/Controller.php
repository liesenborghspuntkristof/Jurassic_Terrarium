<?php

class Controller
{
    protected $_template;
    protected $_loader;
    protected $_input;
    protected $_validator;
    protected $_auth;

    public function __construct()
    {
        // Loader initialiseren
        $this->_loader = Loader::getInstance();

        // input class initialiseren
        $this->_input = new Input();


    }


}