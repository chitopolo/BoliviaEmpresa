<?php
App::uses('AppController', 'Controller');
/**
 * SubCategories Controller
 *
 * @property SubCategory $SubCategory
 * @property PaginatorComponent $Paginator
 */
class SubCategoriesController extends AppController {

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
		$this->SubCategory->recursive = 0;
		$this->set('subCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubCategory->exists($id)) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		$options = array('conditions' => array('SubCategory.' . $this->SubCategory->primaryKey => $id));
		$this->set('subCategory', $this->SubCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubCategory->create();
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'));
			}
		}
		$categories = $this->SubCategory->Category->find('list');
		$companies = $this->SubCategory->Company->find('list');
		$this->set(compact('categories', 'companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubCategory->exists($id)) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubCategory.' . $this->SubCategory->primaryKey => $id));
			$this->request->data = $this->SubCategory->find('first', $options);
		}
		$categories = $this->SubCategory->Category->find('list');
		$companies = $this->SubCategory->Company->find('list');
		$this->set(compact('categories', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubCategory->id = $id;
		if (!$this->SubCategory->exists()) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubCategory->delete()) {
			$this->Session->setFlash(__('The sub category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sub category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
