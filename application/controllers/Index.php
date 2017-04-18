<?php
use Yaf\Controller_Abstract ;
class IndexController extends Controller_Abstract 
{
   public function indexAction()
   {//默认Action
       $this->getView()->assign("content", "Hello World");
   }
}

 
  
   /**
    * 
    * @param  [type] $name  [description]
    * @param  [type] $class [description]
    * @return [type]        [description]
    */
   function ceshi($name,$class)
   {

   }
?>