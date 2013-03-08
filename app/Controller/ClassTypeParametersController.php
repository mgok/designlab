<?php
App::uses('AppController', 'Controller');
/**
 * ClassTypeParameters Controller
 *
 * @property ClassTypeParameter $ClassTypeParameter
 */
class ClassTypeParametersController extends AppController {

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
		$this->ClassTypeParameter->recursive = 0;
		$this->set('classTypeParameters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClassTypeParameter->exists($id)) {
			throw new NotFoundException(__('Invalid class type parameter'));
		}
		$options = array('conditions' => array('ClassTypeParameter.' . $this->ClassTypeParameter->primaryKey => $id));
		$this->set('classTypeParameter', $this->ClassTypeParameter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClassTypeParameter->create();
			if ($this->ClassTypeParameter->save($this->request->data)) {
				$this->Session->setFlash(__('The class type parameter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The class type parameter could not be saved. Please, try again.'));
			}
		}
		$classTypes = $this->ClassTypeParameter->ClassType->find('list');
		$ownerClassTypes = $this->ClassTypeParameter->OwnerClassType->find('list');
		$this->set(compact('classTypes', 'ownerClassTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClassTypeParameter->exists($id)) {
			throw new NotFoundException(__('Invalid class type parameter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClassTypeParameter->save($this->request->data)) {
				$this->Session->setFlash(__('The class type parameter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The class type parameter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClassTypeParameter.' . $this->ClassTypeParameter->primaryKey => $id));
			$this->request->data = $this->ClassTypeParameter->find('first', $options);
		}
		$classTypes = $this->ClassTypeParameter->ClassType->find('list');
		$ownerClassTypes = $this->ClassTypeParameter->OwnerClassType->find('list');
		$this->set(compact('classTypes', 'ownerClassTypes'));
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
		$this->ClassTypeParameter->id = $id;
		if (!$this->ClassTypeParameter->exists()) {
			throw new NotFoundException(__('Invalid class type parameter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClassTypeParameter->delete()) {
			$this->Session->setFlash(__('Class type parameter deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Class type parameter was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
