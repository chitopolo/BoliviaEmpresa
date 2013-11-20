<?php
App::uses('AppController', 'Controller');
/**
 * Imgs Controller
 *
 * @property Img $Img
 * @property PaginatorComponent $Paginator
 */
class ImgsController extends AppController {

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
		$this->Img->recursive = 0;
		$this->set('imgs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Img->exists($id)) {
			throw new NotFoundException(__('Invalid img'));
		}
		$options = array('conditions' => array('Img.' . $this->Img->primaryKey => $id));
		$this->set('img', $this->Img->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Img->create();
			if ($this->Img->save($this->request->data)) {
				$this->Session->setFlash(__('The img has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The img could not be saved. Please, try again.'));
			}
		}
		$companyItems = $this->Img->CompanyItem->find('list');
		$this->set(compact('companyItems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Img->exists($id)) {
			throw new NotFoundException(__('Invalid img'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Img->save($this->request->data)) {
				$this->Session->setFlash(__('The img has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The img could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Img.' . $this->Img->primaryKey => $id));
			$this->request->data = $this->Img->find('first', $options);
		}
		$companyItems = $this->Img->CompanyItem->find('list');
		$this->set(compact('companyItems'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Img->id = $id;
		if (!$this->Img->exists()) {
			throw new NotFoundException(__('Invalid img'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Img->delete()) {
			$this->Session->setFlash(__('The img has been deleted.'));
		} else {
			$this->Session->setFlash(__('The img could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
