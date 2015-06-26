<?php defined('SYSPATH') or die('No direct script access.');

class Api_Dashboard
{
    public function transactionTotals($year, $userId)
    {
        $queryUser = ($userId) ? ' AND status IS NULL AND logged_by = ' . $userId : ' AND status IS NULL';

        $query = DB::query(Database::SELECT,
            'select logged_by,
                      count(case when transaction in ("print") then transaction end) print,
                      count(case when transaction in ("encode") then transaction end) encode,
                      count(case when transaction in ("all") then transaction end) _all,
                      count(case when transaction in ("others") then transaction end) others
                      from transactions WHERE YEAR(transaction_date) = ' . $year . $queryUser)->execute()->as_array();

        return $query;
    }

    public function transactionPerMonth($id)
    {
        return [
            'transaction-per-month' => []
        ];
    }
}