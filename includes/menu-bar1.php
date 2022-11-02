<?php
$page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="<?php
                            if ($page == "index.php") {
                                echo 'active';
                            }
                            ?>"><a href="./">Home</a></li>
                <?php $sql = mysqli_query($con, "select id,categoryName from category limit 6");
                while ($row = mysqli_fetch_array($sql)) {
                ?>
                <li class="dropdown <?php
                                        // active
                                        if ($page == "category.php" && $_GET['cid'] == $row['id']) {
                                            echo 'active';
                                        }
                                        ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"><?php echo htmlentities($row['categoryName']); ?> <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php $sql1 = mysqli_query($con, "select id,subcategory from subcategory where categoryid='" . $row['id'] . "'");
                            while ($row1 = mysqli_fetch_array($sql1)) {
                            ?>
                        <li class="<?php
                                            if ($page == $row1['subcategory']) {
                                                echo 'active';
                                            } ?>"><a
                                href="category.php?cid=<?php echo htmlentities($row['id']); ?>&sub=<?php echo htmlentities($row1['id']); ?>"><?php echo htmlentities($row1['subcategory']); ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>