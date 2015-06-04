<?php defined('APPPATH') OR die('No direct access allowed.');

class Model_BaseModel extends ORM
{
    protected $_modelResults = [
        'isSuccess' => false,
        'errorFields' => [],
        'otherMessages' => []
    ];

    protected function _prepareSave($fields,$fillable){
        $this->_baseSave($this->values($fields, $fillable));
        return $this->_modelResults;
    }

    private function _baseSave($model)
    {
        try {
            $this->_modelResults['isSuccess'] = $model->save()->id;
        } catch (ORM_Validation_Exception $e) {
            $this->_modelResults['errorFields'] = $e->errors('models');
        } catch (Exception $error) {
            $this->_modelResults['errorFields'] = $error->getMessage();
        }
    }

} // End Base Model