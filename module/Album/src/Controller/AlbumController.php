<?php

namespace Album\Controller;

use Zend\Mvc\Controller\ActionController,
Zend\View\Model\ViewModel;

class AlbumController extends ActionController
{

	protected $albumTable;
	
	
	public function indexAction()
	{
		return new ViewModel(array(
				'albums' => $this->getAlbumTable()->fetchAll(),
		));
	}

	public function addAction()
	{
	}

	public function editAction()
	{
	}

	public function deleteAction()
	{
	}
	

	public function getAlbumTable()
	{
		if (!$this->albumTable) {
			$sm = $this->getServiceLocator();
			$this->albumTable = $sm->get('album-table');
		}
		return $this->albumTable;
	}
	

}

