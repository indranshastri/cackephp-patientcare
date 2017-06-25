<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Patient Controller
 *
 * @property \App\Model\Table\PatientTable $Patient
 *
 * @method \App\Model\Entity\Patient[] paginate($object = null, array $settings = [])
 */
class PatientController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Carriers']
        ];
        $patient = $this->paginate($this->Patient);

        $this->set(compact('patient'));
        $this->set('_serialize', ['patient']);
    }

    /**
     * View method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $patient = $this->Patient->get($id, [
            'contain' => ['Carriers', 'Appointments', 'Invoices']
        ]);

        $this->set('patient', $patient);
        $this->set('_serialize', ['patient']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $patient = $this->Patient->newEntity();
        if ($this->request->is('post')) {
            $patient = $this->Patient->patchEntity($patient, $this->request->getData());
            if ($this->Patient->save($patient)) {
                $this->Flash->success(__('The patient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patient could not be saved. Please, try again.'));
        }
        $carriers = $this->Patient->Carriers->find('list', ['limit' => 200]);
        $this->set(compact('patient', 'carriers'));
        $this->set('_serialize', ['patient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $patient = $this->Patient->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $patient = $this->Patient->patchEntity($patient, $this->request->getData());
            if ($this->Patient->save($patient)) {
                $this->Flash->success(__('The patient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patient could not be saved. Please, try again.'));
        }
        $carriers = $this->Patient->Carriers->find('list', ['limit' => 200]);
        $this->set(compact('patient', 'carriers'));
        $this->set('_serialize', ['patient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $patient = $this->Patient->get($id);
        if ($this->Patient->delete($patient)) {
            $this->Flash->success(__('The patient has been deleted.'));
        } else {
            $this->Flash->error(__('The patient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
