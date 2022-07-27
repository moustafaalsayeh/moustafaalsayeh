<?php



/*

  * Server

  */

  class TestSoapServer

  {

      public function getMessage()

      {

          return 'Hello, World!';

      }

  }

  $options = ['uri' => 'http://domainname.com/'];

  $server = new SoapServer(null, $options);

  $server->setClass('TestSoapServer');

  $server->handle();
