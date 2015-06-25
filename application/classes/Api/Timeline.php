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
        $where = ($userId) ? ' WHERE logged_by = ' . $userId : '';
        $limitCommand = ' LIMIT ' . $limit;
        $offsetCommand = ' OFFSET ' . $offset;

        return DB::query(Database::SELECT,
            'SELECT * FROM transactions' . $where . $limitCommand . $offsetCommand)->execute()->as_array();
    }

}