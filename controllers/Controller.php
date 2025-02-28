<?php
namespace KPO\Controllers;

use KPO\System\Classes\Logger;
use KPO\System\Classes\View;

/**
 * @author Julius Derigs <derigs@kutzner-beratung.com>
 * @version 1.0
 */

class Controller {
    protected Logger $logger;
    protected View $view;

    public function __construct() {
        $this->logger = new Logger();
        $this->view = new View();
    }
}