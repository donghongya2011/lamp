<?php
/**
 * Created by PhpStorm.
 * User: jackdong
 * Date: 14-12-16
 * Time: 下午3:21
 */
    class RemoteConnect {

        public function connectToServer($serverName = NULL){
            if($serverName == NULL){
                throw new Exception("This's not a server name!");
            }
            $fp = fsockopen($serverName,80);
            return ($fp)? true : false ;
        }

        public function returnSampleObject(){
            return $this;
        }

    }