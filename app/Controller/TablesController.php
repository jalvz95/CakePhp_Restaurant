<?php

class TablesController extends AppController
{
   public $helpers = array('Html', 'Form', 'Time');
    public $components = array('Session'); 

    public function index()
    {
        $this->set('tables', $this->Table->find('all'));
    }
    
    public function nuevo()
    {
        if ($this->request->is('post')) 
        {
            $this->Table->create();
            if ($this->Table->save($this->request->data)) {
                $this->Session->setFlash('Table has been saved.', 'default', array('class' => 'success'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('Unable to add Table.');
        }

        $waiters= $this->Table->Waiter->find('list', array(
        'fields' => array('id','full_name'))); // Recuperamos los datos de la tabla Waiter, gracias a que podemos acceder a ellos desde la tabla Table
        $this->set('waiters', $waiters); // Pasamos los datos a la vista
    }

    public function editar($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid Data'));
        }

        $table = $this->Table->findById($id);// Busqueda de la mesa por su id
        if (!$table) {
            throw new NotFoundException(__('Invalid Table'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Table->id = $id;
            if ($this->Table->save($this->request->data)) {
                $this->Session->setFlash(__('Your Table has been updated.','default', array('class' => 'success')));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your Table.'));
        }

        if (!$this->request->data) {
            $this->request->data = $table;
        }

        $waiters= $this->Table->Waiter->find('list', array(
            'fields' => array('id','full_name'))); // Recuperamos los datos de la tabla Waiter, gracias a que podemos acceder a ellos desde la tabla Table
            $this->set('waiters', $waiters); // Pasamos los datos a la vista
    }

    public function eliminar($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException("Invalid Method"); // Si el metodo es get, lanzamos una excepcion
        }

        if ($this->Table->delete($id)) {
            $this->Session->setFlash(
                __('The Table with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }

}

?>