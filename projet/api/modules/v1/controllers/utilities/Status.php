<?php

namespace api\modules\v1\controllers\utilities;

Class Status {
    const SUCCESS = '000'; // Opération effectué avec succès
    const SUCCESS_BUT_EMPTY = '001'; // Opération effectué avec succès mais la ressource demandée est vide
    const ERROR_M = '002'; // Opération effectué avec erreur : Paramètre manquant ou erroné
    const ERROR_SAVE = '003'; // Opération effectué avec erreur : Erreur survenue lors d'un enregistrement dans la base de données
}