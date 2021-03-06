<?php defined('APPPATH') OR die('No direct access allowed.');


/**
 * Interface for MassAssignment.
 * Interface
 */
interface Interfaces_MassAssignmentInterface
{

    /**
     * Prepares saving of mass assignments. If $primaryKey exists then to update else insert new.
     *
     * @param $fields array The payload coming from the post data
     * @param $fillable array The fields from the calling Model that is fillable for mass assignment
     * @param $primaryKey int Calling Model Primary Key
     *
     * @return Array
     */
    public function _prepareSave($fields, Array $fillable = [], $primaryKey);

    /**
     * Saves/Updates the model
     *
     * @param $model The instantiated model
     *
     * @return Array
     */
    public function _baseSave($model);
}