
<?php                   foreach($items as $item){ ?>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    <?= $item["name"]?>
                                </span>
                            </td>
                            <td><span><?= $item["id"] ?></span></td>
                            <td><span>$ <?= $item["price"] ?></span></td>
                            <td><span><?= $item["category"]?></span></td>
                            <td><span><?= $item["stocks"]?></span></td>
                            <td><span><?= $item["sold"] ?></span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="<?= $item["id"]?>">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="/products/process" method="post">
                                    <?= form_open() ?>
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
<?php                   } ?>