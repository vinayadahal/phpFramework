<?php

class first extends controllers {

    public function __construct() {
        parent::__construct();
    }

    public function main($page) {
        $data['title'] = ucfirst($page);
        $this->loader->showView($page);
    }

}
