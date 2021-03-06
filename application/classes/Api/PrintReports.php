<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Api_PrintReports
 *
 */
class Api_PrintReports
{

    /**
     * Method to get transactions.
     * Used query by example to fetch transaction data
     *
     * @param $query Get Query
     *
     * @return array
     */
    public function transactions($query)
    {
        $where = (!empty($query['transaction_type'])) ? ' WHERE a.transaction LIKE "%' . $query['transaction_type'] . '%"' : ' WHERE transaction != ""';
        $user = (!empty($query['user'])) ? ' AND b.full_name LIKE "%' . $query['user'] . '%"' : '';
        $ministry = (!empty($query['ministry'])) ? ' AND c.ministry LIKE "%' . $query['ministry'] . '%"' : '';
        $transactionDateBetween = ' AND a.transaction_date between "' . $query['dateFrom'] . '" AND "' . $query['dateTo'] . '"';

        if (!array_filter($query)) {
            $where = '';
        }

        return DB::query(Database::SELECT, '
            SELECT
              a.*,b.full_name,c.ministry
            FROM transactions a
            LEFT JOIN users b
            ON a.logged_by = b.id
            LEFT JOIN ministry c
            ON a.ministry_id = c.id
            ' . $where . $user . $ministry . $transactionDateBetween)->execute()->as_array();
    }

}