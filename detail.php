<?php
include("pages/header.php");
include("pages/project-data.php");
$projectName = $_GET["q"];
$category = $_GET["c"];

if ($category=="Graphic Design") {
    foreach ($graphic as $key) {
        if ($key['projectName']==$projectName) {
            $projectName = $key['projectName'];
            $file = $key['file'];
            $desc = $key['desc'];
            $author = $key['author'];
            $tag = $key['tag'];
        }
    }
}elseif ($category=="Web Development") {
    foreach ($web as $key) {
    if ($key['projectName']==$projectName) {
        $projectName = $key['projectName'];
        $link = $key['link'];
            $file = $key['file'];
        $desc = $key['desc'];
        $author = $key['author'];
        $tag = $key['tag'];
    }
}

}

?>

<div class="container">
    <?php if ($category=="Graphic Design"):?>
    <section>
        <nav aria-label="breadcrumb" class="bg-white mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-primary fw-bold p-0"
                        href="projects.php?c=<?=$category?>"><?=$category?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$projectName?></li>
            </ol>
        </nav>

        <h3><?=$projectName?></h3>
        <div class="row">
            <div class="col-md-4">
                <?php if($desc!=""):?>
                <p><b>Deskripsi</b>: <?=$desc?></p>
                <?php endif;?>
                <p><b>Author</b>: <?=$author?></p>
                <p><b>Kategori</b>: <?=$tag?></p>
            </div>
            <div class="col-md-8">
                Gambar:
                <div class="row">
                    <?php foreach($file as $img=>$value):?>
                    <div class="col-md-3">
                        <a href="./img/projects/<?=$value?>" class="p-0">
                            <img src="./img/projects/<?=$value?>" class="img-fluid" alt="">
                        </a>
                    </div>
                    <?php endforeach;?>
                </div>

            </div>
        </div>
    </section>
    <?php elseif ($category=="Web Development"):?>
    <section>
         <nav aria-label="breadcrumb" class="bg-white mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-primary fw-bold p-0"
                        href="projects.php?c=<?=$category?>"><?=$category?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$projectName?></li>
            </ol>
        </nav>
        <h3><?=$projectName?></h3>
        <div class="row">
            <div class="col-md-4">
                <p><b>Deskripsi</b>: <?=$desc?></p>
                <p><b>Author</b>: <?=$author?></p>
                <p><b>Kategori</b>: <?=$tag?></p>
                <a href="<?=$link?>" class="btn btn-primary" target="_blank">Link Project</a>
            </div>
            <div class="col-md-8">
                Screenshots:
                

                <div class="row">
                    <?php foreach($file as $img=>$value):?>
                    <div class="col-md-3">
                       <a href="./img/projects/<?=$value?>" class="p-0" >
                            <img src="./img/projects/<?=$value?>" class="img-fluid" alt="">
                       </a>
                    </div>
                    <?php endforeach;?>
                </div>

            </div>
        </div>
    </section>
    <?php endif;?>
</div>