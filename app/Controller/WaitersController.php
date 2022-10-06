<?php

class WaitersController extends AppController
{
    public $helpers= array('Html','Form','Time'); //$helpers array used by cakephp to load helpers
    public $components = array('Session'); //$components array used by cakephp to load components

    //1st action-function // cakephp use the name of the function as the name of the action
    public function index()
    { //Creamos un registro listado de nuestro mesero creando una instancia con un metodo llamado set
      $this->set('waiters', $this->Waiter->find('all')); //set() is a method of the AppController class  

    }

    public function ver($id = null) //funcion para poder ver los detalles del waiter
    {
        if(!$id)
        {
            throw new NotFoundException('Invalid Data');
        }
        $waiter= $this->Waiter->findById($id); 

        if(!$waiter)
        {
            throw new NotFoundException('This Waiter does not exist');
        }

        $this->set('waiter', $waiter); //Mandamos dentro de la variable waiter el registro que se encontro
    }

    public function nuevo() // creamos una funcion para crear un nuevo waiter 
    {
        if($this->request->is('post'))
        {
            $this->Waiter->create();
            if($this->Waiter->save($this->request->data))
            {
                $this->Session->setFlash('The Waiter has been saved','default', array(
                    'class' => 'success'
                )); //Muestra un mensaje en la vista si el registro se guardo
                return $this->redirect(array('action' => 'index')); //Redirecciona a la vista index
            }

            $this->Session->setFlash('Unable to add the Waiter'); //Muestra un mensaje en la vista si el registro no se guardo
        }

    }

    public function editar($id = null)// funcion para editar un waiter
    {
            if(!$id)
            {
                throw new NotFoundException('Invalid Data');
            }

            $waiter = $this->Waiter->findById($id);
            if(!$waiter)
            {
                throw new NotFoundException('This Waiter does not exist');
            }

            if($this->request->is(array('post', 'put')))
            {
                $this->Waiter->id = $id;
                if($this->Waiter->save($this->request->data))
                {
                    $this->Session->setFlash('The Waiter has been updated','default', array(
                        'class' => 'success'
                    )); //Muestra un mensaje en la vista si el registro se guardo
                    return $this->redirect(array('action' => 'index')); //Redirecciona a la vista index
                }

                $this->Session->setFlash('Unable to update the Waiter'); //Muestra un mensaje en la vista si el registro no se guardo
            }

            if(!$this->request->data)// si no encuentra ninguna peticion enviada por el formulario de edicion.
            {
                $this->request->data = $waiter; // le asignamos el registro que se encontro
            }
    }

    public function eliminar($id)
    {
        $waiter=$this->Waiter->findById($id);

        if($this->request->is('get'))
        {
            throw new MethodNotAllowedException('Invalid Data');
        }
        if($this->Waiter->delete($id))
        {
            $this->Session->setFlash('The Waiter ('.$waiter['Waiter']['nombre'].' '.$waiter['Waiter']['apellido'].') has been deleted','default',array('class' => 'success'
            )); //Muestra un mensaje en la vista si el registro fue borrado
            return $this->redirect(array('action' => 'index')); //Redirecciona a la vista index
        }
    }

}


?> 