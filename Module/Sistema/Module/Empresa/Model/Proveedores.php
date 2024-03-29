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
 * Clase para mapear la tabla proveedor de la base de datos
 * Comentario de la tabla: Listado de proveedores de la empresa
 * Esta clase permite trabajar sobre un conjunto de registros de la tabla proveedor
 * @author SowerPHP Code Generator
 * @version 2014-10-19 22:25:56
 */
class Model_Proveedores extends \Model_Plural_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'proveedor'; ///< Tabla del modelo

    public function getList()
    {
        return $this->db->getTable('
            SELECT rut, razon_social
            FROM proveedor
            ORDER BY razon_social
        ');
    }

}
