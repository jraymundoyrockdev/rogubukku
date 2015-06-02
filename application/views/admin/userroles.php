<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-bar-chart-o"></i>
            Roles
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
                                Name
                            </th>
                            <th class="sui-headercell" data-field="description">
                                Description
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
                    </colgroup>
                    <tbody>
                        <?php $i=1; foreach ($userroles as $m):?>
                        <tr class="sui-<?=($i % 2 == 0) ? 'row' : 'alt-row';?>">
                            <td class="sui-cell"><?=$i++?></td>
                            <td class="sui-cell"><?=$m->name?></td>
                            <td class="sui-cell"><?=$m->description?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
