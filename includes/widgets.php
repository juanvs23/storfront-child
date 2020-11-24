<?php
//registrar widgets
function info_icon_widgets() {
	register_widget( 'ShowInfoWidgets' );
	register_widget( 'FormSuscribeWidget' );
}
add_action( 'widgets_init', 'info_icon_widgets' );


//form suscripcion
class FormSuscribeWidget extends WP_Widget {

	public function __construct() {
        parent::__construct(
			'formWidget',
			__( 'Formulario suscribción', 'demo_domain' ),
			array(
				'description' => __( 'Formulario para suscribir correos', 'demo_domain' ),
				'classname'   => 'clase_css_widget',
			)
		);
	}

	public function widget( $args, $instanceForm ) {
		/**
		 * 'formCampo_title' => '',
    	 *'formCampo_campotexto' => '',
		 *'formCampo_url'=>'',
		 *'formCampo_option'
		 */
		
		$title = apply_filters( 'widget_text', empty( $instanceForm['formCampo_title'] ) ? '' : $instanceForm['formCampo_title'], $instanceForm );
		$text = apply_filters( 'widget_text', empty( $instanceForm['formCampo_campotexto'] ) ? '' : $instanceForm['formCampo_campotexto'], $instanceForm );
		$url = apply_filters( 'widget_text', empty( $instanceForm['ormCampo_url'] ) ? '' : $instanceForm['ormCampo_url'], $instanceForm );
	
		//echo $args['before_widget'];
		//echo $args['before_title'] . apply_filters( 'widget_title', $instanceForm['formCampo_title'] ). $args['after_title'];
		//echo 'hola '.$title;
			  if(true){
				$conten='';
				$conten.= '<div class="full-widget-form">';
				$conten.= '<h3 class="title-form">Newsletter</h3>';
				$conten.= '  <p>Obtenha todas as informações mais recentes sobre eventos, vendas e ofertas. Inscreva-se para receber boletins informativos hoje</p>'; 
				  $conten.= '<div class="join-widget">';
				$conten.= '<a class="suscrition-btn" href=""  >Inscreva-se</a>';
				$conten.=  '</div>';
				$conten.=  '</div>';
				
				echo $conten;
  
			  }else{
				$conten='';
		$conten.= '<div class="full-widget-form">';
		$conten.= '<h3 class="title-form">Newsletter</h3>';
		$conten.= '  <p>Obtenha todas as informações mais recentes sobre eventos, vendas e ofertas. Inscreva-se para receber boletins informativos hoje</p>'; 
	  	$conten.= '<div class="join-widget">';
		$conten.= '<form novalidate="true" id="form-widget">';
	  	$conten.= '<label for="email-form"  class="label-widget"><span class="">Endereço de e-mail</span></label>';
		$conten.= '<input id="email-form" type="email" class="hustle-input " name="email" value="" placeholder="ejemplo@ejemplo.com"  data-required-error="Your email is required." data-validation-error="Please enter a valid email.">';
		
		
		$conten.= '<label for="name-form" id="" class="label-widget">Seu nome</label>';
		$conten.= '<input id="name-form" type="name" class="hustle-input " name="Name" value="" aria-labelledby="hustle-field-Name-module-2-label" data-validate="">';
		
		
		$conten.= '<button class="hustle-button hustle-button-submit " type="submit" data-loading-text="O formulário está sendo enviado, por favor, aguarde um pouco.">
				<span class="hustle-button-text">Inscreva-se</span></button>';
		$conten.=   '<div class="hustle-error-message" style="display: none;" data-default-error="Por favor preencha todos os campos requeridos."></div>';
		$conten.='</div>';
		$conten.=  '</form>';
		$conten.=  '</div>';
		
		echo $conten;
  
			  }



		

	}

