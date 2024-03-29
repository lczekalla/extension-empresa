<?php

/**
 * SowerPHP: Minimalist Framework for PHP
 * Copyright (C) SowerPHP (http://sowerphp.org)
 *
 * Este programa es software libre: usted puede redistribuirlo y/o
 * modificarlo bajo los términos de la Licencia Pública General GNU
 * publicada por la Fundación para el Software Libre, ya sea la versión
 * 3 de la Licencia, o (a su elección) cualquier versión posterior de la
 * misma.
 *
 * Este programa se distribuye con la esperanza de que sea útil, pero
 * SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita
 * MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO.
 * Consulte los detalles de la Licencia Pública General GNU para obtener
 * una información más detallada.
 *
 * Debería haber recibido una copia de la Licencia Pública General GNU
 * junto a este programa.
 * En caso contrario, consulte <http://www.gnu.org/licenses/gpl.html>.
 */

// namespace del modelo
namespace sowerphp\empresa\Sistema\Empresa;

/**
 * Clase para mapear la tabla area de la base de datos
 * Comentario de la tabla: Áreas de la empresa
 * Esta clase permite trabajar sobre un registro de la tabla area
 * @author SowerPHP Code Generator
 * @version 2014-10-19 20:49:00
 */
class Model_Area extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'area'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $id; ///< Identificador del área: int(10) unsigned(10) NOT NULL DEFAULT '' AUTO PK
    public $area; ///< Nombre del área: varchar(30)(30) NOT NULL DEFAULT ''
    public $superior; ///< Área a la que pertenece esta área: int(10) unsigned(10) NULL DEFAULT '' FK:area.id

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'id' => array(
            'name'      => 'Id',
            'comment'   => 'Identificador del área',
            'type'      => 'int unsigned',
            'length'    => 10,
            'null'      => false,
            'default'   => '',
            'auto'      => true,
            'pk'        => true,
            'fk'        => null
        ),
        'area' => array(
            'name'      => 'Area',
            'comment'   => 'Nombre del área',
            'type'      => 'varchar',
            'length'    => 30,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'superior' => array(
            'name'      => 'Superior',
            'comment'   => 'Área a la que pertenece esta área',
            'type'      => 'int unsigned',
            'length'    => 10,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'area', 'column' => 'id')
        ),

    );

    // Comentario de la tabla en la base de datos
    public static $tableComment = 'Áreas de la empresa';

    public static $fkNamespace = array(
        'Model_Area' => 'sowerphp\empresa\Sistema\Empresa'
    ); ///< Namespaces que utiliza esta clase

}
