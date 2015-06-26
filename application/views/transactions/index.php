<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-list"></i> All Transactions
                </h3>
            </div>

            <div class="panel-body">
                
                <table class="table table-striped table-bordered" id="transaction_list">
                    <colgroup>
                        <col style="width:50px">
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="col-md-1">
                                Transaction
                            </th>
                            <th class="col-md-3">
                                Reason
                            </th>
                            <th class="col-md-2">
                                Transaction Date
                            </th>
                            <th class="col-md-1">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=1; foreach ($transactions as $tran) : ?>

                            <span id="prepend_list"></span>
                            <tr id="tr_<?=$tran->id?>">
                                <td><?= ucfirst($tran->transaction)?></td>
                                <td><?= substr(ucfirst($tran->reason), 0, -strlen($tran->reason)/2).'...'; ?></td>
                                <td class="text-center"><?= date_format(date_create($tran->transaction_date),'Y-m-d h:i A') ?></td>
                                <td class="text-center">
                                    <a href="<?=URL::site('transactions/edit/'.$tran->id);?>" role="button" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <button data-toggle="modal" data-target="#deleteModal" role="button" id="<?=$tran->id?>" class="btn btn-danger btn-xs deleteLink">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 well">
        <a href="<?=URL::site('transactions');?>" class="btn btn-info col-lg-12" role="button">
           <i class="fa fa-plus-square"></i> Create New
        </a>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel-body">
                <div class="modal-header">
                    <button class="close" aria-label="Close" data-dismiss="modal" type="button"></button>
                    <h4>Are you sure you want to delete this transaction?</h4>
                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</button>
                    <button class="btn btn-info btn-sm" id="deleteButtonYes">Yes</button>            
                </div>
            </div>
        </div>
    </div>
</div>