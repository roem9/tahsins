<div class="container">
            <div class="row">
                <!-- Mufrodat 1 -->
                <div class="col-12 col-md-4 mb-3">
                    <ul class="list-group">
                        <?php foreach ($kata as $kata) :?>
                            <li class="list-group-item text-right arab">
                                <?= $kata['kata'];?>
                            </li>
                            <li class="list-group-item text-center">
                                <audio controls>
                                    <source src="<?= base_url()?>sound/1.1.ogg" type="audio/ogg">
                                    Your browser does not support the audio element.
                                </audio>
                                <!-- <span class="btn btn-sm btn-info"><i class="fa fa-play mr-1"></i>Putar</span> -->
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>