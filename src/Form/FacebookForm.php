<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Admin\Form\FacebookFilter;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class FacebookForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Admin\Form\FacebookForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Facebook', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(FacebookFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
                    //############################################ informações da coluna app_id ##############################################:
        		    $this->add([
        	                   'type' => 'text',//text,hidden, select, radio, checkbox, textarea
        	                    'name' => 'app_id',
        	                    'options' => [
                     	'label' => 'FILD_APP_ID_LABEL',
                    	//'value_options'      =>[],
        				//'disable_inarray_validator' => true,
        				//'label_attributes'=>['class'=>'control-label','for'=>'APP_ID'],
        				//'add-on-append'=>'aws-font'
         ],
        	                    'attributes' => [
                'id'=>'app_id',
                'class' =>'form-control',
                'title' => 'FILD_APP_ID_DESC',
                'placeholder' => 'FILD_APP_ID_PLACEHOLDER',
                //'readonly' => true/false,
                //'requerid' => true/false,
                'data-access' => '3',
                'data-position' => 'geral',
            	        	        ],
        	               ]
        	            );
        
        
                    //############################################ informações da coluna title ##############################################:
        		    $this->add([
        	                   'type' => 'text',//text,hidden, select, radio, checkbox, textarea
        	                    'name' => 'title',
        	                    'options' => [
                     	'label' => 'FILD_TITLE_LABEL',
                    	//'value_options'      =>[],
        				//'disable_inarray_validator' => true,
        				//'label_attributes'=>['class'=>'control-label','for'=>'TITLE'],
        				//'add-on-append'=>'aws-font'
         ],
        	                    'attributes' => [
                'id'=>'title',
                'class' =>'form-control',
                'title' => 'FILD_TITLE_DESC',
                'placeholder' => 'FILD_TITLE_PLACEHOLDER',
                //'readonly' => true/false,
                //'requerid' => true/false,
                'data-access' => '3',
                'data-position' => 'geral',
            	        	        ],
        	               ]
        	            );
        
        
                    //############################################ informações da coluna site_name ##############################################:
        		    $this->add([
        	                   'type' => 'text',//text,hidden, select, radio, checkbox, textarea
        	                    'name' => 'site_name',
        	                    'options' => [
                     	'label' => 'FILD_SITE_NAME_LABEL',
                    	//'value_options'      =>[],
        				//'disable_inarray_validator' => true,
        				//'label_attributes'=>['class'=>'control-label','for'=>'SITE_NAME'],
        				//'add-on-append'=>'aws-font'
         ],
        	                    'attributes' => [
                'id'=>'site_name',
                'class' =>'form-control',
                'title' => 'FILD_SITE_NAME_DESC',
                'placeholder' => 'FILD_SITE_NAME_PLACEHOLDER',
                //'readonly' => true/false,
                //'requerid' => true/false,
                'data-access' => '3',
                'data-position' => 'geral',
            	        	        ],
        	               ]
        	            );
        
        
                    //############################################ informações da coluna type ##############################################:
        		    $this->add([
        	                   'type' => 'text',//text,hidden, select, radio, checkbox, textarea
        	                    'name' => 'type',
        	                    'options' => [
                     	'label' => 'FILD_TYPE_LABEL',
                    	//'value_options'      =>[],
        				//'disable_inarray_validator' => true,
        				//'label_attributes'=>['class'=>'control-label','for'=>'TYPE'],
        				//'add-on-append'=>'aws-font'
         ],
        	                    'attributes' => [
                'id'=>'type',
                'class' =>'form-control',
                'title' => 'FILD_TYPE_DESC',
                'placeholder' => 'FILD_TYPE_PLACEHOLDER',
                //'readonly' => true/false,
                //'requerid' => true/false,
                'data-access' => '3',
                'data-position' => 'geral',
            	        	        ],
        	               ]
        	            );
        
        
        $this->setAtachament([]);
        $this->setDescription([]);
        $this->setAccess([]);
        $this->setState([]);
        $this->setCreated([]);
        $this->setModified([]);
        $this->setCsrf([]);
        $this->setSave([]);
    }


}

