<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Album;
use Application\Form\AlbumForm;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function userAction()
    {
    	$form = new AlbumForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();

        return array('form' => $form);
    }

    public function supportAction()
    {
    	$form = new AlbumForm();
    	$form->get('submit')->setValue('Add');

    	$request = $this->getRequest();

    	return array('form' => $form);
    }

    public function formAction()
    {
    	$form = new AlbumForm();
    	$form->get('submit')->setValue('Add');

    	$request = $this->getRequest();

    	return array('form' => $form);
    }

    public function companyAction()
    {
    	$form = new AlbumForm();
    	$form->get('submit')->setValue('Add');

    	$request = $this->getRequest();

    	return array('form' => $form);
    }


}
