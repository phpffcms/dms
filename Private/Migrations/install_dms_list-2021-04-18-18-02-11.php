<?php

use Ffcms\Core\Migrations\MigrationInterface;
use Ffcms\Core\Migrations\Migration;

/**
 * Class install_dms_list.
 */
class install_dms_list extends Migration implements MigrationInterface
{
    /**
     * Execute actions when migration is up
     * @return void
     */
    public function up()
    {
        // @todo: develop migration up features
        $this->getSchema()->create('dms_list', function ($table){
            $table->increments('id');
            $table->string('title', 1024);
            $table->string('from', 1024)->nullable();
            $table->date('deadline_date');
            $table->date('incoming_date');
            $table->boolean('accepted')->default(false);
            $table->boolean('finished')->default(false);
            $table->text('keywords')->nullable();
            $table->timestamps();
        });
        parent::up();
    }

    /**
     * Seed created table via up() method with some data
     * @return void
     */
    public function seed()
    {
        // @todo: develop migration down features
        /**$this->getConnection()->table('dms')->insert([
            ['column1' => 'Text data 1', 'created_at' => $this->now, 'updated_at' => $this->now],
            ['column1' => 'Text data 2', 'created_at' => $this->now, 'updated_at' => $this->now]
        ]);*/
    }

    /**
     * Execute actions when migration is down
     * @return void
     */
    public function down()
    {
        $this->getSchema()->dropIfExists('dms_list');
        parent::down();
    }
}