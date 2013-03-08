<?php
App::uses('AppController', 'Controller');
/**
 * DesignWorkspaces Controller
 *
 * @property DesignWorkspace $DesignWorkspace
 */
class DesignWorkspacesController extends AppController {

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
		$this->DesignWorkspace->recursive = 0;
		$this->set('designWorkspaces', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DesignWorkspace->exists($id)) {
			throw new NotFoundException(__('Invalid design workspace'));
		}
		$options = array('conditions' => array('DesignWorkspace.' . $this->DesignWorkspace->primaryKey => $id));
		$this->set('designWorkspace', $this->DesignWorkspace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DesignWorkspace->create();
			if ($this->DesignWorkspace->save($this->request->data)) {
				$this->Session->setFlash(__('The design workspace has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The design workspace could not be saved. Please, try again.'));
			}
		}
		$projects = $this->DesignWorkspace->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DesignWorkspace->exists($id)) {
			throw new NotFoundException(__('Invalid design workspace'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DesignWorkspace->save($this->request->data)) {
				$this->Session->setFlash(__('The design workspace has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The design workspace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DesignWorkspace.' . $this->DesignWorkspace->primaryKey => $id));
			$this->request->data = $this->DesignWorkspace->find('first', $options);
		}
		$projects = $this->DesignWorkspace->Project->find('list');
		$this->set(compact('projects'));
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
		$this->DesignWorkspace->id = $id;
		if (!$this->DesignWorkspace->exists()) {
			throw new NotFoundException(__('Invalid design workspace'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DesignWorkspace->delete()) {
			$this->Session->setFlash(__('Design workspace deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Design workspace was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
