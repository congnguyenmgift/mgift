<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account_transaction_hold".
 *
 * @property string $accountid
 * @property string $transactionid
 * @property string $action
 * @property string $reason
 * @property string $detail
 * @property string $points
 * @property string $total_points
 * @property string $timestamp
 * @property integer $is_check
 * @property string $note
 */
class AccountTransactionHold extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account_transaction_hold';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accountid', 'transactionid', 'action', 'reason', 'detail', 'points', 'total_points'], 'required'],
            [['accountid', 'transactionid', 'points', 'total_points', 'is_check'], 'integer'],
            [['action', 'reason'], 'string'],
            [['timestamp'], 'safe'],
            [['detail'], 'string', 'max' => 2000],
            [['note'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'accountid' => Yii::t('api', 'Accountid'),
            'transactionid' => Yii::t('api', 'Transactionid'),
            'action' => Yii::t('api', 'Action'),
            'reason' => Yii::t('api', 'Reason'),
            'detail' => Yii::t('api', 'Detail'),
            'points' => Yii::t('api', 'Points'),
            'total_points' => Yii::t('api', 'Total Points'),
            'timestamp' => Yii::t('api', 'Timestamp'),
            'is_check' => Yii::t('api', 'Is Check'),
            'note' => Yii::t('api', 'Note'),
        ];
    }
}
