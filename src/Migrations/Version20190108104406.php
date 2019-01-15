<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190108104406 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commande_billet (commande_id INT NOT NULL, billet_id INT NOT NULL, INDEX IDX_1D57B12382EA2E54 (commande_id), INDEX IDX_1D57B12344973C78 (billet_id), PRIMARY KEY(commande_id, billet_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_billet ADD CONSTRAINT FK_1D57B12382EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_billet ADD CONSTRAINT FK_1D57B12344973C78 FOREIGN KEY (billet_id) REFERENCES billet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande ADD type VARCHAR(50) NOT NULL, DROP formule, DROP billets, CHANGE nombre_billets nb_billet INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE commande_billet');
        $this->addSql('ALTER TABLE commande ADD formule TINYINT(1) DEFAULT NULL, ADD billets INT DEFAULT NULL, DROP type, CHANGE nb_billet nombre_billets INT NOT NULL');
    }
}
