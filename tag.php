<?php
include("pages/header.php");
include("pages/project-data.php");
$category = $_GET["c"];
$tag = $_GET["t"];
if ($category=="Graphic Design") {
    $data = $graphic;
    $data_tag = $graphic_tag;
}elseif ($category=="Web Development") {
    $data = $web;
    $data_tag = $web_tag;
}

?>
<div class="container">

    <section>
        <h1 class="text-center"><?=$category?> (<?=$tag?>)</h1>
       
        <!-- Categories -->
        <div class="mt-5">
            Categories:
            <a href="projects.php?c=<?=$category?>" class="btn btn-primary btn-sm">All</a>
            <?php foreach ($data_tag as $row => $value):?>
            <a href="tag.php?c=<?=$category?>&t=<?=$value?>" class="btn btn-primary btn-sm"><?=$value?></a>
            <?php endforeach;?>
        </div>
        <!-- Projects -->
        <div class="row mt-5">
            <?php foreach ($data as $row):?>
            <?php if ($row['tag']==$tag):?>
            <div class="col-md-4">
                <div class="card">
                <a href="detail.php?c=<?=$category?>&q=<?=$row['projectName']?>" class="p-0">

                        <div class="card-body">
                            
                            <div>
                                <img src="./img/projects/thumbnail/<?=$row['thumbnail']?>" class="w-100" alt="">
                            </div>
                            <div class="text-center">
                                <?=$row['projectName']?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endif;?>
            <?php endforeach;?>
        </div>
    </section>
</div>
<?php include('pages/footer.php')?>