<div class="container">
            <div class="row">
                <!-- Mufrodat 1 -->
                <?php foreach ($kata as $kata) :?>
                    <div class="col-12 col-md-4 mb-3">
                        <ul class="list-group">
                                <li class="list-group-item text-right arab">
                                    <?= $kata['kata'];?>
                                </li>
                                <li class="list-group-item text-center">
                                    <audio controls>
                                        <!-- <source src="<?= base_url()?>sound/1.1.ogg" type="audio/ogg"> -->
                                        <source src="<?= base_url()?>sound/<?= $kata['audio']?>" type="audio/mpeg">
                                        <source src="<?= base_url()?>sound/<?= $kata['audio']?>" type="audio/mp4" />
                                        Your browser does not support the audio element.
                                    </audio>
                                </li>
                        </ul>
                    </div>
                <?php endforeach;?>
                <?php if(!empty($next) && !empty($back)):?>
                    <div class="col-12 d-flex justify-content-between">
                        <a href="<?= $back?>" class="btn btn-success btn-sm"><i class="fa fa-arrow-left"></i></a>
                        <a href="<?= $next?>" class="btn btn-success btn-sm"><i class="fa fa-arrow-right"></i></a>
                    </div>
                <?php elseif(!empty($next) && empty($back)):?>
                    <div class="col-12 d-flex justify-content-end">
                        <a href="<?= $next?>" class="btn btn-success btn-sm"><i class="fa fa-arrow-right"></i></a>
                    </div>
                <?php elseif(empty($next) && !empty($back)):?>
                    <div class="col-12 d-flex justify-content-start">
                        <a href="<?= $back?>" class="btn btn-success btn-sm"><i class="fa fa-arrow-left"></i></a>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>