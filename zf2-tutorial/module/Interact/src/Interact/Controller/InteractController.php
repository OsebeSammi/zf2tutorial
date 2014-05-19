<?php

namespace Interact\Controller;

use ZfcBase\Module;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Interact\Model;



class InteractController extends AbstractActionController
{
    protected $albumTable;



    public function indexAction()
    {
        $send = array();

        $titles = new Model\Interact();

        $titles = $titles->interactFunction();

        $send = $titles;

        return new ViewModel
        (
            /*array
            (
                'albums' => $this->getAlbumTable()->fetchAll(),
            )*/

            array
            (
                'title_s' => $send,
            )
        );


    }

    /*public function getAlbumTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }*/


}
