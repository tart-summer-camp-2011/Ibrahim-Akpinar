<?php

class GuestBookController extends Zend_Controller_Action
{

    public function init()
    {
         $guestbook = new Application_Model_GuestbookMapper();
         $this->view->entries = $guestbook->fetchAll();
    }

    public function indexAction()
    {
        // action body
    }

    public function signAction()
    {
         $request = $this->getRequest();
         $form    = new Application_Form_Guesbook();
 
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $comment = new Application_Model_Guestbook($form->getValues());
                $mapper  = new Application_Model_GuestbookMapper();
                $mapper->save($comment);
                return $this->_helper->redirector('index');
            }
        }
 
        $this->view->form = $form;
    }


}



