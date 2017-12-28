<div class="container">
    <h1>Results</h1>
    <table>
        <?php 
            while($row = mysqli_fetch_assoc($data['listResult'])) { ?>
                <tr id="tr-id-<?php echo $row['id']; ?>">
                <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['result']; ?></td>
                </tr> 
            <?php } ?>
                
    </table>
</div>    