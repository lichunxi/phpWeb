<?php


/*
 * Created on 2013��11��5��
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

class PostsController extends AppController {

	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('id is null'));
		}

		$postData = $this->Post->findById($id);
		if (!$postData) {
			throw new NotFoundException(__('no data'));
		}
		$this->set('post', $postData);
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('save successfully.'));
				return $this->redirect(array (
					'action' => 'index'
				));
			}
			$this->Session->setFlash(_('save fail.'));
		}
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('id is null'));
		}

		$postData = $this->Post->findById($id);
		if (!$postData) {
			throw new NotFoundException(__('no data'));
		}

		if ($this->request->is(array (
				'post',
				'put'
			))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('update successfully.'));
				return $this->redirect(array (
					'action' => 'index'
				));
			}
			$this->Session->setFlash(_('update fail.'));
		}
		if (!$this->request->data) {
			$this->request->data = $postData;
		}
	}
	
	public function delete($id = null){
		if ($this->Post->delete($id)) {
				$this->Session->setFlash(__('delete %s successfully.', h($id)));
				return $this->redirect(array (
					'action' => 'index'
				));
			}
			$this->Session->setFlash(_('delete %s fail.', h($id)));
	}
}
?>
