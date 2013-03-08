<?php
App::uses('AppController', 'Controller');
/**
 * OperationInputParameters Controller
 *
 * @property OperationInputParameter $OperationInputParameter
 */
class OperationInputParametersController extends AppController {

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
		$this->OperationInputParameter->recursive = 0;
		$this->set('operationInputParameters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OperationInputParameter->exists($id)) {
			throw new NotFoundException(__('Invalid operation input parameter'));
		}
		$options = array('conditions' => array('OperationInputParameter.' . $this->OperationInputParameter->primaryKey => $id));
		$this->set('operationInputParameter', $this->OperationInputParameter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OperationInputParameter->create();
			if ($this->OperationInputParameter->save($this->request->data)) {
				$this->Session->setFlash(__('The operation input parameter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation input parameter could not be saved. Please, try again.'));
			}
		}
		$operations = $this->OperationInputParameter->Operation->find('list');
		$classTypes = $this->OperationInputParameter->ClassType->find('list');
		$this->set(compact('operations', 'classTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OperationInputParameter->exists($id)) {
			throw new NotFoundException(__('Invalid operation input parameter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OperationInputParameter->save($this->request->data)) {
				$this->Session->setFlash(__('The operation input parameter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation input parameter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OperationInputParameter.' . $this->OperationInputParameter->primaryKey => $id));
			$this->request->data = $this->OperationInputParameter->find('first', $options);
		}
		$operations = $this->OperationInputParameter->Operation->find('list');
		$classTypes = $this->OperationInputParameter->ClassType->find('list');
		$this->set(compact('operations', 'classTypes'));
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
		$this->OperationInputParameter->id = $id;
		if (!$this->OperationInputParameter->exists()) {
			throw new NotFoundException(__('Invalid operation input parameter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OperationInputParameter->delete()) {
			$this->Session->setFlash(__('Operation input parameter deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Operation input parameter was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
