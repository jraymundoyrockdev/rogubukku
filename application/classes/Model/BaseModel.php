<?php defined('APPPATH') OR die('No direct access allowed.');

/**
 * This is the Base Model of all the Concrete Class Model implementation of the MassAssignmentInterface
 *
 * Basically this handles CRUD methods.
 */
class Model_BaseModel extends ORM implements Interfaces_MassAssignmentInterface
{

    /**
     * Default values for responses via ajax and form submission
     */
    protected $_modelResults = [
        'isSuccess' => false,
        'errorFields' => [],
        'objectModel' => []
    ];

    /**
     * Prepares saving of mass assignments. If $primaryKey exists then to update else insert new.
     *
     * @param $fields array The payload coming from the post data
     * @param $fillable array The fields from the calling Model that is fillable for mass assignment
     * @param $primaryKey int Calling Model Primary Key
     *
     * @return Array
     */
    public function _prepareSave($fields, Array $fillable = [], $primaryKey)
    {
        if (array_key_exists($primaryKey, $fields)) {
            $this->where($primaryKey, '=', $fields[$primaryKey])->find();
        }

        $this->_baseSave($this->values($fields, $fillable));

        return $this->_modelResults;

    }

    /**
     * Saves/Updates the model
     *
     * @param $model The instantiated model
     *
     * @return Array
     */
    public function _baseSave($model)
    {
        try {
            $this->_modelResults['objectModel'] = $model->save();

            if (!empty($this->_modelResults['objectModel'])) {
                $this->_modelResults['isSuccess'] = true;
            }
        } catch (ORM_Validation_Exception $e) {
            $this->_modelResults['errorFields'] = $e->errors('models');
        } catch (Exception $error) {
            $this->_modelResults['errorFields'] = $error->getMessage();
        }
    }

} // End Base Model