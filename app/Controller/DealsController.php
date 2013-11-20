<?php
App::uses('AppController', 'Controller');
/**
 * Deals Controller
 *
 * @property Deal $Deal
 * @property PaginatorComponent $Paginator
 */
class DealsController extends AppController {

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
		$this->Deal->recursive = 0;
		$this->set('deals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deal->exists($id)) {
			throw new NotFoundException(__('Invalid deal'));
		}
		$options = array('conditions' => array('Deal.' . $this->Deal->primaryKey => $id));
		$this->set('deal', $this->Deal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Deal->create();
			if ($this->Deal->save($this->request->data)) {
				$this->Session->setFlash(__('The deal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deal could not be saved. Please, try again.'));
			}
		}
		$branches = $this->Deal->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
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

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Deal->id = $id;
		if (!$this->Deal->exists()) {
			throw new NotFoundException(__('Invalid deal'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Deal->delete()) {
			$this->Session->setFlash(__('The deal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The deal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
