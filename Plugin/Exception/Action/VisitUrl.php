<?php

namespace Bundle\PaymentBundle\Plugin\Exception\Action;

class VisitUrl
{
    protected $url;
    
    public function __construct($url)
    {
        $this->url = $url;
    }
    
    public function getUrl()
    {
        return $this->url;
    }
}