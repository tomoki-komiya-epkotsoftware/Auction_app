<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bidmessage Controller
 *
 * @property \App\Model\Table\BidmessageTable $Bidmessage
 * @method \App\Model\Entity\Bidmessage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BidmessageController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bidinfos', 'Users'],
        ];
        $bidmessage = $this->paginate($this->Bidmessage);

        $this->set(compact('bidmessage'));
    }

    /**
     * View method
     *
     * @param string|null $id Bidmessage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidmessage = $this->Bidmessage->get($id, [
            'contain' => ['Bidinfos', 'Users'],
        ]);

        $this->set(compact('bidmessage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidmessage = $this->Bidmessage->newEmptyEntity();
        if ($this->request->is('post')) {
            $bidmessage = $this->Bidmessage->patchEntity($bidmessage, $this->request->getData());
            if ($this->Bidmessage->save($bidmessage)) {
                $this->Flash->success(__('The bidmessage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidmessage could not be saved. Please, try again.'));
        }
        $bidinfos = $this->Bidmessage->Bidinfos->find('list', ['limit' => 200])->all();
        $users = $this->Bidmessage->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('bidmessage', 'bidinfos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bidmessage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidmessage = $this->Bidmessage->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidmessage = $this->Bidmessage->patchEntity($bidmessage, $this->request->getData());
            if ($this->Bidmessage->save($bidmessage)) {
                $this->Flash->success(__('The bidmessage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidmessage could not be saved. Please, try again.'));
        }
        $bidinfos = $this->Bidmessage->Bidinfos->find('list', ['limit' => 200])->all();
        $users = $this->Bidmessage->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('bidmessage', 'bidinfos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bidmessage id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidmessage = $this->Bidmessage->get($id);
        if ($this->Bidmessage->delete($bidmessage)) {
            $this->Flash->success(__('The bidmessage has been deleted.'));
        } else {
            $this->Flash->error(__('The bidmessage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
