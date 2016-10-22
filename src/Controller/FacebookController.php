<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Admin\Form\FacebookFilter;
use Admin\Form\FacebookForm;
use Admin\Model\Facebook\Facebook;
use Admin\Model\Facebook\FacebookRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class FacebookController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @return __construct
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Controller
        $this->containerInterface=$containerInterface;
        $this->table=FacebookRepository::class;
        $this->model=Facebook::class;
        $this->form=FacebookForm::class;
        $this->filter=FacebookFilter::class;
        $this->route="admin";
        $this->controller="facebook";
    }


}

