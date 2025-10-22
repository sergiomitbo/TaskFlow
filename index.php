<?php

  // Bloque de configuración principal
  define("SITE_NAME", "TaskFlow");
 $pageTitle ("SITE_NAME", "TaskFlow");

  $userName = "Sergio"; // Tipo String
$userAge = 18;             // Tipo Integer
$isPremiumUser = true;     // Tipo Boolean

$task = [
    [
        'title' => 'Estudiar PHP',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Jugar al fútbol',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Programar una web',
        'completed' => false,
        'priority' => 'baja'
    ],
    [
        'title' => 'Actividad de OSKAR',
        'completed' => true,
        'priority' => 'alta'
    ],
    [
        'title' => 'Limpiar la casa',
        'completed' => false,
        'priority' => 'media'
    ]
];
?><!DOCTYPE html>
<html lang="es">
<title><?php echo $pageTitle; ?></title>
<body>
    <header>
        <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
    </header>
<ul>
<?php foreach ($tasks as $task): ?>
        <?php
            $taskClasses = 'task-item';

            if ($task['completed']) {
                $taskClasses .= ' completed';
            }

            switch ($task['priority']) {
                case 'alta':
                    $taskClasses .= ' priority-alta';
                    break;
                case 'media':
                    $taskClasses .= ' priority-media';
                    break;
                case 'baja':
                    $taskClasses .= ' priority-baja';
                    break;
            }
        ?>
        <li class="<?php echo $taskClasses; ?>">
            <?php echo $task['title']; ?>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
    