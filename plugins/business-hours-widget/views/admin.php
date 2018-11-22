<!-- This file is used to markup the administration form of the widget. -->
<div class="widget-content">
    <p>
        <label for="<?php echo $this->get_field_id( 'monday_friday' ); ?>">Monday-Friday</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'monday_friday_hours' ); ?>" name="<?php echo $this->get_field_name( 'monday_friday_hours' ); ?>" value="<?php echo esc_attr( $monday_friday_hours ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'saturday' ); ?>">Saturday</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'saturday_hours' ); ?>" name="<?php echo $this->get_field_name( 'saturday_hours' ); ?>" value="<?php echo esc_attr( $saturday_hours ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'sunday' ); ?>">Sunday</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'sunday_hours' ); ?>" name="<?php echo $this->get_field_name( 'sunday_hours' ); ?>" value="<?php echo esc_attr( $sunday_hours ); ?>">
    </p>
</div>
