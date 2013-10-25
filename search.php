<?php
include_once ("./header.php");
include_once ("./appvars.php");
include_once ("./entity_helper.php");
include_once ("./db_helper.php");

function render_content($row, $db_name) {
    $name = $row[name];
    $id = $row[id];
    $def = $row[def];
    echo "<p><a href=\"entity.php?id=$id&db_name=$db_name\">$name</a></p>";

    echo $def;
    echo '<br>';

    echo '<a class="btn btn-link" href="#" role="button">功效&nbsp; &raquo;</a>';
    echo '&nbsp;';
    echo '<a class="btn btn-link" href="#" role="button">化学成分&nbsp; &raquo;</a>';
    echo '&nbsp;';
    echo '<a class="btn btn-link" href="#" role="button">药理作用&nbsp; &raquo;</a>';
    echo '&nbsp;';
    echo '<a class="btn btn-link" href="#" role="button">化学实验&nbsp; &raquo;</a>';
    echo '&nbsp;';
    echo '<a class="btn btn-link" href="#" role="button">来源处方&nbsp; &raquo;</a>';

    echo "<hr>";
}

function render_entity($dbc, $keywords, $db_name) {
    $query = "SELECT * FROM def where name = '$keywords'";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');
    if ($row = mysqli_fetch_array($result)) {
        render_content($row, $db_name);
    }
}

function render_related($dbc, $keywords) {
    echo PREFIX;
    echo $keywords;
   
    $query = "SELECT * FROM def where name = '$keywords'";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');
    if ($row = mysqli_fetch_array($result)) {
         echo "has results";
        $id = $row[id];
        $name = PREFIX . $id;

        $query = "select * from graph where subject ='$name'  limit 20";

        $result = mysqli_query($dbc, $query) or die('Error querying database2.');

        if (mysqli_num_rows($result) != 0) {
            echo '<p><font color="red">' . $keywords . '</font>的相关搜索:</p>';
            while ($row = mysqli_fetch_array($result)) {
                $value = $row[value];
                render_entity_link($dbc, $value);
            }
        }
    }
}
 
if (isset($_POST['submit'])) {
    $keywords = $_POST['keywords'];
}

if (isset($_GET['keywords'])) {
    $keywords = $_GET['keywords'];
}


?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form class="form-search" action="search.php" method="get" class="form-horizontal"
              enctype="multipart/form-data">
            <input type="hidden" id ="db_name" name ="db_name" value ="<?php if (isset($db_name)) echo $db_name; ?>">
            <div class="container" >
                <div class="row">
                    <div class="col-md-3">
                        <img width="100%" class="media-object" src="img/logo.jpg" >                    
                    </div>   
                    <div class="col-md-9">
                        <br>
                        <ul class="nav nav-pills" align="center">
                            <?php
                            foreach ($db_labels as $db => $db_label) {
                                echo '<li ' . (($db == $db_name) ? 'class="disabled"' : '') . '><a href="' . $_SERVER['PHP_SELF'] . "?keywords=$keywords&db_name=" . $db . '">' . $db_label . '</a></li>';
                            }
                            ?>  
                            <li><a href="#">更多>></a></li>
                        </ul>


                        <!--
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 单味药
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 化学成分
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 实验方法
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 药理作用
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 方剂
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 学者 
                        </label>
                        !-->
                    </div>
                </div>
                <p></p>
                <div class="input-group">
                    <input type="text" id ="keywords" name ="keywords" class="form-control input-lg" placeholder="搜索......"  value ="<?php if (isset($keywords)) echo $keywords; ?>">
                    <span class="input-group-btn">
                        <button name ="submit" type="submit" class="btn btn-primary  btn-lg"><span class="glyphicon glyphicon-search"></span></button>
                    </span> 
                </div> 
                <p></p>



                <hr> 
                <div class="row">
                    <div class="col-md-10">


                        <?php
//$keywords = '四君子汤';
                        render_entity($dbc, $keywords, $db_name);




                        $query = "SELECT * FROM def where name like '%$keywords%' or def like '%$keywords%' ORDER BY name ASC LIMIT 0,10";


                        $result = mysqli_query($dbc, $query) or die('Error querying database.');
                        while ($row = mysqli_fetch_array($result)) {
                            render_content($row, $db);
                        }
                        ?>





                        <ul class="pagination">
                            <li><a href="#">上一页</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">下一页</a></li>
                        </ul>

                        <p><font color="gray">获得约 8,710 条结果。</font></p>
                        <hr>
                    </div>
                    <div class="col-md-2">
                        <?php
                        render_related($dbc, $keywords);
                        ?>
                    </div>

                </div>
            </div>
        </form>   
    </div>

</div>


<!-- Example row of columns -->


<!-- /container -->
<?php
include_once ("./foot.php");
?>
