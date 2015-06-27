<?php defined('SYSPATH') or die('No direct script access.');

class Api_Dashboard
{
    /**
     * Get all transaction totals for the whole year
     *
     * @param $year int Year
     * @param $userId int Year
     *
     * @return array
     */
    public function transactionTotals($year, $userId)
    {
        $queryUser = ($userId) ? ' AND status IS NULL AND logged_by = ' . $userId : ' AND status IS NULL';

        $result = DB::query(Database::SELECT,
            'SELECT logged_by,
                      COUNT(CASE WHEN transaction IN("print") THEN transaction END) print,
                      COUNT(CASE WHEN transaction IN("encode") THEN transaction END) encode,
                      COUNT(CASE WHEN transaction IN("all") THEN transaction END) _all,
                      COUNT(CASE WHEN transaction IN("others") THEN transaction END) others
                      FROM transactions WHERE YEAR(transaction_date) = ' . $year . $queryUser)->execute()->as_array();

        unset($result[0]['logged_by']);

        return $result[0];
    }

    /**
     * Get all transaction totals Per Month
     *
     * @param $year int Year
     * @param $userId int Year
     *
     * @return array
     */
    public function transactionPerMonth($year, $userId)
    {
        $queryUser = ($userId) ? ' AND status IS NULL AND logged_by = ' . $userId : ' AND status IS NULL';

        $result = DB::query(Database::SELECT,
            'SELECT logged_by,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(1) THEN transaction END) jan,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(2) THEN transaction END) feb,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(3) THEN transaction END) mar,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(4) THEN transaction END) apr,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(5) THEN transaction END) may,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(6) THEN transaction END) jun,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(7) THEN transaction END) jul,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(8) THEN transaction END) aug,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(9) THEN transaction END) _sep,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(10) THEN transaction END) oct,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(11) THEN transaction END) nov,
                      COUNT(CASE WHEN MONTH(transaction_date) IN(12) THEN transaction END) _dec
                        FROM transactions WHERE YEAR(transaction_date) = ' . $year . $queryUser)->execute()->as_array();

        unset($result[0]['logged_by']);
        return $result[0];
    }

    /**
     * Get all transaction totals Per Ministry
     *
     * @param $year int Year
     *
     * @return array
     */
    public function transactionPerMinistry($year)
    {
        return DB::query(Database::SELECT,
            'SELECT a.ministry,
                COUNT(b.ministry_id) AS total
                FROM ministry a
                LEFT JOIN transactions b
                ON a.id = b.ministry_id
                WHERE a.id !=1 AND YEAR(transaction_date) =' . $year . '
                GROUP BY a.id')->execute()->as_array();
    }
}