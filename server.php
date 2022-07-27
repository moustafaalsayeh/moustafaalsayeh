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
  $options = ['uri' => 'http://localhost/'];
  $server = new SoapServer(null, $options);
  $server->setClass('TestSoapServer');
  $server->handle();