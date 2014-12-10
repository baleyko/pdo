<?php
/**
 * This file is part of the PDO package.
 *
 * (c) Valery Baleyko <baleyko@gmail.com>
 */

namespace PDO;

/**
 * This class is an extension of PDO class.
 *
 * @author Valery Baleyko <baleyko@gmail.com>
 */
class Instance extends \PDO
{
    /**
     * @access protected
     * @var string
     */
    protected $dsn;

    /**
     * @access protected
     * @var string
     */
    protected $username;

    /**
     * @access protected
     * @var string
     */
    protected $password;

    /**
     * @access protected
     * @var array
     */
    protected $options = [];

    /**
     * @access public
     * @param string $dsn
     * @param string $username
     * @param string $password
     * @param array $options
     * @return void
     */
    public function __construct($dsn = null, $username = null, $password = null, $options = [])
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->options = $options;
    }
}
