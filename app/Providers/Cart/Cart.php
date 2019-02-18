<?php
namespace App\Providers\Cart;
  
class Cart
{


    protected $session;
    protected $sessionKey;

    /**
     * Undocumented function
     *
     * @param [type] $session
     * @param [type] $events
     * @param [type] $instanceName
     * @param [type] $session_key
     * @param [type] $config
     */
    public function __construct($session, $events, $instanceName, $session_key, $config)
    {
        $this->session = $app['session'];
        $this->sessionKey = $session_key;
        $this->sessionKeyCartItems = $this->sessionKey . '_cart_items';
        $this->config = $config;
        $this->fireEvent('created');
        return $string;
    }


    public function doSomethingUseful()
    {
      return 'Output from DemoOne';
    }
}