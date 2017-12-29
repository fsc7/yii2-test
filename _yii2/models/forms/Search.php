<?php
namespace app\models\forms;

use app\models\Servidor;
use Yii;
use yii\base\Model;
use yii\db\Exception;
use yii\httpclient\Response;

/**
 * SearchForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SearchForm extends Model
{
    public $name;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            // ['email', 'string', 'length' => [6, 255]],
        ];
    }
}
