<?php

use Phinx\Migration\AbstractMigration;

class CreateSeedUsersTable extends AbstractMigration
{
  public function up()
  {

    $password_hash = password_hash('verysecret', PASSWORD_DEFAULT);
    $this->execute("
      insert into users (first_name, last_name, email, password, active, access_level)
      values
      ('Akshay', 'Soni', 'asoni@stumbleupon.com', '$password_hash', '1', '2')
    ");

  }

  public function down()
  {

  }
}
