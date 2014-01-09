<?php

/**
 * This is the model class for table "ideality".
 *
 * The followings are the available columns in table 'ideality':
 * @property integer $id
 * @property string $title
 * @property integer $cate_id
 * @property integer $user_id
 * @property string $code
 * @property double $full_price
 * @property double $partly_price
 * @property string $short_description
 * @property string $file_attach
 */
class Ideality extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ideality';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, cate_id, full_price, partly_price, short_description, file_attach', 'required'),
			array('cate_id, user_id', 'numerical', 'integerOnly'=>true),
			array('full_price, partly_price', 'numerical'),
			array('code,user_id', 'safe'),
            array('file_attach','file','types'=>'rar,zip,7z','maxSize'=>1024*1024*10,'tooLarge'=>'File has to be smaller than 10MB'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, cate_id, user_id, code, full_price, partly_price, short_description, file_attach', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'user'=> array(self::BELONGS_TO,'User','user_id'),
            'category'=>array(self::BELONGS_TO,'Category','cate_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'title' => 'Title',
			'cate_id' => 'Category Title',
			'user_id' => 'User',
			'code' => 'Code',
			'full_price' => 'Full Price',
			'partly_price' => 'Partly Price',
			'short_description' => 'Short Description',
			'file_attach' => 'File Attach',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('title',$this->title,true);

		$criteria->compare('cate_id',$this->cate_id);

		$criteria->compare('user_id',$this->user_id);

		$criteria->compare('code',$this->code,true);

		$criteria->compare('full_price',$this->full_price);

		$criteria->compare('partly_price',$this->partly_price);

		$criteria->compare('short_description',$this->short_description,true);

		$criteria->compare('file_attach',$this->file_attach,true);

		return new CActiveDataProvider('Ideality', array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function  getCategoryName($cate_id)
    {
        $cate_title = '';
        $data = Category::model()->findAll(array('condition' => 'id=' . $cate_id,));
        foreach ($data as $row) {
            $cate_title = $row['title'];
        }
        return $cate_title;
    }
    public function  getUserName($user_id)
    {
        $user_name = '';
        $data = User::model()->findAll(array('condition' => 'id=' . $user_id,));
        foreach ($data as $row) {
            $user_name = $row['profile']['first_name'].' '.$row['profile']['last_name'];
        }
        return $user_name;
    }
    public function beforeSave()
    {
        $this->user_id=Yii::app()->user->getId();
        $this->code='CODE';
        return parent::beforeSave();
    }
}