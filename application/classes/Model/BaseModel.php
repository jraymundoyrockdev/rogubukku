<?php defined('APPPATH') OR die('No direct access allowed.');

class Model_BaseModel extends ORM
{
    protected $_modelResults = [
        'isSuccess' => false,
        'errorFields' => [],
        'objectModel' => []
    ];

    protected function _prepareSave($fields, Array $fillable,$primaryKey)
    {
        if (array_key_exists($primaryKey,$fields)) {
            $this->where($primaryKey, '=', $fields[$primaryKey])->find();
        }

        $this->_baseSave($this->values($fields, $fillable));

        return $this->_modelResults;

    }

    private function _baseSave($model)
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