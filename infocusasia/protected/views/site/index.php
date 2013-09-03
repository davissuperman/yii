<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->widget('application.extensions.flash.EJqueryFlash',
               array(
                     'name'=>'flash2',
                        'htmlOptions'=>array(
                                             'src'=>'http://jquery.lukelutman.com/plugins/flash/example.swf', 
                                             'text'=>'You need Flash Player'),
                        )
                  );
                  ?>


 <ul id="foo"  class="jcarousel-skin-tango">
    <li> <?php echo  CHtml::image(Yii::app()->baseUrl.'/images/m1.jpg','图片的说明',array('width'=>'200px','height'=>'50px'));?>  </li>
    <li> <?php echo CHtml::image(Yii::app()->baseUrl.'/images/m2.jpg','图片的说明',array('width'=>'200px','height'=>'50px'));?>  </li>
    <li> <?php echo CHtml::image(Yii::app()->baseUrl.'/images/m3.jpg','图片的说明',array('width'=>'200px','height'=>'50px'));?>  </li>
    <li> <?php echo CHtml::image(Yii::app()->baseUrl.'/images/m1.jpg','图片的说明',array('width'=>'200px','height'=>'50px'));?>  </li>
</ul>
<?php
$this->widget('ext.pjcarousel.PJCarousel', array(
    'id' => 'foo',
        'skin'=>'tango',
        'config'=>array(
            'visible'=>2
        )
));
/*
$this->widget('ext.JCarousel.JCarousel', array(
    'dataProvider' => $dataProvider,
    'thumbUrl' => '"/galleria/thumbs/thumb_".$data->file_name',
    'imageUrl' => '"/galleria/".$data->file_name',
    'target' => 'big-gallery-item',
));
*/
/*
$this->widget('application.extensions.seqimage.SeqImage',array(
  'widthImage' => 550, 
  'heightImage' => 80,
  'slides'=>array(  
       array(
           'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/m1.jpg'),            
           'link'=>array('url'=>'mypage','htmlOptions'=>array())
       ),
       array(
           'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/m2.jpg'),            
       ),
      array(
           'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/m3.jpg'),            
       )
  )));
  */
?>
<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
