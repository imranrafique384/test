<?php

/**
 * home actions.
 *
 * @package    test1
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
	if($this->getUser()->isAuthenticated())
	{
		echo "already loggied in<br>";
		echo $this->getUser()->getGuardUser()->getId() ;
		echo $this->getUser()->getGuardUser()->getUsername() ;
		
		}
	
  }
  

public function executePhone_new(sfWebRequest $request)
  {
	 if ($request->isMethod('post'))
    {
	  $phone = new phone_data();
	  $phone->first_name = $this->getRequestParameter('first_name');
	  $phone->last_name = $this->getRequestParameter('last_name');
	  $phone->save();
	  	
	}
	 
	 
	// $this->result = Doctrine_Query::create()->select('*')->from('Phone_data')->fetchArray();

$num = $this->getRequestParameter('num');	  
	  // Defining initial variables
$currentPage = $num;
$resultsPerPage = 5;


// Creating pager object
$pager = new Doctrine_Pager(
      Doctrine_Query::create()
	        ->select('*')
            ->from( 'Phone_data p' ),
      $currentPage, // Current page of request
      $resultsPerPage // (Optional) Number of results per page. Default is 25
);

 $this->result = $pager->execute();
 
 
 
	$pager->getExecuted();
	$this->number_row = $pager->getNumResults();
	$this->first_page = $pager->getFirstPage();
	$this->total_pages = $pager->getLastPage();
 
}
  

public function executeAutoComplete()
  {
    $this->setLayout(false);
	
  }
  
public function executeForm()
{
	
	
	}  
public function executeTree1()
{
	
/*
$category = new Category();
$category->name = 'Root Category 2';

$category->save();

$treeObject = Doctrine_Core::getTable('Category')->getTree();
$treeObject->createRoot($category);

$child1 = new Category();
$child1->name = 'Child Category 2';

$child2 = new Category();
$child2->name = 'Child Category 2';

$child1->getNode()->insertAsLastChildOf($category);
$child2->getNode()->insertAsLastChildOf($category);*/


/*
//insert new child
$category = Doctrine_Core::getTable('Category')->find(1);
//$category = Doctrine_Core::getTable('Category')->findOneByName('Child Category 10');
$child3 = new Category();
$child3->name = 'Child Category 10';
$child3->getNode()->insertAsLastChildOf($category);	*/

$treeObject = Doctrine_Core::getTable('Category')->getTree();
$rootColumnName = $treeObject->getAttribute('rootColumnName');

foreach ($treeObject->fetchRoots() as $root) {
  $options = array(
      'root_id' => $root->$rootColumnName
  );
  foreach($treeObject->fetchTree($options) as $node) {
    echo str_repeat('--', $node['level']) . $node['name']." ".$node['id']  . "<br>";
  }
}
		
		
		
		}//end tree1 function	


}
