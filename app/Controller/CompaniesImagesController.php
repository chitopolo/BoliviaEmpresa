<?php
App::uses('AppController', 'Controller');
/**
 * CompaniesImages Controller
 *
 * @property CompaniesImage $CompaniesImage
 * @property PaginatorComponent $Paginator
 */
class CompaniesImagesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	
		public $helpers = array('FormEnum');
		
	public function index() {
		$this->CompaniesImage->recursive = 0;
		$this->set('companiesImages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompaniesImage->exists($id)) {
			throw new NotFoundException(__('Invalid companies image'));
		}
		$options = array('conditions' => array('CompaniesImage.' . $this->CompaniesImage->primaryKey => $id));
		$this->set('companiesImage', $this->CompaniesImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompaniesImage->create();
			if ($this->CompaniesImage->save($this->request->data)) {
				$this->Session->setFlash(__('The companies image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies image could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompaniesImage->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompaniesImage->exists($id)) {
			throw new NotFoundException(__('Invalid companies image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompaniesImage->save($this->request->data)) {
				$this->Session->setFlash(__('The companies image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompaniesImage.' . $this->CompaniesImage->primaryKey => $id));
			$this->request->data = $this->CompaniesImage->find('first', $options);
		}
		$companies = $this->CompaniesImage->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompaniesImage->id = $id;
		if (!$this->CompaniesImage->exists()) {
			throw new NotFoundException(__('Invalid companies image'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompaniesImage->delete()) {
			$this->Session->setFlash(__('The companies image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companies image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
