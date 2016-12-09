<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function setPrices(){
         echo $this->price ."<br/>";
      }
      
   }


   class ItemList extends Books {
      /* Member variables */
      var $booklist;
      
      /* Member functions */
      function setPrice($par){
         $this->price = '50';
      }
      
   }


$obj=new ItemList;
$obj->setPrice('20');
$obj->setPrices();
echo $_SERVER['PHP_SELF'];
?>
