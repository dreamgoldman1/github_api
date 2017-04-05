<?php

namespace GOL\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApiController extends Controller
{
    private $urlBase = 'https://api.github.com';
    
    public function apiAction()
    {
        //$apiUrl = $this->urlBase."/repositories?sort=stars&order=desc";
        //$apiUrl = $this->urlBase."/repositories?sort=followers&order=desc";
        //$apiUrl = $this->urlBase."/search/repositories?q=merb-core";
        //$apiUrl = $this->urlBase."/repos/wycats/merb-core/contributors";
        //$apiUrl = $this->urlBase."/search/users?q=location:colombia";
        //$apiUrl = $this->urlBase."/repositories?q=most+collaborators";
        
        return "";
    }
    
    public function apiGetPopularRepositories()
    {
        $apiUrl = $this->urlBase."/repositories?sort=stars&order=desc";
        
        $ch = \curl_init($apiUrl);
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        \curl_setopt($ch, CURLOPT_USERPWD, "dreamgoldman1:Goldman1*");
        \curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201');
        $respuesta = \curl_exec($ch);
        $error = \curl_error($ch);
        \curl_close($ch);
        
        return json_decode($respuesta, TRUE);
    }
    
    public function apiGetMostCollaboratorsRepositories()
    {
        $apiUrl = $this->urlBase."/repositories?sort=followers&order=desc";
        
        $ch = \curl_init($apiUrl);
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        \curl_setopt($ch, CURLOPT_USERPWD, "dreamgoldman1:Goldman1*");
        \curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201');
        $respuesta = \curl_exec($ch);
        $error = \curl_error($ch);
        \curl_close($ch);
        
        return json_decode($respuesta, TRUE);
    }

}
