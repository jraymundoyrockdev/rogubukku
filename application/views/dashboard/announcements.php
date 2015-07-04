   
<?php foreach ($announcements as $a) : ?>

    <div class="listing listing-radius listing-<?=($a->type=='critical') ? 'danger':'success'?>">
        <i>
            <small><?= date_format(date_create($a->date_announced), 'Y-m-d') ?></small>
        </i>
        <i class="pull-right">- <?=$a->users->full_name?></i>
        
        <div class="listing-content text-center">
            <p><?=$a->message?></p>
        </div>
    </div>
    <hr>

<?php endforeach; ?>
    <h4 align="center" >
        <?=$noAnnouncements?>
    </h4>
<a href="<?= URL::site('admin/announcements'); ?>" class="pull-right"><i>View All Annoucements</i></a>
<style>
.shape {
    border-style: solid;
    border-width: 0 90px 60px 0;
    float: right;
    height: 0px;
    
    -ms-transform: rotate(360deg); /* IE 9 */
    -o-transform: rotate(360deg); /* Opera 10.5 */
    -webkit-transform: rotate(360deg); /* Safari and Chrome */
    transform: rotate(360deg);
}

.listing {
    background: #fff;
    border: 1px solid #ddd;
    /*box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);*/
    margin: 0px 0;
    overflow: hidden;
    padding: 10px;
}
.listing:hover {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: rotate scale(1.1);
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}
.shape {
    border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.listing-radius {
    border-radius: 7px;
}
.listing-danger {
    border-color: #d9534f;
}
.listing-danger .shape {
    border-color: transparent #d9533f transparent transparent;
}
.listing-success {
    border-color: #5cb85c;
}
.listing-success .shape {
    border-color: transparent #5cb75c transparent transparent;
}
.listing-default {
    border-color: #999999;
}
.listing-default .shape {
    border-color: transparent #999999 transparent transparent;
}
.listing-primary {
    border-color: #428bca;
}
.listing-primary .shape {
    border-color: transparent #318bca transparent transparent;
}
.listing-info {
    border-color: #5bc0de;
}
.listing-info .shape {
    border-color: transparent #5bc0de transparent transparent;
}
.listing-warning {
    border-color: #f0ad4e;
}
.listing-warning .shape {
    border-color: transparent #f0ad4e transparent transparent;
}
.critical-shape-text {
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    position: relative;
    right: -83px;
    top: 11px;
    white-space: nowrap;
    -ms-transform: rotate(30deg); /* IE 9 */
    -o-transform: rotate(360deg); /* Opera 10.5 */
    -webkit-transform: rotate(30deg); /* Safari and Chrome */
    transform: rotate(35deg);
}

.non-critical-shape-text {
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    position: relative;
    right: -90px;
    top: 14.5px;
    white-space: nowrap;
    -ms-transform: rotate(30deg); /* IE 9 */
    -o-transform: rotate(360deg); /* Opera 10.5 */
    -webkit-transform: rotate(30deg); /* Safari and Chrome */
    transform: rotate(35deg);
}

</style>