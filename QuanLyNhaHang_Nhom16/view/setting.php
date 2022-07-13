<!-- <?php include_once("layout.php") ?> -->

<?php 
    require('../model/db.php');
    require('../controller/settingController.php');  
    $MN1 = get_MonAn_MN1();
    $MN2 = get_MonAn_MN2();
    $MN3 = get_MonAn_MN3();
    $MN4 = get_MonAn_MN4();
?>

<head>

</head>
<body>

    <?php
        if(!empty($_POST["ma_mon_del"])){
            $ma_mon_del = $_POST["ma_mon_del"];
            delete_MonAn($ma_mon_del);
            header("Location: .?ma_mon_del=$ma_mon_del");
            header("Location: ./setting.php");
        }
    ?>

    <?php 
        if(!empty($_POST["add_mon"])){
            $ten_mon = $_POST["Ten_mon"];
            $gia = $_POST["Gia"];
            $ma_menu = $_POST["add_mon"];
            add_MonAn($ten_mon, $gia, $ma_menu );
            header("Location: ./setting.php");
        }
    ?>

    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th class="contener_th">Tên Món</th>
                    <th class="contener_th">Giá Món</th>
                    <th class="contener_short">Xóa</th>
                    <th class="">Save</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><input placeholder="Tên Món" name="Ten_mon"/></td>
                <td><input placeholder="Giá" name="Gia"/></td>
                <td></td>
                <td><button type="submit" name="add_mon" value="1">Save</button></td>
            </tr>
            </form>
            <tr>
                <?php if(!empty($MN1)) { ?>
                <?php foreach ($MN1 as $mn1) : ?>
                <?php if($mn1['DEL'] == 0) { ?>
                    <div class="list__item">
                        <td class="contener_th"><?php echo $mn1['TEN_MON'] ?></td>
                        <td class="contener_th"><input value="<?php echo $mn1['GIA'] ?>" type="number" /></td>
                    </div>
                    <div class="list__removeItem">  
                    <form action="" method="post">
                        <input type="hidden" name="action" value="delete_MonAn">
                        <input type="hidden" name="ma_mon_del" value="<?= $mn1['MA_MON']; ?>">
                        <td class="contener_short"><button >❌</button></td>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="action" value="update_MonAn">
                        <input type="hidden" name="ma_mon_up" value="<?= $mn1['MA_MON']; ?>">
                        <td class="contener_short"><button >Save</button></td>
                    </form>
                    </div>
                    </tr>
                <?php } endforeach; ?>           
                <?php } else { ?>
                    <p>CHƯA CÓ KHÁCH HÀNG NÀO</p>
                <?php } ?>
            </tbody>
        </table>
        
    
    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th class="contener_th">Tên Món</th>
                    <th class="contener_th">Giá Món</th>
                    <th class="contener_short">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><input placeholder="Tên Món" name="Ten_mon"/></td>
                <td><input placeholder="Giá" name="Gia"/></td>
            </tr>
            <tr>
            <?php if(!empty($MN2)) { ?>
                <?php foreach ($MN2 as $mn2) : ?>
                <?php if($mn2['DEL'] == 0) { ?>
                    <div class="list__item">
                        <td class="contener_th"><?php echo $mn2['TEN_MON'] ?></td>
                        <td class="contener_th"><?php echo $mn2['GIA'] ?></td>
                    </div>
                    <div class="list__removeItem">
                        <form action="" method="post">
                            <input type="hidden" name="action" value="delete_MonAn">
                            <input type="hidden" name="ma_mon_del" value="<?= $mn2['MA_MON']; ?>">
                            <td class="contener_short"><button>❌</button></td>
                        </form>
                    </div>
                    </tr>
                <?php } endforeach; ?>           
                <?php } else { ?>
                    <p>CHƯA CÓ KHÁCH HÀNG NÀO</p>
                <?php } ?>
            </tbody>
        </table>
        <button type="submit" name="add_mon>Save</button>
    </form>

    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th class="contener_th">Tên Món</th>
                    <th class="contener_th">Giá Món</th>
                    <th class="contener_short">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><input placeholder="Tên Món" name="Ten_mon"/></td>
                <td><input placeholder="Giá" name="Gia"/></td>
            </tr>
            <tr>
            <?php if(!empty($MN3)) { ?>
                <?php foreach ($MN3 as $mn3) : ?>
                <?php if($mn3['DEL'] == 0) { ?>
                    <div class="list__item">
                        <td class="contener_th"><?php echo $mn1['TEN_MON'] ?></td>
                        <td class="contener_th"><?php echo $mn1['GIA'] ?></td>
                    </div>
                    <div class="list__removeItem">
                        <form action="" method="post">
                            <input type="hidden" name="action" value="delete_MonAn">
                            <input type="hidden" name="ma_mon_del" value="<?= $mn3['MA_MON']; ?>">
                            <td class="contener_short"><button>❌</button></td>
                        </form>
                    </div>
                    </tr>
                <?php } endforeach; ?>           
                <?php } else { ?>
                    <p>CHƯA CÓ KHÁCH HÀNG NÀO</p>
                <?php } ?>
            </tbody>
        </table>
        <button type="submit" name="add_mon>Save</button>
    </form>

    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th class="contener_th">Tên Món</th>
                    <th class="contener_th">Giá Món</th>
                    <th class="contener_short">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><input placeholder="Tên Món" name="Ten_mon"/></td>
                <td><input placeholder="Giá" name="Gia"/></td>
            </tr>
            <tr>
            <?php if(!empty($MN4)) { ?>
                <?php foreach ($MN4 as $mn4) : ?>
                <?php if($mn4['DEL'] == 0) { ?>
                    <div class="list__item">
                        <td class="contener_th"><?php echo $mn4['TEN_MON'] ?></td>
                        <td class="contener_th"><?php echo $mn4['GIA'] ?></td>
                    </div>
                    <div class="list__removeItem">
                        <form action="" method="post">
                            <input type="hidden" name="action" value="delete_MonAn">
                            <input type="hidden" name="ma_mon_del" value="<?= $mn4['MA_MON']; ?>">
                            <td class="contener_short"><button>❌</button></td>
                        </form>
                    </div>
                    </tr>
                <?php } endforeach; ?>           
                <?php } else { ?>
                    <p>CHƯA CÓ KHÁCH HÀNG NÀO</p>
                <?php } ?>
            </tbody>
        </table>
        <button type="submit" name="add_mon>Save</button>
    </form>
</body>

