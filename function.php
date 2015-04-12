 <?php   

     //遍历research.xml
   
   	if($xml=simplexml_load_file('./assets/xml/research.xml')){
          foreach($xml->nav as $list){
               $value[]=get_object_vars($list); 
               }
          }else{
               echo('load xml error!');
     }
   ?>