<?php
App::uses('AppController', 'Controller');
/**
 * ClassTypes Controller
 *
 * @property ClassType $ClassType
 */
class ClassTypesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Text', 'Js', 'Time');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClassType->recursive = 0;
		$this->set('classTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClassType->exists($id)) {
			throw new NotFoundException(__('Invalid class type'));
		}
		$options = array('conditions' => array('ClassType.' . $this->ClassType->primaryKey => $id));
		$this->set('classType', $this->ClassType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClassType->create();
			if ($this->ClassType->save($this->request->data)) {
				$this->Session->setFlash(__('The class type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The class type could not be saved. Please, try again.'));
			}
		}
		$designWorkspaces = $this->ClassType->DesignWorkspace->find('list');
		$this->set(compact('designWorkspaces'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClassType->exists($id)) {
			throw new NotFoundException(__('Invalid class type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClassType->save($this->request->data)) {
				$this->Session->setFlash(__('The class type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The class type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClassType.' . $this->ClassType->primaryKey => $id));
			$this->request->data = $this->ClassType->find('first', $options);
		}
		$designWorkspaces = $this->ClassType->DesignWorkspace->find('list');
		$this->set(compact('designWorkspaces'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ClassType->id = $id;
		if (!$this->ClassType->exists()) {
			throw new NotFoundException(__('Invalid class type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClassType->delete()) {
			$this->Session->setFlash(__('Class type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Class type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
