<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250310034757 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reporte (id INT AUTO_INCREMENT NOT NULL, contenedores_id INT DEFAULT NULL, campana1_id INT DEFAULT NULL, campana2_id INT DEFAULT NULL, combustible_id INT DEFAULT NULL, equipo_riego_id INT DEFAULT NULL, extraccion_combustible_id INT DEFAULT NULL, hechos_extraordinarios_id INT DEFAULT NULL, maquina_ingeniera_id INT DEFAULT NULL, mortalidad_id INT DEFAULT NULL, nacimientos_id INT DEFAULT NULL, peces_id INT DEFAULT NULL, pienso_id INT DEFAULT NULL, produccion_huevos_id INT DEFAULT NULL, transportacion_id INT DEFAULT NULL, fecha DATE NOT NULL, UNIQUE INDEX UNIQ_5CB1214AB34647F (contenedores_id), UNIQUE INDEX UNIQ_5CB1214F7122D98 (campana1_id), UNIQUE INDEX UNIQ_5CB1214E5A78276 (campana2_id), UNIQUE INDEX UNIQ_5CB1214D5BD96DF (combustible_id), UNIQUE INDEX UNIQ_5CB1214C93AE103 (equipo_riego_id), UNIQUE INDEX UNIQ_5CB1214D31E0BA9 (extraccion_combustible_id), UNIQUE INDEX UNIQ_5CB121418F722CB (hechos_extraordinarios_id), UNIQUE INDEX UNIQ_5CB121460F90F23 (maquina_ingeniera_id), UNIQUE INDEX UNIQ_5CB12148D8087E9 (mortalidad_id), UNIQUE INDEX UNIQ_5CB1214CDCD2BB3 (nacimientos_id), UNIQUE INDEX UNIQ_5CB12142FC4BB22 (peces_id), UNIQUE INDEX UNIQ_5CB1214764900EB (pienso_id), UNIQUE INDEX UNIQ_5CB1214BEFF11C2 (produccion_huevos_id), UNIQUE INDEX UNIQ_5CB121455C22AA4 (transportacion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tipo_centro (id INT AUTO_INCREMENT NOT NULL, nombre_centro VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tipo_entidad (id INT AUTO_INCREMENT NOT NULL, nombre_entidad VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214AB34647F FOREIGN KEY (contenedores_id) REFERENCES contenedores (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214F7122D98 FOREIGN KEY (campana1_id) REFERENCES campana1 (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214E5A78276 FOREIGN KEY (campana2_id) REFERENCES campana2 (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214D5BD96DF FOREIGN KEY (combustible_id) REFERENCES combustible (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214C93AE103 FOREIGN KEY (equipo_riego_id) REFERENCES equipo_riego (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214D31E0BA9 FOREIGN KEY (extraccion_combustible_id) REFERENCES extraccion_combustible (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB121418F722CB FOREIGN KEY (hechos_extraordinarios_id) REFERENCES hechos_extraordinarios (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB121460F90F23 FOREIGN KEY (maquina_ingeniera_id) REFERENCES maquina_ingeniera (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB12148D8087E9 FOREIGN KEY (mortalidad_id) REFERENCES mortalidad (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214CDCD2BB3 FOREIGN KEY (nacimientos_id) REFERENCES nacimientos (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB12142FC4BB22 FOREIGN KEY (peces_id) REFERENCES peces (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214764900EB FOREIGN KEY (pienso_id) REFERENCES pienso (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB1214BEFF11C2 FOREIGN KEY (produccion_huevos_id) REFERENCES produccion_huevos (id)');
        $this->addSql('ALTER TABLE reporte ADD CONSTRAINT FK_5CB121455C22AA4 FOREIGN KEY (transportacion_id) REFERENCES transportacion (id)');
        $this->addSql('ALTER TABLE campana1 DROP fecha');
        $this->addSql('ALTER TABLE campana2 DROP fecha');
        $this->addSql('ALTER TABLE combustible DROP fecha');
        $this->addSql('ALTER TABLE contenedores DROP fecha');
        $this->addSql('ALTER TABLE equipo_riego ADD enrrollador_i INT DEFAULT NULL, ADD molino_viento_a INT DEFAULT NULL, ADD molino_viento_i INT DEFAULT NULL, ADD riego_electrico_a INT DEFAULT NULL, ADD riego_electrico_i INT DEFAULT NULL, ADD equipo_abasto_a INT DEFAULT NULL, ADD equipo_abasto_i INT DEFAULT NULL, ADD total_a INT DEFAULT NULL, ADD total_i INT DEFAULT NULL, DROP fecha');
        $this->addSql('ALTER TABLE extraccion_combustible DROP fecha');
        $this->addSql('ALTER TABLE hechos_extraordinarios DROP fecha');
        $this->addSql('ALTER TABLE maquina_ingeniera ADD cargador_a INT DEFAULT NULL, ADD cargador_i INT DEFAULT NULL, ADD excavador_a INT DEFAULT NULL, ADD excavador_i INT DEFAULT NULL, ADD auto_grua_a INT DEFAULT NULL, ADD auto_grua_i INT DEFAULT NULL, ADD ge_a INT DEFAULT NULL, ADD ge_i INT DEFAULT NULL, ADD moto_niveladora_a INT DEFAULT NULL, ADD moto_niveladora_i INT DEFAULT NULL, ADD total_a INT DEFAULT NULL, ADD total_i INT DEFAULT NULL, DROP fecha');
        $this->addSql('ALTER TABLE mortalidad ADD vacuno_hoy INT DEFAULT NULL, ADD vacuno_acumulado INT DEFAULT NULL, ADD ovinohoy INT DEFAULT NULL, ADD ovino_acumulado INT DEFAULT NULL, ADD porcino_hoy INT DEFAULT NULL, ADD porcino_acumulado INT DEFAULT NULL, ADD equino_hoy INT DEFAULT NULL, ADD equino_acumulado INT DEFAULT NULL, ADD totalhoy INT DEFAULT NULL, ADD total_acumulado INT DEFAULT NULL, ADD total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', DROP fecha');
        $this->addSql('ALTER TABLE nacimientos DROP fecha');
        $this->addSql('ALTER TABLE peces DROP fecha');
        $this->addSql('ALTER TABLE pienso ADD observaciones LONGTEXT DEFAULT NULL, DROP fecha');
        $this->addSql('ALTER TABLE produccion_huevos DROP fecha');
        $this->addSql('ALTER TABLE transportacion DROP fecha');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214AB34647F');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214F7122D98');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214E5A78276');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214D5BD96DF');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214C93AE103');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214D31E0BA9');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB121418F722CB');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB121460F90F23');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB12148D8087E9');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214CDCD2BB3');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB12142FC4BB22');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214764900EB');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB1214BEFF11C2');
        $this->addSql('ALTER TABLE reporte DROP FOREIGN KEY FK_5CB121455C22AA4');
        $this->addSql('DROP TABLE reporte');
        $this->addSql('DROP TABLE tipo_centro');
        $this->addSql('DROP TABLE tipo_entidad');
        $this->addSql('ALTER TABLE campana1 ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE hechos_extraordinarios ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE maquina_ingeniera ADD fecha DATE NOT NULL, DROP cargador_a, DROP cargador_i, DROP excavador_a, DROP excavador_i, DROP auto_grua_a, DROP auto_grua_i, DROP ge_a, DROP ge_i, DROP moto_niveladora_a, DROP moto_niveladora_i, DROP total_a, DROP total_i');
        $this->addSql('ALTER TABLE peces ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE contenedores ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE transportacion ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE combustible ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE mortalidad ADD fecha DATE NOT NULL, DROP vacuno_hoy, DROP vacuno_acumulado, DROP ovinohoy, DROP ovino_acumulado, DROP porcino_hoy, DROP porcino_acumulado, DROP equino_hoy, DROP equino_acumulado, DROP totalhoy, DROP total_acumulado, DROP total');
        $this->addSql('ALTER TABLE pienso ADD fecha DATE NOT NULL, DROP observaciones');
        $this->addSql('ALTER TABLE produccion_huevos ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE nacimientos ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE campana2 ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE extraccion_combustible ADD fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE equipo_riego ADD fecha DATE NOT NULL, DROP enrrollador_i, DROP molino_viento_a, DROP molino_viento_i, DROP riego_electrico_a, DROP riego_electrico_i, DROP equipo_abasto_a, DROP equipo_abasto_i, DROP total_a, DROP total_i');
    }
}
