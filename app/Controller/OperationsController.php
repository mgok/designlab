<?php
App::uses('AppController', 'Controller');
/**
 * Operations Controller
 *
 * @property Operation $Operation
 */
class OperationsController extends AppController {

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
		$this->Operation->recursive = 0;
		$this->set('operations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Operation->exists($id)) {
			throw new NotFoundException(__('Invalid operation'));
		}
		$options = array('conditions' => array('Operation.' . $this->Operation->primaryKey => $id));
		$this->set('operation', $this->Operation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Operation->create();
			if ($this->Operation->save($this->request->data)) {
				$this->Session->setFlash(__('The operation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.'));
			}
		}
		$designWorkspaces = $this->Operation->DesignWorkspace->find('list');
		$outputClassTypes = $this->Operation->OutputClassType->find('list');
		$this->set(compact('designWorkspaces', 'outputClassTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Operation->exists($id)) {
			throw new NotFoundException(__('Invalid operation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Operation->save($this->request->data)) {
				$this->Session->setFlash(__('The operation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Operation.' . $this->Operation->primaryKey => $id));
			$this->request->data = $this->Operation->find('first', $options);
		}
		$designWorkspaces = $this->Operation->DesignWorkspace->find('list');
		$outputClassTypes = $this->Operation->OutputClassType->find('list');
		$this->set(compact('designWorkspaces', 'outputClassTypes'));
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
		$this->Operation->id = $id;
		if (!$this->Operation->exists()) {
			throw new NotFoundException(__('Invalid operation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Operation->delete()) {
			$this->Session->setFlash(__('Operation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Operation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
