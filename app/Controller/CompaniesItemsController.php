<?php
App::uses('AppController', 'Controller');
/**
 * CompaniesItems Controller
 *
 * @property CompaniesItem $CompaniesItem
 * @property PaginatorComponent $Paginator
 */
class CompaniesItemsController extends AppController {

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
		$this->CompaniesItem->recursive = 0;
		$this->set('companiesItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompaniesItem->exists($id)) {
			throw new NotFoundException(__('Invalid companies item'));
		}
		$options = array('conditions' => array('CompaniesItem.' . $this->CompaniesItem->primaryKey => $id));
		$this->set('companiesItem', $this->CompaniesItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompaniesItem->create();
			if ($this->CompaniesItem->save($this->request->data)) {
				$this->Session->setFlash(__('The companies item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies item could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompaniesItem->Company->find('list');
		$items = $this->CompaniesItem->Item->find('list');
		$this->set(compact('companies', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
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
		$companies = $this->CompaniesItem->Company->find('list');
		$items = $this->CompaniesItem->Item->find('list');
		$this->set(compact('companies', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompaniesItem->id = $id;
		if (!$this->CompaniesItem->exists()) {
			throw new NotFoundException(__('Invalid companies item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompaniesItem->delete()) {
			$this->Session->setFlash(__('The companies item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companies item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
