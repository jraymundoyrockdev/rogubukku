<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-bar-chart-o"></i>
            User Management
        </h3>
    </div>

    <div class="panel-body">
        <div id="shieldui-grid1" class="sui-grid sui-grid-core">
            <div class="sui-gridheader">
                <table class="sui-table sui-non-selectable">
                    <colgroup>
                        <col style="width:70px">
                        <col>
                    </colgroup>

                    <thead>
                        <tr class="sui-columnheader">
                            <th class="sui-headercell" data-field="id">
                               #
                            </th>
                            <th class="sui-headercell" data-field="name">
                                Fullname
                            </th>
                            <th class="sui-headercell" data-field="name">
                                Username
                            </th>
                            <th class="sui-headercell" data-field="name">
                                Ministry
                            </th>                        
                            <th class="sui-headercell" data-field="name">
                                Created Date
                            </th>                            
                            <th class="sui-headercell" data-field="name">
                                Status
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="sui-gridcontent">
                <table class="sui-table sui-hover sui-selectable">
                    <colgroup>
                        <col style="width:70px">
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <tbody>
                        <?php $i=1; foreach ($users as $m):?>
                        <tr class="sui-<?=($i % 2 == 0) ? 'row' : 'alt-row';?>">
                            <td class="sui-cell"><?=$i++?></th>
                            <td class="sui-cell"><?=$m->full_name?></td>
                            <td class="sui-cell"><?=$m->username?></td>
                            <td class="sui-cell"><?=$m->ministry->ministry?></td>
                            <td class="sui-cell"><?=$m->created_date?></td>
                            <td class="sui-cell">

              <input id="<?=$m->id?>" 
              class="ministrySwitch" data-switch-get="<?=$m->active_flag?>" 
              data-switch-value="N"
              type="checkbox" <?=($m->active_flag == 'Y') ? 'checked' : '' ?> data-size="mini">


                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
