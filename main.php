<?php 
    $data = [
        1=>'お茶',
        2=>'水',
        3=>'ジュース'
    ]
?>
<div>
    <h1>買うものリスト</h1>
        <div class="list">
            <ul class="list_inner">
                <?php for($i = 1;$i <= 3;$i++){ ?>
                    <li>
                        <?php echo $data[$i] ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
</div>
