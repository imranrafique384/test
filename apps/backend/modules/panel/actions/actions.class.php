<?php

/**
 * panel actions.
 *
 * @package    test1
 * @subpackage panel
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class panelActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->phone_datas = Doctrine_Core::getTable('phone_data')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->phone_data = Doctrine_Core::getTable('phone_data')->find(array($request->getParameter('phone_id')));
    $this->forward404Unless($this->phone_data);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new phone_dataForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new phone_dataForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($phone_data = Doctrine_Core::getTable('phone_data')->find(array($request->getParameter('phone_id'))), sprintf('Object phone_data does not exist (%s).', $request->getParameter('phone_id')));
    $this->form = new phone_dataForm($phone_data);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($phone_data = Doctrine_Core::getTable('phone_data')->find(array($request->getParameter('phone_id'))), sprintf('Object phone_data does not exist (%s).', $request->getParameter('phone_id')));
    $this->form = new phone_dataForm($phone_data);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($phone_data = Doctrine_Core::getTable('phone_data')->find(array($request->getParameter('phone_id'))), sprintf('Object phone_data does not exist (%s).', $request->getParameter('phone_id')));
    $phone_data->delete();

    $this->redirect('panel/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $phone_data = $form->save();

      $this->redirect('panel/edit?phone_id='.$phone_data->getPhoneId());
    }
  }
}
