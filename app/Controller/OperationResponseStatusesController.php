<?php
App::uses('AppController', 'Controller');
/**
 * OperationResponseStatuses Controller
 *
 * @property OperationResponseStatus $OperationResponseStatus
 */
class OperationResponseStatusesController extends AppController {

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
		$this->OperationResponseStatus->recursive = 0;
		$this->set('operationResponseStatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OperationResponseStatus->exists($id)) {
			throw new NotFoundException(__('Invalid operation response status'));
		}
		$options = array('conditions' => array('OperationResponseStatus.' . $this->OperationResponseStatus->primaryKey => $id));
		$this->set('operationResponseStatus', $this->OperationResponseStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OperationResponseStatus->create();
			if ($this->OperationResponseStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The operation response status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation response status could not be saved. Please, try again.'));
			}
		}
		$operations = $this->OperationResponseStatus->Operation->find('list');
		$this->set(compact('operations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OperationResponseStatus->exists($id)) {
			throw new NotFoundException(__('Invalid operation response status'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OperationResponseStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The operation response status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation response status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OperationResponseStatus.' . $this->OperationResponseStatus->primaryKey => $id));
			$this->request->data = $this->OperationResponseStatus->find('first', $options);
		}
		$operations = $this->OperationResponseStatus->Operation->find('list');
		$this->set(compact('operations'));
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
		$this->OperationResponseStatus->id = $id;
		if (!$this->OperationResponseStatus->exists()) {
			throw new NotFoundException(__('Invalid operation response status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OperationResponseStatus->delete()) {
			$this->Session->setFlash(__('Operation response status deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Operation response status was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
