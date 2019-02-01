<?php 

namespace app\models;

use yii\basic\Model;

class UserForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return  [
                [['name','email'],'required'],
                ['email','email'],
                ];
    }

}