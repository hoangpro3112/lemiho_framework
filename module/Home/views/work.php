<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
    <h2> Your Work </h2>
    <br/>
    <button class="btn btn-success" onclick="createResult('<?php echo base_url(); ?>');">Solve Final Problem</button>
    <br/>
    <span id="message-system"></span>
    <br/>
    <table style="width:100%;">
        <?php 
            while($row = mysqli_fetch_assoc($data['listWork'])) { ?>
                <tr id="tr-id-<?php echo $row['id']; ?>">
                    <th style="border:1px solid #ccc;padding:5px;" class="text-center"><?php echo $row['name']; ?></th>
                    <th style="border:1px solid #ccc;padding:5px;" class="text-center"><?php echo $row['priority']; ?></th>
                    <th style="border:1px solid #ccc;padding:5px;" class="text-center"><?php echo $row['create_time']; ?></th>
                </tr> 
            <?php } ?>
    </table>
</div>