<?php

namespace Tractr\FormBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\DoctrineORMAdminBundle\Datagrid\ProxyQuery;

class FormAdmin extends Admin
{
  public function __construct($code, $class, $baseControllerName)
  {
      parent::__construct($code, $class, $baseControllerName);

      if (!$this->hasRequest()) {
          $this->datagridValues = array(
              '_page' => 1,
              '_sort_order' => 'ASC', // sort direction
              '_sort_by' => 'lft' // field name
          );
      }
  }
    
  protected function configureFormFields(FormMapper $formMapper)
  {
      $formMapper
      ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
        ->add('id', null, array('sortable'=>false))
        ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array()
                ), 'label'=> 'Actions'
            ))
    ;
  }
}
?>

