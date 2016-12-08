<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('shifts/create'); ?>    
    <table>
        <tr>
            <td><label for="Shift_Start">Start Shift</label></td>
            <td><input type="input" name="Shift_Start" size="50" /></td>
        </tr>
        <tr>
            <td><label for="Shift_End">End Shift</label></td>
            <td><input type="input" name="Shift_End" size="50" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
    </table>    
</form>
