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
App::import('Lib','Googlemaps');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class BoliviaCompaniesController extends AppController {

    public $helpers = array('Js','FormEnum','Session');
/**
 * This controller does not use a model
 *
 * @var array
 */
    public $uses = array();
      
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *  or MissingViewException in debug mode.
 */     
        public function index(){
            $this->loadModel('Ad');
            $this->loadModel('Company');
            $company = $this->Company->find('all',array('limit'=>8,'recursive'  => 2));
            $data = $this->Ad->find('all',array('condition' => array('Ad.'. $this->Ad->state => 'active')));
            $this->set(compact('data','company'));
            
        }
        public function viewEditStory($id=1){
            $this->loadModel('Story');
            if (!$this->Story->exists($id)) {
            throw new NotFoundException(__('Invalid story'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Story->save($this->request->data)) {
                $this->Session->setFlash(__('The story has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The story could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Story.' . $this->Story->primaryKey => $id));
            $this->request->data = $this->Story->find('first', $options);
        }
        }
        public function stories(){
            $this->loadModel('Story');
            $data = $this->Story->find('first',array('condition'=>array('Story.id'=>1)));
            $this->set(compact('data'));
          //  $this->layout = 'ajax';
           
        }
        public function contacts(){
            $this->loadModel('Contact');
            if ($this->request->is('post')) {
            $this->Contact->create();
            if ($this->Contact->save($this->request->data)) {
                $this->Session->setFlash(__('The contact has been saved.'));
                //return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
            }
        }
          
        }
        public function perfilCompany($id=null){
            $this->loadModel('Company');
            $this->loadModel('CompaniesItemsImage');
            $this->loadModel('Deal');
            $this->loadModel('Ticket');
            
            $data = $this->Company->find('first',array('conditions'=>array('Company.id'=>$id)));
            
             $i=0;     
             $it =0;
                 foreach ($data['Item'] as $items) {  
                     $it =0;
                     foreach ($this->CompaniesItemsImage->find('all',array('conditions'=>array('CompaniesItemsImage.companies_item_id'=>$items['CompaniesItem']['id']),'recursive'=>-1)) as $va11) {
                         $data['Item'][$i]['CompaniesItem']['CompaniesItemsImage'][$it] = $va11['CompaniesItemsImage'];
                         $it++;
                     }                     
                 $i++;
                  }   
              
                $it1 =0;                  
                 foreach ($data['Branch'] as $branc) {   
       
                     foreach ($this->Deal->find('all',array('conditions'=>array('Deal.branch_id'=>$branc['id']),'recursive'=>-1)) as $va1) {                       
                         $data['Branch'][$it]['Deal'][$it1] = $va1['Deal'];                         
                         $ti=0;
                         foreach ($this->Ticket->find('all',array('conditions'=>array('Ticket.deal_id'=>$va1['Deal']['id']),'recursive'=>-1)) as $tic) {
                         $data['Branch'][$it]['Deal'][$it1]['Ticket'][$ti] = $tic['Ticket']; 
                         $ti++;                          
                         }
                         
                        $it1++; 
                     }
                     $it1 =0;
                    /* foreach ($this->Consultation->find('all',array('conditions'=>array('Consultation.branch_id'=>$branc['id']),'recursive'=>-1)) as $cons) {                       
                         $data['Company'][$i]['Branch'][$it]['Consultation'][$it1] = $cons['Consultation'];                          
                          $it1++; 
                     }*/                   
                 $it++;
                  }
            
        $config['center'] =  'Bolivia';
        // el zoom, que lo podemos poner en auto y de esa forma
        //siempre mostrará todos los markers ajustando el zoom    
        $config['zoom'] = 'auto';        
        //el tipo de mapa
        $config['map_type'] = 'ROADMAP';
        //el ancho del mapa           
        $config['map_width'] = '100%';    
        //el alto del mapa    
        $config['map_height'] = '600px';    
        
        //inicializamos la configuración del mapa
        $map = new Googlemaps($config);
        //hacemos la consulta al modelo para pedirle 
        //la posición de los markers y el infowindow
        $cont = null;
        foreach($data['Branch'] as $info_marker)
        {
            $marker = array();
            //podemos elegir DROP o BOUNCE
            $marker['animation'] = 'BOUNCE';
            //posición de los markers
            $marker['position'] = $info_marker['latitude'].','.$info_marker['length'];
            //infowindow de los markers(ventana de información) 
            $view = new View();
            $cont = urldecode($view->element('Branch',array('val'=> $info_marker))); 
            $marker['infowindow_content'] = $cont;// $cont;  // "<section class='block-large bg-alt'><div class='container'><div class='row'><div class='span3'><img class='img-rounded' src='assets/images/service_1.jpg' alt=''></div><div class='span9'><h2>Satisfation Guaranteed</h2><p class='lead'>Boreal has revamped the idea of convergence. Quick: do you have a infinitely reconfigurable plan for handling new returns-on-investment? A company that can brand faithfully will (at some point in the future) be able to strategize elegantly.</p><a href='#' class='btn btn-large btn-primary'>Contact Us!</a></div></div></div></section>";
            //la id del marker
            $marker['id'] = $info_marker['id']; 
            $map->add_marker($marker);
 
            //podemos colocar iconos personalizados así de fácil
           // $marker ['icon'] = base_url().'imagenes/'.$fila->imagen;
 
            //si queremos que se pueda arrastrar el marker
            //$marker['draggable'] = TRUE;
            //si queremos darle una id, muy útil
        }
                
        //en data['map'] tenemos ya creado nuestro mapa para llamarlo en la vista
        $dato['map'] = $map->create_map();
        ///////////////////
        $css =  WWW_ROOT.'js/map.js';
        $contenido = $dato['map']['js']; //file_get_contents($css);
        file_put_contents($css, $contenido);
        //////////////////////////
        
        $this->set(compact('data','dato','cont'));             
        $this->layout = 'ajax';
      }

        public function perfilusers(){

        }
          public function registerConsultation(){
              $this->loadModel('Consultation');
              if ($this->request->is('post')) {
                  //$id_grup_user ='session';
                  //$id_branch = 'sucu1';
                  //verificar si la relacion  
                  if($this->Consultation->save($this->request->data)){
                      $this->Session->setFlash(__('La consulta se guardo correcto'));    
                  }else{
                      $this->Session->setFlash(__('Nose agrego el nuevo mensaje incorrecto'));    
                  }
              }
          }
          public function viewEditConsultation($id=null){
              $this->loadModel('Consultation');
              if (!$this->Consultation->exists($id)) {
            throw new NotFoundException(__('Invalid consultation'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Consultation->save($this->request->data)) {
                $this->Session->setFlash(__('La consulta no a sido editada'));
                //return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('La consulta a sido editada'));
            }
        } 
                $options = array('conditions' => array('Consultation.' . $this->Consultation->primaryKey => $id));
                $this->request->data = $this->Consultation->find('first', $options);        
        $this->set(compact());    
          
          }
          public function perfilSub_users(){
            $this->loadModel('GroupsUser');   
            $this->loadModel('Deal');   
            $this->loadModel('Ticket');   
            $this->loadModel('Consultation');
            $this->loadModel('User');
            $this->loadModel('GroupsUser');
            
            $login = array('login'=>'1');           
            $this->Session->write($login);
            if($this->Session->check('login')){ 
               $data  =  $this->GroupsUser->find('first',array('conditions'=>array('GroupsUser.id'=>$this->Session->read('login'))));                
                $it = 0;
                $it1 =0;                  
                 foreach ($data['Branch'] as $branc) {   
                     
                     foreach ($this->Deal->find('all',array('conditions'=>array('Deal.branch_id'=>$branc['id']),'recursive'=>-1)) as $va1) {                       
                         $data['Branch'][$it]['Deal'][$it1] = $va1['Deal'];                         
                         $ti=0;
                         foreach ($this->Ticket->find('all',array('conditions'=>array('Ticket.deal_id'=>$va1['Deal']['id']),'recursive'=>-1)) as $tic) {
                         $data['Branch'][$it]['Deal'][$it1]['Ticket'][$ti] = $tic['Ticket']; 
                         $ti++; 
                         
                         }
                        $it1++; 
                     }
                     $it1 =0;
                     foreach ($this->Consultation->find('all',array('conditions'=>array('Consultation.branch_id'=>$branc['id']),'recursive'=>-1)) as $cons) {                       
                             $data['Branch'][$it]['Consultation'][$it1] = $cons['Consultation'];
                             $usss =  $this->User->query("select `User`.`id`, `User`.`first_name`, `User`.`last_name`, `User`.`date_of_birth`, `User`.`ci`, `User`.`sex`, `User`.`address`, `User`.`phone`, `User`.`cellular`, `User`.`e-mail`, `User`.`filename`, `User`.`dir`, `User`.`login`, `User`.`password`, `User`.`created`, `User`.`modified`, `User`.`state` from `bolivia_e`.`groups_users` AS `GroupsUser` , `bolivia_e`.`users` AS `User` where GroupsUser.id = ".$cons['Consultation']['groups_user_id']." and User.id = GroupsUser.user_id   LIMIT 1");                           
                             $data['Branch'][$it]['Consultation'][$it1]['User'] =  $usss[$it1]['User'];
                          $it1++; 
                     }
                      $it1 =0;
                 $it++;
                  }
               
            }
           
            $this->set(compact('data'));
 
        }
        public function perfilAdmin(){
            $this->loadModel('GroupsUser'); 
            $this->loadModel('CompaniesItemsImage');
            $this->loadModel('Deal');
            $this->loadModel('Ticket');
            $this->loadModel('Consultation');
            
            $this->Ticket->query("UPDATE tickets SET groups_user_id=0 WHERE state='active' and groups_user_id != 0 and deadline >'".date("Y-m-d H:i:s")."'");
            
            
            
            $login = array('login'=>'1');           
            $this->Session->write($login);
            if($this->Session->check('login')){ 
               $data  =  $this->GroupsUser->find('first',array('conditions'=>array('GroupsUser.id'=>$this->Session->read('login')),'recursive'=>2));                
            }
            $i=0;           
            foreach ($data['Company'] as $value) {
                 $it = 0;
                $it1 =0;
                 foreach ($value['Item'] as $items) {   
                     foreach ($this->CompaniesItemsImage->find('all',array('conditions'=>array('CompaniesItemsImage.companies_item_id'=>$items['CompaniesItem']['id']),'recursive'=>-1)) as $va11) {
                         $data['Company'][$i]['Item'][$it]['CompaniesItem']['CompaniesItemsImage'][$it1] = $va11['CompaniesItemsImage'];
                         $it1++;
                     }
                      $it1 =0;
                 $it++;
                  }   
                $it = 0;
                $it1 =0;                  
                 foreach ($value['Branch'] as $branc) {   
                     
                     foreach ($this->Deal->find('all',array('conditions'=>array('Deal.branch_id'=>$branc['id']),'recursive'=>-1)) as $va1) {                       
                         $data['Company'][$i]['Branch'][$it]['Deal'][$it1] = $va1['Deal'];                         
                         $ti=0;
                         foreach ($this->Ticket->find('all',array('conditions'=>array('Ticket.deal_id'=>$va1['Deal']['id']),'recursive'=>-1)) as $tic) {
                         $data['Company'][$i]['Branch'][$it]['Deal'][$it1]['Ticket'][$ti] = $tic['Ticket']; 
                         $ti++; 
                         
                         }
                        $it1++; 
                     }
                     $it1 =0;
                     foreach ($this->Consultation->find('all',array('conditions'=>array('Consultation.branch_id'=>$branc['id']),'recursive'=>-1)) as $cons) {                       
                         $data['Company'][$i]['Branch'][$it]['Consultation'][$it1] = $cons['Consultation'];                          
                          $it1++; 
                     }

                      $it1 =0;
                 $it++;
                  }
                  
                  
                  $i++;
            }
            
            
         
            
            
            $this->set(compact('data'));
 
        }
        public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->autoRedirect = false;
         $this->Auth->allow('add'); //  Letting users register themselves
        }

        public function login() {
            $this->loadModel('User');
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {                           
                    $datos = $this->User->find('first',array('conditions'=>array('User.id'=>$this->Session->read('Auth.User.id')),'recursive'=>1));                                        
                    $ss = array('us_group'=>$datos['Group']);
                    $this->Session->write($ss);
                }else{
                   $this->Session->setFlash(__('No es correcto el nombre de usuario o password'));
                }
                
            }
        // $this->layout = 'ajax';
        }

        public function logout() {
             $this->Session->delete('us_group');             
            return $this->redirect($this->Auth->logout());
        }
        
       /*   public function loginusers(){
            //manegar grupos usuarios
            //para hacer validaciones de formulario atraves de ajax poner <?php echo $this->Session->flash(); en cada vista 
            $this->loadModel('User');
            $this->loadModel('Group');
            $this->loadModel('GroupsUser');
            $data=null;
            if ($this->request->is('post')) {
                $data = $this->User->GroupsUser->find('first',array('conditions'=>array('User.login'=>$this->request->data['loginusers']['login'],'User.password'=>$this->request->data['loginusers']['password'],'GroupsUser.group_id'=>$this->request->data['loginusers']['grupuser']),'recursive'=>1));               
                if(count($data)){
                    $login = array('id_usu'=>$data['User']['id'],'name'=>$data['User']['first_name'],'id_group_usu'=>$data['GroupsUser']['id'],'group'=>$data['Group']['name']);           
                    $this->Session->write($login);
                    $this->Session->setFlash(__('Login correcto'));
                }  else {
                    $this->Session->setFlash(__('Login incorrecto'));    
                }
                    
              }
        
                
              $array =null;
              $gru = $this->Group->find('all',array('recursive'=>-1));
               foreach ($gru as $val){
                    $array[$val['Group']['id']] = $val['Group']['name'];
                }
               $this->set(compact('array'));
           //$this->layout = 'ajax';
        }*/
        public function users(){
            
        }
        public function Deals(){
            
        }
        
        public function ModificarTicket($id=null){
           
            $this->loadModel('Ticket');
            if (!$this->Ticket->exists($id)) {
            throw new NotFoundException(__('Invalid ticket'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Ticket->save($this->request->data)) {
                $this->Session->setFlash(__('El ticket se a guardarse'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('El ticket no a podido guardarse'));
            }
        } 
        }
        
        public function homesearcher(){
            $this->loadModel('Tag');    
        }

        public function tags(){
          
            $text = explode(" ", $this->request->data['value']);
            $val = $text[count($text)-1];
            
           $id = $this->request->data['id'];
           $ul = $this->request->data['ul'];
           $this->loadModel('Tag');
           $datos = $this->Tag->find('all',array('conditions'=>array('Tag.name like' => '%'.$val.'%','Tag.name !='=>$text)));
           $this->set(compact('datos','ul','text','id')); 

           $this->layout = 'ajax';
        }
        public function companies($tag=null){
            $this->loadModel('Tag');
            $this->loadModel('CompaniesTag');
            $this->loadModel('Company');      
            $this->loadModel('CompaniesImage');
            //foreach al tag convertirlo en matris para 
            $datosCompany = array();            
            $text = array_unique(explode(" ", $tag));
            foreach ($text as $val){
                $datosCompany[$val] = $this->CompaniesTag->find('all',array('conditions'=>array('Tag.name' => $val),'recursive'  => 2));
            }
            $this->set(compact('datosCompany','text'));
            $this->layout = 'ajax';
        }
        
        public function companiesbranches($tag=null){
        //creamos la configuración del mapa con un array
        //la zona del mapa que queremos mostrar al cargar el mapa
        //como vemos le podemos pasar la ciudad y el país
        //en lugar de la latitud y la longitud
        $config['center'] =  'Bolivia';
        // el zoom, que lo podemos poner en auto y de esa forma
        //siempre mostrará todos los markers ajustando el zoom    
        $config['zoom'] = 'auto';        
        //el tipo de mapa
        $config['map_type'] = 'ROADMAP';
        //el ancho del mapa        
        $config['map_width'] = '80%';    
        //el alto del mapa    
        $config['map_height'] = '600px';    
        //inicializamos la configuración del mapa
        $map = new Googlemaps($config);
        //hacemos la consulta al modelo para pedirle 
        //la posición de los markers y el infowindow
        $this->loadModel('Company');
        $this->loadModel('CompaniesTag');
        $this->loadModel('Branch');
        $this->loadModel('Map');
        $this->loadModel('Tag'); 
        
        $datosCompany = array();            
        $text = array_unique(explode(" ", $tag));
        foreach ($text as $val){
            $datosCompany[$val] = $this->CompaniesTag->find('all',array('conditions'=>array('Tag.name' => $val),'recursive'  => 2));
          
        }
       
        foreach ($text as $val) {
          foreach($datosCompany[$val] as $info_marker)
            {
               foreach ($info_marker['Company']['Branch'] as $Branch){
                $marker = array(); 
                //podemos elegir DROP o BOUNCE
                $marker['animation'] = 'DROP';
                //posición de los markers
                $marker['position'] = $Branch['latitude'].','.$Branch['length'];
                //infowindow de los markers(ventana de información)    
                $marker['infowindow_content'] =  "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>";
 //$Branch['name']; //"<section class='block-large bg-alt'><div class='container'><div class='row'><div class='span3'><img class='img-rounded' src='assets/images/service_1.jpg' alt=''></div><div class='span9'><h2>Satisfation Guaranteed</h2><p class='lead'>Boreal has revamped the idea of convergence. Quick: do you have a infinitely reconfigurable plan for handling new returns-on-investment? A company that can brand faithfully will (at some point in the future) be able to strategize elegantly.</p><a href='#' class='btn btn-large btn-primary'>Contact Us!</a></div></div></div></section>";
                //la id del marker
                $marker['id'] = $Branch['id']; 
                $map->add_marker($marker);

                //podemos colocar iconos personalizados así de fácil
               // $marker ['icon'] = base_url().'imagenes/'.$fila->imagen;

                //si queremos que se pueda arrastrar el marker
                //$marker['draggable'] = TRUE;
                //si queremos darle una id, muy útil  
               }
               
            }
        }
        //en $data['datos'tenemos la información de cada marker para
        //poder utilizarlo en el sidebar en nuestra vista mapa_view
        $data = $datosCompany;
        //en data['map'] tenemos ya creado nuestro mapa para llamarlo en la vista
        $dato['map'] = $map->create_map();
        ///////////////////
        $css =  WWW_ROOT.'js/map.js';        
        $contenido = $dato['map']['js']; //file_get_contents($css);
        file_put_contents($css, $contenido);
        //////////////////////////
        
        $this->set(compact('data','dato','text')); 
        
        $this->layout = 'ajax';   
        }
        public function cities($tag=null){
        //creamos la configuración del mapa con un array
        $config = array();
        //la zona del mapa que queremos mostrar al cargar el mapa
        //como vemos le podemos pasar la ciudad y el país
        //en lugar de la latitud y la longitud
        $config['center'] =  'Bolivia';
        // el zoom, que lo podemos poner en auto y de esa forma
        //siempre mostrará todos los markers ajustando el zoom    
        $config['zoom'] = 'auto';        
        //el tipo de mapa
        $config['map_type'] = 'ROADMAP';
        //el ancho del mapa        
        $config['map_width'] = '80%';    
        //el alto del mapa    
        $config['map_height'] = '600px';    
        //inicializamos la configuración del mapa
        $map = new Googlemaps($config);
        //hacemos la consulta al modelo para pedirle 
        //la posición de los markers y el infowindow
        $this->loadModel('City');  
        $markers = $this->City->find('all');
        
        foreach($markers as $info_marker)
        {
            $marker = array();
            //podemos elegir DROP o BOUNCE
            $marker ['animation'] = 'DROP';
            //posición de los markers
            $marker ['position'] = $info_marker['City']['latitude'].','.$info_marker['City']['length'];
            //infowindow de los markers(ventana de información)    
            $marker ['infowindow_content'] = $info_marker['City']['name'];
            //la id del marker
            $marker['id'] = $info_marker['City']['id']; 
            $map->add_marker($marker);
 
            //podemos colocar iconos personalizados así de fácil
           // $marker ['icon'] = base_url().'imagenes/'.$fila->imagen;
 
            //si queremos que se pueda arrastrar el marker
            //$marker['draggable'] = TRUE;
            //si queremos darle una id, muy útil
        }
        
        //en $data['datos'tenemos la información de cada marker para
        //poder utilizarlo en el sidebar en nuestra vista mapa_view
        $data['datos'] = $this->City->find('all');
        //en data['map'] tenemos ya creado nuestro mapa para llamarlo en la vista
        $data['map'] = $map->create_map();
        ///////////////////
        $css =  WWW_ROOT.'js/map.js';
        $contenido = $data['map']['js']; //file_get_contents($css);
        file_put_contents($css, $contenido);
        //////////////////////////
        
        $this->set(compact('data')); 
        //$this->layout = 'ajax';
        
        } 
        public function idbranch($id=null){
            
        } 
        public function branchmap(){
            $this->loadModel('Branch');
            $this->loadModel('Map');
            $data = $this->Branch->Map->find('all',array('condition' => array('Branch.id = Map.branch.id')));
            $this->set(compact('data')); 
        }
        public function company($idConpany=null){
            $this->loadModel('Company');
            $datos = $this->Company->find('all',array('conditions'=>array('Company.id'=>$id),'recursive'  => 2));
            $this->set(compact('datos'));
        }
        public function branchescompany($idConpany=null){
            $this->loadModel('Branch');
            $data = $this->Branch->find('all',array('condition' => array('Branch.company_id' => $idConpany)));
            $this->set(compact('data')); 
        }

        public function map(){
            //la zona del mapa que queremos mostrar al cargar el mapa
            //como vemos le podemos pasar la ciudad y el país
            //en lugar de la latitud y la longitud
            $config['center'] = 'Bolivia';
            // el zoom, que lo podemos poner en auto y de esa forma
            //siempre mostrará todos los markers ajustando el zoom   
            $config['zoom'] = 'auto';
            //el tipo de mapa, en el pdf podéis ver más opciones
            $config['map_type'] = 'ROADMAP';
            //el ancho del mapa        
            $config['map_width'] = '80%';    
            //el alto del mapa    
            $config['map_height'] = '600px';    
            //inicializamos la configuración del mapa    

        
            $config['directions'] = TRUE;
            $config['onclick'] =  'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';  
            //inicializamos la configuración del mapa
            $map = new Googlemaps($config);
            //$this->googlemaps->initialize($config);
             $this->loadModel('City');  
        $markers = $this->City->find('all');
        
        foreach($markers as $info_marker)
        {
            $marker = array();
            //podemos elegir DROP o BOUNCE
            $marker ['animation'] = 'DROP';
            //posición de los markers
            $marker ['position'] = $info_marker['City']['latitude'].','.$info_marker['City']['length'];
            //infowindow de los markers(ventana de información)    
            $marker ['infowindow_content'] = $info_marker['City']['name'];
            //la id del marker
            $marker['id'] = $info_marker['City']['id']; 
            $map->add_marker($marker);
 
            //podemos colocar iconos personalizados así de fácil
            //$marker ['icon'] = base_url().'imagenes/'.$fila->imagen;
 
            //si queremos que se pueda arrastrar el marker
            //$marker['draggable'] = TRUE;
            //si queremos darle una id, muy útil
        }
            $marker = array();
            $marker['position'] = '-17.712224,-66.263722';
            $map->add_marker($marker);
            $datos = $map->direccion_datos('-17.712224','-66.263722');
            $data['map'] = $map->create_map();
            $direccion = (isset($datos['route']) ? $datos['route'] : '').(isset($datos['sublocality']) ? $datos['sublocality'] : '' ).(isset($datos['locality']) ? $datos['locality'] : '').(isset($datos['administrative_area_level_2']) ? $datos['administrative_area_level_2'] : '').' ci '.(isset($datos['administrative_area_level_1']) ? $datos['administrative_area_level_1'] : '').' bo  '.(isset($datos['country']) ? $datos['country'] : '');
            $this->set(compact('data','direccion'));
                 

        }
        public function ViewEditCompaniesitems($id=null){
            $this->loadModel('CompaniesItem');  
            $this->loadModel('Item');
            $this->loadModel('CompaniesItemsImage');  
            
            
            
           if (!$this->CompaniesItem->exists($id)) {
            throw new NotFoundException(__('Invalid companies item'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->CompaniesItem->save($this->request->data)) {
                $this->Session->setFlash(__('The companies item has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The companies item could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('CompaniesItem.' . $this->CompaniesItem->primaryKey => $id));
            $this->request->data = $this->CompaniesItem->find('first', $options);
        }
        
        $items = $this->CompaniesItem->Item->find('list');
        $this->set(compact('companies', 'items'));
            
            
        }
        public function registercompaniesitems(){
    
         $this->loadModel('CompaniesItem');  
         $this->loadModel('Item');  
         $this->loadModel('CompaniesItemsImage');  
        
            if ($this->request->is('post')) {
                 $item_id = '';
                for ($i = 0; $i < $this->request->data['CompaniesItem']['cant']; $i++) {
                    
                    $item = $this->Item->find('first',array('conditions'=>array('Item.name'=>$this->request->data['items'.$i])));
                    
                    if(count($item)>0){
                        $item_id = $item['Item']['id']; 
                    }else{
                        $this->Item->create();
                        if($this->Item->save(array('Item'=>array('id'=>null,'name'=>$this->request->data['items'.$i])))){
                            $item_create = $this->Item->find('first',array('order' => 'Item.id DESC'));
                            $item_id = $item_create['Item']['id'];
                           
                            $this->Session->setFlash(__('Se a guardado el item '.$i));
                        }else{
                          
                            $this->Session->setFlash(__('no e a guardado el item '.$i));
                        }
                      
                    }
                    $this->CompaniesItem->create();
                    if ($this->CompaniesItem->save(array('CompaniesItem'=>array('id'=>null,'description'=>$this->request->data['description'.$i],'price'=>$this->request->data['price'.$i],'currency'=>$this->request->data['currency'.$i],'company_id'=>$this->request->data['CompaniesItem']['company_id'],'item_id'=>$item_id)))) {
                          
                        $this->Session->setFlash(__('se a podigo guardar el item empresa'.$i));                          
                            
                        $companyitem_create = $this->CompaniesItem->find('first',array('order' => 'CompaniesItem.id DESC'));
                            
                          foreach ($this->Session->read('imgitem'.$i) as $val){
                               $this->CompaniesItemsImage->create();
                                if ($this->CompaniesItemsImage->save(array('CompaniesItemsImage'=>array('id'=>null,'filename'=>$val['image'],'dir'=>$this->request->data['dir'],'companies_item_id'=>$companyitem_create['CompaniesItem']['id'])))){
                                    
                                    $this->Session->setFlash(__('La imagen del item de la empresa a sigo guardada'));                                        
                                } else {
                                 
                                        $this->Session->setFlash(__('La imagen del item de la empresa no a sigo guardada'));
                                }  
                            }
                            //borrar las sessiones de las imagenes 
                            //con el  primero for recorrer los valores enviados por pos de cad cajo de texto
                               
                           // return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('no se a podigo guardar el item empresa'.$i));
                    }
                }
                
                    
            }
            
        
        }
        public function companiesitems(){
            $idcompany = $this->request->data['idcompany'];
            $this->loadModel('CompaniesItem');  
            $can = $this->request->data['cant'];
            $this->loadModel('Item');
            $data = $this->Item->find('all',array('recursive'  => 0));            
            $dataItems = $this->CompaniesItem->find('all',array('conditions'=>array('CompaniesItem.company_id'=>$idcompany)));
            
            $items=array();
            foreach ($data as $item){
                 $items[] = '"'.$item['Item']['name'].'"';
            }
           $strin_datos = "[". implode(",",$items)."]";  
           $this->set(compact('strin_datos','dataItems','can'));
           $this->layout = 'ajax';
        }
        
        public function registercompany(){
            $this->loadModel('Company');
            $this->loadModel('Category');
            $this->loadModel('Tag');
            $this->loadModel('CompaniesTag');
                      
            if ($this->request->is('post')) {
               if($this->request->data['conpanytag'] != ''){
                   
            //echo "<script>alert('ok');</script>";
               $tag = array_unique(explode(" ", $this->request->data['conpanytag']));   
                foreach ($tag as $val){
                    $can = $this->Tag->find('count',array('conditions'=> array('Tag.name' => $val)));
                    if($can==0){                        
            $this->Tag->create();
                       
            if ($this->Tag->save(array('Tag'=>array('id'=>null,'name'=>$val)))) {
                $this->Session->setFlash(__('El tag se a guardado'));               
            } 
                    }
                }
              

                $this->Company->create();                
            if ($this->Company->save($this->request->data)) {
                $this->Session->setFlash(__('La empresa sea a guardado'));
                //return $this->redirect(array('action' => 'index'));                                
                                $idcompany = $this->Company->find('first',array('order' => 'Company.created DESC'));
                                  foreach ($tag as $val){
                                    $dat = $this->Tag->find('first',array('conditions'=>array('Tag.name' => $val)));
                                    $this->CompaniesTag->create();                                
                                    if($this->CompaniesTag->save(array('CompaniesTag'=>array('id'=>null,'company_id'=>$idcompany['Company']['id'],'tag_id'=>$dat['Tag']['id'])))){
                                        $this->Session->setFlash(__('Los tags de la empresa se an guardado'));
                                    }  else {
                                        $this->Session->setFlash(__('Los Tags de la empresa no se an guardado'));
                                    }
                                 }
                                
                                
            } else {
                $this->Session->setFlash(__('La empresa no se a podido guardar'));
                        }
               }    
            }       
        
                $categories = $this->Category->find('all');
        $subCategories = $this->Company->SubCategory->find('list');     
        $this->set(compact('categories', 'subCategories'));
                
        }

        public function subcategories_option(){
            $this->loadModel('SubCategory');
            if ($this->request->is('post')) {
            $idcategory =  $this->request->data['category'];           
            $subCategories = $this->SubCategory->find('all',array('conditions'=>array('SubCategory.category_id' => $idcategory)));
            $this->set(compact('subCategories','idcategory'));
            }
            $this->layout = 'ajax';
        }
           public function marcaMap(){
               $lat = $this->request->data['lat'];
               $lng = $this->request->data['lng'];          
               $config['directions'] = TRUE;                    
               $map = new Googlemaps($config);                             
               $datos = $map->direccion_datos($lat,$lng);
               $address = (isset($datos['route']) ? $datos['route'] : '').' , '.(isset($datos['sublocality']) ? $datos['sublocality'] : '' ).' , '.(isset($datos['locality']) ? $datos['locality'] : '').' , '.(isset($datos['administrative_area_level_2']) ? $datos['administrative_area_level_2'] : '').' , '.(isset($datos['administrative_area_level_1']) ? $datos['administrative_area_level_1'] : '').' , '.(isset($datos['country']) ? $datos['country'] : '');              
               $this->set(compact('address'));
               $this->layout='ajax';
           }
           public function viewCityMap(){
               $this->loadModel('City');
               
               $id = $this->request->data['id'];
               
               $data = $this->City->find('first',array('conditions'=>array('City.id'=>$id),'recursive'=>0));
               
                $lat = $data['City']['latitude'];
                $lng = $data['City']['length'];
                
                $config['center'] = 'Bolivia';
                $config['zoom'] = 'auto';  
                //$config['onclick'] =  'alert(event.latLng.lat(),event.latLng.lng())';  
                
                $map = new Googlemaps($config);
                $marker['position'] = $lat.','.$lng;
                $marker['draggable'] = true;
                $marker['ondragend'] = 'addressMap(event.latLng.lat(), event.latLng.lng());';
                $map->add_marker($marker); 
                
                $data['map'] = $map->create_map();
                
                $css =  WWW_ROOT.'js/map.js';
                $contenido = $data['map']['js']; //file_get_contents($css);
                file_put_contents($css, $contenido);
                //////////////////////////
                
                $this->set(compact('data')); 
                
                
                
                $this->layout = 'ajax';
           }
           
           
           public function registerDeals(){
               $this->loadModel('Ticket');
               $this->loadModel('Deal');
               if ($this->request->is('post')) {
                    foreach ($this->Session->read('deal') as $val){        
                    $this->request->data['Deal']['filename']=$val['image'];
                     break;
                    }
            $this->Deal->create();
            if ($this->Deal->save($this->request->data)) {
                            
                            $can_tic = $this->request->data['tickets'];
                            $deal_d = $this->Deal->find('first',array('order' => 'Deal.id DESC'));
                            for ($index = 0; $index < $can_tic; $index++) {                                
                                $this->Ticket->create();
                                if ($this->Ticket->save(array('Ticket'=>array('id'=>'','number'=>$index,'create'=>date("Y-m-d H:i:s"),'modified'=>date("Y-m-d H:i:s"),'state'=>'active','deadline'=>$deal_d['Deal']['deadline'],'groups_user_id'=>0,'deal_id'=>$deal_d['Deal']['id'])))) {                                    
                                } 
                                else{
                                    $this->Session->setFlash(__('El ticket no pudo ser guardado'));
                                }
                            }
                $this->Session->setFlash(__('La promocion fue guardada'));
                
            } else {
                $this->Session->setFlash(__('La promocion no fue guardada'));
            }
        }   
        //$branches = $this->Deal->Branch->find('list');
        $this->set(compact('branches'));
                
           }
         public function viewEditDeal($id = null) {
             
             //session img para editar imagenes 
        if (!$this->Deal->exists($id)) {
            throw new NotFoundException(__('Invalid deal'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Deal->save($this->request->data)) {
                $this->Session->setFlash(__('The deal has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The deal could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Deal.' . $this->Deal->primaryKey => $id));
            $this->request->data = $this->Deal->find('first', $options);
        }
        $branches = $this->Deal->Branch->find('list');
        $this->set(compact('branches'));
    }
           
           public function ViewEditBranch($id=null){
                
               $this->loadModel('Branch'); 
               $this->loadModel('City');
               $this->loadModel('GroupsUser');
               
               if (!$this->Branch->exists($id)) {
            throw new NotFoundException(__('Invalid branch'));
        }
        if ($this->request->is(array('post', 'put'))) {
                    
                    foreach ($this->Session->read('branch') as $val){        
                    $this->request->data['Branch']['filename']=$val['image'];
                     break;
                    }
            if ($this->Branch->save($this->request->data)) {
                $this->Session->setFlash(__('The branch has been saved.'));
                //return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The branch could not be saved. Please, try again.'));
            }
        } 
            $options = array('conditions' => array('Branch.' . $this->Branch->primaryKey => $id));
            $this->request->data = $this->Branch->find('first', $options);
                        
                        $this->loadModel('City');
                           

                        //$data = $this->Branch->find('first',array('conditions'=>array('Branch.id'=>$id),'recursive'=>0));
                        
                         $lat = $this->request->data['Branch']['latitude'];
                         $lng = $this->request->data['Branch']['length'];

                         $config['center'] = 'Bolivia';
                         $config['zoom'] = 'auto';
                         $config['map_width'] = '50%';    
                        //el alto del mapa    
                        $config['map_height'] = '300px'; 
                         //$config['onclick'] =  'alert(event.latLng.lat(),event.latLng.lng())';  

                         $map = new Googlemaps($config);
                         $marker['position'] = $lat.','.$lng;
                         $marker['draggable'] = true;
                         $marker['ondragend'] = 'addressMap(event.latLng.lat(), event.latLng.lng());';
                         $map->add_marker($marker); 

                         $data['map'] = $map->create_map();

                         $css =  WWW_ROOT.'js/map.js';
                         $contenido = $data['map']['js']; //file_get_contents($css);
                         file_put_contents($css, $contenido);
                         //////////////////////////
                        $img = array('branch' => array(array('image' => $this->request->data['Branch']['filename'])));
                 
                        $this->Session->write($img);
                        
                $cities = $this->City->find('all',array('recursive'=>0));
        
                $companies = $this->Branch->Company->find('list');
            
                $groupsUsers = $this->GroupsUser->find('all',array('conditions'=>array('GroupsUser.groupuser_id'=>$this->request->data['GroupsUser']['groupuser_id']),'recursive'=>0));
                $array = null;
                $use = null ;
               
                foreach ($cities as $city){
                    $array[$city['City']['id']] = $city['City']['name'];
                }
                foreach ($groupsUsers as $gro_us){
                    $use[$gro_us['GroupsUser']['id']] = $gro_us['User']['first_name'].' '.$gro_us['User']['last_name'];
                }
                
                $id_city = $this->request->data['Branch']['city_id'];
                $id_grupuse = $this->request->data['Branch']['groups_user_id'];
                        //medir el alcanse de datos o redireccion
                $this->set(compact('data','cities','id_city','array' ,'id_grupuse','use' ,'companies', 'groupsUsers'));
              
             $this->layout = 'ajax'; 
           } 
           
           public function registerBranches($id=null){
               $this->loadModel('Branch');
               $this->loadModel('City');
               
               $this->loadModel('GroupsUser');
              if ($this->request->is('post')) {
            
                    foreach ($this->Session->read('branch') as $val){        
                    $this->request->data['Branch']['filename']=$val['image'];
                     break;
                    }
                  $this->Branch->create();
                        
            if ($this->Branch->save($this->request->data)) {
                $this->Session->setFlash(__('La sucursal a sido guardada'));
                
            } else {
                $this->Session->setFlash(__('La sucursal no a sido guardada'));
            }
        }
        $cities = $this->City->find('all',array('recursive'=>0));
        //$companies = $this->Branch->Company->find('list');
            $groupsUsers = $this->GroupsUser->find('all',array('conditions'=>array('GroupsUser.groupuser_id'=>$id),'recursive'=>0));
                $array = null;
                $use = null ;
               
                foreach ($cities as $city){
                    $array[$city['City']['id']] = $city['City']['name'];
                }
                foreach ($groupsUsers as $gro_us){
                    $use[$gro_us['GroupsUser']['id']] = $gro_us['User']['first_name'].' '.$gro_us['User']['last_name'];
                }
            $this->set(compact('array','use'));
                $this->layout = 'ajax';
        }
        public function registeruser(){

            $this->loadModel('User');
            $this->loadModel('Group');
            if ($this->request->is('post')) {
                foreach ($this->Session->read('user') as $val){        
                $this->request->data['User']['filename']=$val['image'];
                 break;
                }                                                
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                        $this->Session->setFlash(__('El usuario fue guardado'));
                        //return $this->redirect(array('action' => 'index'));
                } else {
                        $this->Session->setFlash(__('El usuario no fue guardado'));
                }
            }
            $groups = $this->User->Group->find('list');
            $this->set(compact('action','groups'));
        }
        
        //asignar a una funcion en ajx para q pueda psar el ide sin afectar el formulario
        public function editUsers(){
            $this->loadModel('User');
            $this->loadModel('Group');
            if ($this->request->is(array('post', 'put'))) {
             if (!$this->User->exists($this->request->data['id'])) {
                   echo "<script>alert('error')</script>" ;
                 throw new NotFoundException(__('Invalid user'));
                        
        }
                     if($this->Session->check('user')){ 
                        foreach ($this->Session->read('user') as $val){        
                        $this->request->data['User']['filename']=$val['image'];
                         break;
                        } 
                     }
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                //return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
         }
        }
        public function ViewEditCompany($id=null){
            $this->loadModel('Company');
            $this->loadModel('Category');
            $this->loadModel('Tag');
            $this->loadModel('CompaniesTag');
            
            if (!$this->Company->exists($id)) {
            throw new NotFoundException(__('Invalid company'));
        }
        if ($this->request->is(array('post', 'put'))) {                                      

                    
                    
                $alltags = $this->CompaniesTag->find('all',array('conditions'=>array('CompaniesTag.company_id'=>$id)));   
                foreach ($alltags as $val){
                    $this->CompaniesTag->id = $val['CompaniesTag']['id'];                    
                    if (!$this->CompaniesTag->exists()) {
                            throw new NotFoundException(__('El tag no existe'));
                    }
                    //revisar que no se elimine la accion post
                    //$this->request->onlyAllow('post', 'delete');
                    if ($this->CompaniesTag->delete()) {
                            $this->Session->setFlash(__('El tag fue eliminado'));
                    }

                } 
                    
               if($this->request->data['conpanytag'] != ''){    
               $tag = explode(" ", $this->request->data['conpanytag']);   
                    foreach ($tag as $val){
                        $can = $this->Tag->find('count',array('conditions'=> array('Tag.name' => $val)));
                        if($can==0){                        
                            $this->Tag->create();

                            if ($this->Tag->save(array('Tag'=>array('id'=>null,'name'=>$val)))) {
                                    $this->Session->setFlash(__('El tag se a guardado'));               
                            } 
                        }
                    }                                         
                if ($this->Company->save($this->request->data)) {
                        $this->Session->setFlash(__('La empresa sea a guardado'));
                        //return $this->redirect(array('action' => 'index'));                                
                        
                          foreach ($tag as $val){
                            $dat = $this->Tag->find('first',array('conditions'=>array('Tag.name' => $val)));
                            $this->CompaniesTag->create();                                
                            if($this->CompaniesTag->save(array('CompaniesTag'=>array('id'=>null,'company_id'=>$id,'tag_id'=>$dat['Tag']['id'])))){
                                $this->Session->setFlash(__('Los tags de la empresa se an guardado'));
                            }  else {
                                $this->Session->setFlash(__('Los Tags de la empresa no se an guardado'));
                            }
                         }


                } else {
                        $this->Session->setFlash(__('La empresa no se a podido guardar'));
                }
               }    
        } else {
            $options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
            $this->request->data = $this->Company->find('first', $options);
        }
        //$groupsUsers = $this->Company->GroupsUser->find('list');
        //$items = $this->Company->Item->find('list');
                $categories = $this->Category->find('all');
        $subCategories = $this->Company->SubCategory->find('list');
        $tags = $this->CompaniesTag->find('all',array('conditions'=>array('CompaniesTag.company_id'=>$id)));
             
                
                 /* pasar todos los tag al cajon tags */ 
        $this->set(compact('categories','subCategories', 'tags'));
                $this->layout = 'ajax';
                
        }

        public function ViewEditUser($id = null){
            $this->loadModel('User');
            $this->loadModel('Group');
            if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
                 if ($this->request->is(array('post', 'put'))) {
                     
                        if($this->Session->check('user')){ 
                            foreach ($this->Session->read('user') as $val){        
                            $this->request->data['User']['filename']=$val['image'];

                            } 
                         }
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                //return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
                 }else{
                        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
                        $this->request->data = $this->User->find('first', $options);
                        $img = array('user' => array(array('image' => $this->request->data['User']['filename'])));                 
                        $this->Session->write($img);
                 } 
                
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));  
                $this->layout = "ajax";
        }
        public function img_remove(){ 
             if ($this->request->is('post')) {
                $dir = $this->request->data['dir'];
                $namesession = $this->request->data['sname'];
                $id = $this->request->data['id'];
                unlink(WWW_ROOT.$dir);
                $va  = array($namesession => $this->Session->read($namesession));
                $this->Session->delete($namesession);
                unset($va[$namesession][$id]);
                $this->Session->write($va);
               // $nuevo = $va;
                $this->set(compact('va'));
             }
            $this->layout = 'ajax';
        }
        public function image(){
            $sessio_name = $this->request->data['name'];
            $dir = $this->request->data['dir'];
            $can = $this->request->data['can'];
            $upload_folder = WWW_ROOT.$dir;
            if(isset($_FILES['archivo']['name'])){
                
            $nombre_archivo = $_FILES['archivo']['name'];

            $tipo_archivo = $_FILES['archivo']['type'];

            $tamano_archivo = $_FILES['archivo']['size'];

            $tmp_archivo = $_FILES['archivo']['tmp_name'];

            //$archivador = $upload_folder . '/' . $nombre_archivo;
            $name = $tamano_archivo.md5(uniqid(mt_rand(), false)).'.jpeg';
            $archivador = $upload_folder . '/' . $name;
            
            
            if ( strpos($tipo_archivo, "jpeg") && $tamano_archivo/1000 < 5120 ) { 
                if(!move_uploaded_file($tmp_archivo, $archivador)) {

                $this->Session->setFlash("Ocurrio un error al subir el archivo. No pudo guardarse.");

                }else{

                
                 $img =null;
                 if($this->Session->check($sessio_name)){ 
                 if($can=='uno'){ 
                    foreach ($this->Session->read($sessio_name) as $val){        
                          unlink($upload_folder.'/'.$val['image']);
                        break;
                      } 
                    $this->Session->delete($sessio_name);
                 }
                    $img =  array($sessio_name=> array_merge(array(array('image' => $name)),(array)$this->Session->read($sessio_name)));
                 }else{
                    $img = array($sessio_name => array(array('image' => $name)));
                 }
                 $this->Session->write($img);
                }
               
             }else{  
                 //revisar ñ ´ acentos no ecodifica cuando muestra imagen
                 $this->Session->setFlash('El archivo no es valido o el tamahno es mas de 5megas revise por favor '.$tamano_archivo/1000);
            
             }
             $this->set(compact('sessio_name','dir')); 
             }
             
            $this->layout = 'ajax';
            sleep(2);
        }
                
}








































