<?php

use Phinx\Migration\AbstractMigration;

class CreateSeedUsersTable extends AbstractMigration
{
  public function up()
  {

    $password_hash = password_hash('verysecret', PASSWORD_DEFAULT);
    $this->execute("
      insert into users (first_name, last_name, email, password)
      values
      ('Akshay', 'Soni', 'asoni@stumbleupon.com', '$password_hash')
    ");

  }

  public function down()
  {

  }
}
