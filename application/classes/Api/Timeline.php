<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Api_Timeline
 *
 */
class Api_Timeline
{
    /**
     * Method to get latest transactions limiting and offsetting the result
     *
     * @param $limit int the limit
     * @param $offset int offset
     * @param $userId int User id
     *
     * @return array
     */
    public function transactionTimeline($limit, $offset = 0, $userId = null)
    {
        $where = ($userId) ? ' WHERE a.logged_by = ' . $userId : '';
        $limitCommand = ' LIMIT ' . $limit;
        $offsetCommand = ' OFFSET ' . $offset;

        return DB::query(Database::SELECT, '
            SELECT
              a.id,
              a.transaction,
              a.reason,
              a.transaction_date,
              b.full_name
            FROM transactions a
            LEFT JOIN users b
            ON a.logged_by = b.id' . $where . $limitCommand . $offsetCommand)->execute()->as_array();

    }

}