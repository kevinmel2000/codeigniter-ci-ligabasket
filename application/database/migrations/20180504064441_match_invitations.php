<?php

class Migration_match_invitations extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'auto_increment' => TRUE,
                'unsigned' => TRUE
            ),
            'team_id' => array(
                'type' => 'MEDIUMINT',
                'unsigned' => TRUE
            ),
            'rival_id' => array(
                'type' => 'MEDIUMINT',
                'unsigned' => TRUE
            ),
            'hall_id' => array(
                'type' => 'MEDIUMINT',
                'unsigned' => TRUE
            ),
            'match_date' => array(
                'type' => 'DATE',
            ),
            'message' => array(
                'type' => 'TEXT',
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
                'default'=> 'sent'
            ),
            'created_on' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('match_invitations');
    }

    public function down() {
        $this->dbforge->drop_table('match_invitations');
    }

}