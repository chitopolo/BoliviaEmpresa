<?php
App::uses('AppController', 'Controller');
/**
 * Consultations Controller
 *
 * @property Consultation $Consultation
 * @property PaginatorComponent $Paginator
 */
class ConsultationsController extends AppController {

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
		$this->Consultation->recursive = 0;
		$this->set('consultations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Consultation->exists($id)) {
			throw new NotFoundException(__('Invalid consultation'));
		}
		$options = array('conditions' => array('Consultation.' . $this->Consultation->primaryKey => $id));
		$this->set('consultation', $this->Consultation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Consultation->create();
			if ($this->Consultation->save($this->request->data)) {
				$this->Session->setFlash(__('The consultation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consultation could not be saved. Please, try again.'));
			}
		}
		$branches = $this->Consultation->Branch->find('list');
		$groupsUsers = $this->Consultation->GroupsUser->find('list');
		$this->set(compact('branches', 'groupsUsers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Consultation->exists($id)) {
			throw new NotFoundException(__('Invalid consultation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Consultation->save($this->request->data)) {
				$this->Session->setFlash(__('The consultation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consultation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Consultation.' . $this->Consultation->primaryKey => $id));
			$this->request->data = $this->Consultation->find('first', $options);
		}
		$branches = $this->Consultation->Branch->find('list');
		$groupsUsers = $this->Consultation->GroupsUser->find('list');
		$this->set(compact('branches', 'groupsUsers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Consultation->id = $id;
		if (!$this->Consultation->exists()) {
			throw new NotFoundException(__('Invalid consultation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Consultation->delete()) {
			$this->Session->setFlash(__('The consultation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The consultation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
