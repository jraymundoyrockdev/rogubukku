<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Api_PrintReports
 *
 */
class Api_PrintReports
{

    public function transactions($post)
    {
        $where = (!empty($post['transaction_type'])) ? ' WHERE a.transaction LIKE "%' . $post['transaction_type'] . '%"' : ' WHERE transaction != ""';
        $user = (!empty($post['user'])) ? ' AND b.full_name LIKE "%' . $post['user'] . '%"' : '';
        $ministry = (!empty($post['ministry'])) ? ' AND c.ministry LIKE "%' . $post['ministry'] . '%"' : '';

        if (!array_filter($post)) {
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