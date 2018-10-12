<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property integer $category_id
 * @property string $head_title
 * @property string $head_description
 * @property string $head_keywords
 * @property string $title
 * @property string $image
 * @property string $product_code
 * @property string $description
 * @property string $description_more
 * @property double $price
 * @property string $params
 * @property integer $isFavorite
 * @property integer $isNew
 * @property integer $isVisible
 * @property string $views
 * @property string $similar
 * @property string $time_created
 */
class ModelProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'head_title', 'head_description', 'head_keywords', 'title', 'image', 'params'], 'required'],
            [['category_id', 'isFavorite', 'isNew', 'isVisible', 'views'], 'integer'],
            [['image', 'description', 'description_more', 'params', 'similar'], 'string'],
            [['price'], 'number'],
            [['time_created'], 'safe'],
            [['head_title', 'product_code'], 'string', 'max' => 100],
            [['head_description', 'head_keywords', 'title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'head_title' => 'Head Title',
            'head_description' => 'Head Description',
            'head_keywords' => 'Head Keywords',
            'title' => 'Title',
            'image' => 'Image',
            'product_code' => 'Product Code',
            'description' => 'Description',
            'description_more' => 'Description More',
            'price' => 'Price',
            'params' => 'Params',
            'isFavorite' => 'Is Favorite',
            'isNew' => 'Is New',
            'isVisible' => 'Is Visible',
            'views' => 'Views',
            'similar' => 'Similar',
            'time_created' => 'Time Created',
        ];
    }
}
