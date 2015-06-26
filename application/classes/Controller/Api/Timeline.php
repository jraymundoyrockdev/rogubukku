<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Timeline extends Controller_Base
{

    /**
     * @var Rogubukku
     */
    protected $_timeline;


    public function before()
    {
        parent::before();

        $this->auto_render = false;

        $this->_timeline = Rogubukku::API('Timeline');
    }

    public function action_transaction_timeline()
    {
        $data = $this->_timeline->transactionTimeline(
            $this->request->param('limit'),
            $this->request->param('offset'),
            $this->request->param('id')
        );

        $this->responseAjaxResult($data);
    }

}