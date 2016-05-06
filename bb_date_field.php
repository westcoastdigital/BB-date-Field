<?php
function fl_date_field($name, $value, $field) {
   
?>

<script>
jQuery( document ).ready(function() {
    jQuery( ".datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
    });
});
</script>
    
      <input type="text" class="datepicker" name="<?php echo $name; ?>" value="<?php echo $value; ?>" >

<?php
}
add_action('fl_builder_control_date', 'fl_date_field', 1, 3);

function fl_date_field_assets() {
    if ( class_exists( 'FLBuilderModel' ) && FLBuilderModel::is_builder_active() ) {
        wp_enqueue_style( 'jquery-ui.min.css', FL_MODULE_EXAMPLES_URL  . 'assets/jquery-ui.min.css', array(), '' );
        wp_enqueue_script( 'jquery-ui.min/js', FL_MODULE_EXAMPLES_URL  . 'assets/jquery-ui.min.js', array(), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'fl_date_field_assets' );