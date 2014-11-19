<?php

use yii\db\Migration;

class m141118_151553_PlatronPayment extends Migration
{
    public function up()
    {

        $this->insert(
            \app\models\PaymentType::tableName(),
            [
                'name' => 'Platron',
                'class' => 'app\components\payment\PlatronPayment',
                'params' => \yii\helpers\Json::encode(
                    [
                        'merchantId' => '',
                        'secretKey' => '',
                        'strCurrency' => 'RUR',
                        'merchantUrl' => 'www.platron.ru',
                        'merchantScriptName' => 'payment.php'
                    ]
                ),
            ]
        );

    }

    public function down()
    {
        echo "m141118_151553_PlatronPayment can be reverted.\n";

        if ($this->delete(
            \app\models\PaymentType::tableName(),
            ['name' => 'Platron']
        )
        ) {
            return true;
        }

        return false;
    }
}
