<h2>Your Shifts</h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Shift ID</strong></td>
        <td><strong>Start Shift</strong></td>
        <td><strong>End Shift</strong></td>
    </tr>

    <?php foreach ($L_All_Shifts as $news_item): ?>
        <tr>
            <td><?php echo $news_item['All_Shift_ID']; ?></td>
            <td><?php echo $news_item['Shift_Start']; ?></td>
            <td><?php echo $news_item['Shift_End']; ?></td>

            
        </tr>
<?php endforeach; ?>
</table>