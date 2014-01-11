<div>
    <table class="table-bordered">
        <tr>
            <th>STT</th>
            <th>Author</th>
            <th>Title</th>
            <th>Short Description</th>
            <th>Partly Price</th>
            <th>Full Price</th>
            <th></th>
        </tr>
        <?php
        $index = 1;
        foreach ($data as $row) {
            ?>
            <tr>
                <td><?php echo $index++; ?></td>
                <td><?php echo $row['user']['profile']['firstname'] . ' ' . $row['user']['profile']['lastname']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['short_description']; ?></td>
                <td><?php echo $row['partly_price']; ?></td>
                <td><?php echo $row['full_price']; ?></td>
                <td>
                    <?php echo CHtml::link('Edit', array('/ideality/update', 'id' => $row['id'])); ?>
                    <?php echo CHtml::link('Delete', '#', array('submit' => array('ideality/delete', 'id' => $row['id']), 'confirm' => 'Are you sure you want to delete this item?')); ?>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
</div>