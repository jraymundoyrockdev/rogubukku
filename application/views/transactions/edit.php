<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-pencil"></i> Edit Transactions
                </h3>
            </div>
            <div class="panel-body">
                <div id="trasaction_created" class="alert alert-success alert-dismissible fade in" role="alert"
                     style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <i class="fa fa-user"></i> Transaction Updated!<a class="anchorjs-link"
                                                                      href="#oh-snap!-you-got-an-error!"><span
                            class="anchorjs-icon"></span></a>
                </div>

                <div id="transaction_failed" class="alert alert-danger alert-dismissible fade in" role="alert"
                     style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <i class="fa fa-exclamation-triangle"></i> Error in processing your transaction! <br/>
                    <small>Colored or Non-colored fields are required when transaction type is Print or All.<br/>
                        Please specify the number of colored or non-colored printed papers.
                    </small>
                </div>

                <?= Form::open('transactions/save', array('class' => 'search_form', 'id' => 'transactions_form')); ?>

                <div class="form-group">
                    <div class="transaction-type-error">
                        <label class="control-label" for="transaction">Transaction Type</label>
                        <?= Form::select('transaction', $transactionType, $transaction->transaction,
                            ['placeholder' => 'Transaction', 'class' => 'form-control', 'id' => 'transaction']); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="ministry_id-error">
                        <label class="control-label force_display-block" for="ministry_id">Ministry</label>
                        <?php echo Form::select('ministry_id', $ministries, $transaction->ministry_id,
                            array('class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group print_color">
                    <div class="colored-error">
                        <label class="control-label" for="colored">Colored</label>
                        <span style="color:#2fa4e7" class="glyphicon glyphicon-info-sign" data-toggle="tooltip"
                              data-placement="right"
                              title="Number of printed papers with colors."></span>
                        <?= Form::input('colored', $transaction->colored, [
                            'id' => 'colored',
                            'placeholder' => 'Colored',
                            'class' => 'form-control input_print',
                            'maxlength' => 3
                        ]); ?>
                    </div>
                </div>

                <div class="form-group print_color">
                    <div class="non-colored-error">
                        <label class="control-label" for="non_colored">Non-colored</label>
                        <span style="color:#2fa4e7" class="glyphicon glyphicon-info-sign" data-toggle="tooltip"
                              data-placement="right"
                              title="Number of printed papers without colors. Black &amp; white."></span>
                        <?= Form::input('non_colored', $transaction->non_colored, [
                            'id' => 'non_colored',
                            'placeholder' => 'Non colored',
                            'class' => 'form-control input_print',
                            'maxlength' => 3
                        ]); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="reason-error">
                        <label class="control-label" for="reason">Reason</label>
                        <?= Form::textarea('reason', $transaction->reason,
                            ['placeholder' => 'Reason', 'class' => 'form-control', 'rows' => 2]); ?>
                    </div>
                </div>

                <div class="form-group transaction_date_form">
                    <div class="col-lg-12 transaction-date-error input-group date" id='datetimepicker1'>
                        <label class="control-label" for="transaction_date">Transaction Date</label>

                        <div class="input-group">

                            <?= Form::input('transaction_date', $transaction->transaction_date,
                                ['id' => 'transaction_date', 'class' => 'form-control', 'readonly' => 'readonly']); ?>

                            <span class="input-group-addon" id="icon-calendar">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <small class="help-block transaction_date" style="color:#b94a48;display:none;">Transaction date
                            is required.
                        </small>

                        <?= Form::hidden('id', $transaction->id); ?>
                        <?= Form::hidden('saveType', '', ['id' => 'saveType']); ?>

                    </div>
                </div>

                <?= Form::hidden('id', $transaction->id); ?>

                <div class="col-lg-12">
                    <div class="form-group">

                        <?= Form::button('saveAndExit', 'Update', array(
                            'type' => 'submit',
                            'class' => 'btn btn-primary btn-block saveTransaction',
                            'id' => 'update',
                            'value' => 'saveAndExit'
                        )); ?>

                    </div>
                </div>

                <?= Form::close(); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-3 well">
        <a href="<?= URL::site('transactions'); ?>" class="btn btn-info col-lg-12" role="button">
            Create New
        </a>
        <hr style="padding-top:10px;">
        <a href="<?= URL::site('transactions/list'); ?>" class="btn btn-warning col-lg-12" role="button">
            <i class="fa fa-list-square"></i> Transaction List
        </a>
    </div>
</div>