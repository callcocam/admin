<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Model\Facebook;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Facebook extends AbstractModel
{

    protected $app_id = null;

    protected $title = null;

    protected $site_name = 'NOME DO SITE';

    protected $type = 'article';

    protected $url = '#';

    protected $images = null;

    /**
     * get app_id
     *
     * @return varchar
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * get title
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * get site_name
     *
     * @return varchar
     */
    public function getSiteName()
    {
        return $this->site_name;
    }

    /**
     * get type
     *
     * @return varchar
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * get url
     *
     * @return varchar
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * get images
     *
     * @return varchar
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * set app_id
     *
     * @return varchar
     */
    public function setAppId($app_id = null)
    {
        $this->app_id=$app_id;
        return $this;
    }

    /**
     * set title
     *
     * @return varchar
     */
    public function setTitle($title = null)
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set site_name
     *
     * @return varchar
     */
    public function setSiteName($site_name = 'NOME DO SITE')
    {
        $this->site_name=$site_name;
        return $this;
    }

    /**
     * set type
     *
     * @return varchar
     */
    public function setType($type = 'article')
    {
        $this->type=$type;
        return $this;
    }

    /**
     * set url
     *
     * @return varchar
     */
    public function setUrl($url = '#')
    {
        $this->url=$url;
        return $this;
    }

    /**
     * set images
     *
     * @return varchar
     */
    public function setImages($images = null)
    {
        $this->images=$images;
        return $this;
    }


}

