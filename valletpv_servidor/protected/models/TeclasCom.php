<?php

/**
 * Description of TeclasCom
 *
 * @author valle
 */
class TeclasCom extends Registro {
    //put your code here
    public function tableName() {
        return "teclascom";
    }
    
     public function update($attributes = null) {
        $sync = Sync::model()->find("Tabla='TeclasCom'");
        if(!$sync) $sync = new Sync();
        $sync->Modificado = date("Y/m/d - H:i:s");
        $sync->Tabla = 'TeclasCom';
        $sync->save();
        parent::update($attributes);
    }
    
    
    public function save($runValidation = true, $attributes = null) {
        $sync = Sync::model()->find("Tabla='TeclasCom'");
        if(!$sync) $sync = new Sync();
        $sync->Modificado = date("Y/m/d - H:i:s");
        $sync->Tabla = 'TeclasCom';
        $sync->save();
        parent::save($runValidation, $attributes);
    }
    
    public function delete() {
        $sync = Sync::model()->find("Tabla='TeclasCom'");
        if(!$sync) $sync = new Sync();
        $sync->Modificado = date("Y/m/d - H:i:s");
        $sync->Tabla = 'Secciones';
        $sync->save();
        parent::delete();
    }
    
    public function deleteAll($condition = '', $params = array()) {
        $sync = Sync::model()->find("Tabla='TeclasCom'");
        if(!$sync) $sync = new Sync();
        $sync->Modificado = date("Y/m/d - H:i:s");
        $sync->Tabla = 'TeclasCom';
        $sync->save();
        parent::deleteAll($condition, $params);
    }
    
    public function deleteByPk($pk, $condition = '', $params = array()) {
        $sync = Sync::model()->find("Tabla='TeclasCom'");
        if(!$sync) $sync = new Sync();
        $sync->Modificado = date("Y/m/d - H:i:s");
        $sync->Tabla = 'TeclasCom';
        $sync->save();
        
        parent::deleteByPk($pk, $condition, $params);
    }
   
}
