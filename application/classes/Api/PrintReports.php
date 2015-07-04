
<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Api_PrintReports
 *
 */
class Api_PrintReports
{

    public function transactions($query)
    {
        $where = (!empty($query['transaction_type'])) ? ' WHERE a.transaction LIKE "%' . $query['transaction_type'] . '%"' : ' WHERE transaction != ""';
        $user = (!empty($query['user'])) ? ' AND b.full_name LIKE "%' . $query['user'] . '%"' : '';
        $ministry = (!empty($query['ministry'])) ? ' AND c.ministry LIKE "%' . $query['ministry'] . '%"' : '';

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
            ' . $where . $user . $ministry)->execute()->as_array();
    }

}