	public function form( $instanceForm ) {
         // Valores por defecto
 $instanceForm = wp_parse_args( (array) $instanceForm, array( 
    'formCampo_title' => '',
    'formCampo_campotexto' => '',
	'formCampo_url'=>'',
	'formCampo_option'=>'boton'
    ) );
    // Si existen datos en la bsae de datos los recogemos para mostrarlos
	$formCampo_title = !empty( $instanceForm['formCampo_title'] ) ? $instanceForm['formCampo_title'] : '';
	$formCampo_campotexto = !empty( $instanceForm['formCampo_campotexto'] ) ? $instanceForm['formCampo_campotexto'] : '';
	$formCampo_url = !empty( $instanceForm['formCampo_url'] ) ? $instanceForm['formCampo_url'] : '';
	$formCampo_option = !empty( $instanceForm['formCampo_option'] ) ? $instanceForm['formCampo_option'] : '';
    
	$showInfo_checked_2= $formCampo_option=='formulario' ? 'selected': '';
	$showInfo_checked_1= $formCampo_option=='boton' ? 'selected': '';
    echo '<p>';
    echo ' <label for="' . $this->get_field_id( 'formCampo_title' ) . '" class="demowp_campotexto_label"> Titulo </label>';
    echo ' <input type="text" id="' . $this->get_field_id( 'formCampo_title' ) . '" name="' . $this->get_field_name( 'formCampo_title' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'text_domain' ) . '" value="' . esc_attr( $formCampo_title ) . '">';
    echo ' <label for="' . $this->get_field_id( 'formCampo_campotexto' ) . '" class="demowp_campotexto_label"> Texto de boton </label>';
    echo ' <input type="text" id="' . $this->get_field_id( 'formCampo_campotexto' ) . '" name="' . $this->get_field_name( 'formCampo_campotexto' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'text_domain' ) . '" value="' . esc_attr( $formCampo_campotexto ) . '">';
	echo ' <label for="' . $this->get_field_id( 'formCampo_url' ) . '" class="demowp_campotexto_label"> URL destino </label>';
    echo ' <input type="text" id="' . $this->get_field_id( 'formCampo_url' ) . '" name="' . $this->get_field_name( 'formCampo_url' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'text_domain' ) . '" value="' . esc_attr($formCampo_url ) . '">';
    echo ' <label for="' . $this->get_field_id( 'demowp_campotexto' ) . '" class="demowp_campotexto_label"> Tecnica de envio </label>';
   
	echo ' <select class="select-widget" name="' . $this->get_field_name( 'showInfo_style' ) . '">';
		echo '<option value="formulario"  selected="'. $showInfo_checked_1 .'">  Formulario </option>';
		echo ' <option value="boton" selected="'. $showInfo_checked_2 .'" > Boton </option> ';
		echo ' </select> ';
	echo '</p>';
	}

	public function update( $new_instanceForm, $old_instanceForm ) {
		$instanceForm = array();
		$instanceForm = $old_instanceForm;
		/**
		 * 'formCampo_title' => '',
    *'formCampo_campotexto' => '',
	*'formCampo_url'=>'',
	*'formCampo_option'
		 */
		$instanceForm['formCampo_title'] = strip_tags( $new_instanceForm['formCampo_title'] );
        $instanceForm['formCampo_campotexto'] = strip_tags( $new_instanceForm['formCampo_campotexto'] );
		$instanceForm['formCampo_url'] = strip_tags( $new_instanceForm['formCampo_url'] );
        $instanceForm['formCampo_option'] = strip_tags( $new_instanceForm['formCampo_option'] );

	}

}



