<?php
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

	public function widget( $args, $instance ) {
		$text = apply_filters( 'widget_text', empty( $instance['formCampo_demo_title'] ) ? '' : $instance['formCampo_demo_title'], $instance );
		
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

	public function form( $instance ) {
         // Valores por defecto
 $instance = wp_parse_args( (array) $instance, array( 
    'formCampo_demo_title' => '',
    'formCampo_campotexto' => '',
    'formCampo_url'=>''
    ) );
   
    // Si existen datos en la bsae de datos los recogemos para mostrarlos
    $demowp_campotexto = !empty( $instance['demowp_campotexto'] ) ? $instance['demowp_campotexto'] : '';
    
    echo '<p>';
    echo ' <label for="' . $this->get_field_id( 'demowp_campotexto' ) . '" class="demowp_campotexto_label">' . __( 'campo texto', 'text_domain' ) . '</label>';
    echo ' <input type="text" id="' . $this->get_field_id( 'demowp_campotexto' ) . '" name="' . $this->get_field_name( 'demowp_campotexto' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'text_domain' ) . '" value="' . esc_attr( $demowp_campotexto ) . '">';
    echo ' <label for="' . $this->get_field_id( 'demowp_campotexto' ) . '" class="demowp_campotexto_label">' . __( 'campo texto', 'text_domain' ) . '</label>';
    echo ' <input type="text" id="' . $this->get_field_id( 'demowp_campotexto' ) . '" name="' . $this->get_field_name( 'demowp_campotexto' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'text_domain' ) . '" value="' . esc_attr( $demowp_campotexto ) . '">';
    echo '</p>';
	}

	public function update( $new_instance, $old_instance ) {

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
				<div class="style-2-container">
					<div class="icon-content">
						<i class="fa <?php echo $instance1['showInfo_icon'] ; ?>"></i>
					</div>
					<div class="text-content">
					<?php echo $instance1['showInfo_text'] ; ?>
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

