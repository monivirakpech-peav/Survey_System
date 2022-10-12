<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * QuestionTypes Controller
 *
 * @property \App\Model\Table\QuestionTypesTable $QuestionTypes
 * @method \App\Model\Entity\QuestionType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $questionTypes = $this->paginate($this->QuestionTypes);

        $this->set(compact('questionTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Question Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionType = $this->QuestionTypes->get($id, [
            'contain' => ['Questions'],
        ]);

        $this->set(compact('questionType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionType = $this->QuestionTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $questionType = $this->QuestionTypes->patchEntity($questionType, $this->request->getData());
            if ($this->QuestionTypes->save($questionType)) {
                $this->Flash->success(__('The question type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question type could not be saved. Please, try again.'));
        }
        $this->set(compact('questionType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Question Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionType = $this->QuestionTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionType = $this->QuestionTypes->patchEntity($questionType, $this->request->getData());
            if ($this->QuestionTypes->save($questionType)) {
                $this->Flash->success(__('The question type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question type could not be saved. Please, try again.'));
        }
        $this->set(compact('questionType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Question Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionType = $this->QuestionTypes->get($id);
        if ($this->QuestionTypes->delete($questionType)) {
            $this->Flash->success(__('The question type has been deleted.'));
        } else {
            $this->Flash->error(__('The question type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
