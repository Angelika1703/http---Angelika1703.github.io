<?php
$page_id = $pageDetails["page_id"];
if ($_GET["id"] <> "") {
    $sql = "SELECT * FROM " . TABLE_PAGES . " WHERE status = 'A' AND parent = :parent ORDER BY sort_order ASC";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":parent", db_prepare_input($pageDetails["parent"]));
        $stmt->execute();
        $pagesResults = $stmt->fetchAll();
    } catch (Exception $ex) {
       echo errorMessage($ex->getMessage());
    }

} elseif ($page_id <> "") {

   $sql = "SELECT * FROM " . TABLE_PAGES . " WHERE status = 'A' AND parent = :parent ORDER BY sort_order ASC";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":parent", db_prepare_input($page_id));
        $stmt->execute();
        $pagesResults = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo errorMessage($ex->getMessage());
    }
   
}
?>
<div class="3u">
    <?php
    if (count($pagesResults) > 0) {
        ?>
        <section>
            <h2>Достопримечательности</h2>
            <div>
                <div class="row">
                    <div class="12u">
                        <ul class="link-list">
                            <?php foreach ($pagesResults as $rs) { ?>
                                <li><a href="page.php?id=<?php echo easy_crypt($rs["page_alias"]); ?>"><?php echo stripslashes($rs["page_title"]); ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
    <?php } ?>

    <section>
        <h4>Сколевские Бескиды</h4>
        <div>
            <div class="row">
                <div class="12u">
                    <a href="http://turizm-karpaty.com.ua/index.php?view_content=383&lang=rus" target="_blank"><img src="css/images/6.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h4>Дворец Кинских</h4>
        <div>
            <div class="row">
                <div class="12u">
                    <a href="http://turizm-karpaty.com.ua/index.php?view_content=1533&lang=rus" target="_blank"><img src="css/images/7.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h4>Пещерный монастырь</h4>
        <div>
            <div class="row">
                <div class="12u">
                    <a href="http://turizm-karpaty.com.ua/index.php?view_content=1012&lang=rus" target="_blank"><img src="css/images/8.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h4>Костел Семи Печалей</h4>
        <div>
            <div class="row">
                <div class="12u">
                    <a href="http://turizm-karpaty.com.ua/index.php?view_content=1531&lang=rus" target="_blank"><img src="css/images/9.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    
   
</div>