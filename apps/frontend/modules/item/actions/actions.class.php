<?php

/**
 * item actions.
 *
 * @package    sms
 * @subpackage item
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sms_items = Doctrine_Core::getTable('SmsItem')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sms_item = Doctrine_Core::getTable('SmsItem')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->sms_item);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SmsItemForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SmsItemForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sms_item = Doctrine_Core::getTable('SmsItem')->find(array($request->getParameter('id'))), sprintf('Object sms_item does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsItemForm($sms_item);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sms_item = Doctrine_Core::getTable('SmsItem')->find(array($request->getParameter('id'))), sprintf('Object sms_item does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsItemForm($sms_item);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sms_item = Doctrine_Core::getTable('SmsItem')->find(array($request->getParameter('id'))), sprintf('Object sms_item does not exist (%s).', $request->getParameter('id')));
    $sms_item->delete();

    $this->redirect('item/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sms_item = $form->save();

      $this->redirect('item/edit?id='.$sms_item->getId());
    }
  }
}
