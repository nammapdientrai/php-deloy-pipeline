<?php
    include 'controller/productController.php';

    $ps = new ProductController();
    $list = $ps->getAllProduct();

    $size = sizeof($list);
?>

<div style="margin: auto auto; width: 100%;">
    <table class="table text-center" style="width:100%; color: white;">
        <tr style="font-size: 18px;">
            <th class="text-center">ID</th>
            <th class="text-center">NAME</th>
            <th class="text-center">CATEGORY ID</th>
            <th class="text-center">DESCRIPTION</th>
            <th class="text-center">PRICE</th>
        </tr>
        <?php
            for ($x = 0; $x < $size; $x++) {
        ?>
        <tr>
            <td><?php echo $list[$x]->get_id() ?></td>
            <td><?php echo $list[$x]->get_name() ?></td>
            <td><?php echo $list[$x]->get_category_id() ?></td>
            <td><?php echo $list[$x]->get_description() ?></td>
            <td><?php echo $list[$x]->get_price() ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>
