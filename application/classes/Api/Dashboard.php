<?php defined('SYSPATH') or die('No direct script access.');

class Api_Dashboard
{
    public function transactionTotals($year, $userId)
    {
        $queryUser = ($userId) ? ' AND logged_by = ' . $userId : '';

        $result = DB::query(Database::SELECT,
            'select logged_by,
                      count(case when transaction in ("print") then transaction end) print,
                      count(case when transaction in ("encode") then transaction end) encode,
                      count(case when transaction in ("all") then transaction end) _all,
                      count(case when transaction in ("others") then transaction end) others
                      from transactions WHERE YEAR(transaction_date) = ' . $year . $queryUser)->execute()->as_array();

        unset($result[0]['logged_by']);

        return $result[0];
    }

    public function transactionPerMonth($year, $userId)
    {
        $queryUser = ($userId) ? ' AND logged_by = ' . $userId : '';

        $result = DB::query(Database::SELECT,
            'select logged_by,
                      count(case when MONTH(transaction_date) in(1) then transaction end) jan,
                      count(case when MONTH(transaction_date) in(2) then transaction end) feb,
                      count(case when MONTH(transaction_date) in(3) then transaction end) mar,
                      count(case when MONTH(transaction_date) in(4) then transaction end) apr,
                      count(case when MONTH(transaction_date) in(5) then transaction end) may,
                      count(case when MONTH(transaction_date) in(6) then transaction end) jun,
                      count(case when MONTH(transaction_date) in(7) then transaction end) jul,
                      count(case when MONTH(transaction_date) in(8) then transaction end) aug,
                      count(case when MONTH(transaction_date) in(9) then transaction end) _sep,
                      count(case when MONTH(transaction_date) in(10) then transaction end) oct,
                      count(case when MONTH(transaction_date) in(11) then transaction end) nov,
                      count(case when MONTH(transaction_date) in(12) then transaction end) _dec
                        from transactions WHERE YEAR(transaction_date) = ' . $year . $queryUser)->execute()->as_array();

        unset($result[0]['logged_by']);
        return $result[0];
    }
}