<?php
class BandActiveRecord extends CActiveRecord {
  
    private static $temp = null;
 
    protected static function getTempDbConnection()
    {
        if (self::$temp !== null)
            return self::$temp;
        else
        {
            self::$temp = Yii::app()->temp;
            if (self::$temp instanceof CDbConnection)
            {
                self::$temp->setActive(true);
                return self::$temp;
            }
            else
                throw new CDbException(Yii::t('yii','Active Record requires a "db" CDbConnection application component.'));
        }
    }
}
?>