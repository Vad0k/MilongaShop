<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $fio
 * @property string $country
 * @property string $town
 * @property string $street
 * @property string $phone
 * @property string $post_index
 * @property string $email
 * @property string $description
 * @property string $description_params
 * @property double $product_count
 * @property double $price
 * @property double $price_pay
 * @property integer $accept_politics
 * @property string $status_order
 * @property string $data_reg
 * @property string $data_pay
 * @property string $user_hash
 */
class ModelOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'fio', 'country', 'town', 'street', 'phone', 'post_index', 'email', 'description', 'accept_politics', 'user_hash'], 'required'],
            [['product_id', 'accept_politics'], 'integer'],
            [['description', 'description_params'], 'string'],
            [['product_count', 'price', 'price_pay'], 'number'],
            [['data_reg', 'data_pay'], 'safe'],
            [['fio', 'street'], 'string', 'max' => 200],
            [['country', 'town', 'email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
            [['post_index'], 'string', 'max' => 10],
            [['status_order'], 'string', 'max' => 50],
            [['user_hash'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Индификатор заказа (не трогать)',
            'product_id' => 'Индификатор продукта (не трогать)',
            'fio' => 'ФИО',
            'country' => 'Страна',
            'town' => 'Город',
            'street' => 'Улица и дом',
            'phone' => 'Телефон',
            'post_index' => 'Почтовый индекс',
            'email' => 'E-mail',
            'description' => 'Описание',
            'description_params' => 'Описание параметров',
            'product_count' => 'Общее ко-во продуктов за транзакцию',
            'price' => 'Цена выставленная',
            'price_pay' => 'Цена оплачена',
            'accept_politics' => 'Прочел ли пользователь политику конфедециальности и публичную оферту и принял её',
            'status_order' => 'Status Order',
            'data_reg' => 'Время заказа',
            'data_pay' => 'Время оплаты',
            'user_hash' => 'Номер заказа',
        ];
    }

    public function getOneProduct(){
        return $this->hasOne(ModelProducts::className(), ['id' => 'product_id']);
    }
}
