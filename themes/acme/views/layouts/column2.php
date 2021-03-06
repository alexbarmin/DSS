<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	<!-- start: Header -->
	<?php $this->widget('dss.widgets.MainNavbarWidget', array(
	
	)); ?>	
	<!-- start: Header -->
  
	<!--start: fluid-container-->
  	<div class="container-fluid">
    	<div class="row-fluid">
    		<!-- start: Main Menu -->			
			<div id="sidebar-left" class="span1">
				<?php $this->widget('dss.widgets.MainMenuWidget', array(
	                    'htmlOptions' => array(
	                        'class' => 'menu_main'
	                    ),
	                    'route' => $this->route,
	                    'items'=>array(
	                    	array(
	                        	'label'=>'Главная', 
	                        	'icon'=>'fa-icon-main',
	                        	'url'=>array('/')
							),
							array(
	                        	'label'=>'Проекты', 
	                        	'icon'=>'fa-icon-projects',
	                        	'url'=>array('/project/admin')
							),
                            array(
                                'label'=>'Проблемы',
                                'icon'=>'fa-icon-problems',
                                'url'=>array('/problem/admin')
                            ),
                            array(
                                'label' => 'Решения и рекомендации',
                                'icon' => 'fa-icon-solution',
                                'url' => array('/problemSolution/admin')
                            ),
                            array(
                                'label'=>'Статистика',
                                'icon'=>'fa-icon-stat',
                                'url'=>array('/site/page', 'view' => 'statistic')
                            ),
                            array(
                                'label'=>'Сотрудники',
                                'icon'=>'fa-icon-people',
                                'url'=>array('/staff/admin')
                            ),
                            array(
	                        	'label'=>'Справочники',
	                        	'icon'=>'fa-icon-settings',
	                        	'url'=>array('/taxonomy/taxonomy/admin')
							)

	                    )
	            )); ?>				
			</div>
			<a id="main-menu-toggle" class="hidden-phone open"><i class="fa-icon-reorder"></i></a>
			<!-- end: Main Menu -->    
		    <noscript>
		      <div class="alert alert-block span11">
		        <h4 class="alert-heading">Warning!</h4>
		        <p>You need to have 
		        <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
		      </div>
		    </noscript> 
		    <!-- start: Content -->
			<div id="content" class="span11 dss-container">
				<div class="row-fluid">
                    <?php $this->widget('bootstrap.widgets.TbMenu', array(
                        'type'=>'pills',
                        'stacked'=>false, // whether this is a stacked menu
                        'items'=> $this->menu,
                    )); ?>
					<?php echo $content; ?>
				</div>
		    </div>
		    <!-- end: Content -->
		    <!-- start: Widgets Area -->
		    <?php $this->widget('dss.widgets.MainSidebarWidget', array(
			
			)); ?>	
		    <!-- end: Widgets Area -->				
		</div>
		<!--/fluid-row-->		
		<div class="clearfix"></div>
	</div>
  <!--/.fluid-container-->  
  
  
  
  
  <!-- start: JavaScript-->
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.10.0.custom.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ui.touch-punch.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.cookie.js"></script>
  <script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.dataTables.min.js'></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/gauge.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.chosen.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.uniform.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.cleditor.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.noty.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.elfinder.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.raty.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.iphone.toggle.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.uploadify-3.1.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.gritter.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.imagesloaded.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.masonry.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.knob.modified.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.sparkline.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/counter.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/raphael.2.1.0.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/justgage.1.0.1.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/retina.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/core.min.js"></script>
  <!-- end: JavaScript-->  

<?php $this->endContent(); ?>