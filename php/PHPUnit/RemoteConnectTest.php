<?php
/**
 * Created by PhpStorm.
 * User: jackdong
 * Date: 14-12-16
 * Time: 下午5:36
 */
    require_once('RemoteConnect.php');

    class RemoteConnectTest extends PHPUnit_Framework_TestCase{

        public function setUp(){}

        public function tearDown(){}

        public function testConnectionIsValid(){
            $connObj = new RemoteConnect();
            $serverName = 'www.google.com';
            $this->assertTrue($connObj->connectToServer($serverName) !== false);
        }

    }
