<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tasks"></i> Transactions
                    <span class="pull-right"><i class="fa fa-list"></i> <a href="#" style="color:#FFFFFF">Recent Transactions</a></span>
                </h3>

            </div>
            <div class="panel-body">

                <div id="trasaction_created" class="alert alert-success alert-dismissible fade in" role="alert" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-user"></i> Transaction Created!<a class="anchorjs-link" href="#oh-snap!-you-got-an-error!"><span class="anchorjs-icon"></span></a>
                </div>

                <div id="transaction_failed" class="alert alert-danger alert-dismissible fade in" role="alert" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-exclamation-triangle"></i> Error in processing your transaction! <br />
                    <small>Colored or Non-colored fields are required when transaction type is Print or All.<br />
                    Please specify the number of colored or non-colored printed papers. </small>
                </div>

                <?=Form::open('transactions/save', array('class'=>'search_form','id'=>'transactions_form'));?>

                    <div class="form-group">
                        <div class="transaction-type-error">
                            <label class="control-label" for="transaction">Transaction Type</label>
                            <?=Form::select('transaction_type', $transaction_type,'print' ,['placeholder'=>'Transaction', 'class'=>'form-control', 'id'=>'transaction_type']);?>
                        </div>
                    </div>

                    <div class="form-group print_color">
                        <div class="colored-error">
                            <label class="control-label" for="colored">Colored</label>
                            <span style="color:#2fa4e7" class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="right" title="Number of colored printed papers."></span>
                            <?=Form::input('colored', '', ['placeholder'=>'Colored', 'class'=>'form-control colored_fields_input','maxlength'=>3]);?>
                            <small class="help-block colored_fields" style="color:#b94a48;display:none;">Colored is required.</small>
                        </div>
                    </div>

                    <div class="form-group print_color">
                        <div class="non-colored-error">
                            <label class="control-label" for="non_colored">Non-colored</label>
                            <span style="color:#2fa4e7" class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="right" title="Number of non-colored printed papers(black &amp; white)."></span>
                            <?=Form::input('non_colored', '', ['placeholder'=>'Non-colored', 'class'=>'form-control colored_fields_input','maxlength'=>3]);?>
                            <small class="help-block colored_fields" style="color:#b94a48;display:none;">Non-colored is required.</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="reason-error">
                            <label class="control-label" for="reason">Reason</label>
                            <?=Form::textarea('reason', '', ['placeholder'=>'Reason', 'class'=>'form-control']);?>
                        </div>
                    </div>

                    <div class="form-group transaction_date_form">
                        <div class="col-lg-12 transaction-date-error input-group date" id='datetimepicker1'>
                            <label class="control-label" for="transaction_date">Transaction Date</label>
                            <div class="input-group">
                                <?=Form::input('transaction_date', '', ['id'=>'transaction_date', 'class'=>'form-control', 'readonly'=>'readonly']);?>
                                <span class="input-group-addon" id="icon-calendar">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            <small class="help-block transaction_date" style="color:#b94a48;display:none;">Transaction date is required.</small>
                        </div>
                    </div>
                    <?=Form::hidden('save_transaction_type', '', ['id'=>'save_transaction_type', 'readonly'=>'readonly']);?>
                     <div class="col-lg-6">
                    <div class="form-group">
                        <?=Form::button('save_transaction', 'Save & Add New', array('value'=>'save_add_new', 'type' => 'submit', 'class'=>'btn btn-primary btn-block save_transaction'));?>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <?=Form::button('save_transaction', 'Save & Exit', array('value'=>'save_exit', 'type' => 'submit', 'class'=>'btn btn-warning btn-block save_transaction'));?>
                    </div>
                    </div>
                <?=Form::close();?>

            </div>
        </div>
    </div>
</div>