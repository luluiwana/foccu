<?php include('pages/header.php')?>
<?php 
include('pages/project-data.php');
$category = $_GET["c"];
if ($category=="Graphic Design") {
    $tag=$graphic_tag;
    $data=$graphic;
}elseif ($category=="Web Development") {
    $tag=$web_tag;
    $data=$web;
}

?>
<div class="container">
    <section>
        <h1 class="text-center "><?=$category?> Portfolio</h1>
    
        <!-- Categories -->
        <div class="mt-5">
            Categories:
            <a href="projects.php?c=<?=$category?>" class="btn btn-primary btn-sm">All</a>
            <?php foreach($tag as $row => $value):?>

            <a href="tag.php?c=<?=$category?>&t=<?=$value?>" class="btn btn-primary btn-sm"><?=$value?></a>
            <?php endforeach;?>
        </div>
        <!-- Projects -->
        <div class="row mt-5">
            <?php foreach($data as $row):?>
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
            <?php endforeach;?>
        </div>
    </section>
</div>
<?php include('pages/footer.php')?>