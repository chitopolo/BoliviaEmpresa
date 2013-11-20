<?php
App::uses('AppController', 'Controller');
/**
 * CompaniesSubCategories Controller
 *
 * @property CompaniesSubCategory $CompaniesSubCategory
 * @property PaginatorComponent $Paginator
 */
class CompaniesSubCategoriesController extends AppController {

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
		$this->CompaniesSubCategory->recursive = 0;
		$this->set('companiesSubCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompaniesSubCategory->exists($id)) {
			throw new NotFoundException(__('Invalid companies sub category'));
		}
		$options = array('conditions' => array('CompaniesSubCategory.' . $this->CompaniesSubCategory->primaryKey => $id));
		$this->set('companiesSubCategory', $this->CompaniesSubCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompaniesSubCategory->create();
			if ($this->CompaniesSubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The companies sub category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies sub category could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompaniesSubCategory->Company->find('list');
		$subCategories = $this->CompaniesSubCategory->SubCategory->find('list');
		$this->set(compact('companies', 'subCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompaniesSubCategory->exists($id)) {
			throw new NotFoundException(__('Invalid companies sub category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompaniesSubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The companies sub category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies sub category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompaniesSubCategory.' . $this->CompaniesSubCategory->primaryKey => $id));
			$this->request->data = $this->CompaniesSubCategory->find('first', $options);
		}
		$companies = $this->CompaniesSubCategory->Company->find('list');
		$subCategories = $this->CompaniesSubCategory->SubCategory->find('list');
		$this->set(compact('companies', 'subCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompaniesSubCategory->id = $id;
		if (!$this->CompaniesSubCategory->exists()) {
			throw new NotFoundException(__('Invalid companies sub category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompaniesSubCategory->delete()) {
			$this->Session->setFlash(__('The companies sub category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companies sub category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
