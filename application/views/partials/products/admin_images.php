<?php                           foreach($images as $index=>$image){ ?>
                                    <li><img src="<?= "../".$image["path"].$image["name"] ?>" alt=""><i class="delete_image" data-image-index="<?= $index?>"></i><label><input type="checkbox" name="main_image" value="<?= $index ?>">Mark as main</label></li>
<?php                           } ?>