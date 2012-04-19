<?php

/**
 * contact actions.
 *
 * @package    test1
 * @subpackage contact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
	  
	$d= sfConfig::get('sf_upload_dir');
	$d = $d.'\abc\aa';
	if(!is_dir($d))
	{
	mkdir($d,0777,true) ;
	echo "New folder created :- ".$d;
	}
	else
	echo "Folder already exists :- ".$d; 
	 $this->form = new ContactForm();
 
    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter('contact'), $request->getFiles('contact'));
      if ($this->form->isValid())
     {
        $values = $this->form->getValues();
		$file = $request->getFiles('contact');
		
		$file = $this->form->getValue('file');
 
  //$filename = 'uploaded_'.sha1($file->getOriginalName());
  $filename = 'abc' ;
  $extension = $file->getExtension($file->getOriginalExtension());
  $file->save(sfConfig::get('sf_upload_dir').'/assets/'.$filename.$extension);
 
        // do something with the values
 
        // ...
      }
    }  //$this->forward('default', 'module');
  }

public function executeDownload(sfWebRequest $request)   
{   
   $response = $this->getContext()->getResponse();   
   $response->clearHttpHeaders();   
   $response->addCacheControlHttpHeader('Cache-control','must-revalidate, post-check=0, pre-check=0');   
   $response->setContentType('application/octet-stream',TRUE);       
   $response->setHttpHeader('Content-Transfer-Encoding', 'binary', TRUE);   
   //$response->setHttpHeader('Content-Disposition','attachment; filename='.$request->getParameter('filename'), TRUE);  
    $response->setHttpHeader('Content-Disposition','attachment; filename=abc.jpg', TRUE);
   $response->sendHttpHeaders();    
    //readfile(sfConfig::get('sf_upload_dir').'/'.$request->getParameter('directory').'/'.$request->getParameter('filename'));   

   readfile(sfConfig::get('sf_upload_dir').'/assets/abc.jpg');   
   return sfView::NONE;   
}  


}
