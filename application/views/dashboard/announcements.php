   
<?php foreach ($announcements as $a) : ?>

    <div class="listing listing-radius listing-<?=($a->type=='critical') ? 'danger':'success'?>">
        <div class="shape"></div>
        <div class="listing-content text-center">
            <p><?=$a->message?></p>
        </div>
        <i class="pull-right">- <?=$a->users->full_name?></i>
    </div>
    <hr>

<?php endforeach; ?>

<?php if($noAnnouncements) : ?>

    <h4 align="center" >No Announcements</h4>

<?php endif; ?>