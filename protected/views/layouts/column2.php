<?php $this->beginContent('//layouts/main'); ?>
 <div class="princi">
 <div class="sexion">
 <?php
 $this->widget('ext.bootstrap.widgets.TbBox', array(
 'title'=>'Acciones',
     'htmlOptions' => array('class' => 'clasecreadaporgaby'),
 'headerIcon' => 'icon-th-list',
 'content'=> $this->widget('zii.widgets.CMenu', array(
 'items'=>$this->menu,
 ),true),
 ));
 ?>
 </div>
 <div class="conten">
 <?php echo $content; ?>
 </div>
 </div>
<?php $this->endContent(); ?>