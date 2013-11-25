<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class AndroidController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
     public $helpers = array('Js','FormEnum','Session');
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
    public function tags(){
        
    }
    
     public function companiesbranches($tag=null){
       
        $this->loadModel('Company');
        $this->loadModel('CompaniesTag');
        $this->loadModel('Branch');
        $this->loadModel('Map');
        $this->loadModel('Tag'); 
          if ($this->request->is('post')) {
            $datosCompany = array();            
            $text = array_unique(explode(" ",$tag));//$this->request->data['tag']
            $i=0;
            foreach ($text as $val){
                $datosCompany[]['tag'] = $this->CompaniesTag->find('all',array('conditions'=>array('Tag.name' => $val),'recursive'  => 2));

            }  
          }
        $data = $datosCompany;       
         //if(isset($_GET['callback'])){ // Si es una petición cross-domain
          //  echo  json_encode($data);
        // }
     //  $this->request->accepts('application/json');
        
       // if(isset($this->req  $_GET['callback'])){ // Si ha llegado callback
        $array = array("mensaje" => "Hola desde mi otro servidor haciendo cross domain con ajax"); 
        $da=  json_encode($array);    
        $this->set(compact('da'));
//} 
   //return new CakeResponse(array('body' => json_encode($array)));  
    $this->layout = 'ajax';
       /*echo json_encode($data);
        
        $my_array2= array('one'=>'1','two'=>'2','3');
        $this->set(compact('my_array2'));*/
 
        }
         public function login($usu = null,$pass=null) {
            $this->loadModel('User');
            $this->request->data['User']['username']=$usu;
            $this->request->data['User']['password']=$pass;
            $var = 'nada';
                if ($this->Auth->login()) {
                   $var = 'ok';
                }else{
                    $var = 'fallo';
                }
                $array = array("mensaje" => $var); 
                $da=  json_encode($array);    
                $this->set(compact('da'));
                $this->layout = 'ajax';
            
        }
          public function logout() {
           $this->Auth->logout();
            $this->layout = 'ajax';
        }

    
}
