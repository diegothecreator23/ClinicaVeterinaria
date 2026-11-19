<?php
    namespace ClinicaVeterinaria\projeto\php;
    require_once('veterinario.php');
    require_once('tutor.php');
    require_once('animal.php');
    use ClinicaVeterinaria\projeto\php\Veterinario;
    use ClinicaVeterinaria\projeto\php\Tutor;
    use ClinicaVeterinaria\projeto\php\Animal;




       //chamar outras classes
        $allan = new veterinario(1, "Allan", "Clínico Geral",
       13000,"Rua Blá", "11949008922");

       $diego = new veterinario(2, "Diego", "Clínico Geral",
       13000,"Rua Blá", "11984604550");

       $cleide = new veterinario(3, "Cleide", "Clínico Geral",
       13000,"Rua Blá", "11978651109");

       echo $allan->imprimir();
       echo $diego->imprimir();
       echo $cleide->imprimir();

       $maria = new tutor(1, "Maria", "123.456.789-09",
       "11987654321", "maria@email.com", "Rua Blá");

       $thor = new animal(1, "Thor", "Cachorro", "Labrador",
       "Macho", 4, 32.5, 1);

       echo $maria->imprimir();
       echo $thor->imprimir();





?>
