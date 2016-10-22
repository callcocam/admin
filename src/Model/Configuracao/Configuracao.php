<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Model\Configuracao;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Configuracao extends AbstractModel
{

    protected $title = 'RAZAO SOCIAL';

    protected $fantasia = null;

    protected $phone = null;

    protected $email = null;

    protected $cidade = '00000';

    protected $bairro = null;

    protected $endereco = null;

    protected $images = 'default-companies.jpg';

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
     * get fantasia
     *
     * @return varchar
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * get phone
     *
     * @return varchar
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * get email
     *
     * @return varchar
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * get cidade
     *
     * @return int
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * get bairro
     *
     * @return varchar
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * get endereco
     *
     * @return varchar
     */
    public function getEndereco()
    {
        return $this->endereco;
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
     * set title
     *
     * @return varchar
     */
    public function setTitle($title = 'RAZAO SOCIAL')
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set fantasia
     *
     * @return varchar
     */
    public function setFantasia($fantasia = null)
    {
        $this->fantasia=$fantasia;
        return $this;
    }

    /**
     * set phone
     *
     * @return varchar
     */
    public function setPhone($phone = null)
    {
        $this->phone=$phone;
        return $this;
    }

    /**
     * set email
     *
     * @return varchar
     */
    public function setEmail($email = null)
    {
        $this->email=$email;
        return $this;
    }

    /**
     * set cidade
     *
     * @return int
     */
    public function setCidade($cidade = '00000')
    {
        $this->cidade=$cidade;
        return $this;
    }

    /**
     * set bairro
     *
     * @return varchar
     */
    public function setBairro($bairro = null)
    {
        $this->bairro=$bairro;
        return $this;
    }

    /**
     * set endereco
     *
     * @return varchar
     */
    public function setEndereco($endereco = null)
    {
        $this->endereco=$endereco;
        return $this;
    }

    /**
     * set images
     *
     * @return varchar
     */
    public function setImages($images = 'default-companies.jpg')
    {
        $this->images=$images;
        return $this;
    }


}

