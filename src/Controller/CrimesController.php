<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Crimes Controller
 *
 * @property \App\Model\Table\CrimesTable $Crimes
 *
 * @method \App\Model\Entity\Crime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CrimesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $crimes = $this->paginate($this->Crimes);

        $this->set(compact('crimes'));
    }

    /**
     * View method
     *
     * @param string|null $id Crime id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crime = $this->Crimes->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('crime', $crime);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crime = $this->Crimes->newEntity();
        if ($this->request->is('post')) {
            $crime = $this->Crimes->patchEntity($crime, $this->request->getData());
            if ($this->Crimes->save($crime)) {
                $this->Flash->success(__('The crime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crime could not be saved. Please, try again.'));
        }
        $users = $this->Crimes->Users->find('list', ['limit' => 200]);
        $this->set(compact('crime', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crime id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crime = $this->Crimes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crime = $this->Crimes->patchEntity($crime, $this->request->getData());
            if ($this->Crimes->save($crime)) {
                $this->Flash->success(__('The crime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crime could not be saved. Please, try again.'));
        }
        $users = $this->Crimes->Users->find('list', ['limit' => 200]);
        $this->set(compact('crime', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crime id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crime = $this->Crimes->get($id);
        if ($this->Crimes->delete($crime)) {
            $this->Flash->success(__('The crime has been deleted.'));
        } else {
            $this->Flash->error(__('The crime could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
