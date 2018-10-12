<?php
namespace prueba\ejemplo;

include 'archivo1.php';

const PRUEBA = 2;
function prueba()
{
  return "Soy la función prueba del archivo2.";
}
class prueba
{
    static function staticmethod()
    {
      return "Soy un método estático de la clase prueba del archivo2.";
    }
}

/* Nombre no calificado */
prueba(); // resuelve a function prueba\ejemplo\prueba
prueba::staticmethod(); // resuelve a clase prueba\ejemplo\prueba, method staticmethod
echo PRUEBA . "<br>"; // resuelve a constante prueba\ejemplo\PRUEBA

/* Nombre calificado */
subnamespace\prueba(); // resuelve a function prueba\ejemplo\subnamespace\prueba
subnamespace\prueba::staticmethod(); // resuelve a clase prueba\ejemplo\subnamespace\prueba

echo subnamespace\PRUEBA . "<br>"; // resuelve a constante prueba\ejemplo\subnamespace\PRUEBA

/* Nombre completamente calificado */
\prueba\ejemplo\prueba(); // resuelve a function prueba\ejemplo\prueba
\prueba\ejemplo\prueba::staticmethod(); // resuelve a clase prueba\ejemplo\prueba, method staticmethod
echo \prueba\ejemplo\PRUEBA . "<br>"; // resuelve a constante prueba\ejemplo\PRUEBA
?>
