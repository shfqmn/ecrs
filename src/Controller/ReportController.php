<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\I18n\Time;
use DateTime;

/**
 * Report Controller
 *
 * @property \App\Model\Table\ReportTable $Report
 */
class ReportController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $report = $this->paginate($this->Report);

        $this->set(compact('report'));
        $this->set('_serialize', ['report']);
    }

    /**
     * View method
     *
     * @param string|null $id Report id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $report = $this->Report->get($id, [
            'contain' => ['Users', 'Problem', 'Sick']
        ]);

        $this->set('report', $report);
        $this->set('_serialize', ['report']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $report = $this->Report->newEntity();
        $report->problem = [''];
        $report->sick = [''];
        if ($this->request->is('post')) {
            $report = $this->Report->patchEntity($report, $this->request->data,['associated' => ['Sick','Problem']]);
            $report['user_id'] = $this->Auth->user()['id'];
            
            $isNotEmptyFlag = false;
            for($i=0;$i<count($report->problem);$i++){
                if(
                    empty($report->problem[$i]->details) &&
                    empty($report->problem[$i]->datetime) &&
                    empty($report->problem[$i]->venue) &&
                    empty($report->problem[$i]->action) &&
                    empty($report->problem[$i]->notes)
                )
                    $isNotEmptyFlag = true;
                
                if($isNotEmptyFlag){
                    unset($report->problem[$i]);
                    $report->problem = array_values($report->problem);
                }
            }
            
            $isNotEmptyFlag = false;
            for($i=0;$i<count($report->sick);$i++){
                if(
                    empty($report->sick[$i]->datetime) &&
                    empty($report->sick[$i]->name) &&
                    empty($report->sick[$i]->ic) &&
                    empty($report->sick[$i]->homeAddress) &&
                    empty($report->sick[$i]->collegeAddress) &&
                    empty($report->sick[$i]->studentNo) &&
                    empty($report->sick[$i]->notes) &&
                    empty($report->sick[$i]->tel) &&
                    empty($report->sick[$i]->courseCode)

                )
                    $isNotEmptyFlag = true;
                
                if($isNotEmptyFlag){
                    unset($report->sick[$i]);
                    $report->sick = array_values($report->sick);
                }
            }
            
            if(count($report->problem)==0){
                $report->noProblem = true;
            }
            
            
            if ($this->Report->save($report,['associated' => ['Sick','Problem']])) {
                $this->Flash->success(__('The report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The report could not be saved. Please, try again.'));   
        }
        
        
        debug($report);
        $this->set(compact('report'));
        $this->set('_serialize', ['report']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Report id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $report = $this->Report->get($id, [
            'contain' => ['Sick','Problem']
        ]);
        
        if(count($report->problem)==0)$report->problem = [''];
        if(count($report->sick)==0)$report->sick = [''];
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $report = $this->Report->patchEntity($report, $this->request->getData());
            $report->status ='updated';
            $isNotEmptyFlag = false;
            for($i=0;$i<count($report->problem);$i++){
                if(
                    empty($report->problem[$i]->details) &&
                    empty($report->problem[$i]->datetime) &&
                    empty($report->problem[$i]->venue) &&
                    empty($report->problem[$i]->action) &&
                    empty($report->problem[$i]->notes)
                )
                    $isNotEmptyFlag = true;
                
                if($isNotEmptyFlag){
                    unset($report->problem[$i]);
                    $report->problem = array_values($report->problem);
                }
            }
            
            $isNotEmptyFlag = false;
            for($i=0;$i<count($report->sick);$i++){
                if(
                    empty($report->sick[$i]->datetime) &&
                    empty($report->sick[$i]->name) &&
                    empty($report->sick[$i]->ic) &&
                    empty($report->sick[$i]->homeAddress) &&
                    empty($report->sick[$i]->collegeAddress) &&
                    empty($report->sick[$i]->studentNo) &&
                    empty($report->sick[$i]->notes) &&
                    empty($report->sick[$i]->tel) &&
                    empty($report->sick[$i]->courseCode)

                )
                    $isNotEmptyFlag = true;
                
                if($isNotEmptyFlag){
                    unset($report->sick[$i]);
                    $report->sick = array_values($report->sick);
                }
            }
            
            if(count($report->problem)==0){
                $report->noProblem = true;
            }
            else{
                $report->noProblem = false;
            }
            
            
            if ($this->Report->save($report)) {
                $this->Flash->success(__('The report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The report could not be saved. Please, try again.'));
        }
        $this->set(compact('report', 'users'));
        $this->set('_serialize', ['report']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Report id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $report = $this->Report->get($id);
        if ($this->Report->delete($report)) {
            $this->Flash->success(__('The report has been deleted.'));
        } else {
            $this->Flash->error(__('The report could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function approve(){
        $this->loadModel('Users');
        if($this->request->is('post')){
            $reportDate = $this->request->data['reportDate'];
            $users = $this->Users->find('all')->where(['role'=>'crs'])->toArray();
            
            foreach($users as $user){
                $user['submited'] = $this->Report->find('all')->where(['user_id'=>$user->id,'reportDate'=>$reportDate])->toArray();
            }
        }
        
        
        $this->set(compact('users'));
    }
    
    public function actions($id){
        $report = $this->Report->get($id);
        if($this->request->is('post')){
            $this->request->data['action'] = implode('#',$this->request->data['action']);
            $report = $this->Report->patchEntity($report, $this->request->getData());
            if ($this->Report->save($report)) {
                $this->Flash->success(__('The report has been saved.'));

                return $this->redirect(['action' => 'approve']);
            }
            $this->Flash->error(__('The report could not be saved. Please, try again.'));   
        }
    }
}
