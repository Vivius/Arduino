<?php
/**
 * Classe de gestion de la connexion série avec la carte Arduino.
 */

namespace App;


class Serial
{
    public function __construct()
    {

    }

    /**
     * Permet d'envoyer une chaine de caratère en série à la carte arduino et de recevoir sa réponse instantanément sous forme d'objet.
     * @param $command
     * @return mixed
     */
    public static function call($command = "")
    {
        if(is_array($command))
        {
            $cmd = "";
            foreach ($command as $c)
            {
                $cmd .= $c."|";
            }
            $cmd = rtrim($cmd, "|");
            $response = shell_exec("python call_arduino.py \"".$cmd."\n\"");
        }
        else
        {
            $response = shell_exec("python call_arduino.py \"".$command."\n\"");
        }
        return json_decode($response);
    }
}