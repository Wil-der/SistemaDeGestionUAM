<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250308220659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE campana1 (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, nombre_entidad VARCHAR(255) NOT NULL, roturadas_plan INT DEFAULT NULL, roturadas_real INT DEFAULT NULL, sembradas_plan INT DEFAULT NULL, sembradas_real INT DEFAULT NULL, roturadas_papa_arroz_plan INT DEFAULT NULL, roturadas_papa_arroz_real INT DEFAULT NULL, sembradas_papa_arroz_plan INT DEFAULT NULL, sembradas_papa_arroz_real INT DEFAULT NULL, otras_producciones INT DEFAULT NULL, otras_producciones_real INT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE campana2 (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, recolectadas_plan INT DEFAULT NULL, nombre_entidad VARCHAR(255) NOT NULL, recolectadas_real INT DEFAULT NULL, sembradas_plan INT DEFAULT NULL, sembradas_real INT DEFAULT NULL, roturadas_papa_arroz_plan INT DEFAULT NULL, roturadas_papa_arroz_real INT DEFAULT NULL, sembradas_papa_arroz_plan INT DEFAULT NULL, sembradas_papa_arroz_real INT DEFAULT NULL, otras_producciones_plan INT DEFAULT NULL, otras_producciones_real INT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centro (id INT AUTO_INCREMENT NOT NULL, entidad_id INT DEFAULT NULL, plan INT DEFAULT NULL, existencia_diaria INT DEFAULT NULL, existencia_acumulada INT DEFAULT NULL, existencia_almacen INT DEFAULT NULL, INDEX IDX_2675036B6CA204EF (entidad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centro_peces (id INT AUTO_INCREMENT NOT NULL, entidad_peces_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, plan INT DEFAULT NULL, existancia_diaria_real INT DEFAULT NULL, existenciaacumulada_real INT DEFAULT NULL, INDEX IDX_6795D9D7FF44FAD3 (entidad_peces_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE combustible (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, nombre_entidad VARCHAR(255) NOT NULL, diesel_existencia INT DEFAULT NULL, diesel_cobertura INT DEFAULT NULL, gasolina_a83_existencia INT DEFAULT NULL, gasolina_a83_cobertura INT DEFAULT NULL, gasolina_a90_existencia INT DEFAULT NULL, gasolina_a90_cobertura INT DEFAULT NULL, lubricante_grasa_existencia INT DEFAULT NULL, lubricante_grasa_cobertura INT DEFAULT NULL, lubricante_aceite_existencia INT DEFAULT NULL, lubricante_aceite_cobertura INT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contenedores (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, puerto VARCHAR(255) NOT NULL, cantidad INT DEFAULT NULL, cantidad_extraida INT DEFAULT NULL, tipo_mercancia VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entidad (id INT AUTO_INCREMENT NOT NULL, produccion_huevos_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', INDEX IDX_4587B0CBBEFF11C2 (produccion_huevos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entidad_peces (id INT AUTO_INCREMENT NOT NULL, peces_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, INDEX IDX_4F1011A82FC4BB22 (peces_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipo_riego (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, nombre_entidad VARCHAR(255) NOT NULL, enrrollador_a INT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE extraccion_combustible (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, tipo_combustible VARCHAR(255) DEFAULT NULL, lugar_extraccion VARCHAR(255) DEFAULT NULL, cantidad INT DEFAULT NULL, destino VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hechos_extraordinarios (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, nombre_entidad VARCHAR(255) NOT NULL, acumulados_años INT DEFAULT NULL, hsg_mayor_menor INT DEFAULT NULL, hg_mayor_menor INT DEFAULT NULL, hurto_robo_violencia INT DEFAULT NULL, hurto_robo_fuerza INT DEFAULT NULL, hurto_robo_otros INT DEFAULT NULL, arma INT DEFAULT NULL, municion INT DEFAULT NULL, accidente_trabajo INT DEFAULT NULL, accidente_transito INT DEFAULT NULL, muertos INT DEFAULT NULL, heridos INT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE maquina_ingeniera (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, nombre_entidad VARCHAR(255) NOT NULL, buldocer_a INT DEFAULT NULL, buldocer_i INT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mortalidad (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, nombre_entidad VARCHAR(255) NOT NULL, conejo_hoy INT DEFAULT NULL, conejo_acumulado INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nacimientos (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, nombre_entidad VARCHAR(255) NOT NULL, vacuno_hoy INT DEFAULT NULL, vacuno_acumulado INT DEFAULT NULL, ovinohoy INT DEFAULT NULL, ovino_acumulado INT DEFAULT NULL, porcino_hoy INT DEFAULT NULL, porcino_acumulado INT DEFAULT NULL, equino_hoy INT DEFAULT NULL, equino_acumulado INT DEFAULT NULL, totalhoy INT DEFAULT NULL, total_acumulado INT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE peces (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pienso (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, nombre_entidad VARCHAR(255) NOT NULL, avicola_plan INT DEFAULT NULL, avicola_real INT DEFAULT NULL, avicola_covertura INT DEFAULT NULL, porcino_plan INT DEFAULT NULL, porcino_real INT DEFAULT NULL, porcino_covertura INT DEFAULT NULL, pienso_liquido_plan INT DEFAULT NULL, pienso_liquido_acumulado_dia INT DEFAULT NULL, pienso_liquido_real INT DEFAULT NULL, extraccion_materia_prima_dia INT DEFAULT NULL, extraccion_materia_prima_acumulada INT DEFAULT NULL, total JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produccion_huevos (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transportacion (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, observaciones LONGTEXT DEFAULT NULL, tipo_transporte VARCHAR(255) DEFAULT NULL, destino_carga VARCHAR(255) DEFAULT NULL, cantidad INT DEFAULT NULL, tipo_mercancia VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE centro ADD CONSTRAINT FK_2675036B6CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE centro_peces ADD CONSTRAINT FK_6795D9D7FF44FAD3 FOREIGN KEY (entidad_peces_id) REFERENCES entidad_peces (id)');
        $this->addSql('ALTER TABLE entidad ADD CONSTRAINT FK_4587B0CBBEFF11C2 FOREIGN KEY (produccion_huevos_id) REFERENCES produccion_huevos (id)');
        $this->addSql('ALTER TABLE entidad_peces ADD CONSTRAINT FK_4F1011A82FC4BB22 FOREIGN KEY (peces_id) REFERENCES peces (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE centro DROP FOREIGN KEY FK_2675036B6CA204EF');
        $this->addSql('ALTER TABLE centro_peces DROP FOREIGN KEY FK_6795D9D7FF44FAD3');
        $this->addSql('ALTER TABLE entidad DROP FOREIGN KEY FK_4587B0CBBEFF11C2');
        $this->addSql('ALTER TABLE entidad_peces DROP FOREIGN KEY FK_4F1011A82FC4BB22');
        $this->addSql('DROP TABLE campana1');
        $this->addSql('DROP TABLE campana2');
        $this->addSql('DROP TABLE centro');
        $this->addSql('DROP TABLE centro_peces');
        $this->addSql('DROP TABLE combustible');
        $this->addSql('DROP TABLE contenedores');
        $this->addSql('DROP TABLE entidad');
        $this->addSql('DROP TABLE entidad_peces');
        $this->addSql('DROP TABLE equipo_riego');
        $this->addSql('DROP TABLE extraccion_combustible');
        $this->addSql('DROP TABLE hechos_extraordinarios');
        $this->addSql('DROP TABLE maquina_ingeniera');
        $this->addSql('DROP TABLE mortalidad');
        $this->addSql('DROP TABLE nacimientos');
        $this->addSql('DROP TABLE peces');
        $this->addSql('DROP TABLE pienso');
        $this->addSql('DROP TABLE produccion_huevos');
        $this->addSql('DROP TABLE transportacion');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
