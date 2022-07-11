<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bidrequest Controller
 *
 * @property \App\Model\Table\BidrequestTable $Bidrequest
 * @method \App\Model\Entity\Bidrequest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BidrequestController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Biditems', 'Users'],
        ];
        $bidrequest = $this->paginate($this->Bidrequest);

        $this->set(compact('bidrequest'));
    }

    /**
     * View method
     *
     * @param string|null $id Bidrequest id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidrequest = $this->Bidrequest->get($id, [
            'contain' => ['Biditems', 'Users'],
        ]);

        $this->set(compact('bidrequest'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidrequest = $this->Bidrequest->newEmptyEntity();
        if ($this->request->is('post')) {
            $bidrequest = $this->Bidrequest->patchEntity($bidrequest, $this->request->getData());
            if ($this->Bidrequest->save($bidrequest)) {
                $this->Flash->success(__('The bidrequest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidrequest could not be saved. Please, try again.'));
        }
        $biditems = $this->Bidrequest->Biditems->find('list', ['limit' => 200])->all();
        $users = $this->Bidrequest->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('bidrequest', 'biditems', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bidrequest id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidrequest = $this->Bidrequest->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidrequest = $this->Bidrequest->patchEntity($bidrequest, $this->request->getData());
            if ($this->Bidrequest->save($bidrequest)) {
                $this->Flash->success(__('The bidrequest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidrequest could not be saved. Please, try again.'));
        }
        $biditems = $this->Bidrequest->Biditems->find('list', ['limit' => 200])->all();
        $users = $this->Bidrequest->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('bidrequest', 'biditems', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bidrequest id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidrequest = $this->Bidrequest->get($id);
        if ($this->Bidrequest->delete($bidrequest)) {
            $this->Flash->success(__('The bidrequest has been deleted.'));
        } else {
            $this->Flash->error(__('The bidrequest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
