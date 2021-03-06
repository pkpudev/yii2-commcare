<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "pdg.file".
 *
 * @property integer $id
 * @property string $file_name
 * @property string $ext
 * @property string $location
 * @property string $metadata
 * @property string $created_stamp
 * @property integer $created_by
 * @property string $created_ip
 * @property string $mime_type
 * @property integer $byte_size
 * @property string $hash
 * @property integer $parent_id
 * @property integer $checkedin_by
 * @property string $checkedin_stamp
 * @property string $checkedin_ip
 * @property integer $branch_id
 * @property integer $storage
 * @property string $aliasModel
 */
abstract class File extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pdg.file';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_name'], 'required'],
            [['created_stamp', 'checkedin_stamp'], 'safe'],
            [['created_by', 'byte_size', 'parent_id', 'checkedin_by', 'branch_id', 'storage'], 'integer'],
            [['file_name'], 'string', 'max' => 100],
            [['ext'], 'string', 'max' => 5],
            [['location'], 'string', 'max' => 256],
            [['metadata'], 'string', 'max' => 500],
            [['created_ip', 'checkedin_ip'], 'string', 'max' => 15],
            [['mime_type', 'hash'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_name' => 'File Name',
            'ext' => 'Ext',
            'location' => 'Location',
            'metadata' => 'Metadata',
            'created_stamp' => 'Created Stamp',
            'created_by' => 'Created By',
            'created_ip' => 'Created Ip',
            'mime_type' => 'Mime Type',
            'byte_size' => 'Byte Size',
            'hash' => 'Hash',
            'parent_id' => 'Parent ID',
            'checkedin_by' => 'Checkedin By',
            'checkedin_stamp' => 'Checkedin Stamp',
            'checkedin_ip' => 'Checkedin Ip',
            'branch_id' => 'Branch ID',
            'storage' => 'Storage',
        ];
    }




}
