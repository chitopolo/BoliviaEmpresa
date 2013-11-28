<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
   // public $helpers = array('Less.Less');
   
   //public $helpers = array('Less.Less');
    
    
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'Boliviacompanies', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'Boliviacompanies', 'action' => 'index')
        )
    );
    public function beforeRender()
{
    // only compile it on development mode
    if (Configure::read('debug') > 0)
    {
        // import the file to application
        App::import('Vendor', 'lessc');
 
        // set the LESS file location
        $less = ROOT . DS . APP_DIR . DS . 'webroot' . DS . 'less' . DS . 'theme.less';
 
        // set the CSS file to be written
        $css = ROOT . DS . APP_DIR . DS . 'webroot' . DS . 'css' . DS . 'theme.css';
 
        // compile the file
        lessc::ccompile($less, $css);
}
    parent::beforeRender();
}
     public function beforeFilter() {
        $this->Auth->allow();
    }
    
  
}
