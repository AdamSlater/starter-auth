<?php

class Users extends MY_Model {

    /**
     * Users constructor.
     */
    public function __construct()
    {
        parent::__construct('users', 'id');
    }
}