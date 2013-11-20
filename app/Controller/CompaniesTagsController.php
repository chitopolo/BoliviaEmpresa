<?php
App::uses('AppController', 'Controller');
/**
 * CompaniesTags Controller
 *
 * @property CompaniesTag $CompaniesTag
 * @property PaginatorComponent $Paginator
 */
class CompaniesTagsController extends AppController {

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
		$this->CompaniesTag->recursive = 0;
		$this->set('companiesTags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompaniesTag->exists($id)) {
			throw new NotFoundException(__('Invalid companies tag'));
		}
		$options = array('conditions' => array('CompaniesTag.' . $this->CompaniesTag->primaryKey => $id));
		$this->set('companiesTag', $this->CompaniesTag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompaniesTag->create();
			if ($this->CompaniesTag->save($this->request->data)) {
				$this->Session->setFlash(__('The companies tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies tag could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompaniesTag->Company->find('list');
		$tags = $this->CompaniesTag->Tag->find('list');
		$this->set(compact('companies', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompaniesTag->exists($id)) {
			throw new NotFoundException(__('Invalid companies tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompaniesTag->save($this->request->data)) {
				$this->Session->setFlash(__('The companies tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompaniesTag.' . $this->CompaniesTag->primaryKey => $id));
			$this->request->data = $this->CompaniesTag->find('first', $options);
		}
		$companies = $this->CompaniesTag->Company->find('list');
		$tags = $this->CompaniesTag->Tag->find('list');
		$this->set(compact('companies', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompaniesTag->id = $id;
		if (!$this->CompaniesTag->exists()) {
			throw new NotFoundException(__('Invalid companies tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompaniesTag->delete()) {
			$this->Session->setFlash(__('The companies tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companies tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
