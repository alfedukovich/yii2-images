<?php

use yii\db\Migration;

/**
 * Handles adding width_column_height to table `image`.
 */
class m170219_095626_add_width_column_height_column_to_image_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('image', 'width', $this->integer());
        $this->addColumn('image', 'height', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('image', 'width');
        $this->dropColumn('image', 'height');
    }
}