// Show info icons
class ShowInfoWidgets extends WP_Widget{
	public function __construct() {
		parent::__construct(
			'info_widget','Info widgets',
			array(
				'description' => 'Muestra la información relevante con un bonito y agradable formato',
				'classname'   => 'icon_widget',
			)
		);

	}
	public function widget( $args, $instance1 ) {
		echo $args['before_widget'];
	  echo $args['before_title'] . apply_filters( 'widget_title', $instance1['showInfo_tittle'] ). $args['after_title'];
	  
			if($instance1['showInfo_style'] == 'estilo_1'){
 	    ?>
			<div class="style-1-container">
					<div class="icon-content">
						<i class="fa <?php echo $instance1['showInfo_icon'] ; ?>"></i>
					</div>
					<div class="text-content">
					<?php echo $instance1['showInfo_text'] ; ?>
					</div>
				
				</div>
				</div>

			<?php

			}else{
				?>
				<div class="widget-content">
				<div class="style-2-container">
					<div class="icon-content">
						<i class="fa <?php echo $instance1['showInfo_icon'] ; ?>"></i>
					</div>
					<div class="text-content">
					<?php echo $instance1['showInfo_text'] ; ?>
					</div>
			</div>
				</div>
				</div>
				
				
				<?php

			}


	}
	public function form( $instance1 ) {
		$instance1 = wp_parse_args( (array) $instance1, array( 
			'showInfo_tittle' => '',
			'showInfo_style' => 'estilo_1',
			'showInfo_icon'=>'',
			'showInfo_text'=>''
			) );
			 // Si existen datos en la bsae de datos los recogemos para mostrarlos
 $showInfo_tittle = !empty( $instance1['showInfo_tittle'] ) ? $instance1['showInfo_tittle'] : '';
 $showInfo_style = !empty( $instance1['showInfo_style'] ) ? $instance1['showInfo_style'] : '';
 $showInfo_icon = !empty( $instance1['showInfo_icon'] ) ? $instance1['showInfo_icon'] : '';
 $showInfo_text = !empty( $instance1['showInfo_text'] ) ? $instance1['showInfo_text'] : '';
 $showInfo_checked_1= $instance1['showInfo_style']=='estilo_1' ? 'selected': '';
 $showInfo_checked_2= $instance1['showInfo_style']=='estilo_2' ? 'selected': '';
 
 echo '<style>
			.select-widget{
				display:block;
				width:100%;
			}
			.text-area{
				width:100% !important;
			}
 </style>';
 echo '<p>';

 echo ' <label for="' . $this->get_field_id( 'showInfo_tittle' ) . '" class="demowp_campotexto_label">' . 'Titulo de la información' . '</label>';
 echo ' <input type="text" id="' . $this->get_field_id( 'showInfo_tittle' ) . '" name="' . $this->get_field_name( 'showInfo_tittle' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'text_domain' ) . '" value="' . esc_attr( $showInfo_tittle ) . '">';
 echo ' <label for="' . $this->get_field_id( 'showInfo_tittle' ) . '" class="demowp_campotexto_label">' . 'Opciones de diseño' . '</label>';
 echo ' <select class="select-widget" name="' . $this->get_field_name( 'showInfo_style' ) . '">';
 echo '<option value="estilo_1"  selected="'. $showInfo_checked_1 .'"> Estilo 1 </option>';
 echo ' <option value="estilo_2" selected="'. $showInfo_checked_2 .'" >Estilo 2</option> ';
 echo ' </select> ';
 echo ' <label for="' . $this->get_field_id( 'showInfo_icon' ) . '" class="demowp_campotexto_label">Icono Font awesome</label>';
 echo ' <input type="text" id="' . $this->get_field_id( 'showInfo_icon' ) . '" name="' . $this->get_field_name( 'showInfo_icon' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'text_domain' ) . '" value="' . esc_attr( $showInfo_icon ) . '">';
 echo ' <label for="' . $this->get_field_id( 'showInfo_text' ) . '" class="demowp_campotexto_label"> Descripción </label>';
 echo '<textarea class="text-area" id="' . $this->get_field_id( 'showInfo_text' ) . '" name="' . $this->get_field_name( 'showInfo_text' ) . '" rows="10" cols="50">' . esc_attr( $showInfo_text ) . '</textarea>';
 //echo ' <input type="text" id="' . $this->get_field_id( 'showInfo_text' ) . '" name="' . $this->get_field_name( 'showInfo_text' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'text_domain' ) . '" value="' . esc_attr( $showInfo_text ) . '">';
 echo '</p>';

	}
	public function update( $new_instance1, $old_instance1 ) {
		$instance1 = array();
		$instance1 = $old_instance1;

		$instance1['showInfo_tittle'] = strip_tags( $new_instance1['showInfo_tittle'] );
        $instance1['showInfo_style'] = strip_tags( $new_instance1['showInfo_style'] );
		$instance1['showInfo_icon'] = strip_tags( $new_instance1['showInfo_icon'] );
        $instance1['showInfo_text'] = strip_tags( $new_instance1['showInfo_text'] );


         
        return $instance1;

	}

}
