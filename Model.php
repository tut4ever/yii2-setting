<?php
/**
 * Created by PhpStorm.
 * User: quangthinh
 * Date: 7/20/2016
 * Time: 4:30 PM
 */

namespace quangthinh\yii\setting;


use Yii;

class Model extends \yii\base\Model
{
    /**
     * SectionName of Settings
     * @return string
     */
    protected function sectionName() {
        return null;
    }

    /**
     * Load Settings
     */
    public function init() {
        // load config data
        $fields = $this->saveFields();
        $sectionName = $this->sectionName();
        $setting = $this->setting();

        foreach ($fields as $field) {
            if ($sectionName) {
                $field = $sectionName .'.'. $field;
            }

            $this->$field = $setting[$field];
        }
    }

    /**
     * @return null|Setting
     */
    protected function setting()
    {
        return Yii::$app->get('setting');
    }

    protected function saveFields()
    {
        return $this->attributes();
    }

    /**
     * validate rules
     */
    public function rules()
    {
        return [$this->saveFields(), 'string'];
    }

    /**
     * Update setting data in model
     */
    public function update()
    {
        $saveFields = $this->saveFields();
        $setting = $this->setting();
        $sectionName = $this->sectionName();

        foreach ($saveFields as $field) {
            if ($sectionName) {
                $field = $sectionName .'.'. $field;
            }

            $setting[$field] = $this->$field;
        }
    }
}