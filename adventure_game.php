php C:\wamp64\www\adventure_game.php

<?php

printf("you find yourself standing in front of a dungeon\n");
printf("Option 1. Pick up the torch and enter the dungeon\n");
printf("Option 2. don't enter the dungeon and go home\n");
printf("Please make your choice 1 or 2:\n");

$userChoice = readline("");
if ($userChoice == 1) {
    printf("You enter the dungeon, and while you're exploring, you find a 2-meter-long spider\n\n");

    printf("Option 1. try and run away from the spider\n");
    printf("Option 2. you go and fight the spider with the torch\n");
    printf("Please make your choice 1 or 2:\n");

    $userChoice = readline("");
    if ($userChoice == 1) {
        printf("you got away from the spider\n\n");

        printf("Option 1. You continue to explore\n");
        printf("Option 2. You stay put and wait for someone to rescue you\n");
        printf("Please make your choice 1 or 2:\n");

         $userChoice = readline("");
         if ($userChoice == 1){
            printf("While exploring, you accidentally walked into a spider den and were brutally eaten by spiders\n\n");
            printf("GAME OVER");

         } else {
            printf("Days go by, but no one comes. Weak and starving, you eventually succumb to hunger\n\n");
            printf("GAME OVER");
         }

    } else {
      printf("While fighting the spider, you slip and fall into a ravine. \nYou land on the spider, survive the fall, and kill it instantly\n\n");

      printf("Option 1. Continue exploring the ravine\n");
      printf("Option 2. You try to climb up the ravine\n");
      printf("Please make your choice 1 or 2:\n");

      $userChoice = readline("");
      if ($userChoice == 1){
         printf("you continue exploring and find a sword\n\n");

         printf("Option 1. Pick up the sword and continue\n");
         printf("Option 2. Don't pick up the sword and continue (maybe it's cursed?)\n");
         printf("Please make your choice 1 or 2:\n");

         $userChoice = readline("");
         if ($userChoice == 1){
            printf("You continue exploring. After a while, you find a dragon sitting on a mountain of gold\n\n");

            printf("Option 1. Attack the dragon with your sword\n");
            printf("Option 2. Try to wait and see what happens\n");
            printf("Please make your choice 1 or 2:\n");

            $userChoice = readline("");
            if ($userChoice == 1){
               printf("You killed the dragon and claim the mountain of gold, but what is that?\n\n");
               printf("Option 1. What happened?\n");

               $userChoice = readline("");
               if ($userChoice == 1){
                  printf("Your sword was cursed, and it turned on you—stabbing you\n");
                  printf("You end up dying on the mountain of gold\n\n");
                  printf("GAME OVER");
               }

            } else {
               printf("The dragon found you, caught you off guard, and devoured you before you could react\n\n");
               printf("GAME OVER");
            }

         } else {
            printf("You continue exploring. After a while, you find a dragon sitting on a mountain of gold\n\n");

            printf("Option 1. Attack the dragon with your hands\n");
            printf("Option 2. Try to wait and see what happens\n");
            printf("Please make your choice 1 or 2:\n");

            $userChoice = readline("");
            if ($userChoice == 1){
               printf("You fail—you are too weak without a weapon\n\n");
               printf("GAME OVER");

            } else {
               printf("The dragon found you, caught you off guard, and devoured you before you could react\n\n");
               printf("GAME OVER");
            }
         }

      } else {
         printf("While climbing the ravine, you lose your grip and fall back down, failing to survive the fall\n\n");
         printf("GAME OVER");
      }
    }

} else {
printf("You left the dungeon, go home and live a happy life with your family\n\n");
printf("YOU WIN");
}
?>