<section class="inner_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 d-flex justify-content-between pt-4 pb-4">
                <h6><?php if(isset($title)){ echo $title;} else{ echo '';} ?></h6>
                <p>You are here: <a href="index.php"> <i class="fa-solid fa-house"></i> Home page </a> >
                    <?php if(isset($title)){ echo $title;} else{ echo '';} ?></p>
            </div>
        </div>
    </div>
</section>