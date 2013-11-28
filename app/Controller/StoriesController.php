<?php
App::uses('AppController', 'Controller');
/**
 * Stories Controller
 *
 * @property Story $Story
 * @property PaginatorComponent $Paginator
 */
class StoriesController extends AppController {

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
		$this->Story->recursive = 0;
		$this->set('stories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Story->exists($id)) {
			throw new NotFoundException(__('Invalid story'));
		}
		$options = array('conditions' => array('Story.' . $this->Story->primaryKey => $id));
		$this->set('story', $this->Story->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Story->create();
			if ($this->Story->save($this->request->data)) {
				$this->Session->setFlash(__('The story has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The story could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
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

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Story->id = $id;
		if (!$this->Story->exists()) {
			throw new NotFoundException(__('Invalid story'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Story->delete()) {
			$this->Session->setFlash(__('The story has been deleted.'));
		} else {
			$this->Session->setFlash(__('The story could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
