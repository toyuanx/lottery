<?php

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=20, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=128, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(column="mobile", type="string", length=32, nullable=false)
     */
    public $mobile;

    /**
     *
     * @var string
     * @Column(column="nick_name", type="string", length=128, nullable=false)
     */
    public $nick_name;

    /**
     *
     * @var string
     * @Column(column="mtime", type="string", nullable=false)
     */
    public $mtime;

    /**
     *
     * @var string
     * @Column(column="ctime", type="string", nullable=false)
     */
    public $ctime;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lottery");
        $this->setSource("user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
