<?php
App::uses('AppController', 'Controller');
/**
 * CompaniesItemsImages Controller
 *
 * @property CompaniesItemsImage $CompaniesItemsImage
 * @property PaginatorComponent $Paginator
 */
class CompaniesItemsImagesController extends AppController {

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
	public function index() {
		$this->CompaniesItemsImage->recursive = 0;
		$this->set('companiesItemsImages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompaniesItemsImage->exists($id)) {
			throw new NotFoundException(__('Invalid companies items image'));
		}
		$options = array('conditions' => array('CompaniesItemsImage.' . $this->CompaniesItemsImage->primaryKey => $id));
		$this->set('companiesItemsImage', $this->CompaniesItemsImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompaniesItemsImage->create();
			if ($this->CompaniesItemsImage->save($this->request->data)) {
				$this->Session->setFlash(__('The companies items image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies items image could not be saved. Please, try again.'));
			}
		}
		$companiesItems = $this->CompaniesItemsImage->CompaniesItem->find('list');
		$this->set(compact('companiesItems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompaniesItemsImage->exists($id)) {
			throw new NotFoundException(__('Invalid companies items image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompaniesItemsImage->save($this->request->data)) {
				$this->Session->setFlash(__('The companies items image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies items image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompaniesItemsImage.' . $this->CompaniesItemsImage->primaryKey => $id));
			$this->request->data = $this->CompaniesItemsImage->find('first', $options);
		}
		$companiesItems = $this->CompaniesItemsImage->CompaniesItem->find('list');
		$this->set(compact('companiesItems'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompaniesItemsImage->id = $id;
		if (!$this->CompaniesItemsImage->exists()) {
			throw new NotFoundException(__('Invalid companies items image'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompaniesItemsImage->delete()) {
			$this->Session->setFlash(__('The companies items image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companies items image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
