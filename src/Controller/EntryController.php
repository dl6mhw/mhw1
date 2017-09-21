<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entry Controller
 *
 * @property \App\Model\Table\EntryTable $Entry
 *
 * @method \App\Model\Entity\Entry[] paginate($object = null, array $settings = [])
 */
class EntryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $entry = $this->paginate($this->Entry);

        $this->set(compact('entry'));
        $this->set('_serialize', ['entry']);
    }

    /**
     * View method
     *
     * @param string|null $id Entry id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entry = $this->Entry->get($id, [
            'contain' => []
        ]);

        $this->set('entry', $entry);
        $this->set('_serialize', ['entry']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entry = $this->Entry->newEntity();
        if ($this->request->is('post')) {
            $entry = $this->Entry->patchEntity($entry, $this->request->getData());
            if ($this->Entry->save($entry)) {
                $this->Flash->success(__('The entry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entry could not be saved. Please, try again.'));
        }
        $this->set(compact('entry'));
        $this->set('_serialize', ['entry']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entry id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entry = $this->Entry->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entry = $this->Entry->patchEntity($entry, $this->request->getData());
            if ($this->Entry->save($entry)) {
                $this->Flash->success(__('The entry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entry could not be saved. Please, try again.'));
        }
        $this->set(compact('entry'));
        $this->set('_serialize', ['entry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entry id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entry = $this->Entry->get($id);
        if ($this->Entry->delete($entry)) {
            $this->Flash->success(__('The entry has been deleted.'));
        } else {
            $this->Flash->error(__('The entry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
