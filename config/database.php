<?php

namespace interview;

class Config_Database {

    private $credentials = array(
        'host' => 'localhost',
        'port' => NULL,
        'database' => 'interview',
        'user' => 'root',
        'pass' => 'inheritx'
    );
    
    /** function getHost() 
     * for get host name     
     * return  string
     */
    public function getHost() {
        return $this->credentials['host'];
    }

    //--------------------------------------------------------------------------
    /** function getPort() 
     * for get port name     
     * return  string
     */
    public function getPort() {
        return $this->credentials['port'];
    }

    //--------------------------------------------------------------------------

    /** function getDatabase() 
     * for get database name     
     * return  string
     */
    public function getDatabase() {
        return $this->credentials['database'];
    }

    //--------------------------------------------------------------------------

    /** function getUser() 
     * for get user name     
     * return  string
     */
    public function getUser() {
        return $this->credentials['user'];
    }

    //--------------------------------------------------------------------------

    /** function getPass() 
     * for get pass name     
     * return  string
     */
    public function getPass() {
        return $this->credentials['pass'];
    }

    //--------------------------------------------------------------------------
}
